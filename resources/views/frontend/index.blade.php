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
        <section class="carouselFade" loading="lazy">
            <div class="jumbotron">
                <div class="text" data-aos="fade-up">
                    <h1 class="title"><span>Bamantara</span><br> EEPISAT Team</h1>
                    <h4 class="subtitle">#GarudakuJayadiAngkasa</h4>
                    <p><span>Bamantara EEPISAT Team</span> is a research team that focuses on <br /></p>
                    <p>participating in CanSat competitions to build Can-Sized Satellites.</p>
                    <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                        data-aos-duration="500"></span>
                    {{-- <img class="panah" src="https://ik.imagekit.io/eepisat/asset/panah.png" height="110px" width="45px" loading="lazy">
					<img class="panah2" src="https://ik.imagekit.io/eepisat/asset/panah.png" height="110px" width="45px" loading="lazy">
					<button class="register" onclick="window.open('https://bit.ly/RecruitmentBamantaraEEPISAT2023')">Daftar GEN 05</button> --}}
                    <div class="parent">
                        <button class="official" onclick="window.open('https://www.cansatcompetition.com')">CanSat Official
                            Website</button>
                        <button class="achievements" onmouseover="hoverAchievements()" onmouseout="unhoverAchievements()"
                            onclick="location.href='#achievements'">Our Achievements</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="myProject">
            <div class="clouds" role="none">
                <img src="https://ik.imagekit.io/eepisat/asset/awan.webp" alt="awan1" style="--i:1" loading="lazy">
                <img src="https://ik.imagekit.io/eepisat/asset/awan.webp" alt="awan1" style="--i:2" loading="lazy">
                <img src="https://ik.imagekit.io/eepisat/asset/awan.webp" alt="awan1" style="--i:3" loading="lazy">
                <img src="https://ik.imagekit.io/eepisat/asset/awan.webp" alt="awan1" style="--i:4" loading="lazy">
                <img src="https://ik.imagekit.io/eepisat/asset/awan.webp" alt="awan1" style="--i:5" loading="lazy">
            </div>
            <div class="content" data-aos="fade-up">
                <h1 class="title"><strong>Our CanSat Project</strong></h1>
                <p>This is a Bamantara EEPISAT project that has been created for exhibition at the Cansat Competition.</p>
                <span class="line"data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
            </div>
            <div class="imgGen">
                <input id="gen1" type="radio" name="radioBtn" checked>
                <input id="gen2" type="radio" name="radioBtn">
                <input id="gen3" type="radio" name="radioBtn">
                <div class="imgGen123">
                    <div class="img first">
                        <input id="range1" type="range" min="0" max="35">
                        <div id="img1">
                            <img src="https://ik.imagekit.io/eepisat/asset/gen1/1.webp" width="600" height="276">
                        </div>
                    </div>
                    <div class="img">
                        <input id="range2" type="range" min="0" max="35">
                        <div id="img2">
                            <img src="https://ik.imagekit.io/eepisat/asset/gen2/2.webp" width="600" height="276">
                        </div>
                    </div>
                    <div class="img">
                        <input id="range3" type="range" min="0" max="35">
                        <div id="img3">
                            <img src="https://ik.imagekit.io/eepisat/asset/gen3/0.webp" width="750" height="346">
                        </div>
                    </div>
                </div>
                <div class="kotak" style="width: 221px; height: 98px;">
                    <div class="name">
                        <p>Delta Wing Glider</p>
                        <p>Maple Seed<br>Science Payload</p>
                        <p>Tethered Payload</p>
                    </div>
                    <span class="line"></span>
                </div>
                <div class="textMove">
                    <div class="textGen">
                        <p>GEN-0</p>
                    </div>
                    <div class="listTextGen">
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                    </div>
                </div>
                <div class="textMoveMobile">
                    <div class="textGen">
                        <p>GEN-0</p>
                    </div>
                    <div class="listTextGen">
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                    </div>
                </div>
                <div class="slideControls">
                    <label for="gen1" class="btn"></label>
                    <label for="gen2" class="btn"></label>
                    <label for="gen3" class="btn"></label>
                </div>
            </div>
            <div class="information">
                <i class="ri-information-line" onclick="togglePopUp()"></i>
            </div>
            <div class="popUp" id="popUp1">
                <div class="overlay"></div>
                <div class="contentPopUp1">
                    <div class="close" onclick="togglePopUp()"><i class="ri-close-line"></i></div>
                    <h1 class="title">GEN 01</h1>
                    <p class="description">
                        Design a Cansat that will consist of a container and a science payload. The science payload shall be
                        a delta wing glider that will glide in a circular pattern, once released.<br><br>The Cansat shall be
                        launched to an altitude ranging 670 meters to 725 meters above the launch site and deployed near
                        apogee (peak altitude). Orientation of deployment is not controlled and is most definitely violent.
                        The CanSat container must protect the science payload from damage during the launch and
                        deployment.<br><br>Once the CanSat is deployed from the rocket, the CanSat shall descend using a
                        parachute at a descent rate of 20 m/s. At 450 meters, the container shall release the science
                        payload. The science payload shall glide in a circular pattern with a radius of 250 meters
                        collecting sensor data for one minute and remain above 100 meters after being released. Afterwards,
                        the glider shall deploy a parachute to cause the glider to stop gliding and drop to the ground at a
                        rate of 10 meters/second.<br><br>The science payload shall monitor altitude, air speed and the
                        science payload shall be a particulate matter/dust sensor to detect particulates in the air while
                        gliding.
                    </p>
                </div>
            </div>
            <div class="popUp" id="popUp2">
                <div class="overlay"></div>
                <div class="contentPopUp2">
                    <div class="close" onclick="togglePopUp()"><i class="ri-close-line"></i></div>
                    <h1 class="title">GEN 02</h1>
                    <p class="description">
                        Design a Cansat that shall consist of a container and two autorotating maple seed science payloads.
                        The container shall contain electronics to release the autorotating maple seed science payloads and
                        relay data from the payload to a ground station.<br><br>The Cansat shall be launched to an altitude
                        ranging 670 meters to 725 meters above the launch site and deployed near apogee (peak altitude).
                        Orientation of deployment is not controlled and is most definitely violent. The CanSat container
                        must protect the science payloads from damage during the launch and deployment.<br><br>Once the
                        CanSat is deployed from the rocket, the CanSat shall descend using a parachute at a descent rate of
                        15 m/s. At 500 meters, the container shall release one autorotating maple seed science payload. At
                        400 meters, the container shall release the second autorotating maple seed science payload. The
                        container shall relay all telemetry sent from the science payloads until the container lands. The
                        container shall also incorporate its own telemetry along with the autorotating maple seed science
                        payload telemetry. The container shall transmit using the team number as its net ID.<br><br>The
                        autorotating maple seed science payloads shall descend after being released and spin rapidly enough
                        so its descent rate is less than 20 m/s. The science payload shall transmit telemetry once a second
                        and include air pressure and air temperature. The science payload shall transmit for five minutes
                        after being released and use the team number plus 5 as its net ID.
                    </p>
                </div>
            </div>
            <div class="popUp" id="popUp3">
                <div class="overlay"></div>
                <div class="contentPopUp3">
                    <div class="close" onclick="togglePopUp()"><i class="ri-close-line"></i></div>
                    <h1 class="title">GEN 03</h1>
                    <p class="description">
                        Design a Cansat that shall consist of a container and a payload. The payload shall be attached to
                        the container by a 10 meter long tether. The Cansat shall be launched to an altitude ranging from
                        670 meters to 725 meters above the launch site and deployed near apogee (peak altitude). Orientation
                        of deployment is not controlled and is very violent with large shock forces. The Cansat must survive
                        the forces incurred at launch and deployment.<br><br>Once the Cansat is deployed from the rocket,
                        the Cansat shall descend using a parachute at a rate of 15 m/s. At 400 meters, the Cansat shall
                        deploy a larger parachute to reduce the descent rate to 5 m/s. At 300 meters, the Cansat shall
                        release a tethered payload to a distance of 10 meters in 20 seconds. During that time, the payload
                        shall maintain the orientation of a video camera pointing in the south direction. The video camera
                        shall be pointed 45 degrees downward to assure terrain is in the video.><br><br>Bonus: As the
                        container is releasing the payload, the container shall contain a video camera and start recording
                        to show the descent of the payload. All videos are to be recorded and recovered when the Cansat is
                        recovered from the field.
                    </p>
                </div>
            </div>
            <img class="img360" src="https://ik.imagekit.io/eepisat/asset/360.png" width="150px" height="51px"
                alt="360 logo">
            {{-- <div class="nameProject">
                <div class="lingkaran1"></div>
                <div class="lingkaran2"></div>
                <span class="line"></span>
                <span class="line"></span>
            </div> --}}
        </section>
        <section id="achievements" class="achievements" data-aos="fade-up">
            <div class="content">
                <h1 class="title"><strong>Achievements</strong></h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                    data-aos-duration="500"></span>
            </div>
            <div class="scrollMenu">
                <div class="listImg">
                    <div class="list2022" style="width: 465px; height: 318px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2023.jpg" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in CanSat Competition 2023">
                        <ul>
                            <li>&bull; Rank 1 in Indonesia</li>
                            <li>&bull; Rank 1 in Asia</li>
                            <li>&bull; Rank 2 in the World (CANSAT Competition)</li>
                        </ul>
                    </div>
                    <div class="list2022" style="width: 465px; height: 318px; margin-left: 100px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2022.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in CanSat Competition 2022">
                        <ul>
                            <li>&bull; Rank 1 in Indonesia</li>
                            <li>&bull; Rank 2 in Asia</li>
                            <li>&bull; Rank 3 in the World (CANSAT Competition)</li>
                        </ul>
                    </div>
                    <div class="list2021" style="width: 465px; height: 318px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2021.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in CanSat Competition 2021">
                        <ul>
                            <li>&bull; Rank 1 in Indonesia</li>
                            <li>&bull; Rank 2 in Asia</li>
                            <li>&bull; Rank 6 in the World (CANSAT Competition)</li>
                        </ul>
                    </div>
                    <div class="list2020" style="width: 334px; height: 258px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2020-Gen1.jpg" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in CanSat Competition 2020">
                        <ul>
                            <li>&bull; Debut CANSAT Competition</li>
                        </ul>
                    </div>
                    <div class="list2019" style="width: 420px; height: 348px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2019.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Rocket Payload</li>
                            <li>&bull; Rank 1 in EDF Rocket</li>
                            <li>&bull; Rank 3 in Atmospheric Balloon Payload</li>
                            <li>&bull; Best Presentation in EDF Rocket</li>
                        </ul>
                    </div>
                    <div class="list2018" style="width: 420px; height: 348px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Rocket Payload</li>
                            <li>&bull; Rank 1 in EDF Rocket</li>
                            <li>&bull; Rank 3 in Atmospheric Balloon Payload</li>
                            <li>&bull; Best Presentation in EDF Rocket</li>
                        </ul>
                    </div>
                    <div class="list2017" style="width: 417px; height: 318px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Atmospheric Balloon Payload</li>
                            <li>&bull; Rank 2 in Rocket Payload</li>
                            <li>&bull; Rank 2 in EDF Rocket</li>
                        </ul>
                    </div>
                    <div class="list2016" style="width: 450px; height: 348px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Atmospheric Balloon Payload</li>
                            <li>&bull; Rank 2 in EDF Rocket</li>
                            <li>&bull; Rank 2 & Best Idea in Rocket Payload</li>
                            <li>&bull; Best Design in Rocket Payload</li>
                        </ul>
                    </div>
                    <div class="list2015" style="width: 450px; height: 348px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 2 in Rocket Payload</li>
                            <li>&bull; Rank 2 in EDF Rocket</li>
                            <li>&bull; Rank 2 in Atmospheric Balloon Payload</li>
                            <li>&bull; Best Idea in Rocket Payload</li>
                        </ul>
                    </div>
                    <div class="list2014" style="width: 426px; height: 308px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Honorable Mention #1 in Rocket Payload</li>
                            <li>&bull; Honorable Mention #1 in Atmospheric <br> Balloon Payload</li>
                        </ul>
                    </div>
                    <div class="list2013" style="width: 414px; height: 288px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/2013.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in EDF Rocket</li>
                            <li>&bull; Honorable Mention #2 in Rocket Payload</li>
                        </ul>
                    </div>
                    <div class="list2012" style="width: 408px; height: 288px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Rocket Payload</li>
                            <li>&bull; Honorable Mention #1 Rocket Payload</li>
                        </ul>
                    </div>
                    <div class="list2011" style="width: 334px; height: 288px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Rocket Payload</li>
                            <li>&bull; Rank 3 in Rocket Payload</li>
                        </ul>
                    </div>
                    <div class="list2010" style="width: 334px; height: 258px;">
                        <img src="https://ik.imagekit.io/eepisat/asset/sample.webp" style="aspect-ratio=16/9;"
                            width="325px" height="158px" loading="lazy" alt="EEPISAT in KOMURINDO KOMBAT">
                        <p>Komurindo-Kombat</p>
                        <ul>
                            <li>&bull; Rank 1 in Rocket Payload</li>
                        </ul>
                    </div>
                </div>
                <div class="timeLine">
                    <div class="timeLine2022">
                        <div class="lingkaran"></div>
                        <p class="tahun">2023</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2022" style="margin-left: 15px;">
                        <div class="lingkaran"></div>
                        <p class="tahun">2022</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2021">
                        <div class="lingkaran"></div>
                        <p class="tahun">2021</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2020">
                        <div class="lingkaran"></div>
                        <p class="tahun">2020</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2019">
                        <div class="lingkaran"></div>
                        <p class="tahun">2019</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2018">
                        <div class="lingkaran"></div>
                        <p class="tahun">2018</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2017">
                        <div class="lingkaran"></div>
                        <p class="tahun">2017</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2016">
                        <div class="lingkaran"></div>
                        <p class="tahun">2016</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2015">
                        <div class="lingkaran"></div>
                        <p class="tahun">2015</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2014">
                        <div class="lingkaran"></div>
                        <p class="tahun">2014</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2013">
                        <div class="lingkaran"></div>
                        <p class="tahun">2013</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2012">
                        <div class="lingkaran"></div>
                        <p class="tahun">2012</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2011">
                        <div class="lingkaran"></div>
                        <p class="tahun">2011</p>
                        <span class="line"></span>
                    </div>
                    <div class="timeLine2010">
                        <div class="lingkaran"></div>
                        <p class="tahun">2010</p>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="news" data-aos="fade-up">
            <div class="content">
                <h1 class="title"><strong>EEPISAT On Media</strong></h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                    data-aos-duration="500"></span>
            </div>
            <div class="textSlogan">
                <p>#GarudakuJaya<br>diAngkasa</p>
            </div>
            <div class="textSloganMobile">
                <p>#GarudakuJaya<br>diAngkasa</p>
            </div>
            <div class="info">
                <!-- <div class="info1">
                         <img src="asset/sample2.webp" width="370" loading="lazy">
                         <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                        </div>
                        <div class="info2">
                         <img src="asset/sample2.webp" width="370" loading="lazy">
                         <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                        </div>
                        <div class="info3">
                         <img src="asset/sample2.webp" width="370" loading="lazy">
                         <p>Tim Dirgantara PENS Sabet Juara Umum Komurindo-Kombat 2018/2019</p>
                        </div> -->
            </div>
        </section>
        <br>
        <section class="sponsor" data-aos="fade-up">
            <div class="content">
                <h1 class="title"><strong>Support:</strong></h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor"
                    data-aos-duration="500"></span>
                <p>Contact us to discuss how we can work together and achieve mutual benefits</p>
            </div>
            <div class="detailSponsor">
                {{-- <div class="card">
                    <div class="card-body">
                        <a href="/sponsorship">
                            <img src="/static/sponsors/sponsor.png" alt="">
                        </a>
                        <a href="/sponsorship">
                            <h3>Sponsorship</h3>
                        </a>
                        <p>Click here to look for more details about sponsorship</p>
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-body">
                        <a href="/contact?subject=Apply for Collaboration">
                            <img src="/static/sponsors/collaboration.png" alt="">
                        </a>
                        <a href="/contact?subject=Apply for Collaboration">
                            <h3>Collaboration</h3>
                        </a>
                        <p>Click here to discuss for more details about collaboration</p>
                    </div>
                </div>
            </div>
        </section>
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
        <script src="/dist/js/frontend/img360Gen01Script.js"></script>
        <script src="/dist/js/frontend/img360Gen02Script.js"></script>
        <script src="/dist/js/frontend/img360Gen03Script.js"></script>


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
