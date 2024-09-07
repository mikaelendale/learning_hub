@extends('layouts.master')
@section('head')
    Account
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('title')
            Subscription
        @endslot
        @slot('subtitle')
            Account
            @slot('li_1')
                Subscription
            @endslot
        @endslot
    @endcomponent
@endsection

@section('content')
<div class="container-fixed">
    <!-- begin: grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
        <div class="col-span-2">
            <style>
                .upgrade-bg {
                    background-image: url('../../../../../static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-14.png');
                }

                .dark .upgrade-bg {
                    background-image: url('../../../../../static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-14-dark.png');
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
                                <i class="ki-filled ki-cheque text-1.5xl text-primary">
                                </i>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2.5">
                                <a class="text-base font-semibold text-gray-900 hover:text-primary-active"
                                    href="#">
                                    Upgrade your Components.io to Enterprise
                                </a>
                                <span class="badge badge-sm badge-danger badge-outline">
                                    Trial expires in 29 days
                                </span>
                            </div>
                            <div class="text-2sm font-medium text-gray-700">
                                Enterprise Components.io is a website offering high-quality, advanced UI components
                                designed for developers, enhancing
                                <br>
                                efficiency and aesthetics in web and mobile app development.
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-1.5 shrink-0">
                        <a class="btn btn-sm btn-light btn-clear" href="#">
                            Cancel Trial
                        </a>
                        <a class="btn btn-sm btn-dark" href="#">
                            Upgrade Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="card">
                <div class="card-body lg:py-7.5">
                    <div class="flex flex-wrap gap-7.5">
                        <div
                            class="flex flex-col gap-3 items-center justify-center size-[140px] rounded-xl ring-1 ring-gray-200 bg-secondary-clarity">
                            <img alt="" class="size-[70px]"
                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/cloud-one.svg">
                            <span class="text-sm font-semibold text-gray-900">
                                Cloud One
                            </span>

                        </div>
                        <div class="flex flex-col gap-5 lg:gap-7.5 grow">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center gap-2.5">
                                        <h2 class="text-2xl font-semibold text-gray-900">
                                            Cloud One Enterprise
                                        </h2>
                                        <span class="badge badge-sm badge-success badge-outline">
                                            Monthly Plan
                                        </span>
                                    </div>
                                    <p class="text-2sm font-medium text-gray-600">
                                        Essential Features for Startups and Individuals
                                    </p>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <a class="btn btn-sm btn-light" href="#">
                                        Cancel Plan
                                    </a>
                                    <a class="btn btn-sm btn-primary" href="#">
                                        Upgrade Plan
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-3 lg:gap-5">
                                <div
                                    class="flex flex-col gap-1.5 px-2.75 py-2.25 border border-dashed border-gray-400 rounded-md">
                                    <span class="text-gray-800 text-sm leading-none font-semibold">
                                        Trial
                                    </span>
                                    <span class="text-gray-600 text-xs font-medium">
                                        Status
                                    </span>
                                </div>
                                <div
                                    class="flex flex-col gap-1.5 px-2.75 py-2.25 border border-dashed border-gray-400 rounded-md">
                                    <span class="text-gray-800 text-sm leading-none font-semibold">
                                        10,000
                                    </span>
                                    <span class="text-gray-600 text-xs font-medium">
                                        Query runs
                                    </span>
                                </div>
                                <div
                                    class="flex flex-col gap-1.5 px-2.75 py-2.25 border border-dashed border-gray-400 rounded-md">
                                    <span class="text-gray-800 text-sm leading-none font-semibold">
                                        Unlimited
                                    </span>
                                    <span class="text-gray-600 text-xs font-medium">
                                        API calls
                                    </span>
                                </div>
                                <div
                                    class="flex flex-col gap-1.5 px-2.75 py-2.25 border border-dashed border-gray-400 rounded-md">
                                    <span class="text-gray-800 text-sm leading-none font-semibold">
                                        $99.00
                                    </span>
                                    <span class="text-gray-600 text-xs font-medium">
                                        Price
                                    </span>
                                </div>
                                <div
                                    class="flex flex-col gap-1.5 px-2.75 py-2.25 border border-dashed border-gray-400 rounded-md">
                                    <span class="text-gray-800 text-sm leading-none font-semibold">
                                        17 Aug, 2024
                                    </span>
                                    <span class="text-gray-600 text-xs font-medium">
                                        Next bill date
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-6 lg:gap-12">
                                <div class="flex flex-col gap-3.5 grow">
                                    <div class="text-2sm font-medium text-gray-600">
                                        UQuery runs:
                                        <span class="text-2sm font-semibold text-gray-900">
                                            2239 of 10,000 used
                                        </span>
                                    </div>
                                    <div class="progress progress-primary max-w-2xl w-full">
                                        <div class="progress-bar" style="width: 47%">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2.5 lg:min-w-24 shrink-0 -mt-3 max-w-auto">
                                    <div class="text-2sm font-medium text-gray-600">
                                        Seats:
                                        <span class="text-2sm font-semibold text-gray-800">
                                            29 of 120 used
                                        </span>
                                    </div>
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-4.png">
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                src="../../../../../static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
                                        </div>
                                        <div class="flex">
                                            <span
                                                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-primary-inverse size-6 ring-success-light bg-success">
                                                +16
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex">
            <div class="card grow">
                <div class="card-header">
                    <h3 class="card-title">
                        Latest Payment
                    </h3>
                    <button class="btn btn-light btn-sm">
                        <i class="ki-filled ki-exit-down">
                        </i>
                        Download PDF
                    </button>
                </div>
                <div class="card-body pt-4 pb-3">
                    <table class="table-auto">
                        <tbody>
                            <tr>
                                <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                    Typ of Plan
                                </td>
                                <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                    Cloud One Enterprise
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                    Payment Date
                                </td>
                                <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                    6 Aug, 2024
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                    Card used to pay:
                                </td>
                                <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                    <img alt="" class="w-10 shrink-0"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/visa.svg">
                                    Ending 3604
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                    Total Payment:
                                </td>
                                <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                    $24.00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex">
            <div class="card grow">
                <div class="card-header">
                    <h3 class="card-title">
                        Next Payment
                    </h3>
                </div>
                <div class="card-body lg:7.5">
                    <div class="flex flex-col gap-5">
                        <div
                            class="flex items-center justify-between flex-wrap border border-gray-200 rounded-xl gap-2 px-4 py-4 bg-secondary-clarity">
                            <div class="flex items-center gap-3.5">
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
                                        <i class="ki-filled ki-calendar text-xl text-brand">
                                        </i>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold hover:text-primary text-gray-900" href="#">
                                        on 17 Aug, 2024
                                    </a>
                                    <p class="text-2sm font-medium text-gray-600">
                                        Due date
                                    </p>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-icon btn-outline btn-success rounded-full">
                                <i class="ki-filled ki-check">
                                </i>
                            </button>
                        </div>
                        <div class="place-self-end lg:pb-2.5">
                            <a class="btn btn-sm btn-primary" href="#">
                                Manage Payment
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: grid -->
</div>
@endsection