@extends('layouts.master')
@section('head')
    Courses Progress
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Courses
        @endslot
        @slot('title')
            Progress
        @endslot
        @slot('subtitle')
            Progress
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
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
                                <span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
                                    <div class="relative size-[50px] shrink-0" tooltip='modsov'>
                                    <svg class="w-full h-full stroke-primary-clarity fill-primary-light" fill="none"
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
                                        <i class="ki-filled ki-abstract-39 text-1.5xl ps-px text-primary">
                                        </i>
                                    </div>
                                </div>
                                    <span class="tooltip" data-tooltip-content="true">
                                        <div class="card rounded">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h1 class="text-sm">Payment and subscription info</h1>
                                                    <div class="card-body">
                                                        <div class="relative size-[50px] shrink-0" tooltip='modsov'>
                                                            <svg class="w-full h-full stroke-primary-clarity fill-primary-light"
                                                                fill="none" height="48" viewbox="0 0 44 48"
                                                                width="44" xmlns="http://www.w3.org/2000/svg">
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
                                                                <i
                                                                    class="ki-filled ki-abstract-39 text-1.5xl ps-px text-primary">
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </span> 
                            </div>
                            
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
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/jira.svg" />
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
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/paccion.svg" />
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
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/perrier.svg" />
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
                            <a class="btn btn-link" href="../works.html">
                                Open to Work
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Projects
                            </h3>
                            <div class="menu" data-menu="true">
                                <div class="menu-item" data-menu-item-offset="0, 10px"
                                    data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                    data-menu-item-trigger="click|lg:click">
                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                    <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../account/home/settings-plain.html">
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
                                            <a class="menu-link" href="../../account/members/import-members.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-file-down">
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Import
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item" data-menu-item-offset="-15px, 0"
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
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
                                                        <span class="menu-title">
                                                            PDF
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
                                                        <span class="menu-title">
                                                            CVS
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
                                                        <span class="menu-title">
                                                            Excel
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../account/security/privacy-settings.html">
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
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-4.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-1.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-2.png" />
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
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
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
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-1.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-2.png" />
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
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
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
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-20.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-7.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-gray-700">
                                            19 Sep, 2024
                                        </td>
                                        <td class="text-left">
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
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
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-6.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-23.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-12.png" />
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
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
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
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-2.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-15.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                            src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-18.png" />
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
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
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
                            <a class="btn btn-link" href="../projects/3-columns/index.html">
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
