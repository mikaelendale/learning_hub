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
             Answers
             @slot('li_1')
                 Quiz
             @endslot
         @endslot
     @endcomponent
 @endsection

 @section('content')
     <div class="container-fixed">
         <!-- begin: works -->
         <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
             <!-- begin: list -->
             <p class="badge badge-xs badge-light badge-outline text-xl text-gray-100">Your Score: {{ $studentQuiz->score }} /
                 {{ count($quiz->questions) }}</p>
             <div id="teams_list">
                 <div class="flex flex-col gap-5 lg:gap-7.5">
                     @foreach ($quiz->questions as $question)
                         <div class="card p-7.5">
                             <div class="flex flex-wrap justify-between items-center gap-7">
                                 <div class="flex items-center gap-4">
                                     <div class="grid grid-col gap-1">
                                         <a class="text-base font-semibold text-gray-900 hover:text-primary-active mb-px"
                                             href="#">
                                             {{ $question->question }}
                                         </a>
                                         <span class="text-2sm font-medium text-gray-600">
                                             Your Answer:


                                         </span>
                                     </div>
                                 </div>
                                 <div class="flex flex-wrap items-center gap-6 lg:gap-12">
                                     <div class="grid justify-end min-w-20">
                                         @php
                                             $selectedAnswerId = session('unanswered_questions')[$question->id] ?? null;
                                             $answer = $question->answers->where('id', $selectedAnswerId)->first();
                                         @endphp
                                         @if ($answer)
                                             @if ($answer->is_correct)
                                                 <a class="btn btn-success btn-sm">
                                                     <i class="ki-filled ki-like">
                                                     </i>
                                                     Correct
                                                 </a>
                                             @else
                                                 <a class="btn btn-danger btn-sm">
                                                     <i class="ki-filled ki-dislike">
                                                     </i>
                                                     Incorrect
                                                 </a>
                                             @endif
                                         @else
                                             <a class="btn btn-light btn-sm">
                                                 <i class="ki-filled ki-check-circle">
                                                 </i>
                                                 No answer provided
                                             </a>
                                         @endif
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                     <div class="flex flex-wrap justify-end items-center gap-7">
                         <div class="flex items-center gap-4">
                             <a href="{{ route('courses.setQuiz') }}"
                                 onclick="event.preventDefault(); document.getElementById('quiz-form-{{ $quiz->id }}').submit();"
                                 class="btn btn-sm text-center justify-center btn-light btn-primary btn-outline ">
                                 Landing
                             </a>
                             <form id="quiz-form-{{ $quiz->id }}" action="{{ route('courses.setQuiz') }}" method="POST"
                                 style="display: none;">
                                 @csrf
                                 <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- end: list -->
         </div>
         <!-- end: works -->
     </div>
     <div class="contai
@endsection
