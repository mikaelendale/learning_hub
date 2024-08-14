<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ላሎ | Lalo Dev | Register </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/vendors/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
</head>

<body class="c2m9f ckkf5 c8fqr cehui ceo57">

    <main class="chv0p">

        <!-- Content -->
        <div class="c8px4 c1a6j cocui">

            <div class="ctnht">

                <div class="cv7v2 cishx c2aul cbev8 csj5a ctnht cocui chv0p cyukk">

                    <!-- Site header -->
                    <header class="colja ccnie chv0p">
                        <div class="cpv01 c48w7 cbes4 chv0p cldg6">
                            <!-- Logo -->
                            <a class="clsb1 cscc8" href="/" aria-label="Cruip">
                                <img src="images/icon.png" width="50">
                            </a>
                        </div>
                    </header>

                    <div class="ccnie clf0w">

                        <div class="c0enz">
                            <h1 class="cmbv1 cdlyt">Welcome back Digital Artisans!</h1>
                        </div>

                        <div class="cmbv1 c2m9f c30rs c1bsm cqjtt">Let's get started.</div>

                        <!-- Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="cuaoo">
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="company">Full Name <span
                                            class="co8du">*</span></label>
                                    <input id="name" class="cm1n1 cocui" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="name">Email <span
                                            class="co8du">*</span></label>
                                    <input id="email" class="cm1n1 cocui" type="email" type="email"
                                        name="email" :value="old('email')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="Password">Password <span
                                            class="co8du">*</span></label>
                                    <input id="password" class="cm1n1 cocui" type="password" name="password" required
                                        autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="Password">Confirm Password <span
                                            class="co8du">*</span></label>
                                    <input id="password_confirmation" class="cm1n1 cocui" type="password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="Password">Date of birth <span
                                            class="co8du">*</span></label>
                                    <input id="password_confirmation" class="cm1n1 cocui" type="date"
                                        name="dob" required autocomplete="date">
                                    <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="cpnvy cvwst clsb1 c5sy4" for="role">Which track are you enrolling <span class="co8du">*</span></label>
                                    <select id="role" name="class_attended" class="c4jp2 cocui" required="">
                                        <option value="beginners">Beginners</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cpv01 c48w7 ct75g c5xnd chv0p">
                                <span class="cof1o cvwst"><span class="czyea cdwiy">Already a Dev? </span><a
                                        class="c9y59 cj11i cpnvy" href="{{route('login')}}">Log In</a></span>
                                <button type="submit" class="cxokd c48w7 ckmsd crmv9 codph cscc8 cxgiq">
                                    Register
                                </button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- Right side -->
        <div class="ccok8 c1a6j crsho cd4al ck9jk cdwiy cqpw2 c7d50" aria-hidden="true">

            <!-- Bg -->
            <div class="c09n0 c1j64 crfj0 cqh0z cyaoe"></div>

            <!-- Illustration -->
            <div class="c09n0 cx803 c6m1e crfj0 cyaoe">
                <object type="image/svg+xml" data="images/hero-illustration.svg" width="1440" height="1214"></object>
            </div>

            <!-- Quotes -->
            <div class="cz9fi ctojb crfj0 cbev8 cqh0z chv0p">
                <div class="cx803 c7aei czfug csj5a chv0p">
                    <!-- Card -->
                    <div class="c0rl0 chqn7 cgshh ck1yd chten checm ceo57 cy1zp c5opj ci9n5">
                        <div class="c48w7 czfug chv0p">
                            <div class="checm">
                                <img class="cy8ew" src="https://cdn0.iconfinder.com/data/icons/long-shadow-web-icons/512/nodejs-512.png" width="44" height="44"
                                    alt="Testimonial 01">
                            </div>
                            <div>
                                <div class="cmbv1 c2m9f c30rs">Habtamu Mekonnen</div>
                                <div class="c7jmt cpnvy cvwst">MERN stack</div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="c0rl0 chqn7 cgshh cz2s2 chten checm ceo57 cy1zp c5opj ci9n5">
                        <div class="c48w7 czfug chv0p">
                            <div class="checm">
                                <img class="cy8ew" src="https://cdn0.iconfinder.com/data/icons/freebies-2/24/people-man-graduate-512.png" width="44" height="44"
                                    alt="Testimonial 01">
                            </div>
                            <div>
                                <div class="cmbv1 c2m9f c30rs">Daniel Abiy Sisay </div>
                                <div class="c7jmt cpnvy cvwst">Lalo Dev 1st batch</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c7aei czfug csj5a chv0p">
                    <!-- Card -->
                    <div class="c0rl0 chqn7 cgshh cz2s2 chten checm ceo57 cy1zp c5opj ci9n5">
                        <div class="c48w7 czfug chv0p">
                            <div class="checm">
                                <img class="cy8ew" src="https://cdn2.iconfinder.com/data/icons/avatars-2-7/128/20-512.png" width="44" height="44"
                                    alt="Testimonial 03">
                            </div>
                            <div>
                                <div class="cmbv1 c2m9f c30rs">Mikael Endale</div>
                                <div class="c7jmt cpnvy cvwst">Founder and CEO</div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="c0rl0 chqn7 cgshh c8z44 chten checm ceo57 cy1zp c5opj ci9n5">
                        <div class="c48w7 czfug chv0p">
                            <div class="checm">
                                <img class="cy8ew" src="https://cdn0.iconfinder.com/data/icons/freebies-2/24/people-man-graduate-512.png" width="44" height="44"
                                    alt="Testimonial 04">
                            </div>
                            <div>
                                <div class="cmbv1 c2m9f c30rs">Maedot Tadesse</div>
                                <div class="c7jmt cpnvy cvwst">Lalo Dev 1st batch</div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

        </div>

    </main>

    <script src="js/vendors/alpinejs.min.js" defer=""></script>
    <script src="js/vendors/aos.js"></script>
    <script src="js/vendors/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script> 
</body>

</html> 
