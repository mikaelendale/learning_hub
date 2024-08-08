@extends('layouts.master')
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Courses
        @endslot
        @slot('title')
            Details
        @endslot
        @slot('subtitle')
            {{ $course->name }}
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
        <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
            <!-- begin: toolbar -->
            <div class="flex flex-wrap items-center gap-5 justify-between">
                <h3 class="text-lg text-gray-900 font-semibold">
                    {{$course->name}}
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
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class=""
                                    src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/plurk.svg">
                            </div>
                            <span class="badge badge-primary badge-outline">
                                In Progress
                            </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                                Phoenix SaaS
                            </a>
                            <span class="text-sm font-medium text-gray-600">
                                Real-time photo sharing app
                            </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
                            <span class="text-sm font-medium text-gray-500">
                                Start:
                                <span class="text-sm font-semibold text-gray-700">
                                    Mar 06
                                </span>
                            </span>
                            <span class="text-sm font-medium text-gray-500">
                                End:
                                <span class="text-sm font-semibold text-gray-700">
                                    Dec 21
                                </span>
                            </span>
                        </div>
                        <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 55%">
                            </div>
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
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/telegram.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Radiant Wave
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Short-term accommodation marketplace
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-success badge-outline">
                                        Completed
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-success">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-24.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-7.png">
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/kickstarter.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Dreamweaver
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Social media photo sharing
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-outline">
                                        Upcoming
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-gray-300">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-21.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-1.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-2.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                    +10
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/quickbooks.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Horizon Quest
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Team communication and collaboration
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-primary badge-outline">
                                        In Progress
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-primary">
                                        <div class="progress-bar" style="width: 19%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-1.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-2.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-danger-inverse ring-danger-light bg-danger">
                                                    M
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/google-analytics.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Golden Gate Analytics
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Note-taking and organization app
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-outline">
                                        Upcoming
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-gray-300">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-5.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-17.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-16.png">
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/google-webdev.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Celestial SaaS
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        CRM App application to HR efficienty
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-success badge-outline">
                                        Completed
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-success">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-6.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-23.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-12.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                                    +10
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/figma.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Nexus Design System
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Online discussion and forum platform
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-outline">
                                        Upcoming
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-gray-300">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-14.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-3.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-19.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-9.png">
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/btcchina.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        Neptune App
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Team messaging and collaboration
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-primary badge-outline">
                                        In Progress
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-primary">
                                        <div class="progress-bar" style="width: 35%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-21.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-32.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-2.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                    +1
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/patientory.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        SparkleTech
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Meditation and relaxation app
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-outline">
                                        Upcoming
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-gray-300">
                                        <div class="progress-bar" style="width: 100%">
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
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                    K
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
                                                    <a class="menu-link" href="../../account/members/import-members.html">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/jira.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        EmberX CRM
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Commission-free stock trading
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-success badge-outline">
                                        Completed
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-success">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-12.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-20.png">
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-3.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                    +5
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/plastic-scm.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        LunaLink
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Meditation and relaxation app
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                    <span class="badge badge-outline">
                                        Upcoming
                                    </span>
                                    <div class="progress h-1.5 w-36 progress-gray-300">
                                        <div class="progress-bar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 lg:gap-14">
                                    <div class="flex justify-end w-24">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                    src="assets/media/avatars/300-16.png">
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
                    <div class="card p-7">
                        <div class="flex items-center flex-wrap justify-between gap-5">
                            <div class="flex items-center gap-3.5">
                                <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/perrier.svg">
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        TerraCrest App
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        Video conferencing software
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
                                                    src="assets/media/avatars/300-9.png">
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                                    F
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
        <!-- begin: grid -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
            <div class="col-span-1">
                <div class="grid gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Community Badges
                            </h3>
                        </div>
                        <div class="card-body pb-7.5">
                            <div class="flex items-center flex-wrap gap-3 lg:gap-4">
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-primary-clarity fill-primary-light" fill="none"
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
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <i class="ki-filled ki-abstract-39 text-1.5xl ps-px text-primary">
                                        </i>
                                    </div>
                                </div>
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
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <i class="ki-filled ki-abstract-44 text-1.5xl ps-px text-brand">
                                        </i>
                                    </div>
                                </div>
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-success-clarity fill-success-light" fill="none"
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
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <i class="ki-filled ki-abstract-25 text-1.5xl ps-px text-success">
                                        </i>
                                    </div>
                                </div>
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
                                    <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                        <i class="ki-filled ki-delivery-24 text-1.5xl ps-px text-info">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                About
                            </h3>
                        </div>
                        <div class="card-body pt-4 pb-3">
                            <table class="table-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            Age
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            32
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            City:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            Amsterdam
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            State:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            North Holland
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            Country:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            Netherlands
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            Postcode:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            1092 NL
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            Phone:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            +31 6 1234 56 78
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
                                            Email:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3.5">
                                            <a class="text-gray-800 hover:text-primary-active" href="#">
                                                jenny@ktstudio.com
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Work Experience
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="grid gap-y-5">
                                <div class="flex align-start gap-3.5">
                                    <img alt="" class="h-9"
                                        src="/static/metronic/tailwind/dist/assets/media/brand-logos/jira.svg">
                                    <div class="flex flex-col gap-1">
                                        <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active"
                                            href="#">
                                            Esprito Studios
                                        </a>
                                        <span class="text-sm font-medium text-gray-800">
                                            Senior Project Manager
                                        </span>
                                        <span class="text-xs font-medium text-gray-500 leading-none">
                                            2019 - Present
                                        </span>
                                    </div>
                                </div>
                                <div class="text-gray-600 font-semibold text-sm leading-none">
                                    Previous Jobs
                                </div>
                                <div class="flex align-start gap-3.5">
                                    <img alt="" class="h-9"
                                        src="/static/metronic/tailwind/dist/assets/media/brand-logos/paccion.svg">
                                    <div class="flex flex-col gap-1">
                                        <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active"
                                            href="#">
                                            Pesto Plus
                                        </a>
                                        <span class="text-sm font-medium text-gray-800">
                                            CRM Product Lead
                                        </span>
                                        <span class="text-xs font-medium text-gray-500 leading-none">
                                            2012 - 2019
                                        </span>
                                    </div>
                                </div>
                                <div class="flex align-start gap-3.5">
                                    <img alt="" class="h-9"
                                        src="/static/metronic/tailwind/dist/assets/media/brand-logos/perrier.svg">
                                    <div class="flex flex-col gap-1">
                                        <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active"
                                            href="#">
                                            Perrier Technologies
                                        </a>
                                        <span class="text-sm font-medium text-gray-800">
                                            UX Research
                                        </span>
                                        <span class="text-xs font-medium text-gray-500 leading-none">
                                            2010 - 2012
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="/metronic/tailwind/demo2/public-profile/works">
                                Open to Work
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Skills
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-2.5 mb-2">
                                <span class="badge badge-sm badge-gray-200">
                                    Web Design
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    Code Review
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    Figma
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    Product Development
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    Webflow
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    AI
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    noCode
                                </span>
                                <span class="badge badge-sm badge-gray-200">
                                    Management
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Recent Uploads
                            </h3>
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
                                            <a class="menu-link" href="/metronic/tailwind/demo2/account/activity">
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
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="-15px, 0"
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
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                            <a class="menu-link"
                                                href="/metronic/tailwind/demo2/account/home/settings-enterprise">
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
                        <div class="card-body">
                            <div class="grid gap-2.5 lg:gap-5">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="/static/metronic/tailwind/dist/assets/media/file-types/pdf.svg">
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
                                        <img src="/static/metronic/tailwind/dist/assets/media/file-types/doc.svg">
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
                                        <img src="/static/metronic/tailwind/dist/assets/media/file-types/ai.svg">
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
                                        <img src="/static/metronic/tailwind/dist/assets/media/file-types/js.svg">
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
                            <a class="btn btn-link" href="/metronic/tailwind/demo2/account/integrations">
                                All Files
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-body px-10 py-7.5 lg:pr-12.5">
                                <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                                    <div class="flex flex-col gap-3">
                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                            Unlock Creative
                                            <br>
                                            Partnerships on Our Blog
                                        </h2>
                                        <p class="text-sm text-gray-700 leading-5.5">
                                            Explore exciting collaboration opportunities with our blog.
                                            We're open to partnerships, guest posts, and more.
                                            Join us to share your insights and grow your audience.
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[160px]"
                                        src="/static/metronic/tailwind/dist/assets/media/illustrations/1.svg">
                                    <img alt="image" class="light:hidden max-h-[160px]"
                                        src="/static/metronic/tailwind/dist/assets/media/illustrations/1-dark.svg">
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="/metronic/tailwind/demo2/network/get-started">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Media Uploads
                                </h3>
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
                                                    href="/metronic/tailwind/demo2/account/home/settings-enterprise">
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
                                                    href="/metronic/tailwind/demo2/account/members/import-members">
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
                                                <a class="menu-link" href="/metronic/tailwind/demo2/account/activity">
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
                            <div class="px-3 py-1">
                                <div id="media_uploads_chart" style="min-height: 265px;">
                                    <div id="apexchartswhhlb22v"
                                        class="apexcharts-canvas apexchartswhhlb22v apexcharts-theme-"
                                        style="width: 777px; height: 250px;"><svg id="SvgjsSvg1460" width="777"
                                            height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)">
                                            <foreignObject x="0" y="0" width="777" height="250">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 125px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG1467" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1468" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <rect id="SvgjsRect1491" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1533" class="apexcharts-yaxis" rel="0"
                                                transform="translate(32.78750228881836, 0)">
                                                <g id="SvgjsG1534" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1536" font-family="Helvetica, Arial, sans-serif"
                                                        x="20" y="34" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1537">$100K</tspan>
                                                        <title>$100K</title>
                                                    </text><text id="SvgjsText1539"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="70.0812800617218" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1540">$80K</tspan>
                                                        <title>$80K</title>
                                                    </text><text id="SvgjsText1542"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="106.1625601234436" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1543">$60K</tspan>
                                                        <title>$60K</title>
                                                    </text><text id="SvgjsText1545"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="142.2438401851654" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1546">$40K</tspan>
                                                        <title>$40K</title>
                                                    </text><text id="SvgjsText1548"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="178.3251202468872" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1549">$20K</tspan>
                                                        <title>$20K</title>
                                                    </text><text id="SvgjsText1551"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="214.406400308609" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="var(--tw-gray-500)"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1552">$0K</tspan>
                                                        <title>$0K</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1462" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(62.78750228881836, 30)">
                                                <defs id="SvgjsDefs1461">
                                                    <clipPath id="gridRectMaskwhhlb22v">
                                                        <rect id="SvgjsRect1465" width="698.7843723297119"
                                                            height="187.40640030860902" x="-3.5" y="-3.5" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskwhhlb22v"></clipPath>
                                                    <clipPath id="nonForecastMaskwhhlb22v"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskwhhlb22v">
                                                        <rect id="SvgjsRect1466" width="695.7843723297119"
                                                            height="184.40640030860902" x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1473" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1474" stop-opacity="0.25"
                                                            stop-color="rgba(0,143,251,0.25)" offset="0"></stop>
                                                        <stop id="SvgjsStop1475" stop-opacity="0"
                                                            stop-color="rgba(128,199,253,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1476" stop-opacity="0"
                                                            stop-color="rgba(128,199,253,0)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="SvgjsG1479" class="apexcharts-grid">
                                                    <g id="SvgjsG1480" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1484" x1="0"
                                                            y1="36.081280061721806" x2="691.7843723297119"
                                                            y2="36.081280061721806" stroke="var(--tw-gray-200)"
                                                            stroke-dasharray="5" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1485" x1="0" y1="72.16256012344361"
                                                            x2="691.7843723297119" y2="72.16256012344361"
                                                            stroke="var(--tw-gray-200)" stroke-dasharray="5"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1486" x1="0"
                                                            y1="108.24384018516542" x2="691.7843723297119"
                                                            y2="108.24384018516542" stroke="var(--tw-gray-200)"
                                                            stroke-dasharray="5" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1487" x1="0"
                                                            y1="144.32512024688722" x2="691.7843723297119"
                                                            y2="144.32512024688722" stroke="var(--tw-gray-200)"
                                                            stroke-dasharray="5" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1481" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1490" x1="0" y1="180.40640030860902"
                                                        x2="691.7843723297119" y2="180.40640030860902"
                                                        stroke="transparent" stroke-dasharray="0"
                                                        stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1489" x1="0" y1="1"
                                                        x2="0" y2="180.40640030860902" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1482" class="apexcharts-grid-borders">
                                                    <line id="SvgjsLine1483" x1="0" y1="0"
                                                        x2="691.7843723297119" y2="0"
                                                        stroke="var(--tw-gray-200)" stroke-dasharray="5"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1488" x1="0" y1="180.40640030860902"
                                                        x2="691.7843723297119" y2="180.40640030860902"
                                                        stroke="var(--tw-gray-200)" stroke-dasharray="5"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1469"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1470" class="apexcharts-series" zIndex="0"
                                                        seriesName="series1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1477"
                                                            d="M 0 27.06096004629137C 22.01132093776356 27.06096004629137 40.87816745584662 63.14224010801317 62.88948839361018 63.14224010801317C 84.90080933137374 63.14224010801317 103.7676558494568 90.20320015430451 125.77897678722036 90.20320015430451C 147.79029772498393 90.20320015430451 166.65714424306697 54.12192009258271 188.66846518083054 54.12192009258271C 210.6797861185941 54.12192009258271 229.54663263667715 108.24384018516542 251.55795357444072 108.24384018516542C 273.5692745122043 108.24384018516542 292.4361210302873 99.22352016973497 314.4474419680509 99.22352016973497C 336.45876290581447 99.22352016973497 355.3256094238975 0 377.3369303616611 0C 399.34825129942465 0 418.2150978175077 81.18288013887407 440.22641875527125 81.18288013887407C 462.2377396930348 81.18288013887407 481.10458621111786 27.06096004629137 503.11590714888143 27.06096004629137C 525.127228086645 27.06096004629137 543.994074604728 72.16256012344361 566.0053955424916 72.16256012344361C 588.0167164802551 72.16256012344361 606.8835629983382 54.12192009258271 628.8948839361018 54.12192009258271C 650.9062048738654 54.12192009258271 669.7730513919483 18.040640030860914 691.7843723297119 18.040640030860914C 691.7843723297119 18.040640030860914 691.7843723297119 18.040640030860914 691.7843723297119 180.40640030860902 L 0 180.40640030860902z"
                                                            fill="url(#SvgjsLinearGradient1473)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskwhhlb22v)"
                                                            pathTo="M 0 27.06096004629137C 22.01132093776356 27.06096004629137 40.87816745584662 63.14224010801317 62.88948839361018 63.14224010801317C 84.90080933137374 63.14224010801317 103.7676558494568 90.20320015430451 125.77897678722036 90.20320015430451C 147.79029772498393 90.20320015430451 166.65714424306697 54.12192009258271 188.66846518083054 54.12192009258271C 210.6797861185941 54.12192009258271 229.54663263667715 108.24384018516542 251.55795357444072 108.24384018516542C 273.5692745122043 108.24384018516542 292.4361210302873 99.22352016973497 314.4474419680509 99.22352016973497C 336.45876290581447 99.22352016973497 355.3256094238975 0 377.3369303616611 0C 399.34825129942465 0 418.2150978175077 81.18288013887407 440.22641875527125 81.18288013887407C 462.2377396930348 81.18288013887407 481.10458621111786 27.06096004629137 503.11590714888143 27.06096004629137C 525.127228086645 27.06096004629137 543.994074604728 72.16256012344361 566.0053955424916 72.16256012344361C 588.0167164802551 72.16256012344361 606.8835629983382 54.12192009258271 628.8948839361018 54.12192009258271C 650.9062048738654 54.12192009258271 669.7730513919483 18.040640030860914 691.7843723297119 18.040640030860914C 691.7843723297119 18.040640030860914 691.7843723297119 18.040640030860914 691.7843723297119 180.40640030860902 L 0 180.40640030860902z"
                                                            pathFrom="M 0 180.40640030860902 L 0 180.40640030860902 L 62.88948839361018 180.40640030860902 L 125.77897678722036 180.40640030860902 L 188.66846518083054 180.40640030860902 L 251.55795357444072 180.40640030860902 L 314.4474419680509 180.40640030860902 L 377.3369303616611 180.40640030860902 L 440.22641875527125 180.40640030860902 L 503.11590714888143 180.40640030860902 L 566.0053955424916 180.40640030860902 L 628.8948839361018 180.40640030860902 L 691.7843723297119 180.40640030860902z">
                                                        </path>
                                                        <path id="SvgjsPath1478"
                                                            d="M 0 27.06096004629137C 22.01132093776356 27.06096004629137 40.87816745584662 63.14224010801317 62.88948839361018 63.14224010801317C 84.90080933137374 63.14224010801317 103.7676558494568 90.20320015430451 125.77897678722036 90.20320015430451C 147.79029772498393 90.20320015430451 166.65714424306697 54.12192009258271 188.66846518083054 54.12192009258271C 210.6797861185941 54.12192009258271 229.54663263667715 108.24384018516542 251.55795357444072 108.24384018516542C 273.5692745122043 108.24384018516542 292.4361210302873 99.22352016973497 314.4474419680509 99.22352016973497C 336.45876290581447 99.22352016973497 355.3256094238975 0 377.3369303616611 0C 399.34825129942465 0 418.2150978175077 81.18288013887407 440.22641875527125 81.18288013887407C 462.2377396930348 81.18288013887407 481.10458621111786 27.06096004629137 503.11590714888143 27.06096004629137C 525.127228086645 27.06096004629137 543.994074604728 72.16256012344361 566.0053955424916 72.16256012344361C 588.0167164802551 72.16256012344361 606.8835629983382 54.12192009258271 628.8948839361018 54.12192009258271C 650.9062048738654 54.12192009258271 669.7730513919483 18.040640030860914 691.7843723297119 18.040640030860914"
                                                            fill="none" fill-opacity="1" stroke="var(--tw-primary)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskwhhlb22v)"
                                                            pathTo="M 0 27.06096004629137C 22.01132093776356 27.06096004629137 40.87816745584662 63.14224010801317 62.88948839361018 63.14224010801317C 84.90080933137374 63.14224010801317 103.7676558494568 90.20320015430451 125.77897678722036 90.20320015430451C 147.79029772498393 90.20320015430451 166.65714424306697 54.12192009258271 188.66846518083054 54.12192009258271C 210.6797861185941 54.12192009258271 229.54663263667715 108.24384018516542 251.55795357444072 108.24384018516542C 273.5692745122043 108.24384018516542 292.4361210302873 99.22352016973497 314.4474419680509 99.22352016973497C 336.45876290581447 99.22352016973497 355.3256094238975 0 377.3369303616611 0C 399.34825129942465 0 418.2150978175077 81.18288013887407 440.22641875527125 81.18288013887407C 462.2377396930348 81.18288013887407 481.10458621111786 27.06096004629137 503.11590714888143 27.06096004629137C 525.127228086645 27.06096004629137 543.994074604728 72.16256012344361 566.0053955424916 72.16256012344361C 588.0167164802551 72.16256012344361 606.8835629983382 54.12192009258271 628.8948839361018 54.12192009258271C 650.9062048738654 54.12192009258271 669.7730513919483 18.040640030860914 691.7843723297119 18.040640030860914"
                                                            pathFrom="M 0 180.40640030860902 L 0 180.40640030860902 L 62.88948839361018 180.40640030860902 L 125.77897678722036 180.40640030860902 L 188.66846518083054 180.40640030860902 L 251.55795357444072 180.40640030860902 L 314.4474419680509 180.40640030860902 L 377.3369303616611 180.40640030860902 L 440.22641875527125 180.40640030860902 L 503.11590714888143 180.40640030860902 L 566.0053955424916 180.40640030860902 L 628.8948839361018 180.40640030860902 L 691.7843723297119 180.40640030860902"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1471"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1556" d="M 0, 0
                   m -0, 0
                   a 0,0 0 1,0 0,0
                   a 0,0 0 1,0 -0,0" fill="var(--tw-primary-light)" fill-opacity="1" stroke="var(--tw-primary)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="4" stroke-dasharray="0"
                                                                    cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-marker w79qd8lbh no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1472" class="apexcharts-datalabels"
                                                        data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1492" x1="0" y1="0"
                                                    x2="0" y2="180.40640030860902" stroke="var(--tw-primary)"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                    height="180.40640030860902" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <line id="SvgjsLine1493" x1="0" y1="0"
                                                    x2="691.7843723297119" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1494" x1="0" y1="0"
                                                    x2="691.7843723297119" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1495" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1496" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1498"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="208.40640030860902" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1499">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1501"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="62.889488393610165" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1502">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1504"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="125.77897678722033" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1505">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1507"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="188.6684651808305" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1508">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1510"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="251.5579535744407" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1511">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1513"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="314.4474419680509" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1514">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1516"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="377.3369303616611" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1517">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1519"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="440.22641875527125" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1520">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText1522"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="503.1159071488814" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1523">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text><text id="SvgjsText1525"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="566.0053955424914" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1526">Oct</tspan>
                                                            <title>Oct</title>
                                                        </text><text id="SvgjsText1528"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="628.8948839361016" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1529">Nov</tspan>
                                                            <title>Nov</title>
                                                        </text><text id="SvgjsText1531"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="691.7843723297117" y="208.40640030860902"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400"
                                                            fill="var(--tw-gray-500)"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1532">Dec</tspan>
                                                            <title>Dec</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1553" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1554" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1555" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1557" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1558" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(0, 143, 251);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
                        <div class="card">
                            <div class="card-header gap-2">
                                <h3 class="card-title">
                                    Contributors
                                </h3>
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
                                                <a class="menu-link" href="/metronic/tailwind/demo2/account/activity">
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
                                            <div class="menu-item menu-item-dropdown" data-menu-item-offset="-15px, 0"
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
                                                        <a class="menu-link"
                                                            href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                                        <a class="menu-link"
                                                            href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                                        <a class="menu-link"
                                                            href="/metronic/tailwind/demo2/account/home/settings-sidebar">
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
                                                <a class="menu-link"
                                                    href="/metronic/tailwind/demo2/account/home/settings-enterprise">
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
                            <div class="card-body">
                                <div class="flex flex-col gap-2 lg:gap-5">
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="/static/metronic/tailwind/dist/assets/media/avatars/300-3.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                    href="#">
                                                    Tyler Hero
                                                </a>
                                                <span class="text-xs font-semibold text-gray-600">
                                                    6 contributors
                                                </span>
                                            </div>
                                        </div>
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                    href="#">
                                                    Esther Howard
                                                </a>
                                                <span class="text-xs font-semibold text-gray-600">
                                                    29 contributors
                                                </span>
                                            </div>
                                        </div>
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="/static/metronic/tailwind/dist/assets/media/avatars/300-14.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                    href="#">
                                                    Cody Fisher
                                                </a>
                                                <span class="text-xs font-semibold text-gray-600">
                                                    34 contributors
                                                </span>
                                            </div>
                                        </div>
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="/static/metronic/tailwind/dist/assets/media/avatars/300-7.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                    href="#">
                                                    Arlene McCoy
                                                </a>
                                                <span class="text-xs font-semibold text-gray-600">
                                                    1 contributors
                                                </span>
                                            </div>
                                        </div>
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="/metronic/tailwind/demo2/public-profile/network">
                                    All Contributors
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Assistance
                                </h3>
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
                                                    href="/metronic/tailwind/demo2/account/home/settings-enterprise">
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
                                                    href="/metronic/tailwind/demo2/account/members/import-members">
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
                                                <a class="menu-link" href="/metronic/tailwind/demo2/account/activity">
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
                            <div class="card-body flex justify-center items-center px-3 py-1">
                                <div id="contributions_chart" style="min-height: 172.7px;">
                                    <div id="apexchartssfn6vmqy"
                                        class="apexcharts-canvas apexchartssfn6vmqy apexcharts-theme-"
                                        style="width: 300px; height: 172.7px;"><svg id="SvgjsSvg1559" width="300"
                                            height="172.70000000000002" xmlns="http://www.w3.org/2000/svg"
                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                            <foreignObject x="0" y="0" width="300" height="172.70000000000002">
                                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-right"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="position: absolute; left: auto; top: 15px; right: 15px;">
                                                    <div class="apexcharts-legend-series" rel="1"
                                                        seriesname="ERP" data:collapsed="false"
                                                        style="margin: 4px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="1" data:collapsed="false"
                                                            style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                id="SvgjsSvg1562" width="100%" height="100%"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev">
                                                                <defs id="SvgjsDefs1563">
                                                                    <clipPath id="gridRectMasksfn6vmqy">
                                                                        <rect id="SvgjsRect1577" width="176"
                                                                            height="198" x="-3" y="-3" rx="0"
                                                                            ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMasksfn6vmqy"></clipPath>
                                                                    <clipPath id="nonForecastMasksfn6vmqy"></clipPath>
                                                                    <clipPath id="gridRectMarkerMasksfn6vmqy">
                                                                        <rect id="SvgjsRect1578" width="174"
                                                                            height="196" x="-2" y="-2" rx="0"
                                                                            ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <path id="SvgjsPath1564" d="M 0, 0
                   m -7, 0
                   a 7,7 0 1,0 14,0
                   a 7,7 0 1,0 -14,0" fill="var(--tw-primary)" fill-opacity="1" stroke="#ffffff"
                                                                    stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="1" stroke-dasharray="0"
                                                                    cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                    style="transform: translate(50%, 50%);"></path>
                                                            </svg></span><span class="apexcharts-legend-text"
                                                            rel="1" i="0" data:default-text="ERP"
                                                            data:collapsed="false"
                                                            style="color: var(--tw-gray-700); font-size: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">ERP</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2"
                                                        seriesname="HRM" data:collapsed="false"
                                                        style="margin: 4px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="2" data:collapsed="false"
                                                            style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                id="SvgjsSvg1565" width="100%" height="100%"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev">
                                                                <defs id="SvgjsDefs1566"></defs>
                                                                <path id="SvgjsPath1567" d="M 0, 0
                   m -7, 0
                   a 7,7 0 1,0 14,0
                   a 7,7 0 1,0 -14,0" fill="var(--tw-brand)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                    stroke-linecap="butt" stroke-width="1"
                                                                    stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                    style="transform: translate(50%, 50%);"></path>
                                                            </svg></span><span class="apexcharts-legend-text"
                                                            rel="2" i="1" data:default-text="HRM"
                                                            data:collapsed="false"
                                                            style="color: var(--tw-gray-700); font-size: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">HRM</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="3"
                                                        seriesname="DMS" data:collapsed="false"
                                                        style="margin: 4px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="3" data:collapsed="false"
                                                            style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                id="SvgjsSvg1568" width="100%" height="100%"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev">
                                                                <defs id="SvgjsDefs1569"></defs>
                                                                <path id="SvgjsPath1570" d="M 0, 0
                   m -7, 0
                   a 7,7 0 1,0 14,0
                   a 7,7 0 1,0 -14,0" fill="var(--tw-success)" fill-opacity="1" stroke="#ffffff"
                                                                    stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="1" stroke-dasharray="0"
                                                                    cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                    style="transform: translate(50%, 50%);"></path>
                                                            </svg></span><span class="apexcharts-legend-text"
                                                            rel="3" i="2" data:default-text="DMS"
                                                            data:collapsed="false"
                                                            style="color: var(--tw-gray-700); font-size: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">DMS</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="4"
                                                        seriesname="CRM" data:collapsed="false"
                                                        style="margin: 4px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="4" data:collapsed="false"
                                                            style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                id="SvgjsSvg1571" width="100%" height="100%"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev">
                                                                <defs id="SvgjsDefs1572"></defs>
                                                                <path id="SvgjsPath1573" d="M 0, 0
                   m -7, 0
                   a 7,7 0 1,0 14,0
                   a 7,7 0 1,0 -14,0" fill="var(--tw-info)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                    stroke-linecap="butt" stroke-width="1"
                                                                    stroke-dasharray="0" cx="0" cy="0"
                                                                    shape="circle"
                                                                    class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                    style="transform: translate(50%, 50%);"></path>
                                                            </svg></span><span class="apexcharts-legend-text"
                                                            rel="4" i="3" data:default-text="CRM"
                                                            data:collapsed="false"
                                                            style="color: var(--tw-gray-700); font-size: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">CRM</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="5"
                                                        seriesname="DAM" data:collapsed="false"
                                                        style="margin: 4px 5px;"><span class="apexcharts-legend-marker"
                                                            rel="5" data:collapsed="false"
                                                            style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                id="SvgjsSvg1574" width="100%" height="100%"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev">
                                                                <defs id="SvgjsDefs1575"></defs>
                                                                <path id="SvgjsPath1576" d="M 0, 0
                   m -7, 0
                   a 7,7 0 1,0 14,0
                   a 7,7 0 1,0 -14,0" fill="var(--tw-warning)" fill-opacity="1" stroke="#ffffff"
                                                                    stroke-opacity="0.9" stroke-linecap="butt"
                                                                    stroke-width="1" stroke-dasharray="0"
                                                                    cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                    style="transform: translate(50%, 50%);"></path>
                                                            </svg></span><span class="apexcharts-legend-text"
                                                            rel="5" i="4" data:default-text="DAM"
                                                            data:collapsed="false"
                                                            style="color: var(--tw-gray-700); font-size: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">DAM</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom,
                                                    .apexcharts-legend.apx-legend-position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *,
                                                    .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        cursor: pointer;
                                                        margin-right: 1px;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }
                                                </style>
                                            </foreignObject>
                                            <g id="SvgjsG1561" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 0)">
                                                <defs id="SvgjsDefs1560"></defs>
                                                <g id="SvgjsG1581" class="apexcharts-pie">
                                                    <g id="SvgjsG1582" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1583" r="50.00243902439025"
                                                            cx="85" cy="85" fill="transparent"></circle>
                                                        <g id="SvgjsG1584" class="apexcharts-slices">
                                                            <g id="SvgjsG1585"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="ERP" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1586"
                                                                    d="M 85 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 161.87550740877404 87.80952343228915 L 134.9690798157031 86.82619023098795 A 50.00243902439025 50.00243902439025 0 0 0 85 34.99756097560975 L 85 8.073170731707307 z "
                                                                    fill="var(--tw-primary)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="92.09302325581395"
                                                                    data:startAngle="0" data:strokeWidth="2"
                                                                    data:value="44"
                                                                    data:pathOrig="M 85 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 161.87550740877404 87.80952343228915 L 134.9690798157031 86.82619023098795 A 50.00243902439025 50.00243902439025 0 0 0 85 34.99756097560975 L 85 8.073170731707307 z "
                                                                    stroke="var(--tw-light)"></path>
                                                            </g>
                                                            <g id="SvgjsG1587"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="HRM" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1588"
                                                                    d="M 161.87550740877404 87.80952343228915 A 76.92682926829269 76.92682926829269 0 0 1 49.82579786090658 153.41427164818208 L 62.13676860958928 129.46927657131835 A 50.00243902439025 50.00243902439025 0 0 0 134.9690798157031 86.82619023098795 L 161.87550740877404 87.80952343228915 z "
                                                                    fill="var(--tw-brand)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="115.11627906976746"
                                                                    data:startAngle="92.09302325581395"
                                                                    data:strokeWidth="2" data:value="55"
                                                                    data:pathOrig="M 161.87550740877404 87.80952343228915 A 76.92682926829269 76.92682926829269 0 0 1 49.82579786090658 153.41427164818208 L 62.13676860958928 129.46927657131835 A 50.00243902439025 50.00243902439025 0 0 0 134.9690798157031 86.82619023098795 L 161.87550740877404 87.80952343228915 z "
                                                                    stroke="var(--tw-light)"></path>
                                                            </g>
                                                            <g id="SvgjsG1589"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="DMS" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath1590"
                                                                    d="M 49.82579786090658 153.41427164818208 A 76.92682926829269 76.92682926829269 0 0 1 14.200686268850504 54.91355394083043 L 38.980446074752834 65.44381006153978 A 50.00243902439025 50.00243902439025 0 0 0 62.13676860958928 129.46927657131835 L 49.82579786090658 153.41427164818208 z "
                                                                    fill="var(--tw-success)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                    index="0" j="2" data:angle="85.81395348837208"
                                                                    data:startAngle="207.2093023255814"
                                                                    data:strokeWidth="2" data:value="41"
                                                                    data:pathOrig="M 49.82579786090658 153.41427164818208 A 76.92682926829269 76.92682926829269 0 0 1 14.200686268850504 54.91355394083043 L 38.980446074752834 65.44381006153978 A 50.00243902439025 50.00243902439025 0 0 0 62.13676860958928 129.46927657131835 L 49.82579786090658 153.41427164818208 z "
                                                                    stroke="var(--tw-light)"></path>
                                                            </g>
                                                            <g id="SvgjsG1591"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="CRM" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath1592"
                                                                    d="M 14.200686268850504 54.91355394083043 A 76.92682926829269 76.92682926829269 0 0 1 44.92571136831868 19.335790175029516 L 58.95171238940715 42.31826361376918 A 50.00243902439025 50.00243902439025 0 0 0 38.980446074752834 65.44381006153978 L 14.200686268850504 54.91355394083043 z "
                                                                    fill="var(--tw-info)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                    index="0" j="3" data:angle="35.58139534883719"
                                                                    data:startAngle="293.0232558139535"
                                                                    data:strokeWidth="2" data:value="17"
                                                                    data:pathOrig="M 14.200686268850504 54.91355394083043 A 76.92682926829269 76.92682926829269 0 0 1 44.92571136831868 19.335790175029516 L 58.95171238940715 42.31826361376918 A 50.00243902439025 50.00243902439025 0 0 0 38.980446074752834 65.44381006153978 L 14.200686268850504 54.91355394083043 z "
                                                                    stroke="var(--tw-light)"></path>
                                                            </g>
                                                            <g id="SvgjsG1593"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="DAM" rel="5" data:realIndex="4">
                                                                <path id="SvgjsPath1594"
                                                                    d="M 44.92571136831868 19.335790175029516 A 76.92682926829269 76.92682926829269 0 0 1 84.98657373552963 8.07317190336991 L 84.99127292809426 34.997561737190445 A 50.00243902439025 50.00243902439025 0 0 0 58.95171238940715 42.31826361376918 L 44.92571136831868 19.335790175029516 z "
                                                                    fill="var(--tw-warning)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-4"
                                                                    index="0" j="4" data:angle="31.395348837209326"
                                                                    data:startAngle="328.6046511627907"
                                                                    data:strokeWidth="2" data:value="15"
                                                                    data:pathOrig="M 44.92571136831868 19.335790175029516 A 76.92682926829269 76.92682926829269 0 0 1 84.98657373552963 8.07317190336991 L 84.99127292809426 34.997561737190445 A 50.00243902439025 50.00243902439025 0 0 0 58.95171238940715 42.31826361376918 L 44.92571136831868 19.335790175029516 z "
                                                                    stroke="var(--tw-light)"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1595" x1="0" y1="0"
                                                    x2="170" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1596" x1="0" y1="0"
                                                    x2="170" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1579" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1580" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--tw-primary);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--tw-brand);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--tw-success);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--tw-info);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 5;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--tw-warning);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Projects
                            </h3>
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
                                            <a class="menu-link"
                                                href="/metronic/tailwind/demo2/account/home/settings-plain">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-add-files">
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Add
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="/metronic/tailwind/demo2/account/members/import-members">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-file-down">
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Import
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item menu-item-dropdown" data-menu-item-offset="-15px, 0"
                                            data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="click|lg:hover">
                                            <div class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-file-up">
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Export
                                                </span>
                                                <span class="menu-arrow">
                                                    <i class="ki-filled ki-right text-3xs">
                                                    </i>
                                                </span>
                                            </div>
                                            <div class="menu-dropdown menu-default w-full max-w-[125px]">
                                                <div class="menu-item">
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
                                                        <span class="menu-title">
                                                            PDF
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
                                                        <span class="menu-title">
                                                            CVS
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link"
                                                        href="/metronic/tailwind/demo2/account/home/settings-sidebar">
                                                        <span class="menu-title">
                                                            Excel
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link"
                                                href="/metronic/tailwind/demo2/account/security/privacy-settings">
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
                        <div class="card-table scrollable-x-auto">
                            <table class="table text-right">
                                <thead>
                                    <tr>
                                        <th class="text-left min-w-52">
                                            Project Name
                                        </th>
                                        <th class="min-w-40">
                                            Progress
                                        </th>
                                        <th class="min-w-32">
                                            People
                                        </th>
                                        <th class="min-w-32">
                                            Due Date
                                        </th>
                                        <th class="w-[30px]">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary"
                                                href="#">
                                                Acme software development
                                            </a>
                                        </td>
                                        <td>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" style="width: 60%">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end shrink-0">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-4.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                            +3
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            24 Aug, 2024
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item menu-item-dropdown"
                                                    data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end"
                                                    data-menu-item-toggle="dropdown"
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
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    View
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
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-pencil">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary"
                                                href="#">
                                                Strategic Partnership Deal
                                            </a>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end shrink-0">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-danger-inverse ring-danger-light bg-danger">
                                                            M
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            10 Sep, 2024
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item menu-item-dropdown"
                                                    data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end"
                                                    data-menu-item-toggle="dropdown"
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
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    View
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
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-pencil">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary"
                                                href="#">
                                                Client Onboarding
                                            </a>
                                        </td>
                                        <td>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" style="width: 20%">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end shrink-0">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-20.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-7.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            19 Sep, 2024
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item menu-item-dropdown"
                                                    data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end"
                                                    data-menu-item-toggle="dropdown"
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
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    View
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
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-pencil">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary"
                                                href="#">
                                                Widget Supply Agreement
                                            </a>
                                        </td>
                                        <td>
                                            <div class="progress progress-success">
                                                <div class="progress-bar" style="width: 100%">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end shrink-0">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-6.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-23.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-12.png">
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-primary-inverse ring-primary-light bg-primary">
                                                            +1
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            5 May, 2024
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item menu-item-dropdown"
                                                    data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end"
                                                    data-menu-item-toggle="dropdown"
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
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    View
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
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-pencil">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary"
                                                href="#">
                                                Project X Redesign
                                            </a>
                                        </td>
                                        <td>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" style="width: 80%">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end shrink-0">
                                                <div class="flex -space-x-2">
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-15.png">
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="/static/metronic/tailwind/dist/assets/media/avatars/300-18.png">
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                            +2
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            1 Feb, 2025
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item menu-item-dropdown"
                                                    data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end"
                                                    data-menu-item-toggle="dropdown"
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
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    View
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
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-pencil">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-separator">
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="/metronic/tailwind/demo2/public-profile/projects/3-columns/">
                                All Projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: grid -->
    </div>
@endsection
@section('script')
@endsection
