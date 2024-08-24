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
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
            <div class="col-span-1 lg:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex lg:px-10 py-1 gap-2">
                            <div class="grid flex-1">
                                <div class="flex justify-self-center items-center gap-3">
                                    <img alt="" class="h-10 max-w-full"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/online-game.svg">
                                    <div class="grid grid-cols-1 place-content-center flex-1">
                                        <span class="text-gray-900 text-2xl lg:text-2.5xl font-semibold">
                                            164
                                        </span>
                                        <span class="text-gray-600 text-sm font-medium">
                                            Tournaments
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class="[&amp;:not(:last-child)]:border-r border-r-gray-300 my-1">
                            </span>
                            <div class="grid flex-1">
                                <div class="flex justify-self-center items-center gap-3">
                                    <img alt="" class="h-10 max-w-full"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/gamer-coin.svg">
                                    <div class="grid grid-cols-1 place-content-center flex-1">
                                        <span class="text-gray-900 text-2xl lg:text-2.5xl font-semibold">
                                            73.2%
                                        </span>
                                        <span class="text-gray-600 text-sm font-medium">
                                            Game Win-rate
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class="[&amp;:not(:last-child)]:border-r border-r-gray-300 my-1">
                            </span>
                            <div class="grid flex-1">
                                <div class="flex justify-self-center items-center gap-3">
                                    <img alt="" class="h-10 max-w-full"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/gamer-diamond.svg">
                                    <div class="grid grid-cols-1 place-content-center flex-1">
                                        <span class="text-gray-900 text-2xl lg:text-2.5xl font-semibold">
                                            257
                                        </span>
                                        <span class="text-gray-600 text-sm font-medium">
                                            Duels Played
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class="[&amp;:not(:last-child)]:border-r border-r-gray-300 my-1">
                            </span>
                            <div class="grid flex-1">
                                <div class="flex justify-self-center items-center gap-3">
                                    <img alt="" class="h-10 max-w-full"
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/gamer-trophy.svg">
                                    <div class="grid grid-cols-1 place-content-center flex-1">
                                        <span class="text-gray-900 text-2xl lg:text-2.5xl font-semibold">
                                            19
                                        </span>
                                        <span class="text-gray-600 text-sm font-medium">
                                            Trophies
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class="[&amp;:not(:last-child)]:border-r border-r-gray-300 my-1">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Favorite Games
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-2.5 xl:mr-14 mb-1.5">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/13.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/14.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/15.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11 border"
                                    src="{{asset('assets/media/images/600x600/16.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/17.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/18.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/19.jpg')}}">
                                <img alt="" class="rounded-xl w-11 h-11"
                                    src="{{asset('assets/media/images/600x600/20.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                About
                            </h3>
                        </div>
                        <div class="card-body pb-7 pt-4">
                            <table class="table-auto mb-1.5">
                                <tbody>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3 pe-4 lg:pe-12">
                                            Joined:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3">
                                            26 Aug, 2021
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3 pe-4 lg:pe-12">
                                            Location:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3">
                                            Porto, EU
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-medium text-gray-500 pb-3 pe-4 lg:pe-12">
                                            Level:
                                        </td>
                                        <td class="text-sm font-medium text-gray-800 pb-3">
                                            <span class="badge badge-sm badge-success badge-outline">
                                                Pro
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-sm text-gray-700 font-medium leading-5.5">
                                Experienced and creative professional with a passion
                                great as a commitment to best excellence.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Badges
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
                                Floyd’s Team
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-2.5 xl:mr-16">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-27.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-1.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-2.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-3.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-5.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-23.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-6.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-11.png')}}">
                                <img class="rounded-full h-[36px]"
                                    src="{{asset('assets/media/avatars/300-12.png')}}">
                            </div>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="../../account/members/teams.html">
                                Join Our Team
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Network
                            </h3>
                        </div>
                        <div class="card-body pt-4">
                            <div class="grid gap-2.5 mb-1">
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-dribbble text-lg text-gray-500">
                                        </i>
                                    </span>
                                    <a class="text-gray-800 hover:text-primary-active text-sm font-medium" href="#">
                                        jennynft
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-facebook text-lg text-gray-500">
                                        </i>
                                    </span>
                                    <a class="text-gray-800 hover:text-primary-active text-sm font-medium" href="#">
                                        nftmania
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-twitter text-lg text-gray-500">
                                        </i>
                                    </span>
                                    <a class="text-gray-800 hover:text-primary-active text-sm font-medium" href="#">
                                        jennynft
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-youtube text-lg text-gray-500">
                                        </i>
                                    </span>
                                    <a class="text-gray-800 hover:text-primary-active text-sm font-medium" href="#">
                                        jennyklabber
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Now Playing
                            </h3>
                            <div class="justify-center">
                                <a class="btn btn-link" href="#">
                                    View All
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5 lg:p-7.5 lg:pb-7">
                            <div class="flex flex-no-wrap scrollable-x gap-5">
                                <div class="card shadow-none w-[280px] border-0">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="{{asset('assets/media/images/600x600/10.jpg')}}">
                                    <div class="card-border card-rounded-b grid gap-6 px-5 py-3.5 mb-4.5">
                                        <div class="flex items-center gap-2.5">
                                            <img alt="" class="rounded-full size-10"
                                                src="{{asset('assets/media/images/600x600/13.jpg')}}">
                                            <div class="grid grid-cols-1 gap-0.5">
                                                <a class="text-gray-900 hover:text-primary-active text-md font-semibold mb-px"
                                                    href="#">
                                                    Call of Duty
                                                </a>
                                                <span class="flex items-center gap-1.5 text-3xs font-medium text-gray-500">
                                                    Playing since 6 Aug, 2018
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    79%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Win-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    88/100%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Reflex-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    2367%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Score
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center place-content-between gap-2">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-4.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-1.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-2.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <span
                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                        +7
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="badge badge-xs badge-warning badge-outline">
                                                Rank 268
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none w-[280px] border-0">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="{{asset('assets/media/images/600x600/11.jpg')}}">
                                    <div class="card-border card-rounded-b grid gap-6 px-5 py-3.5 mb-4.5">
                                        <div class="flex items-center gap-2.5">
                                            <img alt="" class="rounded-full size-10"
                                                src="{{asset('assets/media/images/600x600/14.jpg')}}">
                                            <div class="grid grid-cols-1 gap-0.5">
                                                <a class="text-gray-900 hover:text-primary-active text-md font-semibold mb-px"
                                                    href="#">
                                                    Rocket League
                                                </a>
                                                <span class="flex items-center gap-1.5 text-3xs font-medium text-gray-500">
                                                    Playing since 18 May, 2015
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    764%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Win-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    9/10%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Reflex-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    436%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Score
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center place-content-between gap-2">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-8.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-11.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-20.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-13.png')}}">
                                                </div>
                                            </div>
                                            <span class="badge badge-xs badge-warning badge-outline">
                                                Rank 5
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none w-[280px] border-0">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="{{asset('assets/media/images/600x600/12.jpg')}}">
                                    <div class="card-border card-rounded-b grid gap-6 px-5 py-3.5 mb-4.5">
                                        <div class="flex items-center gap-2.5">
                                            <img alt="" class="rounded-full size-10"
                                                src="{{asset('assets/media/images/600x600/15.jpg')}}">
                                            <div class="grid grid-cols-1 gap-0.5">
                                                <a class="text-gray-900 hover:text-primary-active text-md font-semibold mb-px"
                                                    href="#">
                                                    GTA 5
                                                </a>
                                                <span class="flex items-center gap-1.5 text-3xs font-medium text-gray-500">
                                                    Playing since 24 Dec, 2018
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    87%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Win-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    61/100%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Reflex-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    214%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Score
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center place-content-between gap-2">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-18.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="assets/media/avatars/300-23.png">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="assets/media/avatars/300-6.png">
                                                </div>
                                                <div class="flex">
                                                    <span
                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                        +16
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="badge badge-xs badge-warning badge-outline">
                                                Rank 12
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none w-[280px] border-0">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="{{asset('assets/media/images/600x600/14.jpg')}}">
                                    <div class="card-border card-rounded-b grid gap-6 px-5 py-3.5 mb-4.5">
                                        <div class="flex items-center gap-2.5">
                                            <img alt="" class="rounded-full size-10"
                                                src="{{asset('assets/media/images/600x600/16.jpg')}}">
                                            <div class="grid grid-cols-1 gap-0.5">
                                                <a class="text-gray-900 hover:text-primary-active text-md font-semibold mb-px"
                                                    href="#">
                                                    CyberStorm Cup
                                                </a>
                                                <span class="flex items-center gap-1.5 text-3xs font-medium text-gray-500">
                                                    Playing since 12 Sep, 2019
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    53%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Win-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    56/70%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Reflex-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    327%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Score
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center place-content-between gap-2">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-22.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-17.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-18.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <span
                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                        +14
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="badge badge-xs badge-warning badge-outline">
                                                Rank 45
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none w-[280px] border-0">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="{{asset('assets/media/images/600x600/15.jpg')}}">
                                    <div class="card-border card-rounded-b grid gap-6 px-5 py-3.5 mb-4.5">
                                        <div class="flex items-center gap-2.5">
                                            <img alt="" class="rounded-full size-10"
                                                src="{{asset('assets/media/images/600x600/17.jpg')}}">
                                            <div class="grid grid-cols-1 gap-0.5">
                                                <a class="text-gray-900 hover:text-primary-active text-md font-semibold mb-px"
                                                    href="#">
                                                    Call of Duty
                                                </a>
                                                <span class="flex items-center gap-1.5 text-3xs font-medium text-gray-500">
                                                    Playing since 23 Nov, 2021
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    122%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Win-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    45/80%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Reflex-rate
                                                </span>
                                            </div>
                                            <div class="grid grid-cols-1 gap-1.5 text-center">
                                                <span class="text-gray-900 text-2sm leading-none font-semibold">
                                                    44%
                                                </span>
                                                <span class="text-gray-600 text-2xs font-medium">
                                                    Score
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center place-content-between gap-2">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-12.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-25.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                        src="{{asset('assets/media/avatars/300-26.png')}}">
                                                </div>
                                                <div class="flex">
                                                    <span
                                                        class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                                        +32
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="badge badge-xs badge-warning badge-outline">
                                                Rank 374
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Recent Activity
                            </h3>
                            <div class="flex items-center gap-2">
                                <label class="switch">
                                    <input checked="" class="order-2" name="check" type="checkbox"
                                        value="1">
                                    <span class="switch-label order-1">
                                        Auto refresh:
                                        <span class="hidden switch-off:inline">
                                            Off
                                        </span>
                                        <span class="hidden switch-on:inline">
                                            On
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-col">
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                        <i class="ki-filled ki-people text-base">
                                        </i>
                                    </div>
                                    <div class="pl-2.5 mb-7 text-md grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm font-medium text-gray-800">
                                                Jenny sent an
                                                <a class="text-sm font-medium link" href="#">
                                                    inquiry
                                                </a>
                                                about a
                                                <a class="text-sm font-medium link" href="#">
                                                    new product
                                                </a>
                                                .
                                            </div>
                                            <span class="text-xs font-medium text-gray-500">
                                                Today, 9:00 AM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                        <i class="ki-filled ki-calendar-tick text-base">
                                        </i>
                                    </div>
                                    <div class="pl-2.5 mb-7 text-md grow">
                                        <div class="flex flex-col pb-2.5">
                                            <span class="text-sm font-medium text-gray-700">
                                                Jenny attended a webinar on new product features.
                                            </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                3 days ago, 11:45 AM
                                            </span>
                                        </div>
                                        <div class="card shadow-none p-4">
                                            <div class="flex flex-wrap gap-2.5">
                                                <i class="ki-filled ki-code text-lg text-info">
                                                </i>
                                                <div class="flex flex-col gap-5 grow">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex flex-col gap-0.5">
                                                            <span
                                                                class="text-md font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                                Leadership Development Series: Part 1
                                                            </span>
                                                            <span class="text-xs font-medium text-gray-500">
                                                                The first installment of a leadership development series.
                                                            </span>
                                                        </div>
                                                        <a class="btn btn-link" href="../../account/members/teams.html">
                                                            View
                                                        </a>
                                                    </div>
                                                    <div class="flex flex-wrap gap-7.5">
                                                        <div class="flex items-center gap-1.5">
                                                            <span class="text-2sm font-medium text-gray-500">
                                                                Code:
                                                            </span>
                                                            <a class="text-2sm font-semibold text-primary" href="#">
                                                                #leaderdev-1
                                                            </a>
                                                        </div>
                                                        <div class="flex items-center gap-1.5">
                                                            <span class="text-2sm font-medium text-gray-500">
                                                                Progress:
                                                            </span>
                                                            <div class="progress progress-success min-w-[120px]">
                                                                <div class="progress-bar" style="width: 80%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-1.5 lg:min-w-24 shrink-0 max-w-auto">
                                                            <span class="text-2sm font-medium text-gray-500">
                                                                Guests:
                                                            </span>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7"
                                                                        src="{{asset('assets/media/avatars/300-4.png')}}">
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7"
                                                                        src="{{asset('assets/media/avatars/300-1.png')}}">
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7"
                                                                        src="{{asset('assets/media/avatars/300-2.png')}}">
                                                                </div>
                                                                <div class="flex">
                                                                    <span
                                                                        class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-7 text-primary-inverse ring-primary-light bg-primary">
                                                                        +24
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
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                        <i class="ki-filled ki-entrance-left text-base">
                                        </i>
                                    </div>
                                    <div class="pl-2.5 mb-7 text-md grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm font-medium text-gray-800">
                                                Jenny's last login to the
                                                <a class="text-sm font-medium link" href="#">
                                                    Customer Portal
                                                </a>
                                                .
                                            </div>
                                            <span class="text-xs font-medium text-gray-500">
                                                5 days ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                        <i class="ki-filled ki-directbox-default text-base">
                                        </i>
                                    </div>
                                    <div class="pl-2.5 mb-7 text-md grow">
                                        <div class="flex flex-col pb-2.5">
                                            <span class="text-sm font-medium text-gray-800">
                                                Email campaign sent to Jenny for a special promotion.
                                            </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                1 week ago, 11:45 AM
                                            </span>
                                        </div>
                                        <div class="card shadow-none">
                                            <div class="card-body lg:py-4">
                                                <div class="flex justify-center py-4">
                                                    <img alt="image" class="dark:hidden max-h-[160px]"
                                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/10.svg">
                                                    <img alt="image" class="light:hidden max-h-[160px]"
                                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/10-dark.svg">
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-md font-semibold text-gray-900 text-center">
                                                        First Campaign Created
                                                    </div>
                                                    <div class="flex items-center justify-center gap-1">
                                                        <a class="text-2sm font-semibold link" href="company.html">
                                                            Axio new release
                                                        </a>
                                                        <span class="text-2sm font-medium text-gray-600 mr-2">
                                                            email campaign
                                                        </span>
                                                        <span class="badge badge-sm badge-success badge-outline">
                                                            Public
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                        <i class="ki-filled ki-rocket text-base">
                                        </i>
                                    </div>
                                    <div class="pl-2.5 text-md grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm font-medium text-gray-800">
                                                Explored niche demo ideas for product-specific solutions.
                                            </div>
                                            <span class="text-xs font-medium text-gray-500">
                                                3 weeks ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="../activity.html">
                                All-time Activities
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: grid -->
    </div>
@endsection
