 @extends('layouts.master')
 @section('head')
     Leaderboard
 @endsection
 @section('breadcump')
     @component('components.breadcrumb')
         @slot('title')
             Leaders
         @endslot
         @slot('subtitle')
             Course
             @slot('li_1')
                 leaders
             @endslot
         @endslot
     @endcomponent
 @endsection

 @section('content')
     <div class="container-fixed">
         <!-- begin: works -->
         <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
             <!-- begin: toolbar -->
             <div class="flex flex-wrap items-center gap-5 justify-between">
                 <h3 class="text-lg text-gray-900 font-semibold">
                     Leaderboard
                 </h3>
                 <div class="flex gap-5">
                     <div class="btn-tabs" data-tabs="true">
                         <a class="btn btn-icon" data-tab-toggle="#campaigns_cards" href="#">
                             <i class="ki-filled ki-category">
                             </i>
                         </a>
                         <a class="btn btn-icon active" data-tab-toggle="#campaigns_list" href="#">
                             <i class="ki-filled ki-row-horizontal">
                             </i>
                         </a>
                     </div>
                     <button disabled href="https://t.me/lalo_dev" target="_blank" class="btn btn-primary">
                         You : @if ($loggedInStudent)
                             score {{ $loggedInStudent->total_score }},
                             badge {{ $loggedInStudent->badge_count }}
                         @else
                             <p>No data to view.</p>
                         @endif
                     </button>
                     <a href="https://t.me/lalo_dev" target="_blank" class="btn btn-danger btn-outline">
                         <i class="ki-filled ki-dislike">
                         </i>
                         Report
                     </a>
                 </div>
             </div>
             <!-- end: toolbar -->
             <!-- begin: cards -->
             <div class="hidden" id="campaigns_cards">
                 <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
                     @foreach ($topStudents as $student)
                         <div class="card overflow-hidden grow justify-between">
                             <div class="p-5 mb-5">
                                 <div class="flex items-center justify-between mb-5">
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
                                                     <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                         href="https://t.me/lalo_dev" target="_blank">
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
                                 <div class="flex items-center justify-center h-[50px] mb-2">
                                     <img alt="" class="size-[50px] shrink-0"
                                         src="{{ asset('students_pic/' . ($student->profile_pic ?? 'default.png')) }}"
                                         alt="{{ $student->name }}" />
                                 </div>
                                 <div class="text-center mb-7">
                                     <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                         {{ $student->name }}
                                     </a>
                                 </div>
                                 <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
                                     <div
                                         class="flex flex-col gap-1.5 border border-dashed border-gray-300 rounded-md px-2.5 py-2">
                                         <span class="text-gray-900 text-sm leading-none font-semibold">
                                             {{ $student->total_score }}
                                         </span>
                                         <span class="text-gray-600 text-xs font-medium">
                                             Total Pts
                                         </span>
                                     </div>
                                     <div
                                         class="flex flex-col gap-1.5 border border-dashed border-gray-300 rounded-md px-2.5 py-2">
                                         <span class="text-gray-900 text-sm leading-none font-semibold">
                                             {{ $student->badge_count }}
                                         </span>
                                         <span class="text-gray-600 text-xs font-medium">
                                             Total Badges
                                         </span>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
             <!-- end: cards -->
             <!-- begin: list -->
             <div class="" id="campaigns_list">
                 <div class="flex flex-col gap-5 lg:gap-7.5">
                     @foreach ($topStudents as $student)
                         <div class="card p-5 lg:p-7.5">
                             <div class="flex items-center flex-wrap justify-between gap-5">
                                 <div class="flex items-center gap-3.5">
                                     <div class="flex items-center justify-center w-[50px]">
                                         <img alt="" class="size-[50px] shrink-0"
                                             src="{{ asset('students_pic/' . ($student->profile_pic ?? 'default.png')) }}"
                                             alt="{{ $student->name }}" />
                                     </div>
                                     <div class="">
                                         <a class="text-lg font-semibold text-gray-900 hover:text-primary" href="#">
                                             {{ $student->name }}
                                         </a>
                                     </div>
                                 </div>
                                 <div class="flex items-center flex-wrap justify-between gap-5 lg:gap-12">
                                     <div class="flex items-center flex-wrap gap-2 lg:gap-5">
                                         <div
                                             class="flex flex-col gap-1.5 border border-dashed border-gray-300 rounded-md px-2.5 py-2">
                                             <span class="text-gray-900 text-sm leading-none font-semibold">
                                                 {{ $student->total_score }}
                                             </span>
                                             <span class="text-gray-600 text-xs font-medium">
                                                 Total Pts
                                             </span>
                                         </div>
                                         <div
                                             class="flex flex-col gap-1.5 border border-dashed border-gray-300 rounded-md px-2.5 py-2">
                                             <span class="text-gray-900 text-sm leading-none font-semibold">
                                                 {{ $student->badge_count }}
                                             </span>
                                             <span class="text-gray-600 text-xs font-medium">
                                                 Total Badges
                                             </span>
                                         </div>
                                         <div class="flex justify-center w-20">
                                             <span class="badge badge-success badge-outline">
                                                 {{ $student->name }}
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
                                             <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                                 data-menu-dismiss="true">
                                                 <div class="menu-item">
                                                     <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                         href="https://t.me/lalo_dev" target="_blank">
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
                     @endforeach
                 </div>
             </div>
             <!-- end: list -->
         </div>
         <!-- end: works -->
     </div>
 @endsection
