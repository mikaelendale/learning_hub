 {{-- @extends('layouts.master')
 @section('breadcump')
     @component('components.breadcrumb')
         @slot('li_1')
             Courses
         @endslot
         @slot('title')
             {{ $subsection->name }}
         @endslot
         @slot('subtitle')
             course
         @endslot
     @endcomponent
 @endsection
 @section('content') 
        @if (isset($courseContent['video_url']))
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Starting Video</h2>
                <video controls class="w-full mt-2">
                    <source src="{{ $courseContent['video_url'] }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @endif

        <!-- Display Resources -->
        @if (isset($courseContent['resources']) && is_array($courseContent['resources']))
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Resources</h2>
                <ul class="list-disc pl-5 mt-2">
                    @foreach ($courseContent['resources'] as $resource)
                        <li>
                            <a href="{{ $resource['url'] }}" target="_blank" class="text-blue-500 underline">
                                {{ $resource['title'] }} ({{ $resource['type'] }})
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Display Extra Notes -->
        @if (isset($courseContent['extra_notes']))
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Extra Notes</h2>
                <p class="mt-2">{{ $courseContent['extra_notes'] }}</p>
            </div>
        @endif
     @foreach ($courseContent as $courseContent)
         <div class="container-fixed">
             <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
                 <div class="col-span-2">
                     <div class="grid gap-5 lg:gap-7.5">
                         <div class="flex gap-5 lg:gap-7.5">
                             <div class="card grow" id="activity_2024">
                                 <div class="card-body">
                                     <div class="flex flex-col">
                                         <div class="flex items-start relative">
                                             <div
                                                 class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                                 <i class="ki-filled ki-star text-base">
                                                 </i>
                                             </div>
                                             <div class="pl-2.5 mb-7 text-md grow">
                                                 <div class="flex flex-col">
                                                     <div class="text-sm font-medium text-gray-800">
                                                         Todays Topic
                                                         <span class="text-sm font-medium link">
                                                             {{ $courseContent->title }}
                                                         </span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br><br>
                                         <div class="flex items-start relative">
                                             <div
                                                 class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                             </div>
                                             <div
                                                 class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                                 <i class="ki-filled ki-youtube text-base">
                                                 </i>
                                             </div>
                                             <div class="pl-2.5 mb-7 text-md grow">
                                                 <div class="flex flex-col pb-2.5">
                                                     <span class="text-sm font-medium text-gray-700">
                                                         Starting video
                                                     </span>
                                                 </div>
                                                 <div class="w-full max-w-full aspect-w-16 aspect-h-9 mx-auto">
                                                     <iframe class="w-full rounded-lg" height="400"
                                                         src="{{ $courseContent->video_url }}" title="YouTube video player"
                                                         frameborder="0"
                                                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                         referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                                     </iframe>
                                                 </div>

                                             </div>
                                         </div>

                                         <div class="flex items-start relative">
                                             <div
                                                 class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                             </div>
                                             <div
                                                 class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                                 <i class="ki-filled ki-note text-base">
                                                 </i>
                                             </div>
                                             <div class="pl-2.5 mb-7 text-md grow">
                                                 <div class="flex flex-col">
                                                     <div class="text-sm font-medium text-gray-800">
                                                         <h1 class="text-lg text-bold text-gray-950">Content</h1> <br>
                                                         <p class="relative justify-start">
                                                             <code></code>{{ $courseContent->content }}</p>
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
                                                 <i class="ki-filled ki-code text-base">
                                                 </i>
                                             </div>
                                             <div class="pl-2.5 text-md grow">
                                                 <div class="flex flex-col">
                                                     <div class="relative justify-end w-full  ">
                                                         <div class="w-full max-w-full aspect-w-16 aspect-h-9 mx-auto">
                                                             <img class="rounded"
                                                                 src="{{ asset('course_codes/' . $courseContent->code_examples) }}"
                                                                 alt="">
                                                         </div>
                                                         <div class="text-sm font-medium text-gray-800"><br>
                                                             <h1 class="text-lg text-bold text-gray-950">read more</h1> <br>
                                                             <span>{{ $courseContent->external_links }}</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                                 <div class="card-footer bg-gray-50 p-4 rounded-lg shadow-md">
                                     <div class="flex justify-between items-center">
                                         <button class="btn btn-secondary" disabled>
                                             Previous
                                         </button>&nbsp;&nbsp;
                                         <button class="btn btn-success">
                                             Next
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
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
                                         <div
                                             class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
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
                                         <div
                                             class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
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
                                         <div
                                             class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
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
                                         <div
                                             class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
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
             </div>
             <!-- end: grid -->
         </div>
     @endforeach
 @endsection --}}
 <!DOCTYPE html>
 <html lang="en">

 <head>

     <!-- Basic Page Needs
    ================================================== -->
     <title>
         Lalo Dev Learning Hub | @yield('head')
     </title>
     <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     @yield('css')
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">


     <!-- icons
    ================================================== -->
     <link rel="stylesheet" href="{{ asset('demo/assets/css/icons.css') }}">

     <!-- CSS
    ================================================== -->
     <link rel="stylesheet" href="{{ asset('demo/assets/css/uikit.css') }}">
     <link rel="stylesheet" href="{{ asset('demo/assets/css/style.css') }}">
     <link href="{{ asset('demo/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css') }}" rel="stylesheet">

 </head>


 <body class="bg-white">

     <div id="wrapper" class="course-watch">

         <!-- sidebar -->
         <div class="sidebar">

             <!-- slide_menu for mobile -->
             <span class="btn-close-mobi right-3 left-auto" uk-toggle="target: #wrapper ; cls: is-active"></span>

             <!-- back to home link -->
             <div class="flex justify-between lg:-ml-1 mt-1 mr-2">
                 <a href="/courses/detail" class="flex items-center text-blue-500">
                     <ion-icon name="chevron-back-outline" class="md:text-lg text-2xl"></ion-icon>
                     <span class="text-sm md:inline hidden"> back</span>
                 </a>
             </div>

             <!-- title -->
             <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2"> {{ $subsection->name }} </h1>

             <!-- sidebar list -->
             <div class="sidebar_inner is-watch-2" data-simplebar>

                 {{-- <div class="lg:inline hidden">
                    <div class="relative overflow-hidden rounded-md bg-gray-200 h-1 mt-4">
                        <div class="w-2/4 h-full bg-green-500"></div>
                    </div>
                    <div class="mt-2 mb-3 text-sm border-b pb-3">
                        <div> 46% Complete</div>
                        <div> Last activity on April 20, 2021</div>
                    </div>
                </div> --}}
                 <hr><br>
                 <div id="curriculum">
                     <div uk-accordion="multiple: true" class="divide-y space-y-3">

                         <div class="uk-open">
                             <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                 <div class="mb-1 text-sm font-medium"> Section 1 </div> Html Introduction
                             </a>
                             <div class="uk-accordion-content mt-3">

                                 <ul class="course-curriculum-list"
                                     uk-switcher="connect: #video_tabs; animation: animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                         <li>
                                             <a href="#">
                                                 Introduction <span class="hidden"> 4 min </span>
                                             </a>
                                         </li>
                                 </ul>

                             </div>
                         </div>
                         <div class="pt-2">
                             <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                 <div class="mb-1 text-sm font-medium"> Section 2 </div> Your First webpage
                             </a>
                             <div class="uk-accordion-content mt-3">

                                 <ul class="course-curriculum-list">
                                     <li>
                                         <a href="#modal-example" uk-toggle>
                                             Headings
                                             <span> 4 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#modal-example" uk-toggle>
                                             Paragraphs
                                             <span> 5 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#modal-example" uk-toggle>
                                             Emphasis and Strong Tag
                                             <span> 8 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#modal-example" uk-toggle>
                                             Brain Streak
                                             <span> 4 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#modal-example" uk-toggle>
                                             Live Preview Feature
                                             <span> 5 min </span>
                                         </a>
                                     </li>
                                 </ul>

                             </div>
                         </div>
                         <div class="pt-2">
                             <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                 <div class="mb-1 text-sm font-medium"> Section 3 </div> Build Complete Webste
                             </a>
                             <div class="uk-accordion-content mt-3">

                                 <ul class="course-curriculum-list font-medium">
                                     <li>
                                         <a href="#">
                                             The paragraph tag
                                             <span class="hidden"> 4 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             The break tag
                                             <span class="hidden"> 5 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             Headings in HTML
                                             <span class="hidden"> 8 min </span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             Bold, Italics Underline
                                             <span class="hidden"> 4 min </span>
                                         </a>
                                     </li>
                                 </ul>

                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="mt-5">
                     <h3 class="mb-4 text-lg font-semibold"> Quizzes</h3>
                     <ul>
                         <li><a href="#"> <ion-icon name="timer-outline" class="side-icon"></ion-icon> Taking
                                 small eco-friendly steps </a></li>
                         <li><a href="#"> <ion-icon name="timer-outline" class="side-icon"></ion-icon> Making your
                                 house eco-friendly </a></li>
                         <li><a href="#"> <ion-icon name="timer-outline" class="side-icon"></ion-icon> Building
                                 and renovating for eco-friendly homes </a></li>
                         <li><a href="#"> <ion-icon name="log-in-outline" class="side-icon"></ion-icon> Taking
                                 small eco-friendly </a>
                             <ul>
                                 <li><a href="#"> Making your house </a></li>
                                 <li><a href="#"> Building and renovating </a></li>
                                 <li><a href="#"> Taking small </a></li>
                             </ul>
                         </li>
                     </ul>

                 </div>

             </div>

             <!-- overly for mobile -->
             <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

         </div>

         <!-- Main Contents -->
         <div class="main_content">

             <div class="relative">

                 <ul class="uk-switcher relative z-10" id="video_tabs">

                     @foreach ($courseModule as $courseModule)
                         <li>
                             <div class="embed-video">
                                 <iframe src="{{ $courseModule->video_url }}" frameborder="0" allowfullscreen
                                     uk-responsive></iframe>
                             </div>
                         </li>
                     @endforeach
                     <li>
                         <div class="embed-video">
                             <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                 uk-responsive></iframe>
                         </div>
                     </li>
                     <li>
                         <div class="embed-video">
                             <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0" allowfullscreen
                                 uk-responsive></iframe>
                         </div>
                     </li>
                     <li>
                         <div class="embed-video">
                             <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0" allowfullscreen
                                 uk-responsive></iframe>
                         </div>
                     </li>
                     <li>
                         <div class="embed-video">
                             <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                 uk-responsive></iframe>
                         </div>
                     </li>
                     <li>
                         <div class="embed-video">
                             <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0" allowfullscreen
                                 uk-responsive></iframe>
                         </div>
                     </li>

                 </ul>

                 <div class="bg-gray-200 w-full h-full absolute inset-0 animate-pulse"></div>

             </div>

             <nav class="cd-secondary-nav border-b md:p-0 lg:px-6 bg-white "
                 uk-sticky="cls-active:shadow-sm ; media: @s">
                 <ul uk-switcher="connect: #course-tabs; animation: uk-animation-fade">
                     <li><a href="#" class="lg:px-2"> Overview </a></li>
                     <li><a href="#" class="lg:px-2"> Announcements </a></li>
                     <li><a href="#" class="lg:px-2"> Faq </a></li>
                 </ul>
             </nav>

             <div class="container">

                 <div class="max-w-2xl lg:py-6 mx-auto uk-switcher" id="course-tabs">

                     <!--  Overview -->
                     <div>

                         <h4 class="text-2xl font-semibold"> About this course </h4>

                         <p> Learn Web Development Without Writing Much Code </p>

                         <hr class="my-5">

                         <div class="grid lg:grid-cols-3 mt-8 gap-8">
                             <div>
                                 <h3 class="text-lg font-semibold"> Description </h3>
                             </div>
                             <div class="col-span-2">
                                 <p>
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                     euismod
                                     tincidunt ut
                                     laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore
                                     magna
                                     aliquam erat
                                     volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                     suscipit
                                     lobortis
                                     nisl ut aliquip ex ea commodo consequat

                                     <br>
                                     <a href="#" class="text-blue-500">Read more .</a>
                                 </p>
                             </div>

                             <div>
                                 <h3 class="text-lg font-semibold"> What You’ll Learn </h3>
                             </div>
                             <div class="col-span-2">
                                 <ul>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Setting up the environment
                                     </li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Advanced HTML Practices</li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Build a portfolio website
                                     </li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Responsive Designs</li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Understand HTML Programming
                                     </li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Code HTML</li>
                                     <li> <i class="uil-check text-xl font-bold mr-2"></i>Start building beautiful
                                         websites</li>
                                 </ul>
                             </div>

                             <div>
                                 <h3 class="text-lg font-semibold"> Requirements </h3>
                             </div>
                             <div class="col-span-2">
                                 <ul class="list-disc ml-5 space-y-1">
                                     <li>Any computer will work: Windows, macOS or Linux</li>
                                     <li>Basic programming HTML and CSS.</li>
                                     <li>Basic/Minimal understanding of JavaScript</li>
                                 </ul>
                             </div>

                         </div>


                     </div>

                     <!--  Announcements -->
                     <div>
                         <h3 class="text-xl font-semibold mb-3"> Announcement </h3>

                         <div class="flex items-center gap-x-4 mb-5">
                             <img src="demo/assets/images/avatars/avatar-4.jpg" alt=""
                                 class="rounded-full shadow w-12 h-12">
                             <div>
                                 <h4 class="-mb-1 text-base"> Stella Johnson</h4>
                                 <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span>
                                 </span>
                             </div>
                         </div>

                         <h4 class="leading-8 text-xl"> Nam liber tempor cum soluta nobis eleifend option congue
                             imperdiet
                             doming id quod mazim placerat facer possim assum.</h4>
                         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                             ut
                             labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                             laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                             voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                             cupidatat
                             non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                             tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                             nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                             consequat. Nam
                             liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                             placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                             diam
                             nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                             ad
                             minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                             ea
                             commodo consequat.</p>

                     </div>

                     <!-- faq -->
                     <div>
                         <h3 class="text-xl font-semibold mb-3"> Course Faq </h3>
                         <ul uk-accordion="multiple: true" class="divide-y space-y-3 space-y-6">
                             <li class="uk-open">
                                 <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Html
                                     Introduction </a>
                                 <div class="uk-accordion-content mt-3">
                                     <p> The primary goal of this quick start guide is to introduce you to
                                         Unreal
                                         Engine 4`s (UE4) development environment. By the end of this guide,
                                         you`ll
                                         know how to set up and develop C++ Projects in UE4. This guide shows
                                         you
                                         how
                                         to create a new Unreal Engine project, add a new C++ class to it,
                                         compile
                                         the project, and add an instance of a new class to your level. By
                                         the
                                         time
                                         you reach the end of this guide, you`ll be able to see your
                                         programmed
                                         Actor
                                         floating above a table in the level. </p>
                                 </div>
                             </li>
                             <li>
                                 <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Your First
                                     webpage</a>
                                 <div class="uk-accordion-content mt-3">
                                     <p> The primary goal of this quick start guide is to introduce you to
                                         Unreal
                                         Engine 4`s (UE4) development environment. By the end of this guide,
                                         you`ll
                                         know how to set up and develop C++ Projects in UE4. This guide shows
                                         you
                                         how
                                         to create a new Unreal Engine project, add a new C++ class to it,
                                         compile
                                         the project, and add an instance of a new class to your level. By
                                         the
                                         time
                                         you reach the end of this guide, you`ll be able to see your
                                         programmed
                                         Actor
                                         floating above a table in the level. </p>
                                 </div>
                             </li>
                             <li>
                                 <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Some Special
                                     Tags </a>
                                 <div class="uk-accordion-content mt-3">
                                     <p> The primary goal of this quick start guide is to introduce you to
                                         Unreal
                                         Engine 4`s (UE4) development environment. By the end of this guide,
                                         you`ll
                                         know how to set up and develop C++ Projects in UE4. This guide shows
                                         you
                                         how
                                         to create a new Unreal Engine project, add a new C++ class to it,
                                         compile
                                         the project, and add an instance of a new class to your level. By
                                         the
                                         time
                                         you reach the end of this guide, you`ll be able to see your
                                         programmed
                                         Actor
                                         floating above a table in the level. </p>
                                 </div>
                             </li>
                             <li>
                                 <a class="uk-accordion-title font-semibold text-xl mt-4" href="#"> Html
                                     Introduction </a>
                                 <div class="uk-accordion-content mt-3">
                                     <p> The primary goal of this quick start guide is to introduce you to
                                         Unreal
                                         Engine 4`s (UE4) development environment. By the end of this guide,
                                         you`ll
                                         know how to set up and develop C++ Projects in UE4. This guide shows
                                         you
                                         how
                                         to create a new Unreal Engine project, add a new C++ class to it,
                                         compile
                                         the project, and add an instance of a new class to your level. By
                                         the
                                         time
                                         you reach the end of this guide, you`ll be able to see your
                                         programmed
                                         Actor
                                         floating above a table in the level. </p>
                                 </div>
                             </li>
                         </ul>
                     </div>



                 </div>
             </div>


         </div>

         <!-- This is the modal -->
         <div id="modal-example" class="lg:ml-80" uk-modal>
             <div class="uk-modal-dialog uk-modal-body rounded-md shadow-xl">

                 <button
                     class="absolute block top-0 right-0 m-6 rounded-full bg-gray-100 leading-4 p-1 text-2xl uk-modal-close"
                     type="button">
                     <i class="icon-feather-x"></i>
                 </button>

                 <div class="text-sm mb-2"> Section 2 </div>
                 <h2 class="mb-5 font-semibold text-2xl"> Your First webpage </h2>
                 <p class="text-base">Do You want to skip the rest of this chapter and chumb to next chapter.</p>

                 <div class="text-right  pt-3 mt-3">
                     <a href="#" class="py-2 inline-block px-8 rounded-md hover:bg-gray-200 uk-modal-close">
                         Stay </a>
                     <a href="#" class="button"> Continue </a>
                 </div>
             </div>
         </div>


     </div>


     <!-- Javascript
    ================================================== -->
     <script src="{{ asset('demo/code.jquery.com/jquery-3.6.0.min.js') }}"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="{{ asset('demo/assets/js/uikit.js') }}"></script>
     <script src="{{ asset('demo/assets/js/tippy.all.min.js') }}"></script>
     <script src="{{ asset('demo/assets/js/simplebar.js') }}"></script>
     <script src="{{ asset('demo/assets/js/custom.js') }}"></script>
     <script src="{{ asset('demo/assets/js/bootstrap-select.min.js') }}"></script>
     <script src="{{ asset('demo/unpkg.com/ionicons%405.2.3/dist/ionicons.js') }}"></script>

 </body>

 </html>
