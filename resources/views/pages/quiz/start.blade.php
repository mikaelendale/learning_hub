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
     <div class="container-fixed">
         <div class="grid gap-5 lg:gap-7.5">

             <div class="flex justify-center gap-2.5" data-tabs="true">
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary active"
                     data-tab-toggle="#question_1" href="#">
                     01
                 </a>
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     data-tab-toggle="#question_2" href="#">
                     02
                 </a>
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     data-tab-toggle="#question_3" href="#">
                     03
                 </a>
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     data-tab-toggle="#question_4" href="#">
                     04
                 </a>
             </div>

             <!-- begin: activity -->
             <div class="flex justify-center gap-2.5">
                 <div class="flex justify-center items-center min-h-screen">
                     <div class="card grow" style="width: 600px;" id="question_1">
                         <div class="card-body px-12 py-10 lg:px-16 lg:py-12" style="user-select: none;">
                             <div class="flex flex-col gap-6">
                                 <h2 class="text-2xl font-semibold text-gray-900 text-start" style="user-select: none;">
                                     1. What is the purpose of our blog?
                                 </h2>
                                 <div class="grid grid-cols-1 gap-5 lg:gap-7.5">
                                     <div class="col-span-1">
                                         <div class="flex flex-col items-start gap-4" style="user-select: none;">
                                             <label class="radio-group" style="user-select: none;">
                                                 <input class="radio" name="desktop_notification" type="radio"
                                                     value="1">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     All new messages (Recommended)
                                                 </span>
                                             </label>
                                             <label class="radio-group" style="user-select: none;">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="2">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     Direct @mentions
                                                 </span>
                                             </label>
                                             <label class="radio-group" style="user-select: none;">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="3">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     Disabled
                                                 </span>
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                      <div class="card grow hidden" style="width: 600px;" id="question_2">
                         <div class="card-body px-12 py-10 lg:px-16 lg:py-12" style="user-select: none;">
                             <div class="flex flex-col gap-6">
                                 <h2 class="text-2xl font-semibold text-gray-900 text-start" style="user-select: none;">
                                     2. What is the purpose of our blog?
                                 </h2>
                                 <div class="grid grid-cols-1 gap-5 lg:gap-7.5">
                                     <div class="col-span-1">
                                         <div class="flex flex-col items-start gap-4" style="user-select: none;">
                                             <label class="radio-group" style="user-select: none;">
                                                 <input class="radio" name="" type="radio"
                                                     value="1">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     All new messages (Recommended)
                                                 </span>
                                             </label>
                                             <label class="radio-group" style="user-select: none;">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="2">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     Direct @mentions
                                                 </span>
                                             </label>
                                             <label class="radio-group" style="user-select: none;">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="3">
                                                 <span class="radio-label radio-label-sm" style="user-select: none;">
                                                     Disabled
                                                 </span>
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="flex justify-center gap-2.5" data-tabs="true">
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary active"
                     data-tab-toggle="#question_1" href="#">
                     Previous
                 </a>
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     data-tab-toggle="#question_2" href="#">
                     Next
                 </a>
             </div>
         </div>
     </div>
 @endsection

 {{-- <div class="quiz-container">
         <h1>{{ $quiz->course->name }} - Quiz</h1>
         <p>Time Allotted: {{ $quiz->time_alloted }} minutes</p>
         <p>Total Score: {{ $quiz->score }}</p>

         <!-- Display quiz questions and answers -->
         <form action="{{ route('quizzes.submit', ['quizId' => $quiz->id]) }}" method="POST">
             @csrf
             @foreach ($quiz->questions as $index => $question)
                 <div class="question mb-4">
                     <p><strong>Question {{ $index + 1 }}:</strong> {{ $question->question }}</p>
                     @foreach ($question->answers as $answer)
                         <div class="answer mb-2">
                             <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}"
                                 id="answer_{{ $answer->id }}">
                             <label for="answer_{{ $answer->id }}">
                                 {{ $answer->answer }}
                             </label>
                         </div>
                     @endforeach
                 </div>
             @endforeach

             <button type="submit" class="btn btn-primary">Submit Quiz</button>
         </form>
     </div> --}}
