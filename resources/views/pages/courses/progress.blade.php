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
                                Achieved Badges
                            </h3>
                            <div class="menu" data-menu="true">
                                <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                                    data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                                    <a href="/account/badges" class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-exit-right-corner">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-7.5">
                            <div class="flex items-center flex-wrap gap-3 lg:gap-4">
                                @foreach ($badges as $badge)
                                    <a href="#">
                                        <div class="relative size-[50px] shrink-0" tooltip='{{ $badge->name }}'>
                                            <svg class="w-full h-full stroke-{{ $badge->color }}-clarity fill-{{ $badge->color }}-light"
                                                fill="none" height="48" viewBox="0 0 44 48" width="44"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z"
                                                    fill="">
                                                </path>
                                                <path
                                                    d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z"
                                                    stroke="">
                                                </path>
                                            </svg>
                                            <div
                                                class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
                                                <i
                                                    class="ki-filled ki-{{ $badge->icon }} text-1.5xl ps-px text-{{ $badge->color }}">
                                                </i>
                                            </div>
                                        </div> 
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <div class="card"> 
                        <div class="card-table scrollable-x-auto">
                            <table class="table text-right">
    <thead>
        <tr>
            <th class="text-left min-w-52">Project Name</th>
            <th class="min-w-40">Progress</th>
            <th class="min-w-32">People</th>
            <th class="w-[30px]"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coursesWithProgress as $course)
            <tr>
                <td class="text-left">
                    <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
                        {{ $course->name }}
                    </a>
                </td>
                <td>
                    <div class="progress {{ $course->progressColor }}">
                        <div class="progress-bar" style="width: {{ $course->progress }}%">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex justify-end shrink-0">
                        <div class="flex -space-x-2">
                            @foreach ($course->studentsStartedCourse as $student)
                                @if ($student)
                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                        src="{{ asset('students_pic/' . ($student->profile_pic ?? 'default.png')) }}"
                                        alt="{{ $student->name }}" />
                                @endif
                            @endforeach
                            @if ($course->studentsStartedCourse->count() > 3)
                                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                                    +{{ $course->studentsStartedCourse->count() - 3 }}
                                </span>
                            @endif
                        </div>
                    </div>
                </td>
                <td class="text-left">
                    <div class="menu" data-menu="true">
                        <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                <i class="ki-filled ki-dots-vertical"></i>
                            </button>
                            <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon"><i class="ki-filled ki-search-list"></i></span>
                                        <span class="menu-title">View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- end: grid -->
    </div>
@endsection
