@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleAbout.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleAbout.css') }}">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleAbout.min.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleAbout.min.css') }}">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <section class="about">
            <div class="heading">
                <h1 class="title">About Bamantara EEPISAT</h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
            </div>
            <div class="content" width="740">
                <p class="description">Bamantara in Javanese culture means Air Sovereign inspired by the puppet character
                    Batara Bayu.<br><br>The EEPISAT Bamantara team focuses on the development of rocket-based
                    payloads<br>Satellite since 2020. Formed from the EEPIS Space Team which has competed<br>in the National
                    Komurindo-Kombat event since 2010. Bamantara EEPISAT<br>divided into 2 fields. Technical consisting of
                    Hardware, Mechanical, and Software.<br>As well as Non-Technical consisting of Internal, Sponsorships,
                    Web Masters, and<br>Social Media Expert.<br><br>Each field is coordinated by the Project Manager and our
                    team led by the Team Leader.<br>Bamantara EEPISAT is guided by 2 lecturers who are experienced in the
                    field of Satellite-based rocket payload</p>
                <div class="videoPlayer">
                    <iframe width="421" height="250"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        src="https://www.youtube.com/embed/mFnpOKFu3qY?autoplay=1&loop=1&mute=0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="ourDivisions">
            <div class="heading">
                <h1 class="title">Our Team Structure</h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
            </div>
            <div class="card">
                <div class="division">
                    <div class="content">
                        <h1>Team Advisor & Leader</h1>
                        <p>Guiding and empowering our team to success every day.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Project Manager</h1>
                        <p>Our team of Project Managers ensures seamless execution, whether it's technical expertise or
                            non-technical finesse.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Hardware</h1>
                        <p>Powering innovation, one circuit at a time. Explore our hardware solutions for CanSat.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Software</h1>
                        <p>Transforming ideas into cutting-edge software solutions, one line of code at a time and ensure
                            communication between Ground Station and
                            CanSat.
                        </p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Mechanic</h1>
                        <p>Keeping CanSat missions running smoothly - they're CanSat mechanical problem solvers.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Internal</h1>
                        <p>Efficiently managing the heart of our organization, ensuring seamless operations behind the
                            scenes.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Sponsorships</h1>
                        <p>Connecting brands with meaningful opportunities to support our mission and make a lasting impact.
                        </p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Web Master</h1>
                        <p>Crafting online experiences that captivate, from pixels to performance.</p>
                    </div>
                </div>
                <div class="division">
                    <div class="content">
                        <h1>Social Media</h1>
                        <p>Crafting digital experiences, one post at a time. Our Social Media Experts drive engagement and
                            spark connections.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('shared.frontend_footer')
@endsection
