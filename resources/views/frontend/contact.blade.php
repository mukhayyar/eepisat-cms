@extends('layouts.frontend.main')
@section('body')
    @push('styles')
        @if (app()->environment('local'))
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleContact.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleContact.css') }}">
            @endif
        @else
            @if (Request::isSecure())
                <link rel="stylesheet" href="{{ asset('dist/css/frontend/styleContact.min.css') }}">
            @else
                <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/styleContact.min.css') }}">
            @endif
        @endif
    @endpush
    <main data-aos="fade-up">
        <section class="contact">
            <div class="heading">
                <h1 class="title">Contact Us</h1>
                <span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
            </div>
            <div class="content">
                <div class="detailContact">
                    <div class="phoneNumber">
                        <h1>Phone Number</h1>
                        <div class="detailPhoneNumber">
                            <i class="ri-phone-fill"></i>
                            <div class="detailPhoneNumberList">
                                <p>+6289664250927 <span>(Fatwa Aulia Al-Haq- Team Leader)</span></p>
                                <p>+6285236114836 <span>(Lambang Bintoro - Sponsorship)</span></p>
                                <p>+6282332196865 <span>(Raisha Auwliya - Sponsorship)</span></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="email">
                        <h1>Email Address</h1>
                        <div class="detailEmail">
                            <i class="ri-mail-fill"></i>
                            <p>eepisatindonesia@gmail.com</p>
                        </div>
                    </div>
                    <div class="email" style="margin-top: 10px;">
                        <h1>Social Media</h1>
                        <div class="detailEmail">
                            <i class="ri-linkedin-fill"></i>
                            <p><a href="https://www.linkedin.com/company/eepisat/"
                                    style="text-decoration: none; color:#333333;">
                                    EEPISAT
                                </a></p>
                        </div>
                        <div class="detailEmail">
                            <i class="ri-instagram-fill"></i>
                            <p><a href="https://www.instagram.com/eepisat/" style="text-decoration: none; color:#333333;">
                                    EEPISAT
                                </a></p>
                        </div>
                        <div class="detailEmail">
                            <i class="ri-youtube-fill"></i>
                            <p>
                                <a href="https://www.youtube.com/@eepisat1744"
                                    style="text-decoration: none; color:#333333;">
                                    EEPISAT
                                </a>
                            </p>
                        </div>
                        <div class="detailEmail">
                            <i class="ri-facebook-fill"></i>
                            <p><a href="https://www.facebook.com/eepisat.pens.7/"
                                    style="text-decoration: none; color:#333333;">
                                    EEPISAT
                                </a></p>
                        </div>
                    </div>
                    <br>
                    <div class="address">
                        <h1>Location Address</h1>
                        <div class="detailAddress">
                            <i class="ri-map-pin-2-fill"></i>
                            <p>Jl. Raya ITS, Kampus Politeknik Elektronika Negeri Surabaya, Gd. EIC Lt. 3 - Robotic Rocket
                                Laboratory,
                                Sukolilo, Surabaya - Jawa Timur, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</p>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.35572262540222!2d112.79443839068519!3d-7.275894159303199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ebfbf931%3A0x2eb0a9059e0c4559!2sPusat%20Unggulan%20Teknologi%20PENS!5e0!3m2!1sms!2sid!4v1668772699724!5m2!1sms!2sid"
                        width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>
                <div class="form">
                    <form onsubmit="event.preventDefault(); submitForm();">
                        <div class="name">
                            <label for="name">Name</label><br>
                            <input type="text" id="name" name="name" autocomplete="off" required>
                        </div>
                        <br>
                        <div class="company">
                            <label for="company">Company / Organization</label><br>
                            <input type="text" id="company" name="company" autocomplete="off" required>
                        </div>
                        <br>
                        <div class="subject">
                            <label for="subject">Subject</label><br>
                            <input type="text" id="subject" name="subject" autocomplete="off" required>
                        </div>
                        <br>
                        <div class="message">
                            <label for="message">Message</label><br>
                            <textarea id="message" name="message" autocomplete="off" required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    @include('shared.frontend_footer')

    @push('scripts')
        <script>
            let params = (new URL(document.location)).searchParams;
            let subject = params.get("subject");
            let subjectInput = document.getElementById("subject");
            if (subject != null) {
                let yearNow = new Date().getFullYear();
                subjectInput.value = `${subject} - ${yearNow}`;
            }

            function submitForm() {
                var nameSender = document.getElementById("name").value;
                var companySender = document.getElementById("company").value;
                var formattedSubject = `${subject}`;
                var formattedBody =
                    `Hello, ${nameSender}! Thanks for reaching us. Let's discuss your interest in sponsorship or collaboration with Bamantara EEPISAT.\nName = ${nameSender}\nCompany / Organization = ${companySender}\n\n` +
                    document.getElementById("message").value;
                var mailToLink = "mailto:eepisatindonesia@gmail.com?Subject=" + encodeURIComponent(formattedSubject) +
                    "&body=" + encodeURIComponent(formattedBody);
                window.location.assign(mailToLink);

                event.preventDefault();
            }
        </script>
    @endpush
@endsection
