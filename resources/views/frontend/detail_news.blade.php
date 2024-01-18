@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleDetailNews.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleDetailNews.css') }}">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleDetailNews.min.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleDetailNews.min.css') }}">
            @endif
        @endif
    @endpush
    <main>
        <section class="detailNews">
            <div class="title">
                <h1>Tim Bamantara EEPISAT yang Didukung oleh Telkomsat Raih Juara 3 di Kompetisi Internasional</h1>
            </div>
            <div class="uploadTime">
                <i class="ri-time-line"></i>
                <p>19 October 2023</p>
            </div>
            <div class="imgJumbo">
                <img src="asset/imgDetailNews.webp">
            </div>
            <div class="textNews">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, reprehenderit eius quo est minima iusto
                    voluptates rerum ut laudantium? Nostrum, velit hic rerum ratione aliquid id earum, laboriosam
                    voluptatibus. Perferendis. Cupiditate ratione officiis neque repellendus nemo harum ipsum excepturi
                    voluptatum vel. Velit facere ullam odit corporis architecto illo eos molestiae ab alias, est in deserunt
                    debitis incidunt numquam cumque quaerat! Animi quam, expedita harum soluta eveniet deleniti sint quasi,
                    modi recusandae voluptas est adipisci odit sed velit optio eius ut ullam? Hic ex, quaerat ipsa veritatis
                    perspiciatis quo nulla id? Rem excepturi odit commodi et praesentium nostrum distinctio, sed ab
                    laboriosam doloribus mollitia ut saepe voluptas maiores eum officia aut! Autem exercitationem voluptates
                    enim nulla et quia rerum totam quis! Id voluptatem quis cumque nemo illum dignissimos quia, perspiciatis
                    tenetur eos possimus consequatur in recusandae beatae! Sit, minus doloremque vero totam repellat
                    temporibus omnis aspernatur, adipisci debitis placeat nostrum ab.</p>
            </div>
            <div class="share">
                <p>Share:</p>
                <i class="ri-facebook-fill"></i>
                <i class="ri-twitter-fill"></i>
                <i class="ri-pinterest-fill"></i>
                <i class="ri-linkedin-fill"></i>
            </div>
        </section>

        <section class="lastestNews">
            <div class="title">
                <h1>Lastest News</h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                    data-aos-duration="1000"></span>
            </div>
            <div class="info">
                <a href="detailNews.html">
                    <div class="info1">
                        <img src="asset/sample2.webp" loading="lazy">
                        <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                    </div>
                </a>
                <a href="detailNews.html">
                    <div class="info2">
                        <img src="asset/sample2.webp" loading="lazy">
                        <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                    </div>
                </a>
                <a href="detailNews.html">
                    <div class="info3">
                        <img src="asset/sample2.webp" loading="lazy">
                        <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                    </div>
                </a>
            </div>
        </section>

    </main>
    @include('shared.frontend_footer')
@endsection
