@extends('layouts.master')
@section('head')
    Courses enrolled
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Courses
        @endslot
        @slot('title')
            Enrolled
        @endslot
        @slot('subtitle')
            Enrolled
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
        <!-- begin: projects -->
        <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
            <!-- begin: list -->
            <div id="projects_list">
                @if ($coursesWithProgress->isNotEmpty())
                    <div class="flex flex-col gap-5 lg:gap-7.5">
                        @foreach ($coursesWithProgress as $course)
                            <div class="card p-7">
                                <div class="flex items-center flex-wrap justify-between gap-5">
                                    <div class="flex items-center gap-3.5">
                                        <div
                                            class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                            <img alt="" class="" src="{{ $course->image }}" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-lg font-semibold text-gray-900   mb-px"
                                                 >
                                                {{ $course->name }}
                                            </a>
                                            <span class="text-sm font-medium text-gray-600">
                                                {{ $course->description }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                        <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                            <span class="badge {{ $course->badgeColor }} badge-outline">
                                                {{ $course->status }}
                                            </span>
                                            <div class="progress h-1.5 w-36 {{ $course->progressColor }}">
                                                <div class="progress-bar" style="width: {{ $course->progress }}%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-5 lg:gap-14">
                                            <div class="flex justify-end w-24">
                                                <div class="flex -space-x-2">
                                                    @foreach ($course->studentsStartedCourse as $student)
                                                        <div class="flex">
                                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                src="{{ asset('students_pic/' . ($student->profile_pic ?? 'default.png')) }}"
                                                                alt="{{ $student->name }}" />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
                                                    data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                                    data-menu-item-trigger="click|lg:click">
                                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                        <i class="ki-filled ki-dots-vertical"></i>
                                                    </button>
                                                    <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                                        data-menu-dismiss="true">
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('courses.setDetail', ['id' => $course->id]) }}"
                                                                onclick="event.preventDefault(); document.getElementById('course-detail-form-{{ $course->id }}').submit();">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-filled ki-exit-right-corner"></i>
                                                                </span>
                                                                <span class="menu-title">
                                                                    Open
                                                                </span>
                                                            </a>
                                                            <form id="course-detail-form-{{ $course->id }}"
                                                                action="{{ route('courses.setDetail') }}" method="POST"
                                                                style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="course_id"
                                                                    value="{{ $course->id }}">
                                                            </form>
                                                        </div> 
                                                        <div class="menu-item">
                                                            <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                                href="https://t.me/lalo_dev">
                                                                <span class="menu-icon">
                                                                    <i class="ki-filled ki-dislike"></i>
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
                        @endforeach
                    </div>
                @else
                    <div class="flex grow justify-center pt-5 lg:pt-7.5">
                        <a class="btn btn-link" href="#">
                            No courses avaliable
                        </a>
                    </div>
                @endif
            </div>

            <!-- end: list -->
        </div>
        <!-- end: projects -->
    </div>
@endsection
