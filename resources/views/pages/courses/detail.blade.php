@extends('layouts.master')
@section('head')
    Course {{ $course->name }}
@endsection
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
            </div>
            <!-- end: toolbar -->
            <!-- begin: cards -->
            <div id="projects_cards">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                    @if ($course->subsections->isNotEmpty())
                        @foreach ($course->subsections as $index => $subsection)
                            @php
                                // Determine if the previous subsection is completed using SubsectionCompleted model
                                $previousSubsection = $index > 0 ? $course->subsections[$index - 1] : null;
                                $previousSubsectionCompleted = $previousSubsection
                                    ? \App\Models\SubsectionCompleted::where('student_id', $userId)
                                        ->where('subsection_id', $previousSubsection->id)
                                        ->exists()
                                    : true; // Allow access if there's no previous subsection

                                $canAccess = $index == 0 || $previousSubsectionCompleted;
                                
                                // Calculate progress based on completed modules
                                $totalModules = $subsection->courseModules->count();
                                $completedModules = $subsection->courseModules
                                    ->filter(function ($module) use ($userId) {
                                        return $module->isCompletedBy($userId);
                                    })
                                    ->count();
                                $progress = $totalModules > 0 ? ($completedModules / $totalModules) * 100 : 0;
                                
                                // Check if the current subsection is completed
                                $subsectionCompleted = \App\Models\SubsectionCompleted::where('student_id', $userId)
                                    ->where('subsection_id', $subsection->id)
                                                                    ->exists();
                            @endphp

                            <div class="card p-7.5 {{ !$canAccess ? 'opacity-50 pointer-events-none' : '' }}">
                                <div class="flex items-center justify-between mb-3 lg:mb-6">
                                    <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                        {{ $subsection->order }}
                                    </div>

                                    @if ($canAccess)
                                        <a href="{{ route('courses.enroll', $subsection->id) }}"
                                            class="badge badge-success badge-outline">
                                            {{ $subsection->enrolled ? 'Enrolled' : 'Enroll' }}
                                        </a>
                                    @else
                                        <span class="badge badge-secondary badge-outline">
                                            {{ $subsection->enrolled ? 'Enrolled' : 'Locked' }}
                                        </span>
                                    @endif

                                </div>
                                <div class="flex flex-col mb-3 lg:mb-6">
                                    <a class="text-lg font-semibold text-gray-900 hover:text-primary-active mb-px"
                                        href="#">
                                        {{ $subsection->name }}
                                    </a>
                                    <span class="text-sm font-medium text-gray-600">
                                        {{ $subsection->detail }}
                                    </span>
                                </div>
                                <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                                    <div class="progress-bar" style="width: {{ $progress }}%"></div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="flex">
                                        @if ($canAccess && $subsectionCompleted)
                                            @foreach ($subsection->badges as $badge)
                                                @if (!$claimedBadges->contains($badge->id))
                                                    <!-- Check if the badge has already been claimed -->
                                                    <form action="{{ route('claim.badge', $badge->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-success">
                                                            <i class="ki-filled ki-{{$badge->icon}}"></i>
                                                            Claim Badge
                                                        </button>
                                                    </form>
                                                @else
                                                    <span class="btn btn-sm btn-secondary" aria-disabled="true">
                                                        <i class="ki-filled ki-{{$badge->icon}}"></i>
                                                        Claimed Badge
                                                    </span>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-  p-7.5">
                            <p class="text-lg font-semibold text-gray-400">No modules available.</p>
                        </div>
                    @endif


                </div>
            </div>



            <!-- end: list -->
        </div>
        <!-- end: grid -->
    </div>
@endsection
@section('script')
@endsection
