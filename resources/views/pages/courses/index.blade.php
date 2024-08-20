@extends('layouts.master')
@section('head')
    Courses Attended
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('li_1')
            Courses
        @endslot
        @slot('title')
            Home
        @endslot
        @slot('subtitle')
            Attended
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
        <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
            <!-- begin: cards -->
            <div id="projects_cards">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                    @foreach ($coursesWithProgress as $course)
                        <div class="card p-7.5">
                            <div class="flex items-center justify-between mb-3 lg:mb-6">
                                <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                    <img alt="" class=""
                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/plurk.svg" />
                                </div>
                                <span class="badge badge-primary badge-outline">
                                    {{ $course->status }}
                                </span>
                            </div>
                            <div class="flex flex-col mb-3 lg:mb-6">
                                <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                    href="#">
                                    {{ $course->name }}
                                </a>
                                <span class="text-sm font-medium text-gray-600">
                                    {{ $course->description }}
                                </span>
                            </div>
                            <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
                                <span class="text-sm font-medium text-gray-500">
                                    Start:
                                    <span class="text-sm font-semibold text-gray-700">
                                        {{ $course->created_at->format('M d') }}
                                    </span>
                                </span>
                                <span class="text-sm font-medium text-gray-500">
                                    End:
                                    <span class="text-sm font-semibold text-gray-700">
                                        {{ $course->created_at->format('Dec d') }}
                                    </span>
                                </span>
                            </div>
                            <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                                <div class="progress-bar" style="width: {{ $course->progress }}%">
                                </div>
                            </div>
                            <div class="flex -space-x-2">
                                @foreach ($course->subsections as $subsection)
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                            src="path_to_subsection_image" />
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
            <!-- end: cards -->
        </div>
    </div>
@endsection
