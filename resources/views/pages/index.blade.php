@extends('layouts.master')
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
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
                                        src="{{asset('images/roll.png')}}">
                                    <img alt="image" class="light:hidden max-h-[150px] rotate"
                                        src="{{asset('images/roll.png')}}">

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

    </div>
@endsection
