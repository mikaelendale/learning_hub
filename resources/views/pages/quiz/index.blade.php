@extends('layouts.master')
@section('head')
    Quiz
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('title')
            Quiz
        @endslot
        @slot('subtitle')
            Index
            @slot('li_1')
                Quiz
            @endslot
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fixed">
        <!-- begin: grid -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
            <div class="col-span-1">
                <div class="grid gap-5 lg:gap-7.5">
                    <style>
                        .start-now-bg {
                            background-image: url('{{ asset('assets/media/images/2600x1200/bg-5.png') }}');
                        }

                        .dark .start-now-bg {
                            background-image: url('{{ asset('assets/media/images/2600x1200/bg-5-dark.png') }}');
                        }
                    </style>
                    <div
                        class="card flex-col gap-5 justify-between bg-[center_top_1.3rem] bg-no-repeat pt-5 lg:pt-10 px-5 start-now-bg bg-[length:700px]">
                        <div class="text-center">
                            <h3 class="text-gray-900 text-lg font-semibold leading-6 mb-1.5">
                                Start Quiz Now
                                <br>
                                Time alloted 12 min
                            </h3>
                            <span class="text-gray-700 text-sm font-medium block mb-5">
                                Discover promotions crafted to match your preferences.
                            </span>
                            <a class="btn btn-dark btn-sm" href="{{ route('quizzes.start', ['quizId' => $quiz->id]) }}">
                                Take Quiz
                            </a>
                        </div>
                        <div class="text-center">
                            <img alt="" class="dark:hidden max-h-[300px]" src="assets/media/images/2600x1200/3.png">
                            <img alt="" class="light:hidden max-h-[300px]"
                                src="assets/media/images/2600x1200/3-dark.png">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header gap-2">
                            <h3 class="card-title">
                                Badges
                            </h3>
                            <div class="btn btn-sm btn-icon btn-icon-lg text-gray-500 hover:text-primary-active">
                                <i class="ki-filled ki-information-2">
                                </i>
                            </div>
                        </div>
                        <div class="card-body pb-7.5">
                            <div class="grid gap-2.5">
                                <div
                                    class="flex items-center justify-between flex-wrap group border border-gray-200 rounded-xl gap-2 px-3.5 py-2.5">
                                    <div class="flex items-center flex-wrap gap-2.5">
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
                                                <i class="ki-filled ki-abstract-39 text-1.5xl ps-px text-primary">
                                                </i>
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-sm font-semibold">
                                            Expert Contributor Badge
                                        </span>
                                    </div>
                                    <div class="btn btn-sm btn-icon text-gray-300 group-hover:text-primary-active">
                                        <svg class="size-6" fill="none" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="14.5">
                                            </rect>
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="6.5">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between flex-wrap group border border-gray-200 rounded-xl gap-2 px-3.5 py-2.5">
                                    <div class="flex items-center flex-wrap gap-2.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none"
                                                height="48" viewBox="0 0 44 48" width="44"
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
                                                <i class="ki-filled ki-abstract-44 text-1.5xl ps-px text-brand">
                                                </i>
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-sm font-semibold">
                                            Innovation Trailblazer
                                        </span>
                                    </div>
                                    <div class="btn btn-sm btn-icon text-gray-300 group-hover:text-primary-active">
                                        <svg class="size-6" fill="none" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="14.5">
                                            </rect>
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="6.5">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between flex-wrap group border border-gray-200 rounded-xl gap-2 px-3.5 py-2.5">
                                    <div class="flex items-center flex-wrap gap-2.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-success-clarity fill-success-light"
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
                                                <i class="ki-filled ki-abstract-25 text-1.5xl ps-px text-success">
                                                </i>
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-sm font-semibold">
                                            Impact Recognition
                                        </span>
                                    </div>
                                    <div class="btn btn-sm btn-icon text-gray-300 group-hover:text-primary-active">
                                        <svg class="size-6" fill="none" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="14.5">
                                            </rect>
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="6.5">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between flex-wrap group border border-gray-200 rounded-xl gap-2 px-3.5 py-2.5">
                                    <div class="flex items-center flex-wrap gap-2.5">
                                        <div class="relative size-[50px] shrink-0">
                                            <svg class="w-full h-full stroke-info-clarity fill-info-light" fill="none"
                                                height="48" viewBox="0 0 44 48" width="44"
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
                                                <i class="ki-filled ki-delivery-24 text-1.5xl ps-px text-info">
                                                </i>
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-sm font-semibold">
                                            Performance Honor
                                        </span>
                                    </div>
                                    <div class="btn btn-sm btn-icon text-gray-300 group-hover:text-primary-active">
                                        <svg class="size-6" fill="none" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="14.5">
                                            </rect>
                                            <rect fill="currentColor" height="3" rx="1.5" width="18" x="3"
                                                y="6.5">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-body lg:py-7.5">
                            <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                                <div class="flex flex-wrap items-center gap-5 justify-between">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2.5">
                                            <h2 class="text-2xl font-semibold text-gray-900">
                                                Basic Plan
                                            </h2>
                                            <span class="badge badge-sm badge-success badge-outline">
                                                Monthly
                                            </span>
                                        </div>
                                        <p class="text-2sm font-medium text-gray-600">
                                            Essential Features for Startups and Individuals
                                        </p>
                                    </div>
                                    <div class="flex gap-2.5">
                                        <a class="btn btn-sm btn-light" href="#">
                                            Cancel Plan
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="#">
                                            Upgrade Plan
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-center flex-wrap gap-2 lg:gap-5">
                                    <div
                                        class="grid grid-cols-1 content-between gap-1.5 border border-dashed border-gray-400 shrink-0 rounded-md px-3.5 py-2 min-w-24 max-w-auto">
                                        <span class="text-gray-900 text-md leading-none font-semibold">
                                            $769.00
                                        </span>
                                        <span class="text-gray-600 text-2sm font-medium">
                                            Annual Total
                                        </span>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 content-between gap-1.5 border border-dashed border-gray-400 shrink-0 rounded-md px-3.5 py-2 min-w-24 max-w-auto">
                                        <span class="text-gray-900 text-md leading-none font-semibold">
                                            $69.00
                                        </span>
                                        <span class="text-gray-600 text-2sm font-medium">
                                            Next Bill Amount
                                        </span>
                                    </div> 
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <span class="text-2sm font-medium text-gray-600">
                                        Usage (32 of 40 users)
                                    </span>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                My Files
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="grid gap-2.5 lg:gap-5">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center grow gap-2.5">
                                        <img
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/pdf.svg">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                Project-pitch.pdf
                                            </span>
                                            <span class="text-xs font-normal text-gray-600">
                                                4.7 MB 26 Sep 2024 3:20 PM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="menu" data-menu="true">
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="0, 10px"
                                            data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="click|lg:click">
                                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                <i class="ki-filled ki-dots-vertical">
                                                </i>
                                            </button>
                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                data-menu-dismiss="true">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-document">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Details
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
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-file-up">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Export
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center grow gap-2.5">
                                        <img
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/doc.svg">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                Report-v1.docx
                                            </span>
                                            <span class="text-xs font-normal text-gray-600">
                                                2.3 MB 1 Oct 2024 12:00 PM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="menu" data-menu="true">
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="0, 10px"
                                            data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="click|lg:click">
                                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                <i class="ki-filled ki-dots-vertical">
                                                </i>
                                            </button>
                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                data-menu-dismiss="true">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-document">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Details
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
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-file-up">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Export
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center grow gap-2.5">
                                        <img
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/ai.svg">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                Framework-App.js
                                            </span>
                                            <span class="text-xs font-normal text-gray-600">
                                                0.8 MB 17 Oct 2024 6:46 PM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="menu" data-menu="true">
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="0, 10px"
                                            data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="click|lg:click">
                                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                <i class="ki-filled ki-dots-vertical">
                                                </i>
                                            </button>
                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                data-menu-dismiss="true">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-document">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Details
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
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-file-up">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Export
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center grow gap-2.5">
                                        <img
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/js.svg">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                Mobile-logo.ai
                                            </span>
                                            <span class="text-xs font-normal text-gray-600">
                                                0.2 MB 4 Nov 2024 11:30 AM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="menu" data-menu="true">
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="0, 10px"
                                            data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="click|lg:click">
                                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                <i class="ki-filled ki-dots-vertical">
                                                </i>
                                            </button>
                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                data-menu-dismiss="true">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-document">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Details
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
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-file-up">
                                                            </i>
                                                        </span>
                                                        <span class="menu-title">
                                                            Export
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="../integrations.html">
                                All Files
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: grid -->
    </div>
@endsection
