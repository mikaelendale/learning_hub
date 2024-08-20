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
         Lalo Dev Learning Hub | Module
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
         integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                     <i class="fa-solid fa-arrow-left"></i>&nbsp;
                     <span class="text-sm md:inline hidden"> Back</span>
                 </a>
             </div>

             <!-- title -->
             <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2">{{ $subsection->name }}</h1>

             <!-- sidebar list -->
             <div class="sidebar_inner is-watch-2" data-simplebar>

                 <div class="lg:inline hidden">
                     <div class="relative overflow-hidden rounded-md bg-gray-200 h-1 mt-4">
                         <div class="w-2/4 h-full bg-green-500"></div>
                     </div>
                     <div class="mt-2 mb-3 text-sm border-b pb-3">
                         <div> 46% Complete</div>
                         <div> Last activity on April 20, 2021</div>
                     </div>
                 </div>

                 <div id="curriculum">
                     <div uk-accordion="multiple: true" class="divide-y space-y-3">

                         <div class="uk-open">
                             <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                 <div class="mb-1 text-sm font-medium"> Section</div>
                             </a>
                             <div class="uk-accordion-content mt-3">
                                 <ul class="course-curriculum-list"
                                     uk-switcher="connect: #video_tabs; animation: animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                     @foreach ($subsection->courseModules as $courseModule)
                                         <li>
                                             <a href="#">
                                                 {{ $courseModule->name }}
                                             </a>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- <div class="mt-5">
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

                 </div> --}}

             </div>

             <!-- overly for mobile -->
             <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

         </div>

         <!-- Main Contents -->
         <div class="main_content">

             <div class="relative">
                 <ul class="uk-switcher relative z-10" id="video_tabs">
                     @foreach ($subsection->courseModules as $courseModule)
                         <li>
                             <div class="embed-video">
                                 <iframe src="{{ $courseModule->video_url }}" frameborder="0" allowfullscreen
                                     uk-responsive></iframe>
                             </div>
                             <!-- Announcements Bar -->
                             <nav class="cd-secondary-nav border-b md:p-0 lg:px-6 bg-white"
                                 uk-sticky="cls-active:shadow-sm; media: @s">
                                 <ul
                                     uk-switcher="connect: #course-tabs-{{ $courseModule->id }}; animation: uk-animation-fade">
                                     <li><a href="#" class="lg:px-2"> Overview </a></li>
                                     {{-- <li><a href="#" class="lg:px-2"> Announcements </a></li> --}}
                                 </ul>
                             </nav>
                             <div class="max-w-2xl lg:py-6 mx-auto uk-switcher"
                                 id="course-tabs-{{ $courseModule->id }}">
                                 <!-- Overview -->
                                 <div>
                                     <div class="grid lg:grid-cols-3 mt-8 gap-8">
                                         <div class="col-span-4">
                                             <p>{!! $courseModule->description !!}</p>
                                             <div class="container">
                                                 <div class="flex justify-end mt-4">
                                                     <!-- Form to mark course module as done -->
                                                     <form method="POST"
                                                         action="{{ route('coursemodule.markdone', $courseModule->id) }}">
                                                         @csrf
                                                         @method('PATCH') <!-- or POST depending on your logic -->
                                                         <button type="submit" class="button">
                                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 24 24" stroke-width="1.5"
                                                                 stroke="currentColor" class="w-6 h-6 size-6">
                                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                                     d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                             </svg>&nbsp;
                                                             Mark Done
                                                         </button>
                                                     </form>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     @if (session('success'))
                                         <div class="bg-green-300 text-white p-3 rounded-md mb-4 text-sm">
                                             {{ session('success') }}
                                         </div>
                                     @endif
                                     <!-- Subsection Details -->
                                     <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2"> &nbsp;&nbsp;Comments
                                         ({{ $subsection->comments->count() }}) </h1>

                                     <!-- Comments Section -->
                                     <div class="container mx-auto px-4 lg:px-0">
                                         <div class="lg:flex lg:space-x-6 mt-6">
                                             <div class="w-full">
                                                 <div class="space-y-4">
                                                     @foreach ($subsection->comments as $comment)
                                                         @if (!$comment->parent_id)
                                                             <div class="relative">
                                                                 <div
                                                                     class="flex items-start space-x-3 bg-gray-100 p-3 rounded-md shadow-sm">
                                                                     <!-- Avatar -->
                                                                     <img src="{{ asset('students_pic/' . ($comment->students->profile_pic ?? 'default.png')) }}"
                                                                         alt="User Avatar"
                                                                         class="rounded-full w-10 h-10 object-cover border border-gray-300">

                                                                     <!-- Comment Content -->
                                                                     <div class="flex-1">
                                                                         <div class="flex justify-between items-center">
                                                                             <!-- User Name -->
                                                                             <h4
                                                                                 class="text-sm font-semibold text-gray-700">
                                                                                 {{ $comment->students->name ?? '[Deleted Student]' }}
                                                                             </h4>

                                                                             <!-- Timestamp -->
                                                                             <span class="text-xs text-gray-500">
                                                                                 {{ $comment->created_at ? $comment->created_at->format('jS, F Y') : 'Date not available' }}
                                                                             </span>
                                                                         </div>

                                                                         <!-- Comment Text -->
                                                                         <p class="text-sm text-gray-600 mt-1">
                                                                             {{ $comment->comment }}
                                                                         </p>

                                                                         <!-- Comment Actions -->
                                                                         <div
                                                                             class="mt-2 flex items-center space-x-2 text-xs text-gray-400">
                                                                             <button
                                                                                 class="hover:text-blue-500 transition"
                                                                                 onclick="setReply('{{ $comment->students->name }}', '{{ $comment->id }}')">Reply</button>
                                                                             <span>•</span>
                                                                         </div>
                                                                     </div>
                                                                 </div>

                                                                 <!-- Replies -->
                                                                 @if ($comment->replies->count())
                                                                     <div class="ml-12 mt-4 space-y-4">
                                                                         @foreach ($comment->replies as $reply)
                                                                             <div
                                                                                 class="flex items-start space-x-3 bg-gray-50 p-3 rounded-md shadow-sm">
                                                                                 <!-- Avatar -->
                                                                                 <img src="{{ asset('students_pic/' . ($reply->students->profile_pic ?? 'default.png')) }}"
                                                                                     alt="User Avatar"
                                                                                     class="rounded-full w-8 h-8 object-cover border border-gray-300">

                                                                                 <!-- Reply Content -->
                                                                                 <div class="flex-1">
                                                                                     <div
                                                                                         class="flex justify-between items-center">
                                                                                         <!-- User Name -->
                                                                                         <h4
                                                                                             class="text-sm font-semibold text-gray-700">
                                                                                             {{ $reply->students->name ?? '[Deleted Student]' }}
                                                                                         </h4>

                                                                                         <!-- Timestamp -->
                                                                                         <span
                                                                                             class="text-xs text-gray-500">
                                                                                             {{ $reply->created_at ? $reply->created_at->format('jS, F Y') : 'Date not available' }}
                                                                                         </span>
                                                                                     </div>

                                                                                     <!-- Reply Text -->
                                                                                     <p
                                                                                         class="text-sm text-gray-600 mt-1">
                                                                                         {{ $reply->comment }}
                                                                                     </p>
                                                                                 </div>
                                                                             </div>
                                                                         @endforeach
                                                                     </div>
                                                                 @endif
                                                             </div>
                                                         @endif
                                                     @endforeach
                                                 </div>
                                             </div>
                                         </div>


                                         <!-- Comment Form -->
                                         <div class="mt-8">
                                             <div class="rounded-md">


                                                 <!-- Comment Form -->
                                                 <div id="reply-message" class="mb-2 text-sm text-gray-600"></div>
                                                 <form method="POST" action="{{ route('comments.store') }}"
                                                     class="flex items-center bg-white border border-gray-300 rounded-full px-3 py-1.5 shadow-sm">
                                                     @csrf
                                                     <input type="hidden" name="subsection_id"
                                                         value="{{ $subsection->id }}">
                                                     <input type="hidden" name="parent_id" id="parent_id">

                                                     <input type="text" name="comment" id="comment"
                                                         placeholder="Write a comment..."
                                                         class="flex-grow bg-transparent border-none focus:outline-none focus:ring-0 placeholder-gray-500 text-sm px-2">

                                                     <button type="submit"
                                                         class="ml-2 bg-blue-600 text-white rounded-full p-2 hover:bg-blue-700 transition-colors duration-300">
                                                         <svg class="h-5 w-5" width="24" height="24"
                                                             viewBox="0 0 24 24" stroke-width="2"
                                                             stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                             <path stroke="none" d="M0 0h24v24H0z" />
                                                             <circle cx="12" cy="12" r="9" />
                                                             <line x1="16" y1="12" x2="8"
                                                                 y2="12" />
                                                             <line x1="16" y1="12" x2="12"
                                                                 y2="16" />
                                                             <line x1="16" y1="12" x2="12"
                                                                 y2="8" />
                                                         </svg>
                                                     </button>
                                                 </form>
                                                 <br><br>
                                             </div>
                                         </div>
                                     </div>

                                     <script>
                                         function setReply(name, id) {
                                             document.getElementById('reply-message').textContent = `Replying to ${name}`;
                                             document.getElementById('parent_id').value = id;
                                             document.getElementById('comment').focus();
                                         }
                                     </script>


                                 </div>
                                 <br><br>

                                 <!-- Faq -->
                                 <div>
                                     <h3 class="text-xl font-semibold mb-3"> Course Faq </h3>
                                     <ul uk-accordion="multiple: true" class="divide-y space-y-3 space-y-6">
                                         <li class="uk-open">
                                             <a class="uk-accordion-title font-semibold text-xl mt-4" href="#">
                                                 Html Introduction </a>
                                             <div class="uk-accordion-content mt-3">
                                                 <p> The primary goal of this quick start guide is to introduce you
                                                     to Unreal Engine 4's (UE4) development environment...</p>
                                             </div>
                                         </li>
                                         <!-- Additional Faq Items... -->
                                     </ul>
                                 </div>
                             </div>
                         </li>
                     @endforeach
                 </ul>
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
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             UIkit.util.on('#video_tabs', 'show', function() {
                 var iframes = document.querySelectorAll('iframe');
                 iframes.forEach(function(iframe) {
                     var src = iframe.src;
                     iframe.src = '';
                     iframe.src = src;
                 });
             });
         });
     </script>
 </body>

 </html>
