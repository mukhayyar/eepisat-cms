@extends('layouts.frontend.main')
@section('custom-cursor')
@include('shared.teams.custom_cursor')
@endsection
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleTeams.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleTeams.css') }}">
                <link rel="stylesheet" href="/test/teams.css">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleTeams.min.css') }}">
                <link rel="stylesheet" href="/test/teams.css">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleTeams.min.css') }}">
                <link rel="stylesheet" href="/test/teams.css">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up" data-barba="wrapper">
        <div class="title">
            <h1>Meet Our Member - Gen 5</h1>
            <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
        </div>
        @include('shared.teams.current_team_structure')
        @include('shared.teams.history_team')
        @include('shared.frontend_footer')
    </main>
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="/dist/js/frontend/accordionScript.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
        <script src="https://unpkg.com/@barba/core"></script>
        <script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://fabric.vc/assets/js/ScrollTrigger.min.js"></script>
        <script src="https://fabric.vc/assets/js/ScrambleTextPlugin.min.js"></script>
        <script src="https://fabric.vc/assets/js/SplitText.min.js"></script>
        <script src="https://fabric.vc/assets/js/loconative-scroll.min.js"></script>
        {{-- <script src="https://fabric.vc/assets/js/index.js"></script> --}}
        <script src="/test/index.js"></script>
    @endpush
@endsection
