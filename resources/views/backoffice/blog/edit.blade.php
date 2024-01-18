@extends('layouts.backoffice.main')
@section('article_active', 'active')
@section('body')
        @php
        $article = $data['article'];
        @endphp
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <form action="" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Article title</label>
                  <input type="text" class="form-control" placeholder="Title" name="title" value="{{$data['article']['title']}}">
                </div>
                <div class="row row-cards">
                  <div class="col-sm-6 col-md6">
                    <div class="mb-3">
                      <label class="form-label">Article thumbnail file or url</label>
                      <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md6">
                    <div class="mb-3">
                      <label class="form-label"> &hairsp;</label>
                      <input type="text" class="form-control" placeholder="https://" name="thumbnail" value="{{$article->thumbnail()}}">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Article summary
                    <span class="form-label-description">0/200</span>
                  </label>
                  <textarea class="form-control" name="excerpt" id="" cols="15" rows="5">{{$data['article']['excerpt']}}</textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Category
                  </label>
                  <select class="form-select" name="category">
                    @foreach($data['categories'] as $category)
                    <option value="{{$category->id}}" @if($article->category->id == $category->id) selected @endif>{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Article body</label>
                  <form method="post">
                    <textarea id="tinymce-mytextarea" name="content">{{$data['article']['content']}}</textarea>
                  </form>
                </div>
              </div>
              <div class="card-footer text-end">
                @if($data['article']['status'] != "Approved" || $data['article']['status'] != "Published")
                <input type="submit" name="draft" class="btn btn-primary" value="Save to Draft">
                @endif
                @if($data['article']['status'] == "Draft" || $data['article']['status'] == "Rejected")
                <input type="submit" name="proposed" class="btn btn-primary" value="Proposed to Advisor">
                @endif
                @if($data['article']['status'] == "Approved")
                <input type="submit" name="publish" class="btn btn-primary" value="Publish Article">
                @endif
            </div>
            </div>
          </form>
          </div>
        </div>
        
    @push('scripts')
    <!-- Libs JS -->
    <script src="/dist/libs/tinymce/tinymce.min.js?1674944402" defer></script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        let options = {
          selector: '#tinymce-mytextarea',
          height: 500,
          plugins: [
            "advlist", "autolink", "lists", "link", "image", "charmap", "preview", "anchor",
            "searchreplace", "visualblocks", "code", "fullscreen",
            "insertdatetime", "media", "table", "help", "wordcount", "quickbars"
          ],
          toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
          content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if (localStorage.getItem("tablerTheme") === 'dark') {
          options.skin = 'oxide-dark';
          options.content_css = 'dark';
        }
        tinyMCE.init(options);
      })
      // @formatter:on
    </script>
    @endpush
@endsection