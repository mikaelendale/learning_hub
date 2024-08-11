@extends('layouts.master')
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Courses
        @endslot
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Index
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
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
                                <svg class="w-full h-full stroke-primary-clarity fill-primary-light" fill="none"
                                    height="48" viewBox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
                                    Now you can access the courses in your {{ Auth::user()->class_attended }} section
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                    <!-- begin: toolbar -->
                    <div class="flex flex-wrap items-center gap-5 justify-between">
                        <h3 class="text-lg text-gray-900 font-semibold">
                            All courses
                        </h3>
                        <div class="btn-tabs" data-tabs="true">
                            <a class="btn btn-icon active" data-tab-toggle="#projects_cards" href="#">
                                <i class="ki-filled ki-category">
                                </i>
                            </a>
                            <a class="btn btn-icon" data-tab-toggle="#projects_list" href="#">
                                <i class="ki-filled ki-row-horizontal">
                                </i>
                            </a>
                        </div>
                    </div>
                    <!-- end: toolbar -->
                    <!-- begin: cards -->
                    <div id="projects_cards">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                            @foreach ($courses as $course)
                                <div class="card p-7.5">
                                <div class="flex items-center justify-between mb-3 lg:mb-6">
                                    <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                        <img alt="" class=""
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/plurk.svg">
                                    </div>
                                    <span class="badge badge-primary badge-outline">
                                        {{$course->category}}
                                    </span>
                                </div>
                                <div class="flex flex-col mb-3 lg:mb-6">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        {{$course->name}}
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        {{$course->description}}
                                    </span>
                                </div>
                                <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
                                    <span class="text-sm font-medium text-gray-500">
                                        Duration:
                                        <span class="text-sm font-semibold text-gray-700">
                                            {{$course->duration}}
                                        </span>
                                    </span> 
                                </div> 
                                <div class="flex -space-x-2">
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                            src="assets/media/avatars/300-4.png">
                                    </div>
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                            src="assets/media/avatars/300-2.png">
                                    </div>
                                    <div class="flex">
                                        <span
                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                            S
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="flex grow justify-center pt-5 lg:pt-7.5">
                            <a class="btn btn-link" href="#">
                                Show more projects
                            </a>
                        </div>
                    </div>
                    <!-- end: cards -->
                    <!-- begin: list -->
                    <div class="hidden" id="projects_list">
                        <div class="flex flex-col gap-5 lg:gap-7.5">
                            <div class="card p-7">
                                <div class="flex items-center flex-wrap justify-between gap-5">
                                    <div class="flex items-center gap-3.5">
                                        <div
                                            class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                            <img alt="" class=""
                                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/plurk.svg">
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                href="#">
                                                Phoenix SaaS
                                            </a>
                                            <span class="text-sm font-medium text-gray-600">
                                                Real-time photo sharing app
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                        <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                            <span class="badge badge-primary badge-outline">
                                                In Progress
                                            </span>
                                            <div class="progress h-1.5 w-36 progress-primary">
                                                <div class="progress-bar" style="width: 55%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-5 lg:gap-14">
                                            <div class="flex justify-end w-24">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                            src="assets/media/avatars/300-4.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                            src="assets/media/avatars/300-2.png">
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                                            S
                                                        </span>
                                                    </div>
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
                                                    <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                                        data-menu-dismiss="true">
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="../../account/home/settings-enterprise.html">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-setting-3">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Settings
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="../../account/members/import-members.html">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-some-files">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Import
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="../../account/activity.html">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="flex grow justify-center pt-5 lg:pt-7.5">
                            <a class="btn btn-link" href="#">
                                Show more projects
                            </a>
                        </div>
                    </div>
                    <!-- end: list -->
                </div>
            </div>
        </div>
        <!-- end: activity -->
    </div>
@endsection
