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
                    {{ $course->name }}
                </h3>
                <div class="btn-tabs" data-tabs="true">
                    <a class="btn btn-icon active" data-tab-toggle="#projects_cards" href="#">
                        <i class="ki-filled ki-category"></i>
                    </a>
                    <a class="btn btn-icon" data-tab-toggle="#projects_list" href="#">
                        <i class="ki-filled ki-row-horizontal"></i>
                    </a>
                </div>
            </div>
            <!-- end: toolbar -->
            <!-- begin: cards -->
            <div id="projects_cards">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                    @foreach ($course->subsections as $subsection)
                        <div class="card p-7.5 {{ !$subsection->can_access ? 'opacity-50 pointer-events-none' : '' }}">
                            <div class="flex items-center justify-between mb-3 lg:mb-6">
                                <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                    {{ $subsection->order }} <!-- Display subsection order -->
                                </div>

                                @if ($subsection->can_access)
                                    <a href="{{route('courses.enroll', $subsection->id)}}" class="badge badge-success badge-outline">
                                        {{ $subsection->enrolled ? 'Enrolled' : 'Enroll' }}</a>
                                @else
                                    <span class="badge badge-secondary badge-outline">
                                        {{ $subsection->enrolled ? 'Enrolled' : 'Locked' }}</span>
                                @endif

                            </div>
                            <div class="flex flex-col mb-3 lg:mb-6">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                    href="#">
                                    {{ $subsection->name }} <!-- Display subsection name -->
                                </a>
                                <span class="text-sm font-medium text-gray-600">
                                    {{ $subsection->details }} <!-- Display subsection details -->
                                </span>
                            </div>
                            <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
                                <span class="text-sm font-medium text-gray-500">
                                    Start:
                                    <span class="text-sm font-semibold text-gray-700">
                                        {{ $subsection->enrolled_at }} <!-- Display enrollment timestamp -->
                                    </span>
                                </span>
                            </div>
                            <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                                <div class="progress-bar" style="width: {{ $subsection->progress }}%"></div>
                            </div>
                            <div class="flex -space-x-2">
                                @foreach ($subsection->enrolledStudents as $student)
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                            src="{{ $student->avatar_url }}"> <!-- Display enrolled students' picture -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex grow justify-center pt-5 lg:pt-7.5">
                    <a class="btn btn-link" href="#">
                        Show more projects
                    </a>
                </div>
            </div>

            <!-- end: list -->
        </div>
        <!-- end: grid -->
    </div>
@endsection
@section('script')
@endsection