@extends('layouts.main')
@section('title')
    Learn
@endsection
@section('content')
    <!-- Hero -->
    <section class="cku5t ccok8">

        <!-- Bg -->
        <div class="c09n0 crfj0 cqh0z cyaoe c1j64" aria-hidden="true"></div>

        <!-- Illustration -->
        <div class="c09n0 crfj0 c6m1e cyaoe cz8m8 cqt4q" aria-hidden="true">
            <object type="image/svg+xml" data="images/hero-illustration.svg" width="1440" height="1214"></object>
        </div>

        <div class="csj5a cmqkr crfvq c82m6">
            <div class="c98u7 ca1e3 cuyc0 cmfra">

                <!-- Hero content -->
                <div class="csj5a cap4d cz3g0">

                    <h1 class="cv1uh chux1 cmbv1 codph" data-aos="fade-up">Elevate Your Skills with Expert-Led Courses.</h1>
                    <p class="c8a2r cbbk4 codph co7su cvwps" data-aos="fade-up" data-aos-delay="100">Our courses are
                        accessible on all devices, so you can learn anytime, anywhere. Join us to gain practical knowledge
                        and hands-on experience in an interactive and immersive learning environment.</p>
                    <div data-aos="fade-up" data-aos-delay="200">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8"
                                    style="background-color: blueviolet;">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8">
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8"
                                        style="background-color: blueviolet;">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="crmv9">

        <div class="cm28u cnvm7">

            <!-- Section header -->
            <div class="csj5a cap4d cxfpf cz3g0 cpv3s">
                <h2 class="c0wf0 cmbv1 cqr0e">Trying to include what fits you:</h2>
            </div>

            <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
            <!-- * Initialized in src/js/main.js -->
            <!-- * Custom styles in src/css/additional-styles/theme.scss -->
            <div
                class="clients-carousel swiper-container cku5t c6tth cz0eq c916p cmd23 cgjcy csg5r c9mi3 csyrr cuegs clkjz ccbt2 cn34t cfo4e c1jh7 c4swk">
                <div class="swiper-wrapper c1g4v cxs7a">
                    <!-- Carousel items -->
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn1.iconfinder.com/data/icons/logotypes/32/badge-html-5-512.png" width="100"
                            alt="Client 01">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn1.iconfinder.com/data/icons/logotypes/32/badge-css-3-512.png" width="100"
                            alt="Client 02">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn2.iconfinder.com/data/icons/designer-skills/128/code-programming-javascript-software-develop-command-language-512.png"
                            width="100" alt="Client 03">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/267_Python_logo-512.png"
                            width="100" alt="Client 04">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn4.iconfinder.com/data/icons/logos-3/568/php-logo-512.png" width="100"
                            alt="Client 05">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn4.iconfinder.com/data/icons/logos-3/181/MySQL-512.png" width="100"
                            alt="Client 06">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn0.iconfinder.com/data/icons/logos-brands-in-colors/128/react-512.png"
                            width="100" alt="Client 07">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn1.iconfinder.com/data/icons/logos-3/304/codeigniter-128.png" width="100"
                            alt="Client 08">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-3/24/github-alt-512.png"
                            width="100" alt="Client 09">
                    </div>
                    <div class="swiper-slide chv0p cld7y c56ct c48w7 cz9fi cw1kf cw4rw cscc8">
                        <img class="cgrxs citjf c6xw5 cgshh csxzy"
                            src="https://cdn0.iconfinder.com/data/icons/server-it-2/64/01-Big_data-256.png" width="100"
                            alt="Client 10">
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Explainer -->
    <section>
        <div class="csj5a cmqkr crfvq c82m6">
            <div class="cm28u cnvm7">

                <!-- Section header -->
                <div class="csj5a cap4d cxfpf cz3g0 cpv3s">
                    <h2 class="cdlyt cmbv1">We support lifelong learners and professionals from all fields.</h2>
                </div>

                <!-- Steps -->
                <div class="cku5t cxfpf">

                    <!-- Line -->
                    <div class="crfj0 cxc97 c7dem c94cd cyaoe cpgai cdwiy czvb2 cm457 crsho" aria-hidden="true"></div>

                    <!-- Grid -->
                    <div class="csj5a ctzz2 cwxnr cxauk crwjn ccp2j cblm1 c3wv7 cog19">

                        <!-- #1 -->
                        <div class="cz3g0">
                            <div class="ctjhd ckmsd cowvk cx8rc c48w7 cz9fi cy8ew cbesf ckn8d crmv9 cbuk0 c30rs codph">
                                1</div>
                            <h3 class="cmbv1 cbbk4 c30rs">Personalized Learning Paths</h3>
                            <div class="cof1o">Our tailored courses adapt to your learning pace and style.
                            </div>
                        </div>

                        <!-- #2 -->
                        <div class="cz3g0">
                            <div class="ctjhd ckmsd cowvk cx8rc c48w7 cz9fi cy8ew cbesf ckn8d crmv9 cbuk0 c30rs codph">
                                2</div>
                            <h3 class="cmbv1 cbbk4 c30rs">Expert-Led Sessions</h3>
                            <div class="cof1o">Learn from industry leaders and experienced professionals.
                            </div>
                        </div>

                        <!-- #3 -->
                        <div class="cz3g0">
                            <div class="ctjhd ckmsd cowvk cx8rc c48w7 cz9fi cy8ew cbesf ckn8d crmv9 cbuk0 c30rs codph">
                                3</div>
                            <h3 class="cmbv1 cbbk4 c30rs">Interactive Learning</h3>
                            <div class="cof1o">Engage with hands-on projects and real-world scenarios.
                            </div>
                        </div>

                        <!-- #4 -->
                        <div class="cz3g0">
                            <div class="ctjhd ckmsd cowvk cx8rc c48w7 cz9fi cy8ew cbesf ckn8d crmv9 cbuk0 c30rs codph">
                                4</div>
                            <h3 class="cmbv1 cbbk4 c30rs">Accessible Anywhere</h3>
                            <div class="cof1o">Our platform works seamlessly on all devices, ensuring you can learn
                                wherever you are.
                            </div>
                        </div>

                    </div>

                </div>

                <!-- CTA -->
                <div class="cz3g0">
                    <a class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8" href="{{ route('register') }}">
                        Register today
                        <span class="c2rlx ccwp8 cxc90 cw0we chqn7 cgshh cfgtz">
                            <svg class="cvd88" xmlns="http://www.w3.org/2000/svg" width="16" height="8">
                                <path
                                    d="m10.865.013.747.148c.243.065.481.143.716.235.495.18.97.42 1.415.716.265.192.571.343.858.55.096.064.192.135.288.209l.196.154.192.178c.09.08.175.168.254.262.189.21.33.466.414.747.076.275.073.568-.008.84-.09.27-.236.513-.427.708-.096.1-.198.191-.306.274l-.152.117-.116.074c-.369.252-.75.482-1.14.69-.577.315-1.153.585-1.701.932-.408.262-.803.549-1.182.86-.083.064-.16.136-.247.193a.918.918 0 0 1-.113.072.644.644 0 0 1-.118.016.708.708 0 0 1-.191.01.559.559 0 0 1-.246-.088l-.072-.054a1.481 1.481 0 0 1-.141-.107c-.128-.122-.1-.377.05-.726.036-.08.079-.156.128-.226l.316-.401c.164-.188.336-.372.514-.543.178-.17.356-.342.546-.493.19-.152.394-.265.59-.39.53-.329 1.05-.626 1.552-.93-.159.018-.32.034-.48.04-.511.036-1.026.044-1.546.048a43.432 43.432 0 0 1-2.31-.058l-.005-.02a78.728 78.728 0 0 0-2.292-.148c-.279-.016-.558.01-.837-.006L4.543 3.81l-.977-.046a19.357 19.357 0 0 1-.49-.029 12.6 12.6 0 0 0-1.303.013l-.828.055-.406.021H.335l-.18.008c-.145 0-.208-.15-.102-.356.16-.268.422-.46.723-.531.57-.117 1.144-.205 1.72-.264.287-.026.576-.048.865-.053.29-.004.578.01.865.042.69.065 1.408-.015 2.113-.015.776.003 1.549.02 2.324.04l1.428.039 1.087.039c.359.012.716.02 1.075.013.442-.008.879-.065 1.318-.112a3.672 3.672 0 0 0-.186-.166 9.045 9.045 0 0 0-1.06-.762 9.82 9.82 0 0 0-1.034-.537 5.9 5.9 0 0 1-1.284-.854c-.12-.115-.053-.199.12-.26a1.55 1.55 0 0 1 .738-.083Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Features #1 -->
    <section class="cku5t">

        <!-- Bg -->

        <div class="csj5a cmqkr crfvq c82m6">
            <div class="cm28u cnvm7">

                <!-- Section header -->
                <div class="cap4d cxfpf cpv3s">
                    <h2 class="cdlyt cmbv1 codph" style="color:black;">We Bring You High-Quality Learning Experiences</h2>
                </div>

                <!-- Grid -->
                <div class="csj5a ctzz2 cwxnr cxauk ccp2j cblm1 c3wv7 cog19">

                    <!-- #1 -->
                    <div class="cku5t cj8sk cz0eq c916p clx8g c6x4y chjvz cfk6x cehcr c7v21 cl2e3 c8puu cj24j coekp"
                        data-aos="fade-up">
                        <img class="ctjhd"
                            src="https://cdn4.iconfinder.com/data/icons/business-1221/24/Certificate-512.png"
                            width="40" height="40" alt="Icon 01">
                        <h3 class="cmbv1 cbbk4 c30rs codph" style="color:black;">Earn Certificates</h3>
                        <div class="codph co7su" style="color:black;">Complete courses and earn certificates to showcase
                            your achievements.</div>
                    </div>

                    <!-- #2 -->
                    <div class="cku5t cj8sk cz0eq c916p clx8g c6x4y chjvz cfk6x cehcr c7v21 cl2e3 c8puu cj24j coekp"
                        data-aos="fade-up" data-aos-delay="100">
                        <img class="ctjhd"
                            src="https://cdn0.iconfinder.com/data/icons/science-192/64/rocket-innovation-launch-start_up-creativity-transportation-idea-project-transport-256.png"
                            width="40" height="40" alt="Icon 02">
                        <h3 class="cmbv1 cbbk4 c30rs codph" style="color:black;">Real-World Projects</h3>
                        <div class="codph co7su" style="color:black;">Apply your knowledge through hands-on projects and
                            practical assignments.</div>
                    </div>

                    <!-- #3 -->
                    <div class="cku5t cj8sk cz0eq c916p clx8g c6x4y chjvz cfk6x cehcr c7v21 cl2e3 c8puu cj24j coekp"
                        data-aos="fade-up" data-aos-delay="200">
                        <img class="ctjhd"
                            src="https://cdn2.iconfinder.com/data/icons/entrepreneur-line-color-overweight-invest/512/Expert-512.png"
                            width="40" height="40" alt="Icon 03">
                        <h3 class="cmbv1 cbbk4 c30rs codph" style="color:black;">Expert Guidance</h3>
                        <div class="codph co7su" style="color:black;">Receive mentorship and guidance from industry
                            professionals.</div>
                    </div>

                    <!-- #4 -->
                    <div class="cku5t cj8sk cz0eq c916p clx8g c6x4y chjvz cfk6x cehcr c7v21 cl2e3 c8puu cj24j coekp"
                        data-aos="fade-up" data-aos-delay="300">
                        <img class="ctjhd" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/linkedin-512.png"
                            width="40" height="40" alt="Icon 04">
                        <h3 class="cmbv1 cbbk4 c30rs codph" style="color:black;">Career Advancement</h3>
                        <div class="codph co7su" style="color:black;">Gain skills that enhance your career prospects and
                            open up new opportunities.</div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cku5t ccok8">

        <!-- Bg -->
        <div class="c09n0 crfj0 cqh0z cyaoe c1j64" aria-hidden="true"></div>

        <!-- Illustration -->
        <div class="c09n0 crfj0 c6m1e cyaoe c94z9" aria-hidden="true">
            <img class="c9nx8" src="images/cta-illustration.svg" width="1440" height="242">
        </div>

        <div class="csj5a cmqkr crfvq c82m6">
            <div class="cm28u cnvm7">

                <div class="csj5a cap4d cz3g0">
                    <h2 class="cdlyt c9poj cmbv1 codph" data-aos="fade-up">Start your learning journey with Lalo Learn.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8" target="_blank" href="https://forms.gle/uvoxmNU4Lg2rokN79">
                            Haven't registered fill out the G-form
                            <span class="c2rlx ccwp8 cxc90 cw0we chqn7 cgshh cfgtz">
                                <svg class="cvd88" xmlns="http://www.w3.org/2000/svg" width="16" height="8">
                                    <path
                                        d="m10.865.013.747.148c.243.065.481.143.716.235.495.18.97.42 1.415.716.265.192.571.343.858.55.096.064.192.135.288.209l.196.154.192.178c.09.08.175.168.254.262.189.21.33.466.414.747.076.275.073.568-.008.84-.09.27-.236.513-.427.708-.096.1-.198.191-.306.274l-.152.117-.116.074c-.369.252-.75.482-1.14.69-.577.315-1.153.585-1.701.932-.408.262-.803.549-1.182.86-.083.064-.16.136-.247.193a.918.918 0 0 1-.113.072.644.644 0 0 1-.118.016.708.708 0 0 1-.191.01.559.559 0 0 1-.246-.088l-.072-.054a1.481 1.481 0 0 1-.141-.107c-.128-.122-.1-.377.05-.726.036-.08.079-.156.128-.226l.316-.401c.164-.188.336-.372.514-.543.178-.17.356-.342.546-.493.19-.152.394-.265.59-.39.53-.329 1.05-.626 1.552-.93-.159.018-.32.034-.48.04-.511.036-1.026.044-1.546.048a43.432 43.432 0 0 1-2.31-.058l-.005-.02a78.728 78.728 0 0 0-2.292-.148c-.279-.016-.558.01-.837-.006L4.543 3.81l-.977-.046a19.357 19.357 0 0 1-.49-.029 12.6 12.6 0 0 0-1.303.013l-.828.055-.406.021H.335l-.18.008c-.145 0-.208-.15-.102-.356.16-.268.422-.46.723-.531.57-.117 1.144-.205 1.72-.264.287-.026.576-.048.865-.053.29-.004.578.01.865.042.69.065 1.408-.015 2.113-.015.776.003 1.549.02 2.324.04l1.428.039 1.087.039c.359.012.716.02 1.075.013.442-.008.879-.065 1.318-.112a3.672 3.672 0 0 0-.186-.166 9.045 9.045 0 0 0-1.06-.762 9.82 9.82 0 0 0-1.034-.537 5.9 5.9 0 0 1-1.284-.854c-.12-.115-.053-.199.12-.26a1.55 1.55 0 0 1 .738-.083Z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
