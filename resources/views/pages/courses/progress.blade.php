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
                                <div class="relative size-[50px] shrink-0">
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
                                        <i class="ki-filled ki-abstract-44 text-1.5xl ps-px text-brand">
                                        </i>
                                    </div>
                                </div>
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-success-clarity fill-success-light" fill="none"
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
                                        <i class="ki-filled ki-abstract-25 text-1.5xl ps-px text-success">
                                        </i>
                                    </div>
                                </div>
                                <div class="relative size-[50px] shrink-0">
                                    <svg class="w-full h-full stroke-info-clarity fill-info-light" fill="none"
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
                                <div class="menu-item" data-menu-item-offset="0, 10px"
                                    data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                    data-menu-item-trigger="click|lg:click">
                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                    <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
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
                                            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
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
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
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
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
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
                                                    <a class="menu-link" href="../../account/home/settings-sidebar.html">
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
                                            <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
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
                                            <a class="menu-link" href="../../account/home/settings-enterprise.html">
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
                                        <img
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/pdf.svg" />
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
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/doc.svg" />
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
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/ai.svg" />
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
                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/js.svg" />
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
                            <a class="btn btn-link" href="../../account/integrations.html">
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
                                            <br />
                                            Partnerships on Our Blog
                                        </h2>
                                        <p class="text-sm text-gray-700 leading-5.5">
                                            Explore exciting collaboration opportunities with our blog.
                                            We're open to partnerships, guest posts, and more.
                                            Join us to share your insights and grow your audience.
                                        </p>
                                    </div>
                                    <img alt="image" class="dark:hidden max-h-[160px]"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/1.svg" />
                                    <img alt="image" class="light:hidden max-h-[160px]"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/1-dark.svg" />
                                </div>
                            </div>
                            <div class="card-footer justify-center">
                                <a class="btn btn-link" href="../../network/get-started.html">
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
                                                <a class="menu-link" href="../../account/home/settings-enterprise.html">
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
                            <div class="px-3 py-1">
                                <div id="media_uploads_chart">
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
                                                        <a class="menu-link"
                                                            href="../../account/home/settings-sidebar.html">
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
                                                            href="../../account/home/settings-sidebar.html">
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
                                                            href="../../account/home/settings-sidebar.html">
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
                                                <a class="menu-link" href="../../account/home/settings-enterprise.html">
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
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-3.png" />
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
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-1.png" />
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
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-14.png" />
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
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-7.png" />
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
                                <a class="btn btn-link" href="../network.html">
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
                                                <a class="menu-link" href="../../account/home/settings-enterprise.html">
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
                            <div class="card-body flex justify-center items-center px-3 py-1">
                                <div id="contributions_chart">
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