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
                            <!-- Course Stats Cards -->
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/book-64.png" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        {{ $courseCount }}
                                    </span>
                                    <span class="text-2sm font-medium text-gray-600">Courses available for your class with many subsections
                                        </span>
                                </div>
                            </div>

                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://cdn3.iconfinder.com/data/icons/education-and-school-filled-outline-2/64/Education_FilledOutline21-64.png" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">{{ $enrolledCount }}</span>
                                    <span class="text-2sm font-medium text-gray-600">Enrolled courses</span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://cdn4.iconfinder.com/data/icons/education-8-2/66/395-64.png" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">{{ $totalStudents }}</span>
                                    <span class="text-2sm font-medium text-gray-600">Students</span>
                                </div>
                            </div>
                            <div
                                class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                <img alt="" class="w-7 mt-4 ms-5"
                                    src="https://cdn4.iconfinder.com/data/icons/education-759/2050/Education_flat-31-512.png" />
                                <div class="flex flex-col gap-1 pb-4 px-5">
                                    <span class="text-3xl font-semibold text-gray-900">{{ $availableCourses }}</span>
                                    <span class="text-2sm font-medium text-gray-600">Overall courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="card h-full">
                            <div
                                class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">
                                <div class="flex flex-col justify-center gap-4">
                                    <!-- Student Avatars -->
                                    <div class="flex -space-x-2">
                                        @foreach ($enrolledStudents as $student)
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10"
                                                    src="{{ asset('students_pic/' . ($student->profile_pic ?? 'default.png')) }}"
                                                    alt="{{ $student->name }}" />
                                            </div>
                                        @endforeach
                                        <!-- Additional Students Placeholder -->
                                        @if (count($enrolledStudents) > 3)
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-10 text-success-inverse text-xs ring-success-light bg-success">
                                                    +{{ count($enrolledStudents) - 3 }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <h2 class="text-1.5xl font-semibold text-gray-900">
                                        Join today &amp; connect
                                        <br />
                                        the
                                        <a class="link" href="https://t.me/lalo_dev_community" target="_blank">
                                            lalo dev Network
                                        </a>
                                    </h2>
                                    <p class="text-sm font-medium text-gray-700 leading-5.5">
                                        Enroll in the available courses within your subscription period.
                                        <br />
                                        Join the community and stay updated.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="/courses/level">
                                    View courses
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
                            <div class="card-body lg:p-7.5 lg:pt-6 p-5">
                                <div class="flex items-center justify-between flex-wrap gap-5 mb-7.5">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-1.5xl font-semibold text-gray-900">
                                            Meeting
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
                </div>
                <!-- end: grid -->
            </div>
        @endif
    </div>
@endsection
