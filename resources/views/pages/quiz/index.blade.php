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
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
            <div class="col-span-1">
                <div class="grid gap-5 lg:gap-7.5">
                    <style>
                        .start-now-bg {
                            background-image: url('{{ asset('assets/media/images/2600x1200/bg-5.png') }}');
                        }

                        .dark .start-now-bg {
                            background-image: url('{{ asset('assets/media/images/2600x1200/bg-5-dark.png') }}');
                        }
                    </style>
                    @if (session('error'))
                        <div class="card">
                            <div class="bg-light rounded text-danger card-header gap-2" id="auth_social_sign_in">
                                <h3 class="card-title">
                                    {{ session('error') }}
                                </h3>
                            </div>
                        </div>
                    @endif

                    @if (session('info'))
                        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
                            role="alert">
                            <span class="block sm:inline">{{ session('info') }}</span>
                        </div>
                    @endif

                    <div
                        class="card flex-col gap-5 justify-between bg-[center_top_1.3rem] bg-no-repeat pt-5 lg:pt-10 px-5 start-now-bg bg-[length:700px]">
                        <div class="text-center">
                            <h3 class="text-gray-900 text-lg font-semibold leading-6 mb-1.5">
                                Start Quiz Now
                                <br>
                                Time allotted: {{ $quiz->time_alloted }} min
                            </h3>
                            <span class="text-gray-700 text-sm font-medium block mb-5">
                                Discover promotions crafted to match your preferences.
                            </span>

                            @if ($attempt >= 2)
                                <button class="btn btn-secondary btn-sm" disabled>
                                    Quiz Taken
                                </button>
                            @else
                                <a href="{{ route('quizzes.start') }}"
                                    onclick="event.preventDefault(); document.getElementById('start-quiz-form-{{ $quiz->id }}').submit();"
                                    class="btn btn-primary btn-sm">
                                    {{ $attempt === 1 ? 'Retake Quiz' : 'Take Quiz' }}
                                </a>
                            @endif

                            <form id="start-quiz-form-{{ $quiz->id }}" action="{{ route('quizzes.startQuiz') }}"
                                method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                            </form>
                        </div>
                        <div class="text-center">
                            <img alt="" class="dark:hidden max-h-[300px]" src="assets/media/images/2600x1200/3.png">
                            <img alt="" class="light:hidden max-h-[300px]"
                                src="assets/media/images/2600x1200/3-dark.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid gap-5 lg:gap-7.5">
                    <div class="card">
                        <div class="card-body lg:py-7.5">
                            <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
                                <div class="flex flex-wrap items-center gap-5 justify-between">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2.5">
                                            <h2 class="text-2xl font-semibold text-gray-900">
                                                Take the Quiz and results will appear here
                                            </h2>
                                        </div>
                                        <p class="text-2sm font-medium text-muted">
                                            // here //
                                        </p>
                                    </div>
                                </div>
                                @if ($studentQuiz)
                                    @php
                                        $score = $studentQuiz->score;
                                        $attempts = $studentQuiz->attempt;
                                        $totalQuestions = count($quiz->questions);
                                        $progressPercentage =
                                            ($score / ($totalQuestions * $quiz->questions->first()->point)) * 100;
                                    @endphp

                                    <div class="flex flex-col gap-3.5">
                                        @if ($studentQuiz)
                                            @php
                                                $totalQuestionsPoints = $totalPoints; // Total points possible
                                                $progressPercentage =
                                                    $totalPoints > 0 ? ($score / $totalQuestionsPoints) * 100 : 0;
                                            @endphp

                                            <span class="text-2sm font-medium text-gray-600">
                                                Score ({{ $score }} of {{ $totalQuestionsPoints }} points)
                                            </span>
                                            <div
                                                class="progress {{ $progressPercentage >= 90 ? 'progress-success' : ($progressPercentage >= 80 ? 'progress-warning' : 'progress-danger') }}">
                                                <div class="progress-bar" style="width: {{ $progressPercentage }}%"></div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end: grid -->
    </div>
@endsection
