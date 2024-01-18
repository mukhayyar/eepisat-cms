@extends('layouts.backoffice.main')
@section('article_active', 'active')
@section('body')
    @include('shared.backoffice_page_header', [
        'title' => "Article's",
        'text_add' => 'Create new article',
        'link' => '/backoffice/projects/article/create',
    ])
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbl_list" class="table table-vcenter text-nowrap datatable dtr-column collapsed"
                            style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Approved By</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Proposed At</th>
                                    <th>Published At</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-publish" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Publish Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="form_publish" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="id_article" name="id_article" value="">
                        <div class="btn-group w-100" role="group">
                            <input type="radio" class="btn-check" name="time" value="schedule" id="btn-radio-basic-1"
                                autocomplete="off">
                            <label for="btn-radio-basic-1" type="button" class="btn">Schedule</label>
                            <input type="radio" class="btn-check" name="time" value="now" id="btn-radio-basic-2"
                                autocomplete="off">
                            <label for="btn-radio-basic-2" type="button" class="btn" checked="">Now</label>
                        </div>

                        <div class="input-icon mt-2" id="schedule-article" style="display:none;">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                    </path>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M11 15h1"></path>
                                    <path d="M12 15v3"></path>
                                </svg>
                            </span>
                            <input name="date" class="form-control" placeholder="Select a date" type="datetime-local">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('form_publish').submit();" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-delete" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Are you sure?</div>
                    <div>If you proceed, you will lose this article.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary me-auto"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('form_delete').submit();" data-bs-dismiss="modal">Yes, delete the article</button>
                    <form action="" id="form_delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="id_article" name="id_article" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-un-publish" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Are you sure?</div>
                    <div>If you proceed this article will be unpublished.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary me-auto"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('form_unpublish').submit();" data-bs-dismiss="modal">Yes, unpublish the article</button>
                    <form action="" id="form_unpublish" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="id_article" name="id_article" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('styles')
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var scheduleLabel = document.querySelector("label[for='btn-radio-basic-1']");
                var nowLabel = document.querySelector("label[for='btn-radio-basic-2']");
                var inputIconAddon = document.querySelector("#schedule-article");

                scheduleLabel.addEventListener("click", function() {
                    inputIconAddon.style.display = "block";
                });

                nowLabel.addEventListener("click", function() {
                    inputIconAddon.style.display = "none";
                });
            });
            document.addEventListener("click", function(event) {

                if (event.target.dataset.bsTarget === "#modal-publish") {
                    var myBookId = event.target.dataset.bsId;
                    document.querySelector(".modal-body #id_article").value = myBookId;
                    document.querySelector(".modal-body #form_publish").action = `/backoffice/projects/article/${myBookId}/publish`;
                }
                if (event.target.dataset.bsTarget === "#modal-delete") {

                    var myBookId = event.target.dataset.bsId;
                    document.querySelector(".modal-footer #id_article").value = myBookId;
                    document.querySelector(".modal-footer #form_delete").action = `/backoffice/projects/article/${myBookId}/delete`;
                }
                if (event.target.dataset.bsTarget === "#modal-un-publish") {
                    var myBookId = event.target.dataset.bsId;
                    document.querySelector(".modal-footer #id_article").value = myBookId;
                    document.querySelector(".modal-footer #form_unpublish").action = `/backoffice/projects/article/${myBookId}/unpublish`;
                }
            });
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tbl_list').DataTable({
                    // responsive: {
                    //     details: {
                    //         type: 'column'
                    //     }
                    // },
                    // columnDefs: [{
                    //     className: 'dtr-control',
                    //     orderable: false,
                    //     targets: 0
                    // }],
                    // order: [ 0, 'asc' ],
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url()->current() }}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'author.name',
                            name: 'title'
                        },
                        {
                            data: 'category.name',
                            name: 'category'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'advisor.name',
                            name: 'advisor'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'proposed_at',
                            name: 'proposed_at'
                        },
                        {
                            data: 'published_at',
                            name: 'published_at'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                        {
                            data: 'action2',
                            name: 'action2'
                        }

                    ]
                });
            });
        </script>
    @endpush
@endsection
