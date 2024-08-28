
@php
    $currentTime = now();
    $openingTime = \Carbon\Carbon::create(2024, 8, 19, 18, 0, 0, 'Asia/Jakarta');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEPISAT 6th Gen - Registration</title>
    <link rel="icon"
        href="https://d33wubrfki0l68.cloudfront.net/9c80d635033669c5a01e07bad6ad4216eb6d28d6/d3243/asset/eepisat.png"
        type="image/gif">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .anton-regular {
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
        }


        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #FF8000;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #FF8000;
        }

        .bg-eepisat-blue {
            background-color: #334D80;
        }

        .bg-eepisat-light-blue {
            background-color: #586F97;
        }

        .bg-eepisat-lighter-blue {
            background-color: #6B93D0;
        }

        .bg-eepisat-yellow {
            background-color: #FDB140;
        }

        .form-page {
            display: none;
        }

        .form-page.active {
            display: block;
        }

        footer {
            height: 80px;
            /* Adjust the height as needed */
            overflow: hidden;
        }

        .marquee {
            display: flex;
            gap: 4px;
            /* Adjust the gap between images */
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .hidden {
            display: none;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-100"
    style="background-image: url('https://ik.imagekit.io/eepisat/BG-Registration.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <main class="flex-grow mx-2">
        @error('fullname')
            {{ $message }}
        @enderror
        @error('email')
            {{ $message }}
        @enderror
        @error('nrp')
            {{ $message }}
        @enderror
        @error('no-hp')
            {{ $message }}
        @enderror
        @error('jurusan')
            {{ $message }}
        @enderror
        @error('years')
            {{ $message }}
        @enderror
        @error('divisi')
            {{ $message }}
        @enderror
        @error('team-work-engage')
            {{ $message }}
        @enderror
        @error('goals-and-contribute')
            {{ $message }}
        @enderror
        @error('achievement')
            {{ $message }}
        @enderror
        @error('solutions-to-difficult')
            {{ $message }}
        @enderror
        @error('cv')
            {{ $message }}
        @enderror
        @error('portfolio')
            {{ $message }}
        @enderror
        @error('motivation-letter')
            {{ $message }}
        @enderror
        @error('mbti')
            {{ $message }}
        @enderror
        @error('mbti-image')
            {{ $message }}
        @enderror
        @error('medical-record')
            {{ $message }}
        @enderror
        @error('owned-device')
            {{ $message }}
        @enderror
        @error('class-finish-hour')
            {{ $message }}
        @enderror
        @error('parental-consent')
            {{ $message }}
        @enderror
        
        <div class="max-w-sm mx-auto mt-5 bg-eepisat-yellow p-1">
            <h1 class="anton-regular text-center text-xl sm:text-2xl text-white">BAMANTARA EEPISAT</h1>
        </div>
        <div class="max-w-lg sm:max-w-md mx-auto bg-eepisat-blue p-4">
            <h1 class="anton-regular text-center text-3xl sm:text-4xl text-white">6th Gen Registration</h1>
        </div>
        <div id="container" class="max-w-lg sm:max-w-md mx-auto mt-5 bg-gray-300 p-4 sm:p-6 rounded-lg shadow-lg">
            @if (Cookie::get('alreadyRegistered'))
                <div class="text-center text-gray-700 p-4">
                    <h2 class="anton-regular text-2xl sm:text-3xl text-gray-900">Already Registered</h2>
                    <p class="mt-4 text-lg sm:text-xl">You have already registered. Please wait, join our recruitment
                        telegram <a href="https://t.me/+k7BB12ZzBoVhMTZl" class="underline">Bamantara EEPISAT 2024
                            Recruitment</a> for further
                        instructions.</p>
                </div>
                @php
                    if ($currentTime->lessThan($openingTime)) {
                        setcookie('alreadyRegistered', false, 43200);
                    }
                @endphp
            @elseif ($registrationOpen)
                <div class="max-w-full bg-eepisat-light-blue rounded-full h-2.5 mb-4">
                    <div id="progress-bar" class="bg-eepisat-blue h-2.5 rounded-full" style="width: 33%"></div>
                </div>
                <form id="registration-form" action="/registration" class="max-w-sm mx-auto" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="page-1" class="form-page active">
                        <div class="mb-5">
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" id="fullname" name="fullname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Your Name" value="{{ old('fullname') }}" required />
                            @error('fullname')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="nama@mail.com" value="{{ old('email') }}" required />
                            @error('email')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="nrp" class="block mb-2 text-sm font-medium text-gray-900">NRP</label>
                            <input type="number" id="nrp" name="nrp"
                                oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="10"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0000000000" value="{{ old('nrp') }}" required />
                            @error('nrp')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="no-hp" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number(Whatsapp, Telegram)</label>
                            <input type="number" id="no-hp" name="no-hp"
                                oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="13"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0821321312312" value="{{ old('no-hp') }}" required />
                            @error('no-hp')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">Major</label>
                            <select name="jurusan" id="jurusan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="-" disabled>Major</option>
                                <option value="D3 - Teknik Informatika"
                                    {{ old('jurusan') == 'D3 - Teknik Informatika' ? 'selected' : '' }}>D3 - Teknik
                                    Informatika</option>
                                <option value="D3 - Teknik Telekomunikasi"
                                    {{ old('jurusan') == 'D3 - Teknik Telekomunikasi' ? 'selected' : '' }}>D3 - Teknik
                                    Telekomunikasi</option>
                                <option value="D3 - Teknik Elektronika"
                                    {{ old('jurusan') == 'D3 - Teknik Elektronika' ? 'selected' : '' }}>D3 - Teknik
                                    Elektronika</option>
                                <option value="D3 - Teknik Elektro Industri"
                                    {{ old('jurusan') == 'D3 - Teknik Elektro Industri' ? 'selected' : '' }}>D3 -
                                    Teknik
                                    Elektro Industri</option>
                                <option value="D3 - Multimedia Broadcasting"
                                    {{ old('jurusan') == 'D3 - Multimedia Broadcasting' ? 'selected' : '' }}>D3 -
                                    Multimedia Broadcasting</option>
                                <option value="S.Tr - Teknik Informatika"
                                    {{ old('jurusan') == 'S.Tr - Teknik Informatika' ? 'selected' : '' }}>S.Tr - Teknik
                                    Informatika</option>
                                <option value="S.Tr - Sains Data Terapan"
                                    {{ old('jurusan') == 'S.Tr - Sains Data Terapan' ? 'selected' : '' }}>
                                    S.Tr - Sains
                                    Data Terapan</option>
                                <option value="S.Tr - Teknik Komputer"
                                    {{ old('jurusan') == 'S.Tr - Teknik Komputer' ? 'selected' : '' }}>S.Tr - Teknik
                                    Komputer</option>
                                <option value="S.Tr - Teknologi Rekayasa Multimedia"
                                    {{ old('jurusan') == 'S.Tr - Teknologi Rekayasa Multimedia' ? 'selected' : '' }}>S.Tr -
                                    Teknologi Rekayasa Multimedia
                                </option>
                                <option value="S.Tr - Teknologi Game"
                                    {{ old('jurusan') == 'S.Tr - Teknologi Game' ? 'selected' : '' }}>S.Tr
                                    -
                                    Teknologi Game</option>
                                <option value="S.Tr - Teknik Telekomunikasi"
                                    {{ old('jurusan') == 'S.Tr - Teknik Telekomunikasi' ? 'selected' : '' }}>S.Tr -
                                    Teknik Telekomunikasi</option>
                                <option value="S.Tr - Teknik Elektronika"
                                    {{ old('jurusan') == 'S.Tr - Teknik Elektronika' ? 'selected' : '' }}>S.Tr -
                                    Teknik Elektronika</option>
                                <option value="S.Tr - Teknik Elektro Industri"
                                    {{ old('jurusan') == 'S.Tr - Teknik Elektro Industri' ? 'selected' : '' }}>S.Tr -
                                    Teknik Elektro Industri</option>
                                <option value="S.Tr - Teknologi Rekayasa Internet"
                                    {{ old('jurusan') == 'S.Tr - Teknologi Rekayasa Internet' ? 'selected' : '' }}>S.Tr
                                    -
                                    Teknologi Rekayasa Internet</option>
                                <option value="S.Tr - Teknik Mekatronika"
                                    {{ old('jurusan') == 'S.Tr - Teknik Mekatronika' ? 'selected' : '' }}>S.Tr -
                                    Teknik Mekatronika</option>
                                <option value="S.Tr - Sistem Pembangkit Energi"
                                    {{ old('jurusan') == 'S.Tr - Sistem Pembangkit Energi' ? 'selected' : '' }}>S.Tr -
                                    Sistem Pembangkit Energi</option>
                                <option value="S.Tr LJ - Teknik Elektronika"
                                    {{ old('jurusan') == 'S.Tr LJ - Teknik Elektronika' ? 'selected' : '' }}>S.Tr LJ -
                                    Teknik Elektronika</option>
                                <option value="S.Tr LJ - Teknik Elektro Industri"
                                    {{ old('jurusan') == 'S.Tr LJ - Teknik Elektro Industri' ? 'selected' : '' }}>S.Tr
                                    LJ -
                                    Teknik Elektro Industri
                                </option>
                                <option value="S.Tr LJ - Teknik Telekomunikasi"
                                    {{ old('jurusan') == 'S.Tr LJ - Teknik Telekomunikasi' ? 'selected' : '' }}>S.Tr LJ
                                    -
                                    Teknik Telekomunikasi</option>
                                <option value="S.Tr LJ - Teknik Informatika"
                                    {{ old('jurusan') == 'S.Tr LJ - Teknik Informatika' ? 'selected' : '' }}>S.Tr LJ -
                                    Teknik Informatika</option>
                                <option value="S2 - Teknik Elektro"
                                    {{ old('jurusan') == 'S2 - Teknik Elektro' ? 'selected' : '' }}>S2 - Teknik
                                    Elektro</option>
                                <option value="S2 - Teknik Informatika dan Komputer"
                                    {{ old('jurusan') == 'S2 - Teknik Informatika dan Komputer' ? 'selected' : '' }}>S2
                                    - Teknik
                                    Informatika dan
                                    Komputer
                                </option>
                            </select>
                            @error('jurusan')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="years" class="block mb-2 text-sm font-medium text-gray-900">Years</label>
                            <input type="number" id="years" name="years"
                                oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="e.g 2021, 2022, 2023, 2024" value="{{ old('years') }}" required />
                            @error('years')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                    </div>

                    <div id="page-2" class="form-page">

                        <div class="mb-5">
                            <label for="divisi" class="block mb-2 text-sm font-medium text-gray-900">Chosen
                                Division</label>
                            <select name="divisi" id="divisi" name="divisi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="-" disabled>Technical Division</option>
                                <option value="Mechanic" {{ old('divisi') == 'Mechanic' ? 'selected' : '' }}>Mechanic
                                </option>
                                <option value="Electrical" {{ old('divisi') == 'Electrical' ? 'selected' : '' }}>
                                    Electrical</option>
                                <option value="Software" {{ old('divisi') == 'Software' ? 'selected' : '' }}>Software
                                </option>
                                <option value="-" disabled>Non Technical Division</option>
                                <option value="Sponsorship" {{ old('divisi') == 'Sponsorship' ? 'selected' : '' }}>
                                    Sponsorship</option>
                                <option value="Internal" {{ old('divisi') == 'Internal' ? 'selected' : '' }}>Internal
                                </option>
                                <option value="Branding - Social Media Expert"
                                    {{ old('divisi') == 'Branding - Social Media Expert' ? 'selected' : '' }}>Branding
                                    - Social Media Expert</option>
                                <option value="Branding - Web Developer"
                                    {{ old('divisi') == 'Branding - Web Developer' ? 'selected' : '' }}>Branding - Web
                                    Developer</option>
                            </select>
                            @error('divisi')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="team-work-engage" class="block mb-2 text-sm font-medium text-gray-900">Please
                                explain your plans to engage with other team members during Team Work using real
                                examples!
                            </label>
                            <p class="text-xs text-red-500 mb-2"># Note: 150 words minimum and 250 words maximum. </p>
                            <textarea id="team-work-engage" name="team-work-engage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="..." required>{{ old('team-work-engage') }}</textarea>
                            <p id="word-count-team-work-engage" class="text-xs text-gray-500 mt-2">0/250</p>
                            @error('team-work-engage')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="goals-and-contribute" class="block mb-2 text-sm font-medium text-gray-900">How
                                will this team help you to achieve your immediate goals and how can you contribute back
                                to this team regarding to your selected division?</label>
                            <p class="text-xs text-red-500 mb-2"># Note: 150 words minimum and 250 words maximum. </p>
                            </p>
                            <textarea id="goals-and-contribute" name="goals-and-contribute"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="...." required>{{ old('goals-and-contribute') }}</textarea>
                            <p id="word-count-goals-and-contribute" class="text-xs text-gray-500 mt-2">0/250</p>
                            @error('goals-and-contribute')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                    </div>

                    <div id="page-3" class="form-page">
                        <div class="mb-5">
                            <label for="achievement" class="block mb-2 text-sm font-medium text-gray-900">Discuss your
                                academic and non-academic achievements, including the process and skills involved in
                                your previous or current degree program!
                            </label>
                            <p class="text-xs text-red-500 mb-2"># Note: 150 words minimum and 250 words maximum. </p>
                            </p>
                            <textarea id="achievement" name="achievement"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="..." required>{{ old('achievement') }}</textarea>
                            <p id="word-count-achievement" class="text-xs text-gray-500 mt-2">0/250</p>
                            @error('achievement')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="solutions-to-difficult"
                                class="block mb-2 text-sm font-medium text-gray-900">Discuss your solutions when you
                                faced a difficult team work challenge and how you manage it!</label>
                            <p class="text-xs text-red-500 mb-2"># Note: 150 words minimum and 250 words maximum. </p>
                            </p>
                            <textarea id="solutions-to-difficult" name="solutions-to-difficult"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="..." required>{{ old('solutions-to-difficult') }}</textarea>
                            <p id="word-count-solutions-to-difficult" class="text-xs text-gray-500 mt-2">0/250</p>
                            @error('solutions-to-difficult')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="cv" class="block mb-2 text-sm font-medium text-gray-900">CV</label>
                            <p class="text-xs text-gray-500 mb-2"> File format: pdf. Maximum size: 5 Mb</p>
                            <input type="file" id="cv" name="cv"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Link to your CV" accept=".pdf" required />
                            @error('cv')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="portfolio"
                                class="block mb-2 text-sm font-medium text-gray-900">Portfolio</label>
                            <p class="text-xs text-red-500 mb-2"># Note: Optional, but mandatory for the Branding
                                Division.
                                Extra points for the Other Division.</p>
                            <p class="text-xs text-gray-500 mb-2"> File format: pdf. Maximum size: 5 Mb</p>
                            <input type="file" id="portfolio" name="portfolio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Link to your portfolio" accept=".pdf" />
                            @error('portfolio')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="motivation-letter"
                                class="block mb-2 text-sm font-medium text-gray-900">Motivation Letter</label>
                            <p class="text-xs text-red-500 mb-2"># Note: Motivation letter should be 700 words maximum.
                            </p>
                            <p class="text-xs text-gray-500 mb-2"> File format: pdf. Maximum size: 512 Kb</p>
                            <input type="file" id="motivation-letter" name="motivation-letter"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Link to your motivation letter" accept=".pdf" required />
                            @error('motivation-letter')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                    </div>

                    <div id="page-4" class="form-page">
                        <div class="mb-5">
                            <label for="mbti" class="block mb-2 text-sm font-medium text-gray-900">What's your
                                MBTI?</label>
                            <p class="text-xs text-gray-500 mb-2"> Please visit <a class="underline text-blue-500"
                                    href="https://www.16personalities.com/">16Personalities Website</a> to take test
                            </p>

                            <input type="text" id="mbti" name="mbti"
                                oninput="this.value=this.value.slice(0,4)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="e.g INTP, ENFP, ENTJ, ISTP etc" value="{{ old('mbti') }}" required />
                            @error('mbti')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="mbti-image" class="block mb-2 text-sm font-medium text-gray-900">Screenshot of
                                16Personalities MBTI Results</label>
                            <p class="text-xs text-gray-500 mb-2"> File format: png, jpeg, and jpg. Maximum size: 1 Mb
                            </p>
                            <input type="file" id="mbti-image" name="mbti-image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Link to your MBTI result" accept=".png, .jpeg, .jpg" required />
                            @error('mbti-image')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="medical-record" class="block mb-2 text-sm font-medium text-gray-900">Medical
                                Record</label>
                            <p class="text-xs text-red-500 mb-2"># Please tell us your health condition.
                            </p>
                            <textarea id="medical-record" name="medical-record"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="e.g Maag" required>{{ old('medical-record') }}</textarea>
                            @error('medical-record')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="owned-device" class="block mb-2 text-sm font-medium text-gray-900">Privately
                                Owned Device</label>
                            <input type="text" id="owned-device" name="owned-device"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="e.g Laptop, Smartphone, Tablet, PC" value="{{ old('owned-device') }}"
                                required />
                            @error('owned-device')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="class-finish-hour" class="block mb-2 text-sm font-medium text-gray-900">Class
                                Finish Hour on September 9th to September 11th</label>
                            <textarea type="text" id="class-finish-hour" name="class-finish-hour"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="e.g 9th September 16:00 WIB, 10th September 13:00 WIB, 11th September 17:00 WIB" required>{{ old('class-finish-hour') }}</textarea>
                            @error('class-finish-hour')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="parental-consent"
                                class="block mb-2 text-sm font-medium text-gray-900">Parental Consent</label>
                            <p class="text-xs text-gray-500 mb-2"> File format: pdf. Maximum size: 512 KB</p>

                            <input type="file" id="parental-consent" name="parental-consent"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Link to your Parental Consent letter" accept=".pdf" required />
                            @error('parental-consent')
                                <p class="text-xs text-red-500 mb-2">{{ $message }} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-between mb-5">
                        <button type="button" id="prevBtn"
                            class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto mx-1 px-5 py-2.5 text-center">Back</button>
                        <button type="submit" id="nextBtn"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto mx-1 px-5 py-2.5 text-center">Submit</button>
                    </div>
                </form>
        </div>
        <!-- Loader -->
        <div id="loader" class="hidden fixed inset-0 flex items-center justify-center bg-white bg-opacity-75 z-50">
            <div class="loader"></div>
        </div>
    @elseif($currentTime->lessThan($openingTime))
        <div class="text-center text-gray-700 p-4">
            <h2 class="anton-regular text-2xl sm:text-3xl text-gray-900">Registration Opening Soon</h2>
            <p class="mt-4 text-lg sm:text-xl">The registration will be opening soon, please be patient and stay tuned
                for more details!</p>
            <!-- Display the countdown timer in an element -->
            <p class="mt-4 text-lg font-bold sm:text-xl" id="demo"></p>
        </div>
    @else
        <div class="text-center text-gray-700 p-4">
            <h2 class="anton-regular text-2xl sm:text-3xl text-gray-900">Registration Closed</h2>
            <p class="mt-4 text-lg sm:text-xl">We appreciate your interest, but unfortunately, the registration period
                has ended. Please stay tuned for future opportunities!</p>
        </div>
        @endif
        <div class="relative max-w-md mx-auto">
            <div class="absolute z-0 top-2 left-0 w-11/12 h-full bg-white border-2 border-black"></div>
            <div class="relative z-10 max-w-md mx-2 my-8 bg-eepisat-lighter-blue p-2 border-2 border-black">
                <h1 class="anton-regular text-center text-1xl text-white">Registration Date: 19 August - 1 September
                    2024
                </h1>
            </div>
        </div>
    </main>
    <footer class="sticky bottom-0 z-20 bg-white p-4 flex items-center gap-4 overflow-hidden relative">
        <div class="marquee">
            <img src="https://cansatcompetition.com/images/NRL%20Emblem(blue_gold).jpg" alt="Image 1"
                class="h-12">
            <img src="https://cansatcompetition.com/images/NASALogo.jpg" alt="Image 2" class="h-12">
            <img src="https://cansatcompetition.com/images/aaslogo99.jpg" alt="Image 3" class="h-12">
            <img src="https://cansatcompetition.com/images/sie.jpg" alt="Image 4" class="h-12">
            <img src="https://cansatcompetition.com/images/praxis.jpg" alt="Image 5" class="h-12">
            <img src="https://cansatcompetition.com/images/KratosISI_Logo.png" alt="Image 6" class="h-12">
            <img src="https://cansatcompetition.com/images/LOGO_LMCO_color-with-tag-line.jpg" alt="Image 7"
                class="h-12">
            <img src="https://cansatcompetition.com/images/vast.png" alt="Image 8" class="h-12">
            <!-- Duplicate the images to create a seamless scroll effect -->
            <img src="https://cansatcompetition.com/images/NRL%20Emblem(blue_gold).jpg" alt="Image 1"
                class="h-12">
            <img src="https://cansatcompetition.com/images/NASALogo.jpg" alt="Image 2" class="h-12">
            <img src="https://cansatcompetition.com/images/aaslogo99.jpg" alt="Image 3" class="h-12">
            <img src="https://cansatcompetition.com/images/sie.jpg" alt="Image 4" class="h-12">
            <img src="https://cansatcompetition.com/images/praxis.jpg" alt="Image 5" class="h-12">
            <img src="https://cansatcompetition.com/images/KratosISI_Logo.png" alt="Image 6" class="h-12">
            <img src="https://cansatcompetition.com/images/LOGO_LMCO_color-with-tag-line.jpg" alt="Image 7"
                class="h-12">
            <img src="https://cansatcompetition.com/images/vast.png" alt="Image 8" class="h-12">
        </div>
    </footer>
    @if($currentTime->lessThan($openingTime))
    <script>
        // countdown
        // Set the date we're counting down to
        var countDownDate = new Date("August 19, 2024 18:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                location.reload();
            }
        }, 1000);
    </script>
    @endif
    @if($registrationOpen)
    <script>
        let currentPage = 1;
        const totalPage = 4;

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentPage < totalPage) {
                document.getElementById(`page-${currentPage}`).classList.remove('active');
                currentPage++;
                document.getElementById(`page-${currentPage}`).classList.add('active');
                updateProgressBar();
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentPage > 1) {
                document.getElementById(`page-${currentPage}`).classList.remove('active');
                currentPage--;
                document.getElementById(`page-${currentPage}`).classList.add('active');
                updateProgressBar();
            }
        });

        function updateProgressBar() {
            const progressBar = document.getElementById('progress-bar');
            progressBar.style.width = `${(currentPage / totalPage) * 100}%`;

            // Hide the "Back" button on the first page
            document.getElementById('prevBtn').style.display = currentPage === 1 ? 'none' : 'inline-block';
            var nextBtnIsSubmit = true;
            // Change the "Next" button text to "Submit" on the last page
            document.getElementById('nextBtn').textContent = currentPage === totalPage ? 'Submit' : 'Next';
            document.getElementById('nextBtn').type = currentPage === totalPage ? 'submit' : 'button';
        }

        // Initialize the form
        updateProgressBar();

        // Handle form submission
        function handleFileEvent(elementId, maxSize, validTypes) {
            document.getElementById(elementId).addEventListener('change', function() {
                const file = this.files[0];
                const validFileTypes = validTypes.map(type => type.replace(/.*\//,
                    '')); // Remove everything before and including the slash in valid types

                if (file) {
                    if (!validTypes.includes(file.type)) {
                        alert(`Please upload a file in one of the following formats: ${validFileTypes.join(', ')}`);
                        this.value = ''; // Clear the input
                    } else if (file.size > maxSize) {
                        const maxSizeMB = (maxSize / (1024 * 1024)).toFixed(2); // Convert maxSize to MB
                        alert(`File size must be less than ${maxSizeMB} MB.`);
                        this.value = ''; // Clear the input
                    }
                }
            });
        }
        const fileSettings = {
            'mbti-image': {
                maxSize: 1 * 1024 * 1024,
                validTypes: ['image/png', 'image/jpeg', 'image/jpg']
            }, // 1 MB
            'cv': {
                maxSize: 5 * 1024 * 1024,
                validTypes: ['application/pdf']
            }, // 5 MB
            'portfolio': {
                maxSize: 5 * 1024 * 1024,
                validTypes: ['application/pdf']
            }, // 5 MB
            'motivation-letter': {
                maxSize: 1 * 1024 * 1024,
                validTypes: ['application/pdf']
            }, // 512 KB
            'parental-consent': {
                maxSize: 512 * 1024,
                validTypes: ['application/pdf']
            } // 512 KB
        };

        for (const [elementId, settings] of Object.entries(fileSettings)) {
            handleFileEvent(elementId, settings.maxSize, settings.validTypes);
        }

        function wordCounter(elementId) {
            document.getElementById(elementId).addEventListener('input', function() {
                const text = this.value.trim();
                const words = text.split(/\s+/).filter(word => word.length > 0);
                const wordCount = words.length;
                if (wordCount > 250) {
                    this.value = words.slice(0, 250).join(' ');
                }

                document.getElementById(`word-count-${elementId}`).textContent = `${wordCount}/250`;

                const warning = document.getElementById('word-warning');
                if (wordCount < 150 || wordCount > 250) {
                    warning.style.display = 'block';
                } else {
                    warning.style.display = 'none';
                }
            });
        }

        wordCounter('team-work-engage');
        wordCounter('goals-and-contribute');
        wordCounter('achievement');
        wordCounter('solutions-to-difficult');

        var class_finish = document.getElementById('class-finish-hour').value != '' ? true : false;
        document.getElementById('prevBtn').addEventListener('click', function(event) {
            class_finish = false;
        });
        document.getElementById('nextBtn').addEventListener('click', function(event) {
            if (this.type == 'submit' && class_finish) {
                var form = document.getElementById('registration-form');
                var inputs = form.querySelectorAll('input');
                var textareas = form.querySelectorAll('textarea');
                var emptyFields = [];
                var emptyTextareas = [];
                var errorMessages = [];


                function countWords(text) {
                    return text.trim().split(/\s+/).length;
                }

                // Check empty input fields
                inputs.forEach(function(input) {
                    if (!input.value.trim()) {
                        // Get the label associated with this input
                        var label = document.querySelector(`label[for="${input.id}"]`);
                        if (input.name !== "portfolio") {
                            if (label) {
                                emptyFields.push(label.textContent.trim());
                            } else {
                                emptyFields.push(input.name); // Fallback to input name if label is missing
                            }
                        }
                    }
                });

                // Check empty textarea fields
                textareas.forEach(function(textarea) {
                    if (!textarea.value.trim()) {
                        // Get the label associated with this textarea
                        var label = document.querySelector(`label[for="${textarea.id}"]`);
                        if (label) {
                            emptyTextareas.push(label.textContent.trim());
                        } else {
                            emptyTextareas.push(textarea
                                .name); // Fallback to textarea name if label is missing
                        }
                    }
                });

                // Validate specific textareas for word count constraints
                var textareasToValidate = [
                    'team-work-engage',
                    'goals-and-contribute',
                    'achievement',
                    'solutions-to-difficult'
                ];
                var counter = 0;
                textareasToValidate.forEach(function(id) {
                    var textarea = document.getElementById(id);
                    if (textarea) {
                        var wordCount = countWords(textarea.value);
                        var label = document.querySelector(`label[for="${textarea.id}"]`);
                        if (wordCount < 150 || wordCount > 250) {
                            errorMessages.push(
                                `* ${label.textContent.trim() || textarea.name}:  ${wordCount}/250 words (must be between 150 and 250 words)`
                            );
                        }
                    }
                });

                var allEmptyFields = emptyFields.concat(emptyTextareas);

                if (allEmptyFields.length > 0) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please fill in the following fields:\n * ' + allEmptyFields.join('\n * '));
                }

                if (errorMessages.length > 0) {
                    event.preventDefault(); // Prevent form submission
                    alert('The following essay have word count issues:\n' + errorMessages.join('\n'));
                }
            }
            if (currentPage == 4) {
                class_finish = true;
            }
        });
    </script>
    @endif
</body>

</html>
