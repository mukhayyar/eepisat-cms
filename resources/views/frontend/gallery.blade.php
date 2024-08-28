@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleGallery.css') }}">
                <link rel="stylesheet" href="{{ secure_asset('test/button.css') }}">
                <link rel="stylesheet" href="{{ secure_asset('test/gallery/slider.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
                @else
                <link rel="stylesheet" href="{{ asset('test/button.css') }}">
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleGallery.css') }}">
                <link rel="stylesheet" href="{{ asset('test/gallery/slider.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
                @endif
                @else
                @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('test/gallery/slider.css') }}">
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleGallery.min.css') }}">
                <link rel="stylesheet" href="{{ secure_asset('test/button.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
                @else
                <link rel="stylesheet" href="{{ asset('test/button.css') }}">
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleGallery.min.css') }}">
                <link rel="stylesheet" href="{{ asset('test/gallery/slider.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <div class="title">
            <h1>Our Gallery</h1>
            <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
        </div>
        <div class="container-current-gallery">
            <div class="slider-wrapper">
              <button id="prev-slide" class="slide-button material-symbols-rounded">
                <
              </button>
              <ul class="image-list">
                <img class="image-item" src="https://ik.imagekit.io/eepisat/uploads/gen05/1.jpg" alt="img-1" />
                <img class="image-item" src="https://ik.imagekit.io/eepisat/uploads/gen05/2.jpg" alt="img-2" />
                <img class="image-item" src="https://ik.imagekit.io/eepisat/uploads/gen05/3.jpg" alt="img-3" />
                <img class="image-item" src="https://ik.imagekit.io/eepisat/uploads/gen05/4.jpg" alt="img-4" />
                <img class="image-item" src="https://ik.imagekit.io/eepisat/uploads/gen05/5.jpg?updatedAt=1710445047206" alt="img-5" />
              </ul>
              <button id="next-slide" class="slide-button material-symbols-rounded">
                >
              </button>
            </div>
            <div class="slider-scrollbar">
              <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
              </div>
            </div>
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
        <div class="container-button">
            <a href="https://id.pinterest.com/eepisat" target="_blank" class="button">
                <div class="button__content">
                    <span class="button__text">Visit Our Pinterest</span>
                    <i class="ri-pinterest-fill button__icon"></i>

                    <div class="button__reflection-1"></div>
                    <div class="button__reflection-2"></div>
                </div>

                <img src="/test/image/star.png" alt="" class="button__star-1">
                <img src="/test/image/star.png" alt="" class="button__star-2">
                <img src="/test/image/circle.png" alt="" class="button__circle-1">
                <img src="/test/image/circle.png" alt="" class="button__circle-2">
                <img src="/test/image/diamond.png" alt="" class="button__diamond">
                <img src="/test/image/triangle.png" alt="" class="button__triangle">

                <div class="button__shadow"></div>
            </a>
        </div>
    </main>
    @include('shared.frontend_footer')



    @push('scripts')
        <script src="/test/gallery/main.js"></script>
        <script src="/dist/js/frontend/accordionScript.js"></script>
        <script>
            var data = {
                galleries: [
                    [1, 2, 3, 4],
                    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                    [1, 2, 3],
                    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
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
