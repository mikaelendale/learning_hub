@extends('layouts.master')
@section('head')
    Courses
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('title')
            Level
        @endslot
        @slot('subtitle')
            Index
            @slot('li_1')
                Level
            @endslot
        @endslot
    @endcomponent
@endsection

@section('content')
    @if ($courses->isNotEmpty())
        <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
                <!-- begin: cards -->
                <div id="integrations_cards">
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                        @foreach ($courses as $course)
                            <div class="card">
                                <div class="card-body p-5 lg:p-7.5">
                                    <div class="flex items-center justify-between mb-3 lg:mb-5">
                                        <div class="flex items-center justify-center">
                                            <img alt="" class="h-11 shrink-0" src="{{ $course->image }}">
                                        </div>
                                        <a href="{{ route('courses.setDetail', ['id' => $course->id]) }}"
                                            onclick="event.preventDefault(); document.getElementById('course-detail-form-{{ $course->id }}').submit();"
                                            class="btn btn-sm btn-icon btn-clear btn-light">
                                            <i class="ki-filled ki-exit-right-corner"></i>
                                        </a>

                                        <form id="course-detail-form-{{ $course->id }}"
                                            action="{{ route('courses.setDetail') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        </form>
                                    </div>
                                    <div class="flex flex-col gap-1 lg:gap-2.5">
                                        <a class="text-base font-semibold text-gray-900 hover:text-primary-active"
                                            href="">
                                            {{ $course->name }}
                                        </a>
                                        <span class="text-2sm font-medium text-gray-600">
                                            {{ $course->description }}
                                        </span>
                                        <span class="text-2sm font-medium text-gray-600">
                                            Outcomes: {{ $course->outcomes }}
                                        </span>
                                        <div class="flex flex-wrap gap-1.5">
                                            @foreach ($course->subsections as $subsection)
                                                <span class="badge badge-sm">
                                                    {{ $subsection->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-between items-center py-3.5">
                                    @if ($course->is_quiz_available && $course->questions->count() > 0)
                                        <a class="btn btn-sm btn-light btn-success btn-outline btn-sm"
                                            href="{{ route('courses.quiz', ['course_id' => $course->id]) }}">
                                            Take Quiz
                                        </a>
                                    @else
                                        <a class="btn btn-sm btn-light btn-secondary btn-outline btn-sm"data-modal-toggle="#share_profile_modal">
                                            Take Quiz
                                        </a>
                                    @endif
                                    <div class="flex items-center gap-2.5">
                                        <div class="switch">
                                            @if ($course->status == 'published')
                                                <span class="badge badge-xs badge-primary badge-outline">Available</span>
                                            @else
                                                <span class="badge badge-xs badge-danger badge-outline">Unavailable</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- end: cards -->
            </div>
        </div>
    @endif
    {{-- Modal section --}}
    <div class="modal" data-modal="true" data-modal-disable-scroll="false" id="share_profile_modal">
        <div class="modal-content max-w-[500px] top-5 lg:top-[15%]">
            <div class="modal-header pr-2.5">
                <h3 class="modal-title badge badge-xs badge-danger badge-outline">
                   Finish the course first
                </h3>
                <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                    <i class="ki-filled ki-cross">
                    </i>
                </button>
            </div>
            <div class="modal-body grid gap-5 px-0 py-5">
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-gray-900 font-semibold text-2sm">
                           In order to take the final Quiz you have to finish the course
                        </label>
                    </div> 
                </div>   
            </div>
        </div>
    </div>

@endsection
