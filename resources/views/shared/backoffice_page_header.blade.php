<div class="page-header d-print-none">
    <div class="container-xl">
        <style>
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
        </style>
    <div class="row g-2 align-items-center">
        <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
            Overview
        </div>
        <h2 class="page-title">
            {{$title}}
        </h2>
        </div>
        <!-- Page title actions -->
        @isset($text_add)
        <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="{{$link}}" class="btn btn-primary d-none d-sm-inline-block @if(isset($status))@if($status=='disable') disabled @endif @endif" >
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            {{$text_add}}
            </a>
            <a href="{{$link}}" class="btn btn-primary d-sm-none btn-icon">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            </a>
        </div>
        </div>
        @endisset
    </div>
    </div>
</div>