@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
			@if (Request::isSecure()) 
            <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleHome.css') }}">
			@else
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleHome.css') }}">
			@endif
        @else
            @if (Request::isSecure()) 
            <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleHome.min.css') }}">
            @else 
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleHome.min.css') }}">
			@endif
        @endif
    @endpush

    <main>
        @include('shared.home.carousel-fade')
        @include('shared.home.project')
        @include('shared.home.achievements')
        @include('shared.home.news')
        <br>
        @include('shared.home.sponsor')
    </main>

    @include('shared.frontend_footer')

    @push('scripts')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
            function togglePopUp() {

                var gen1 = document.getElementById("gen1");
                var gen2 = document.getElementById("gen2");
                var gen3 = document.getElementById("gen3");
                if (gen1.checked == true) {
                    document.getElementById("popUp1").classList.toggle("active");
                } else if (gen2.checked == true) {
                    document.getElementById("popUp2").classList.toggle("active");
                } else if (gen3.checked == true) {
                    document.getElementById("popUp3").classList.toggle("active");
                }
            }
        </script>

        <script src="/dist/js/frontend/textMovingScript.js"></script>


        <script>
            function downloadImages() {
                for (let gen = 1; gen <= 3; gen++) {
                    for (let n = 0; n <= 35; n++) {
                        const imgUrl = `https://ik.imagekit.io/eepisat/asset/gen${gen}/${n}.webp`;
                        const img = new Image();
                        img.src = imgUrl;
                    }
                }
            }
            var data = {
                news: [{
                        headline: "BANGGA, TIM BAMANTARA EEPISAT PENS JUARA DUNIA CANSAT 2023",
                        link: "https://www.vokasi.kemdikbud.go.id/read/b/bangga-tim-bamantara-eepisat-pens-juara-dunia-cansat-2023",
                        image: "https://www.vokasi.kemdikbud.go.id/File/eyJpdiI6Ik1saU1tUHJQWVZNMUpCOWxDbzgvV3c9PSIsInZhbHVlIjoiNXMwd1BKdldmM2c0d2tuQmFRMFpTaGc5TUtVZmRVRW1xdlpiWjZCaE40VFhtenMrKzg4YmdlY2Z4dC9JSHNrcTVtdllYWGp5US9lUlZmb2lLa24xY1JsMHdNSUdpUEF5ZUZnSGZDZ2d4TTg9IiwibWFjIjoiOGM5Yjg2MGVmOTVkN2U5Y2RmNGEwMzUyNzdlNmJjYTEyMDc4Zjk5Y2YxOGI3YmU3Mzk4Yzc1NGRlODYwZmJkYSIsInRhZyI6IiJ9",
                        source: "KEMDIKBUD RI"
                    },
                    {
                        headline: "Mahasiswa PENS Juara Dunia Kompetisi Aerospace di Amerika Serikat",
                        link: "https://www.kompas.com/edu/read/2023/06/18/155645271/mahasiswa-pens-juara-dunia-kompetisi-aerospace-di-amerika-serikat",
                        image: "https://asset.kompas.com/crops/jpHVyPYRXkfnNMK-_FnPc8VA-xk=/18x0:927x606/750x500/data/photo/2023/06/18/648ec5dee9603.jpg",
                        source: "Kompas"

                    },
                    {
                        headline: "Mahasiswa Politeknik Elektronika Negeri Surabaya Raih Juara 2 Kompetisi Bangun Satelit di Amerika",
                        link: "https://tekno.tempo.co/read/1739773/mahasiswa-politeknik-elektronika-negeri-surabaya-raih-juara-2-kompetisi-bangun-satelit-di-amerika",
                        image: "https://statik.tempo.co/data/2023/06/21/id_1213771/1213771_720.jpg",
                        source: "Tempo"
                    },
                ]
            }

            var infoElement = document.getElementsByClassName("info")[0];
            for (let i = 0; i < 3; i++) {
                var newsElement = `<div class="info${i+1}">
					<img src="${data.news[i].image}" onerror="this.src='https://ik.imagekit.io/eepisat/asset/eepisat.png?updatedAt=1680021978678'" style="aspect-ratio=16/9;" width="370" height="140" loading="lazy">
					<p><a target="_blank" class="newsParagraph" href="${data.news[i].link}" style="text-decoration:none;color:#333;">${data.news[i].headline}</a> - <strong>${data.news[i].source}<strong></p>
				</div>`;
                infoElement.innerHTML += newsElement;
            }

            window.addEventListener('load', downloadImages);

            function hoverAchievements() {
                document.querySelector('.parent').classList.add('hovered');
            }

            function unhoverAchievements() {
                document.querySelector('.parent').classList.remove('hovered');
            }
        </script>
    @endpush
@endsection
