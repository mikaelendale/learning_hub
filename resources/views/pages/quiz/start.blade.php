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
             <!-- Navigation for questions -->
             <div class="flex justify-center gap-2.5" data-tabs="true">
                 @foreach ($quiz->questions as $index => $question)
                     <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary {{ $index === 0 ? 'active' : '' }}"
                         data-tab-toggle="#question_{{ $index + 1 }}" href="#">
                         {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                     </a>
                 @endforeach
                 <!-- Tab for submit -->
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     data-tab-toggle="#question_submit" href="#">
                     Submit
                 </a>
             </div>

             <!-- Questions -->
             <div class="flex justify-center gap-2.5">
                 <div class="flex justify-center items-center min-h-screen">
                     <form id="quiz-form" action="{{ route('quizzes.submit') }}" method="POST">
                         @csrf
                         @foreach ($quiz->questions as $index => $question)
                             <div class="card grow {{ $index === 0 ? '' : 'hidden' }}" style="width: 600px;"
                                 id="question_{{ $index + 1 }}">
                                 <div class="card-body px-12 py-10 lg:px-16 lg:py-12" style="user-select: none;">
                                     <div class="flex flex-col gap-6">
                                         <h2 class="text-2xl font-semibold text-gray-900 text-start"
                                             style="user-select: none;">
                                             {{ $index + 1 }}. {{ $question->question }}
                                         </h2>
                                         <div class="grid grid-cols-1 gap-5 lg:gap-7.5">
                                             <div class="col-span-1">
                                                 <div class="flex flex-col items-start gap-4" style="user-select: none;">
                                                     @foreach ($question->answers as $answer)
                                                         <label class="radio-group" style="user-select: none;">
                                                             <input class="radio" name="answers[{{ $question->id }}]"
                                                                 type="radio" value="{{ $answer->id }}">
                                                             <span class="radio-label radio-label-sm"
                                                                 style="user-select: none;">
                                                                 {{ $answer->answer }}
                                                             </span>
                                                         </label>
                                                     @endforeach
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                         <!-- Submit tab content -->
                         <div class="card grow hidden" style="width: 600px;" id="question_submit">
                             <div class="card-body px-12 py-10 lg:px-16 lg:py-12" style="user-select: none;">
                                 <div class="flex flex-col gap-6">
                                     <h2 class="text-2xl font-semibold text-gray-900 text-start" style="user-select: none;">
                                         Thank you for completing the quiz!
                                     </h2>
                                     <div class="grid grid-cols-1 gap-5 lg:gap-7.5">
                                         <div class="col-span-1 flex justify-center">
                                             <button type="submit" class="btn btn-primary" id="submit-btn">
                                                 Submit Quiz
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

             <!-- Navigation buttons for previous/next -->
             <div class="flex justify-center gap-2.5" data-tabs="true">
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     id="prev-btn" href="#">
                     Previous
                 </a>
                 <a class="btn btn-sm text-gray-600 hover:text-primary tab-active:bg-primary-light tab-active:text-primary"
                     id="next-btn" href="#">
                     Next
                 </a>
             </div>
         </div>
     </div>

     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const tabs = document.querySelectorAll('[data-tab-toggle]');
             const prevBtn = document.getElementById('prev-btn');
             const nextBtn = document.getElementById('next-btn');
             const submitBtn = document.getElementById('submit-btn');
             let activeIndex = 0;

             function updateTabs() {
                 tabs.forEach((tab, index) => {
                     const target = document.querySelector(tab.dataset.tabToggle);
                     if (index === activeIndex) {
                         tab.classList.add('active');
                         target.classList.remove('hidden');
                     } else {
                         tab.classList.remove('active');
                         target.classList.add('hidden');
                     }
                 });
             }

             function validateForm() {
                 let isValid = true;

                 @foreach ($quiz->questions as $question)
                     if (!document.querySelector(`input[name="answers[{{ $question->id }}]"]:checked`)) {
                         isValid = false;
                         alert(`Please select an answer for question {{ $loop->iteration }}.`);
                         return;
                     }
                 @endforeach

                 return isValid;
             }

             nextBtn.addEventListener('click', function() {
                 if (activeIndex < tabs.length - 1) {
                     activeIndex++;
                     updateTabs();
                 }
             });

             prevBtn.addEventListener('click', function() {
                 if (activeIndex > 0) {
                     activeIndex--;
                     updateTabs();
                 }
             });

             submitBtn.addEventListener('click', function(event) {
                 if (!validateForm()) {
                     event.preventDefault();
                 }
             });

             updateTabs();
         });
     </script>
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
