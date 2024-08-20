@extends('layouts.master')
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Dashboard
        @endslot
        @slot('subtitle')
            Index
        @endslot
    @endcomponent
@endsection
@section('content')
    <style>
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(-360deg);
            }
        }

        .rotate {
            animation: rotate 5s linear infinite;
        }
    </style>
    <!-- Container -->
    <div class="container-fixed">
        @if (Auth::user()->status == 'pending')
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <style>
                        .upgrade-bg {
                            background-image: url('assets/media/images/2600x1200/bg-5.png');
                        }

                        .dark .upgrade-bg {
                            background-image: url('assets/media/images/2600x1200/bg-5-dark.png');
                        }
                    </style>
                    <div class="card rounded-xl">
                        <div
                            class="flex items-center justify-between grow gap-2 p-5 [background-position:121%_41%] bg-no-repeat bg-[length:660px_310px] upgrade-bg">
                            <div class="flex items-center gap-4">
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none"
                                        height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
                                                                                               18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
                                                                                               39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                            fill="">
                                        </path>
                                        <path
                                            d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
                                                                                               18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
                                                                                               39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                            stroke="">
                                        </path>
                                    </svg>
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <p class="text-xl text-brand" style="font-weight: 800">!
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex items-center gap-2.5">
                                        <a class="text-base font-semibold text-gray-900 hover:text-primary-active">
                                            You are on the wait list make sure you finished the payment
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <a href="https://t.me/lalo_dev" target="_blank" class="btn btn-sm btn-dark">
                                    Pay now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col items-start gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            Courses ?
                                        </h2>
                                        <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                            There are no courses here under your {{ Auth::user()->class_attended }} level,
                                            Due to the incomplete payment contact under to finish it .
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[150px]"
                                        src="https://cdn0.iconfinder.com/data/icons/affiliate-marketing-flat/64/course-online-training-video-tutorial-clip-module-256.png">
                                    <img alt="image" class="light:hidden max-h-[150px]"
                                        src="https://cdn0.iconfinder.com/data/icons/affiliate-marketing-flat/64/course-online-training-video-tutorial-clip-module-256.png">
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" target="_blank" href="https://t.me/lalo_dev">
                                    Contact Dev's
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col items-start gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            Scan the Qr to finish the payment
                                        </h2>
                                        <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                            Scan the telebirr Qr code to make the transaction and being accepted
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden rounded-lg max-h-[150px]"
                                        src="{{ asset('images/payment.jpg') }}">
                                    <img alt="image" class="light:hidden rounded-md max-h-[150px]"
                                        src="{{ asset('images/payment.jpg') }}">
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="#">
                                    Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user()->status == 'oncheck')
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
                <div class="col-span-2">
                    <style>
                        .upgrade-bg {
                            background-image: url('assets/media/images/2600x1200/bg-5.png');
                        }

                        .dark .upgrade-bg {
                            background-image: url('assets/media/images/2600x1200/bg-5-dark.png');
                        }
                    </style>
                    <div class="card rounded-xl">
                        <div
                            class="flex items-center justify-between grow gap-2 p-5 [background-position:121%_41%] bg-no-repeat bg-[length:660px_310px] upgrade-bg">
                            <div class="flex items-center gap-4">
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none"
                                        height="48" viewbox="0 0 44 48" width="44"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
                                                                                               18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
                                                                                               39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                            fill="">
                                        </path>
                                        <path
                                            d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
                                                                                               18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
                                                                                               39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                            stroke="">
                                        </path>
                                    </svg>
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <i class="ki-filled ki-abstract-45 text-xl text-brand">
                                        </i>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex items-center gap-2.5">
                                        <p class="text-base font-semibold text-gray-900 hover:text-primary-active">
                                            Your transaction is being checked and evaluated
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col items-start gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            Courses
                                        </h2>
                                        <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                            Devs are reviewing the recipt to confirm your {{ Auth::user()->class_attended }}
                                            level,
                                            Due to the incomplete payment contact under to finish it .
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[150px]"
                                        src="https://cdn0.iconfinder.com/data/icons/affiliate-marketing-flat/64/course-online-training-video-tutorial-clip-module-256.png">
                                    <img alt="image" class="light:hidden max-h-[150px]"
                                        src="https://cdn0.iconfinder.com/data/icons/affiliate-marketing-flat/64/course-online-training-video-tutorial-clip-module-256.png">
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" target="_blank" href="https://t.me/lalo_dev">
                                    Contact Dev's
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col items-start gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            We are confirming the payment
                                        </h2>
                                        <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                            Need assistance? Contact our support team for prompt, personalized help your
                                            queries
                                            &amp; concerns.
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[150px] rotate"
                                        src="{{ asset('images/roll.png') }}">
                                    <img alt="image" class="light:hidden max-h-[150px] rotate"
                                        src="{{ asset('images/roll.png') }}">

                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" target="_blank" href="https://t.me/lalo_developer_1">
                                    Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user()->status == 'approved')
            <div class="grid gap-5 lg:gap-7.5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">

                    <div class="col-span-2">
                        <style>
                            .upgrade-bg {
                                background-image: url('assets/media/images/2600x1200/bg-14.png');
                            }

                            .dark .upgrade-bg {
                                background-image: url('assets/media/images/2600x1200/bg-14-dark.png');
                            }
                        </style>
                        <div class="card rounded-xl">
                            <div
                                class="flex items-center justify-between grow gap-5 p-5 bg-[center_right_-8rem] bg-no-repeat bg-[length:700px] upgrade-bg">
                                <div class="flex items-center gap-4">
                                    <div class="relative size-[50px] shrink-0">
                                        <svg class="w-full h-full stroke-primary-clarity fill-primary-light"
                                            fill="none" height="48" viewBox="0 0 44 48" width="44"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
                                                       18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
                                                       39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                                fill="">
                                            </path>
                                            <path
                                                d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
                                                       18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
                                                       39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                                stroke="">
                                            </path>
                                        </svg>
                                        <div
                                            class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                            <i class="ki-filled ki-check text-1.5xl text-primary">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <a class="text-base font-semibold text-gray-900 hover:text-primary-active"
                                                href="#">
                                                Your accout is active
                                            </a>
                                            <span class="badge badge-sm badge-primary badge-outline">
                                                verified
                                            </span>
                                        </div>
                                        <div class="text-2sm font-medium text-gray-700">
                                            Now you can access the courses in your {{ Auth::user()->class_attended }}
                                            section
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- begin: grid -->
                <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">
                    <div class="lg:col-span-1">
                        <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">
                            <style>
                                .channel-stats-bg {
                                    background-image: url('assets/media/images/2600x1600/bg-3.png');
                                }

                                .dark .channel-stats-bg {
                                    background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
                                }
                            </style>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/book-64.png" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        9.3k
                                    </span>
                                    <span class="text-2sm font-medium text-gray-600">
                                        Courses avaliable
                                    </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/youtube-2.svg" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        24k
                                    </span>
                                    <span class="text-2sm font-medium text-gray-600">
                                        Lessons Views
                                    </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/instagram-03.svg" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        608
                                    </span>
                                    <span class="text-2sm font-medium text-gray-600">
                                        New subscribers
                                    </span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="dark:hidden w-7 mt-4 ms-5"
                                    src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/tiktok.svg" />
                                <img alt="" class="light:hidden w-7 mt-4 ms-5"
                                    src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/tiktok-dark.svg" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        2.5k
                                    </span>
                                    <span class="text-2sm font-medium text-gray-600">
                                        Stream audience
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <style>
                            .entry-callout-bg {
                                background-image: url('assets/media/images/2600x1600/2.png');
                            }

                            .dark .entry-callout-bg {
                                background-image: url('assets/media/images/2600x1600/2-dark.png');
                            }
                        </style>
                        <div class="card h-full h-full">
                            <div
                                class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">
                                <div class="flex flex-col justify-center gap-4">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10"
                                                src="assets/media/avatars/300-4.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10"
                                                src="assets/media/avatars/300-1.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10"
                                                src="assets/media/avatars/300-2.png" />
                                        </div>
                                        <div class="flex">
                                            <span
                                                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-10 text-success-inverse text-xs ring-success-light bg-success">
                                                S
                                            </span>
                                        </div>
                                    </div>
                                    <h2 class="text-1.5xl font-semibold text-gray-900">
                                        Connect Today &amp; Join
                                        <br />
                                        the
                                        <a class="link" href="#">
                                            KeenThemes Network
                                        </a>
                                    </h2>
                                    <p class="text-sm font-medium text-gray-700 leading-5.5">
                                        Enhance your projects with premium themes and
                                        <br />
                                        templates. Join the KeenThemes community today
                                        <br />
                                        for top-quality designs and resources.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="../account/home/get-started.html">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
                <!-- begin: grid -->
                <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                    <div class="lg:col-span-1">
                        <div class="card h-full">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Highlights
                                </h3>
                                <div class="menu" data-menu="true">
                                    <div class="menu-item" data-menu-item-offset="0, 10px"
                                        data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                        data-menu-item-trigger="click|lg:click">
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                        <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                            data-menu-dismiss="true">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../account/activity.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-cloud-change">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Activity
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" data-modal-toggle="#share_profile_modal"
                                                    href="#">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-share">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Share
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-item" data-menu-item-offset="-15px, 0"
                                                data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                                                data-menu-item-trigger="click|lg:hover">
                                                <div class="menu-link">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-notification-status">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Notifications
                                                    </span>
                                                    <span class="menu-arrow">
                                                        <i class="ki-filled ki-right text-3xs">
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="../account/home/settings-sidebar.html">
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-sms">
                                                                </i>
                                                            </span>
                                                            <span class="menu-title">
                                                                Email
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="../account/home/settings-sidebar.html">
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-message-notify">
                                                                </i>
                                                            </span>
                                                            <span class="menu-title">
                                                                SMS
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="../account/home/settings-sidebar.html">
                                                            <span class="menu-icon">
                                                                <i class="ki-filled ki-notification-status">
                                                                </i>
                                                            </span>
                                                            <span class="menu-title">
                                                                Push
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                    href="#">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-dislike">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Report
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="menu-separator">
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../account/home/settings-enterprise.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-setting-3">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Settings
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-sm font-medium text-gray-600">
                                        All time sales
                                    </span>
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-3xl font-semibold text-gray-900">
                                            $295.7k
                                        </span>
                                        <span class="badge badge-outline badge-success badge-sm">
                                            +2.7%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 mb-1.5">
                                    <div class="bg-success h-2 w-full max-w-[60%] rounded-sm">
                                    </div>
                                    <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm">
                                    </div>
                                    <div class="bg-info h-2 w-full max-w-[15%] rounded-sm">
                                    </div>
                                </div>
                                <div class="flex items-center flex-wrap gap-4 mb-1">
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot size-2 badge-success">
                                        </span>
                                        <span class="text-sm font-medium text-gray-700">
                                            Metronic
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot size-2 badge-danger">
                                        </span>
                                        <span class="text-sm font-medium text-gray-700">
                                            Bundle
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="badge badge-dot size-2 badge-info">
                                        </span>
                                        <span class="text-sm font-medium text-gray-700">
                                            MetronicNest
                                        </span>
                                    </div>
                                </div>
                                <div class="border-b border-gray-300">
                                </div>
                                <div class="grid gap-3">
                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-shop text-base text-gray-500">
                                            </i>
                                            <span class="text-sm font-medium text-gray-800">
                                                Online Store
                                            </span>
                                        </div>
                                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                            <span class="lg:text-right">
                                                $172k
                                            </span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-up text-success">
                                                </i>
                                                3.9%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-facebook text-base text-gray-500">
                                            </i>
                                            <span class="text-sm font-medium text-gray-800">
                                                Facebook
                                            </span>
                                        </div>
                                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                            <span class="lg:text-right">
                                                $85k
                                            </span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-down text-danger">
                                                </i>
                                                0.7%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                        <div class="flex items-center gap-1.5">
                                            <i class="ki-filled ki-instagram text-base text-gray-500">
                                            </i>
                                            <span class="text-sm font-medium text-gray-800">
                                                Instagram
                                            </span>
                                        </div>
                                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                            <span class="lg:text-right">
                                                $36k
                                            </span>
                                            <span class="lg:text-right">
                                                <i class="ki-filled ki-arrow-up text-success">
                                                </i>
                                                8.2%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="card h-full">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Earnings
                                </h3>
                                <div class="flex gap-5">
                                    <label class="switch switch-sm">
                                        <input class="order-2" name="check" type="checkbox" value="1" />
                                        <span class="switch-label order-1">
                                            Referrals only
                                        </span>
                                    </label>
                                    <select class="select select-sm w-28" name="select">
                                        <option value="1">
                                            1 month
                                        </option>
                                        <option value="2">
                                            3 month
                                        </option>
                                        <option value="3">
                                            6 month
                                        </option>
                                        <option selected="" value="4">
                                            12 month
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body flex flex-col justify-end items-stretch grow px-3 py-1">
                                <div id="earnings_chart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
                <!-- begin: grid -->
                <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                    <div class="lg:col-span-1">
                        <div class="card h-full">
                            <div class="card-body lg:p-7.5 lg:pt-6 p-5">
                                <div class="flex items-center justify-between flex-wrap gap-5 mb-7.5">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-1.5xl font-semibold text-gray-900">
                                            Team Meeting
                                        </span>
                                        <span class="text-sm font-semibold text-gray-800">
                                            09:00 - 09:30
                                        </span>
                                    </div>
                                    <img alt="" class="size-7"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/zoom.svg" />
                                </div>
                                <p class="text-sm font-normal text-gray-800 leading-5.5 mb-8">
                                    Team meeting to discuss strategies, outline
                                    <br />
                                    project milestones, define key goals, and
                                    <br />
                                    establish clear timelines.
                                </p>
                                <div class="flex rounded-lg bg-gray-100 gap-10 p-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex items-center gap-1.5 text-sm font-medium text-gray-800">
                                            <i class="ki-filled ki-geolocation text-base text-gray-500">
                                            </i>
                                            Location
                                        </div>
                                        <div class="text-sm font-semibold text-gray-800 pt-1.5">
                                            Amsterdam
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex items-center gap-1.5 text-sm font-medium text-gray-800">
                                            <i class="ki-filled ki-users text-base text-gray-500">
                                            </i>
                                            Team
                                        </div>
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-4.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-1.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-2.png" />
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse text-4xs ring-success-light bg-success">
                                                    +10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="#">
                                    Join Meeting
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid">
                            <div class="card card-grid h-full min-w-full">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Teams
                                    </h3>
                                    <div class="input input-sm max-w-48">
                                        <i class="ki-filled ki-magnifier">
                                        </i>
                                        <input placeholder="Search Teams" type="text" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div data-datatable="true" data-datatable-page-size="5">
                                        <div class="scrollable-x-auto">
                                            <table class="table table-border" data-datatable-table="true">
                                                <thead>
                                                    <tr>
                                                        <th class="w-[60px]">
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-check="true" type="checkbox" />
                                                        </th>
                                                        <th class="w-[280px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">
                                                                    Team
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                    Rating
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                    Last Modified
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[135px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                    Members
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="1" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Product Management
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Product development &amp; lifecycle
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            21 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-4.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-1.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-2.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                                        +10
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="2" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Marketing Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Campaigns &amp; market analysis
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50.0%">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            15 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-4.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] uppercase text-warning-inverse ring-warning-light bg-warning">
                                                                        g
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="3" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    HR Department
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Talent acquisition, employee welfare
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            10 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-4.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-1.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-2.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                                                                        +A
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="4" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Sales Division
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Customer relations, sales strategy
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            05 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-24.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-7.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="5" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Development Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Software development
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50.0%">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            01 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-3.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-8.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-9.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-danger-inverse ring-danger-light bg-danger">
                                                                        +5
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="6" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Quality Assurance
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Product testing
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-6.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-5.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="7" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Finance Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Financial planning
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            20 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-10.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-11.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-12.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                                                        +8
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="8" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Customer Support
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Customer service
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50.0%">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            15 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-13.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-14.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="9" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    R&amp;D Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Research &amp; development
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            10 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-15.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-16.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="10" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Operations Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Operations management
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            05 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-17.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-18.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-19.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="11" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    IT Support
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Technical support
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            01 Sep, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-20.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-21.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="12" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Legal Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Legal support
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25 Aug, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-22.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-23.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="13" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Logistics Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Supply chain
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label indeterminate">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                        style="width: 50.0%">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            20 Aug, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-24.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-25.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="14" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Procurement Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Supplier management
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            15 Aug, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-26.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-27.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-28.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                                                                        +3
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true" type="checkbox"
                                                                value="15" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                                                                    href="#">
                                                                    Training Team
                                                                </a>
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    Employee training
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                                <div class="rating-label">
                                                                    <i
                                                                        class="rating-on ki-solid ki-star text-base leading-none">
                                                                    </i>
                                                                    <i
                                                                        class="rating-off ki-outline ki-star text-base leading-none">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            10 Aug, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-29.png" />
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                        src="assets/media/avatars/300-30.png" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                            <div class="flex items-center gap-2 order-2 md:order-1">
                                                Show
                                                <select class="select select-sm w-16" data-datatable-size="true"
                                                    name="perpage">
                                                </select>
                                                per page
                                            </div>
                                            <div class="flex items-center gap-4 order-1 md:order-2">
                                                <span data-datatable-info="true">
                                                </span>
                                                <div class="pagination" data-datatable-pagination="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: grid -->
            </div>
        @endif
    </div>
@endsection
