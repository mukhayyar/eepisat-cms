@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleGallery.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleGallery.css') }}">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleGallery.min.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleGallery.min.css') }}">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <div class="title">
            <h1>Our Gallery</h1>
            <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
        </div>
        <section class="accordion">
            <div class="accordionGen1">
                <div class="header">
                    <p>GEN 01</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                </div>
            </div>
            <div class="accordionGen2">
                <div class="header">
                    <p>GEN 02</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                </div>
            </div>
            <div class="accordionGen3">
                <div class="header">
                    <p>GEN 03</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                </div>
            </div>
            <div class="accordionGen4">
                <div class="header">
                    <p>GEN 04</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                </div>
            </div>
        </section>
    </main>
    @include('shared.frontend_footer')



    @push('scripts')
        <script src="/dist/js/frontend/accordionScript.js"></script>
        <script>
            var data = {
                galleries: [
                    [1, 2, 3],
                    [1],
                    [1],
                    []
                ]
            }
            for (let i = 1; i <= 4; i++) {
                for (let j = 1; j <= data.galleries[i - 1].length; j++) {
                    document.getElementsByClassName("accordionGen" + i)[0].childNodes[3].innerHTML +=
                        `<img src="https://ik.imagekit.io/eepisat/uploads/gen0${i}/${j}.jpg" loading="lazy">`;
                }
            }
        </script>
    @endpush
@endsection
