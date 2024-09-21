<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">

<head>
    <title>
        Metronic - Tailwind CSS Error 500
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://keenthemes.com/metronic" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="antialiased flex h-full text-base text-gray-700 dark:bg-coal-500">
    <script>
        const defaultThemeMode = 'light';
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('theme')) {
                themeMode = localStorage.getItem('theme');
            } else if (document.documentElement.hasAttribute('data-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->
    <!-- Main -->
    <div class="flex items-center justify-center grow h-full">
        <div class="flex flex-col items-center">
            <div class="mb-16">
                <img alt="image" class="dark:hidden max-h-[160px]" src="{{ asset('images/icon.png') }}" />
                <img alt="image" class="light:hidden max-h-[160px]" src="{{ asset('images/icon.png') }}" />
            </div>
            <span class="badge badge-primary badge-outline mb-3">
                Under work
            </span>
            <h3 class="text-2.5xl font-semibold text-gray-900 text-center mb-2">
                This page will be avaliable soon
            </h3>
            <div class="text-md font-medium text-center text-gray-600 mb-10">
                Please try again later or
                <a class="text-primary font-medium hover:text-primary-active" href="https://t.me/lalo_dev">
                    Contact Us
                </a>
                for assistance.
            </div>
            <a class="btn btn-primary flex justify-center" href="/dashboard">
                Back to Home
            </a>
        </div>
    </div>
    <!-- End of Main -->
    <!-- End of Page -->
    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End of Scripts -->
</body>

</html>
