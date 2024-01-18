<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blog = Blog::query();
        // dd($blog);
        // dd($blogs);
        if (request()->ajax()) {
            $blogs = Blog::with('author', 'advisor', 'category')->get();
            return DataTables::of($blogs)
                ->editColumn('advisor.name', function ($row) {
                    if (isset($row->advisor->name)) {
                        return $row->advisor->name;
                    } else {
                        return "-";
                    }
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at;
                })
                ->editColumn('updated_at', function ($row) {
                    return $row->updated_at;
                })
                ->editColumn('proposed_at', function ($row) {
                    if (isset($row->proposed_at)) {
                        return $row->proposed_at;
                    } else {
                        return "-";
                    }
                })
                ->editColumn('published_at', function ($row) {
                    if (isset($row->published_at)) {
                        return $row->published_at;
                    } else {
                        return "-";
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<span class="dropdown"><button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions 1</button>
                    ';
                    $btn .= '<div class="dropdown-menu dropdown-menu-start" style="">';
                    if (Auth::user()->id == $row->author_id || Auth::user()->position->name == "Team Advisor" || Auth::user()->position->name == "Team Leader") {
                        $btn .= "<a href=" . route('article.show', ['id' => $row->id]) . " class=\"dropdown-item\" title=\"Preview Article\">Preview Article </a>";
                    }
                    if (Auth::user()->id == $row->author_id) {
                        $btn .= "<a href=" . route('article.edit', ['id' => $row->id]) . " class=\"dropdown-item\" title=\"Edit Article\">Edit Article </a>";
                    }
                    $btn .= "</div></span>";
                    return $btn;
                })
                ->addColumn('action2', function ($row) {
                    $btn = '<span class="dropdown"><button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions 2</button>
                    ';
                    $btn .= '<div class="dropdown-menu dropdown-menu-start" style="">';
                    if (Auth::user()->id == $row->author_id) {
                        if ($row->status == "Approved") {
                            $btn .= "<a href='#' data-bs-toggle='modal' data-bs-target='#modal-publish' data-bs-id=" . $row->id . " class=\"dropdown-item\" title=\"Publish Article\">Publish Article </a>";
                        }
                        if ($row->status == "Published") {
                            $btn .= "<a href='#' data-bs-toggle='modal' data-bs-target='#modal-un-publish' data-bs-id=" . $row->id . " class=\"dropdown-item\" title=\"Publish Article\">Unpublish Article </a>";
                        }

                        $btn .= "<a href='' data-bs-toggle='modal' data-bs-target='#modal-delete' data-bs-id=" . $row->id . " class=\"dropdown-item\" title=\"Delete Article\">Delete Article </a>";
                    }
                    if (Auth::user()->position->name == "Team Advisor" && $row->status == "Approved") {
                        $btn .= "<a href='#' data-bs-toggle='modal' data-bs-target='#modal-publish' data-bs-id=" . $row->id . " class=\"dropdown-item\" title=\"Publish Article\">Publish Article </a>";
                    }
                    if (Auth::user()->position->name == "Team Advisor" && $row->status == "Published") {
                        $btn .= "<a href='#' data-bs-toggle='modal' data-bs-target='#modal-un-publish' data-bs-id=" . $row->id . " class=\"dropdown-item\" title=\"Publish Article\">Unpublish Article </a>";
                    }
                    if (Auth::user()->position->name == "Team Advisor" && $row->status == "Proposed") {
                        $btn .= "<a href=" . route('article.reject', ['id' => $row->id]) . " class=\"dropdown-item\" title=\"Reject Article\">Reject Article</a>";

                        $btn .= "
                        <form id='approve-article' action=" . route('article.approve', ['id' => $row->id]) . " method='POST' style='display: none;'>
                        <input type='hidden' name='_token' value='" . csrf_token() . "'>
                        <input type='hidden' name='_method' value='PUT'>
                            </form>
                            <a href='#' class='dropdown-item' onclick='event.preventDefault(); document.getElementById(\"approve-article\").submit();'>Approve Article</a>";
                    }
                    $btn .= "</div></span>";
                    return $btn;
                })
                ->rawColumns(['action', 'action2'])
                ->make(true);
        }
        return view('backoffice.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data['image'] =  Storage::disk('r2')->get('2020-Gen1.jpg');
        // dd($data);
        $data['categories'] = Category::all();
        return view('backoffice.blog.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $article = new Blog;

        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->extension();
            $filename = now() . random_int(1000, 9999) . $extension;
            $path = Storage::disk('s3')->put('thumbnails', $file);
            // $path = Storage::disk('s3')->url($path);
            // return "<img src=\"".$path."\" />";
            // dd($path);
            $article->thumbnail = $path;
        } else {
            $article->thumbnail = $request->thumbnail;
        }
        $article->title = $request->title;
        $slug = str_replace(' ', '-', strtolower($request->title)) . '-' . rand(1000, 9999);
        $article->slug = $slug;
        $article->category_id = $request->category;
        $article->author_id = Auth::user()->id;
        $article->excerpt = $request->excerpt;
        $article->content = $request->content;


        if (isset($request->draft)) {
            $article->status = "Draft";
        }

        if (isset($request->proposed)) {
            $article->status = "Proposed";
            $article->proposed_at = now();
        }
        $article->save();

        return redirect()->route('article.index')->with("success", "Successfully created an article");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Blog::find($id);
        return view('backoffice.blog.view', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {
            $data['categories'] = Category::all();
            $data['article'] = $article;
            // dd($data['article']['status']);
            return view('backoffice.blog.edit', ['data' => $data]);
        }
        return redirect()->route('article.index')->with("error", "Only Author and Web Master can edit the article!");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {

            if ($request->file('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->extension();
                $filename = now() . random_int(1000, 9999) . $extension;
                $path = Storage::disk('r2')->put('thumbnails/', $file);
                $article->thumbnail = $path;
            } else {
                $article->thumbnail = $request->thumbnail;
            }
            $article->title = $request->title;
            $slug = str_replace(' ', '-', strtolower($request->title)) . '-' . rand(1000, 9999);
            $article->slug = $slug;
            $article->category_id = $request->category;
            $article->author_id = Auth::user()->id;
            $article->excerpt = $request->excerpt;
            $article->content = $request->content;


            if (isset($request->draft)) {
                $article->status = "Draft";
            }

            if (isset($request->proposed)) {
                $article->status = "Proposed";
                $article->proposed_at = now();
            }
            $article->save();

            return redirect()->route('article.index')->with("success", "Successfully created an article");
        }
        return redirect()->route('article.index')->with("error", "Only Author and Web Master can update the article!");
    }

    public function preview(string $id)
    {
        $article = Blog::find($id);
        return view('backoffice.blog.preview', ['article' => $article]);
    }

    public function propose(string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {
            $article->status = "Proposed";
            $article->proposed_at = now();
            $article->save();
            return redirect()->route('article.index')->with("success", "Article is now being proposed!");
        }
        return redirect()->route('article.index')->with("error", "Only Author and Web Master can proposed the article!");
    }

    public function reject(string $id)
    {
        if (Auth::user()->position->name == "Team Advisor") {
            $article = Blog::find($id);
            $article->advisor_id = Auth::user()->id;
            $article->status = "Rejected";
            $article->save();
            return redirect()->route('article.index')->with("success", "Article is rejected");
        }
        return redirect()->route('article.index')->with("error", "Only Team Advisor can approve or reject the article!");
    }

    public function approve(string $id)
    {
        if (Auth::user()->position->name == "Team Advisor") {
            $article = Blog::find($id);
            $article->advisor_id = Auth::user()->id;
            $article->status = "Approved";
            $article->approved_advisor_at = now();
            $article->save();
            return redirect()->route('article.index')->with("success", "Article is approved");
        }
        return redirect()->route('article.index')->with("error", "Only Team Advisor can approve or reject the article!");
    }

    public function publish(Request $request, string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {
            $article->advisor_id = Auth::user()->id;
            $article->status = "Published";
            if (isset($request->time_publish)) {
                $article->published_at = $request->time_publish;
                $article->save();
                return redirect()->route('article.index')->with("success", "Article will be published at " . $request->time_publish);
            } else {
                $article->published_at = Carbon::now()->timezone('Asia/Jakarta');
                $article->save();
                return redirect()->route('article.index')->with("success", "Article is now published!");
            }
        }
        return redirect()->route('article.index')->with("error", "Only Author or Web Master can publish the article!");
    }

    public function unPublish(Request $request, string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {
            $article->advisor_id = Auth::user()->id;
            $article->status = "Approved";
            $article->published_at = null;
            $article->save();
            return redirect()->route('article.index')->with("success", "Article is successfully unpublished");
        }
        return redirect()->route('article.index')->with("error", "Only Author or Web Master can unpublish the article!");
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Blog::find($id);
        if (Auth::user()->id == $article->author_id || Auth::user()->position->name == "Web Master") {
            $article->delete();
            return redirect()->route('article.index')->with("success", "Article is now deleted!");
        }
        return redirect()->route('article.index')->with("error", "Only Author or Web Master can delete the article!");
    }
}
