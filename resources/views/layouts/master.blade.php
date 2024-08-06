<!DOCTYPE html>
<html class="h-full dark" data-theme="true" data-theme-mode="light" lang="en">

<head>
    <title>
        Lalo Dev Learning Hub
    </title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body
    class="antialiased flex h-full text-base text-gray-700 bg-light dark:bg-coal-500 [--tw-header-height-default:100px] [[data-sticky-header=on]&amp;]:[--tw-header-height:60px] [--tw-header-height:--tw-header-height-default]">
    <div class="flex grow flex-col [[data-sticky-header=on]_&amp;]:pt-[--tw-header-height-default]">

        @include('layouts.header') 

        <!-- Toolbar -->
        <div class="mb-5 lg:mb-10">
            <!-- Container -->
            <div class="container-fixed flex items-center justify-between flex-wrap">
                @yield('breadcump')
            </div>
            <!-- End of Container -->
        </div>
        <!-- End of Toolbar -->
        <!-- Content -->
        <main class="grow" id="content" role="content">
            <!-- Container -->
            <div class="container-fixed" id="content_container">
            </div>
             @yield('content')
            <!-- End of Container -->
        </main>
        <!-- End of Content -->
        <!-- Footer -->
        <footer class="footer">
            <!-- Container -->
            <div class="container-fixed">
                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                    <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                        <span class="text-gray-500">
                            <script>document.write(new Date().getFullYear())</script> © 
                        </span>
                        <a class="text-gray-600 hover:text-primary" href="https://lalodev.com/">
                            LaloDev.
                        </a>
                    </div>
                    <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
                        <a class="hover:text-primary" target="_blank" href="https://www.linkedin.com/in/mikael-endale-7572722b3">
                            LinkedIn
                        </a>
                        <a class="hover:text-primary" target="_blank" href="https://t.me/lalo_dev_community">
                            Pricing
                        </a>
                        <a class="hover:text-primary" target="_blank" href="https://t.me/lalo_developer_1">
                            Support
                        </a>
                        <a class="hover:text-primary" target="_blank"
                            href="https://license.lalodev.com">
                            License
                        </a>
                    </nav>
                </div>
            </div>
            <!-- End of Container -->
        </footer>
        <!-- End of Footer -->
    </div> 
    <!-- End of Page -->
    <!-- Scripts -->
    <script src="assets/js/core.bundle.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/widgets/general.js"></script>
    <!-- End of Scripts -->
</body>

</html>
