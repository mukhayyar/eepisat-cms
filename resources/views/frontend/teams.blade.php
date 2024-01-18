@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
			@if (Request::isSecure()) 
            <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleTeams.css') }}">
			@else
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleTeams.css') }}">
			@endif
        @else
			@if (Request::isSecure()) 
            <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleTeams.min.css') }}">
			@else
            <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleTeams.min.css') }}">
			@endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <div class="title">
            <h1>Meet Our Teams</h1>
            <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
        </div>
        <section class="accordion">
            <div class="accordionGen1">
                <div class="header">
                    <p>GEN 01</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/hanafi.webp" loading="lazy">
                        <div class="infoAdvisorGen1">
                            <h3>Nofria Hanafi, S.ST, M.T</h3>
                            <p>Team Advisor</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/yudha.webp" loading="lazy">
                        <div class="infoLeaderGen1">
                            <h3>Yudha Sadewa</h3>
                            <p>Team Leader</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/syafik.webp" loading="lazy">
                        <div class="infoMechanicGen1">
                            <h3>Syafik Alilha</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">S2 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/eko.webp" loading="lazy">
                        <div class="infoSoftware1Gen1">
                            <h3>Eko Budi Utomo, S.ST, M.T</h3>
                            <p>Software Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">S2 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/ardian.webp" loading="lazy">
                        <div class="infoSoftware2Gen1">
                            <h3>Ardian Bagus Wicaksono</h3>
                            <p>Software Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/ilham.webp" loading="lazy">
                        <div class="infoECD1Gen1">
                            <h3>Ilham Dwi Pratama</h3>
                            <p>Electronics & Communication Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/bimo.webp" loading="lazy">
                        <div class="infoECD2Gen1">
                            <h3>Bimo Dimas Saputra</h3>
                            <p>Electronics & Communication Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Elektronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/noval.webp" loading="lazy">
                        <div class="infoECD3Gen1">
                            <h3>Noval Anugrah Khosyirin</h3>
                            <p>Electronics & Communication Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Elektronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen1/novanna.webp" loading="lazy">
                        <div class="infoManagementGen1">
                            <h3>Novanna Rahma Zani</h3>
                            <p>Management Division</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordionGen2">
                <div class="header">
                    <p>GEN 02</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/advisor.webp">
                        <div class="advisor">
                            <h3>Team Advisor</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/leader.webp">
                        <div class="leader">
                            <h3>Team Leader</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/pm.webp">
                        <div class="pm">
                            <h3>Project Manager</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/hardwareElectronic.webp">
                        <div class="hardwareElectronic">
                            <h3>Hardware Division</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/mechanicDescentControl.webp">
                        <div class="mechanicDescentControl">
                            <h3>Mechanic Division</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/groundControlStation.webp">
                        <div class="groundControlStation">
                            <h3>Software Division</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/branding.webp">
                        <div class="branding">
                            <h3>Branding Division</h3>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen2/management.webp">
                        <div class="management">
                            <h3>Management Division</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordionGen3">
                <div class="header">
                    <p>GEN 03</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/pakHana.webp">
                        <div class="infoAdvisor1Gen3">
                            <h3>Nofria Hanafi, S.ST, M.T</h3>
                            <p>Team Advisor</p>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/pakHendhi.webp">
                        <div class="infoAdvisor2Gen3">
                            <h3>Hendhi Hermawan, S.ST, M.Tr.T</h3>
                            <p>Team Advisor</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Elektronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/zul.webp" loading="lazy">
                        <div class="infoLeaderGen3">
                            <h3>Zulfikar Davbi<br>Mahendra</h3>
                            <p>Team Leader</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Sistem Pembangkit Energi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/agis.webp" loading="lazy">
                        <div class="infoPmTekGen3">
                            <h3>Muhammad Aghist Fitrony</h3>
                            <p>Technical<br>Project Manager</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/farizqi.webp" loading="lazy">
                        <div class="infoHardware1Gen3">
                            <h3>Achmad Bagus Okto Faerizqi</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">S2 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/piko.webp" loading="lazy">
                        <div class="infoHardware2Gen3">
                            <h3>Piko Permata Ilham Prasetyo</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Komputer</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/arbi.webp" loading="lazy">
                        <div class="infoHardware3Gen3">
                            <h3>Arbi Julianto</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/iwa.webp" loading="lazy">
                        <div class="infoMechanic1Gen3">
                            <h3>Fatwa Aulia Al-Haq</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/alvina.webp" loading="lazy">
                        <div class="infoMechanic2Gen3">
                            <h3>Alvina Zahratul Laali Nurba</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/nugi.webp" loading="lazy">
                        <div class="infoMechanic3Gen3">
                            <h3>I Made Nugi Edwika Ariwigangga</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/rara.webp" loading="lazy">
                        <div class="infoSoftwareGen3">
                            <h3>Rara Widya Paramartha Hapsari</h3>
                            <p>Software Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Sistem Pembangkit Energi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/jusar.webp" loading="lazy">
                        <div class="infoPmNontekGen3">
                            <h3>Rafi' Jusar Wishnuwardana</h3>
                            <p>Non Technical<br>Project Manager</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknologi Game</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/asmaralda.webp" loading="lazy">
                        <div class="infoAdministration1Gen3">
                            <h3>Asmaralda Laksmi Firdausi</h3>
                            <p>Administration Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Komputer</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/rena.webp" loading="lazy">
                        <div class="infoAdministration2Gen3">
                            <h3>Rena Kridianingrum</h3>
                            <p>Administration Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknologi Game</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/daffa.webp" loading="lazy">
                        <div class="infoBranding1Gen3">
                            <h3>Daffaa' Faalih Bima Putra Dianta</h3>
                            <p>Branding Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D3 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/nura.webp" loading="lazy">
                        <div class="infoBranding2Gen3">
                            <h3>Imannura Muslim Dwi Utomo</h3>
                            <p>Branding Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D3 Teknologi Multimedia Broadcasting</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/silhoutte-woman-removebg.png?updatedAt=1680622809595"
                            loading="lazy">
                        <div class="infoBranding3Gen3">
                            <h3>Tathmainul Qulub Makhfud'atin</h3>
                            <p>Branding Division</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordionGen4">
                <div class="header">
                    <p>GEN 04</p><i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="listImg">
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/pakHana.webp">
                        <div class="infoAdvisor1Gen4">
                            <h3>Nofria Hanafi, S.ST, M.T</h3>
                            <p>Team Advisor</p>
                        </div>
                    </div>
                    <div class="team">
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/pakHendhi.webp">
                        <div class="infoAdvisor2Gen4">
                            <h3>Hendhi Hermawan, S.ST, M.Tr.T</h3>
                            <p>Team Advisor</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/iwa.webp" loading="lazy">
                        <div class="infoLeaderGen4">
                            <h3>Fatwa Aulia Al-Haq</h3>
                            <p>Team Leader</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/tsabitah.webp" loading="lazy">
                        <div class="infoPmTekGen4">
                            <h3>Tsabitah Akmal Al Mumtazah</h3>
                            <p>Technical<br>Project Manager</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/farizqi.webp" loading="lazy">
                        <div class="infoHardware1Gen4">
                            <h3>Achmad Bagus Okto Faerizqi</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/fachrizal.webp" loading="lazy">
                        <div class="infoHardware2Gen4">
                            <h3>Muhammad Fahrizal</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/sunu.webp" loading="lazy">
                        <div class="infoMechanic1Gen4">
                            <h3>Artaka Sunu Adhi Prasetya</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/reza.webp" loading="lazy">
                        <div class="infoMechanic2Gen4">
                            <h3>Muhammad Reza Pratama</h3>
                            <p>Mechanic Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/yumnah.webp" loading="lazy">
                        <div class="infoSoftware1Gen4">
                            <h3>Yumna Indah Fitriani</h3>
                            <p>Software Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Informatika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/tsaqif.webp" loading="lazy">
                        <div class="infoSoftware2Gen4">
                            <h3>Muhammad Tsaqif Mukhayyar</h3>
                            <p>Software Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D3 Teknik Telekomunikasi</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/abil.webp" loading="lazy">
                        <div class="infoPmNontekGen4">
                            <h3>Akhmadan Habibullah</h3>
                            <p>Non Technical<br>Project Manager</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknologi Rekayasa Multimedia</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/dwi.webp" loading="lazy">
                        <div class="infoBranding1Gen4">
                            <h3>Dwi Mulyo</h3>
                            <p>Branding Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Elektronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/reni.webp" loading="lazy">
                        <div class="infoBranding2Gen4">
                            <h3>Reniantika Dwi Pratiwi</h3>
                            <p>Branding Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Mekatronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/neta.webp" loading="lazy">
                        <div class="infoInternalGen4">
                            <h3>Arneta Firdaus</h3>
                            <p>Internal Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknologi Rekayasa Multimedia</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/azzam.webp" loading="lazy">
                        <div class="infoWebMasterGen4">
                            <h3>Azzam Wahida Firdaus</h3>
                            <p>Web Master Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Informatika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen4/lambang.webp" loading="lazy">
                        <div class="infoSponsorshipGen4">
                            <h3>Lambang Bintoro</h3>
                            <p>Sponsorship Division</p>
                        </div>
                    </div>
                    <div class="team">
                        <p class="grade">D4 Teknik Elektronika</p>
                        <img src="https://ik.imagekit.io/eepisat/asset/team/gen3/zul.webp" alt="mas zulll"
                            style="right: 44px; bottom: 28px;" loading="lazy">
                        <div class="infoHardware2Gen4">
                            <h3>Zulfikar Davbi</h3>
                            <p>Hardware Division</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('shared.frontend_footer')
    @push('scripts')
        <script src="/dist/js/frontend/accordionScript.js"></script>
    @endpush
@endsection
