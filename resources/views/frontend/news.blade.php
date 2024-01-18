@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleNews.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleNews.css') }}">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleNews.min.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleNews.min.css') }}">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <section class="news">
            <div class="title">
                <h1>Latest News</h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                    data-aos-duration="1000"></span>
            </div>
            <div class="info">
                <a href="/news/bamantara-eepisat">
                    <div class="info1">
                        <img src="https://ik.imagekit.io/eepisat/asset/eepisat.png?updatedAt=1680021978678" loading="lazy">
                        <p>Bamantara EEPISAT 2023 Website Launching</p>
                    </div>
                </a>
                <a href="/news/bamantara-eepisat">
                    <div class="info3">
                        <img src="https://ik.imagekit.io/eepisat/asset/berita2.jpg?updatedAt=1681117917253" loading="lazy">
                        <p>Tim Bamantara EEPISAT Menjuarai CanSat Competition 2022 Pada Peringkat ke-3</p>
                    </div>
                </a>
                <a href="/news/bamantara-eepisat">
                    <div class="info2">
                        <img src="https://ik.imagekit.io/eepisat/asset/berita3.jpg?updatedAt=1681117917248" loading="lazy">
                        <p>Tim Bamantara EEPISAT Siap Berangkat Ke Amerika Untuk CanSat Competition 2022</p>
                    </div>
                </a>
                {{-- <a href="detailNews.html">
                <div class="info4">
                    <img src="https://ik.imagekit.io/eepisat/asset/sample2.webp" loading="lazy">
                    <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                </div>
            </a> --}}
                {{-- <a href="detailNews.html">
                <div class="info5">
                    <img src="https://ik.imagekit.io/eepisat/asset/sample2.webp" loading="lazy">
                    <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                </div>
            </a> --}}
                {{-- <a href="detailNews.html">
                <div class="info6">
                    <img src="https://ik.imagekit.io/eepisat/asset/sample2.webp" loading="lazy">
                    <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                </div>
            </a> --}}
            </div>
        </section>

    </main>
    @include('shared.frontend_footer')
@endsection
