<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ላሎ | Lalo Dev | @yield('title') </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/vendors/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
</head>

<body class="ceo57 ckkf5 c8fqr c2m9f cehui">

    <!-- Page wrapper -->
    <div class="chv0p c8px4 cbev8 ccok8">

        <!-- Site header -->
        <header class="crfj0 cym4j cocui">
            <div class="csj5a cmqkr crfvq c82m6">
                <div class="chv0p cldg6 c48w7 cpv01 cbes4">

                    <!-- Site branding -->
                    <div class="cahio checm">
                        <!-- Logo -->
                        <a class="clsb1 cscc8" href="/" aria-label="Cruip">
                            <img src="images/icon.png" width="30">
                        </a>
                    </div>

                    <!-- Desktop navigation -->
                    <nav class="chv0p c2yat">

                        <!-- Desktop sign in links -->
                        <ul class="chv0p c2yat cwqz6 c48w7 c7gp2">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}"class="cxgiq ckmsd c48w7 crmv9 codph cxokd cscc8">
                                        Dashboard
                                    </a>
                                @else
                                    <li class="crf6o">

                                        <a href="{{ route('login') }}"
                                            class="chv0p c48w7 cmbv1 cvwst c30rs codph ckng4 cdvkt" >Log
                                            in</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="crf6o">

                                            <a
                                                href="{{ route('register') }}"class="cz0ts ckmsd c48w7 crmv9 codph cxokd cscc8">
                                                Register
                                                <span class="c2rlx ccwp8 cxc90 cw0we chqn7 cgshh cfgtz">
                                                    <svg class="cvd88" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="8">
                                                        <path
                                                            d="m10.865.013.747.148c.243.065.481.143.716.235.495.18.97.42 1.415.716.265.192.571.343.858.55.096.064.192.135.288.209l.196.154.192.178c.09.08.175.168.254.262.189.21.33.466.414.747.076.275.073.568-.008.84-.09.27-.236.513-.427.708-.096.1-.198.191-.306.274l-.152.117-.116.074c-.369.252-.75.482-1.14.69-.577.315-1.153.585-1.701.932-.408.262-.803.549-1.182.86-.083.064-.16.136-.247.193a.918.918 0 0 1-.113.072.644.644 0 0 1-.118.016.708.708 0 0 1-.191.01.559.559 0 0 1-.246-.088l-.072-.054a1.481 1.481 0 0 1-.141-.107c-.128-.122-.1-.377.05-.726.036-.08.079-.156.128-.226l.316-.401c.164-.188.336-.372.514-.543.178-.17.356-.342.546-.493.19-.152.394-.265.59-.39.53-.329 1.05-.626 1.552-.93-.159.018-.32.034-.48.04-.511.036-1.026.044-1.546.048a43.432 43.432 0 0 1-2.31-.058l-.005-.02a78.728 78.728 0 0 0-2.292-.148c-.279-.016-.558.01-.837-.006L4.543 3.81l-.977-.046a19.357 19.357 0 0 1-.49-.029 12.6 12.6 0 0 0-1.303.013l-.828.055-.406.021H.335l-.18.008c-.145 0-.208-.15-.102-.356.16-.268.422-.46.723-.531.57-.117 1.144-.205 1.72-.264.287-.026.576-.048.865-.053.29-.004.578.01.865.042.69.065 1.408-.015 2.113-.015.776.003 1.549.02 2.324.04l1.428.039 1.087.039c.359.012.716.02 1.075.013.442-.008.879-.065 1.318-.112a3.672 3.672 0 0 0-.186-.166 9.045 9.045 0 0 0-1.06-.762 9.82 9.82 0 0 0-1.034-.537 5.9 5.9 0 0 1-1.284-.854c-.12-.115-.053-.199.12-.26a1.55 1.55 0 0 1 .738-.083Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>

                    </nav>

                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="c2yat">
            @yield('content')
        </main>

        <!-- Site footer -->
        <footer class="cku5t">

            <!-- Bg -->
            <div class="crfj0 cqh0z cyaoe c1j64" aria-hidden="true"></div>

            <!-- Illustration -->
            <div class="c09n0 crfj0 c6m1e cd4al cyaoe c94z9" aria-hidden="true">
                <img class="c9nx8" src="images/footer-illustration.svg" width="2336" height="421">
            </div>

            <div class="csj5a cmqkr crfvq c82m6"> 

                <!-- Bottom area -->
                <div class="cbn5x c4ulz c5v4f c01au cja50">

                    <!-- Social links -->
                    <ul class="cqjtt chv0p cs3aw c0dzn c2u6b">
                        <li>
                            <a class="chv0p c48w7 cz9fi cmgfc chten chqn7 cgshh cyx2z" href="#0"
                                aria-label="Twitter">
                                <svg class="clwal ca7bm cvd88" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="c2rlx">
                            <a class="chv0p c48w7 cz9fi cmgfc chten chqn7 cgshh cyx2z" href="#0"
                                aria-label="Github">
                                <svg class="clwal ca7bm cvd88" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="c2rlx">
                            <a class="chv0p c48w7 cz9fi cmgfc chten chqn7 cgshh cyx2z" href="#0"
                                aria-label="Telegram">
                                <svg class="clwal ca7bm cvd88" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.968 10.276a.338.338 0 0 0-.232-.253 1.192 1.192 0 0 0-.63.045s-14.019 5.038-14.82 5.596c-.172.121-.23.19-.259.272-.138.4.293.573.293.573l3.613 1.177a.388.388 0 0 0 .183-.011c.822-.519 8.27-5.222 8.7-5.38.068-.02.118 0 .1.049-.172.6-6.606 6.319-6.64 6.354a.138.138 0 0 0-.05.118l-.337 3.528s-.142 1.1.956 0a30.66 30.66 0 0 1 1.9-1.738c1.242.858 2.58 1.806 3.156 2.3a1 1 0 0 0 .732.283.825.825 0 0 0 .7-.622s2.561-10.275 2.646-11.658c.008-.135.021-.217.021-.317a1.177 1.177 0 0 0-.032-.316Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <!-- Copyrights -->
                    <div class="cvwst cmgfc">
                        © Cruip.com. All rights reserved.
                    </div>

                </div>

            </div>
        </footer>

    </div>

    <script src="js/vendors/alpinejs.min.js" defer=""></script>
    <script src="js/vendors/aos.js"></script>
    <script src="js/vendors/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script> 
</body>

</html>
