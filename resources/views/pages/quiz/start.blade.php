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
                     <div class="card grow" style="width: 600px;" id="question_1" >
                         <div class="card-body px-12 py-10 lg:px-16 lg:py-12">
                             <div class="flex flex-col gap-6">
                                 <h2 class="text-2xl font-semibold text-gray-900 text-start">
                                     1. What is the purpose of our blog?
                                 </h2>
                                 <div class="grid grid-cols-1 gap-5 lg:gap-7.5">
                                     <div class="col-span-1">
                                         <div class="flex flex-col items-start gap-4">
                                             <label class="radio-group">
                                                 <input class="radio" name="desktop_notification" type="radio"
                                                     value="1">
                                                 <span class="radio-label radio-label-sm">
                                                     All new messages (Recommended)
                                                 </span>
                                             </label>
                                             <label class="radio-group">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="2">
                                                 <span class="radio-label radio-label-sm">
                                                     Direct @mentions
                                                 </span>
                                             </label>
                                             <label class="radio-group">
                                                 <input checked="" class="radio" name="desktop_notification"
                                                     type="radio" value="3">
                                                 <span class="radio-label radio-label-sm">
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



                 <div class="card grow hidden" id="question_2">
                     <div class="card-header">
                         <h3 class="card-title">
                             Activity
                         </h3>
                         <div class="flex items-center gap-2">
                             <label class="switch">
                                 <span class="switch-label">
                                     Auto refresh:
                                     <span class="switch-on:hidden">
                                         Off
                                     </span>
                                     <span class="hidden switch-on:inline">
                                         On
                                     </span>
                                 </span>
                                 <input checked="" name="check" type="checkbox" value="1" />
                             </label>
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="flex flex-col">
                             <div class="flex items-start relative">
                                 <div class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-people text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             Posted a new article
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/blogger.html">
                                                 Top 10 Tech Trends
                                             </a>
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             Today, 9:00 AM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-share text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             I couldn't resist sharing a sneak peek of our
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/blogger.html">
                                                 upcoming content
                                             </a>
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             5 days ago, 4:07 PM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-coffee text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             Reaching the milestone of
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/feeds.html">
                                                 10,000 followers
                                             </a>
                                             on the blog was a dream come true
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             5 days ago, 4:07 PM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-design-1 text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             Onboarded a talented designer to our creative team, adding valuable expertise
                                             to upcoming projects.
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             2 weeks ago, 10:45 AM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-like-shapes text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             Hosted a virtual
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/creator.html">
                                                 team-building event
                                             </a>
                                             , fostering collaboration and strengthening bonds among team members.
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             1 month ago, 13:56 PM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-cup text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             We recently
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/nft.html">
                                                 celebrated
                                             </a>
                                             the blog's 1-year anniversary
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             3 months ago, 4:07 PM
                                         </span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer justify-center">
                         <a class="btn btn-link" href="#">
                             All-time Activity
                         </a>
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
