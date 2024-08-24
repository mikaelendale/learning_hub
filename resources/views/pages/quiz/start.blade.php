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
                 <div class="card grow" id="question_1">
                     <div class="card-body px-10 py-7.5 lg:pr-12.5">
                         <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                             <div class="flex flex-col gap-3">
                                 <h2 class="text-1.5xl font-semibold text-gray-900">
                                    1, Unlock Creative
                                     <br>
                                     Partnerships on Our Blog
                                 </h2>
                                 <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
                                    <div class="col-span-1">
                                         <div class="text-sm text-gray-700 leading-5.5">
                                             Discover new opportunities to share your creative thoughts and ideas with our audience.
                                             Join our blog and let us know what you think.
                                             We're excited to help you connect with like-minded individuals and share your unique insights.
                                         </div>
    
                                    </div>
                                 </div>
                                 <p class="text-sm text-gray-700 leading-5.5">
                                     Explore exciting collaboration opportunities with our blog.
                                     We're open to partnerships, guest posts, and more.
                                     Join us to share your insights and grow your audience.
                                 </p>
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
                                 <div class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                 <div class="card grow hidden" id="question_3">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-entrance-left text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             I had the privilege of interviewing an industry expert for an
                                             <a class="text-sm font-medium link"
                                                 href="../public-profile/profiles/blogger.html">
                                                 upcoming blog post
                                             </a>
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             2 days ago, 4:07 PM
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                 <div class="card grow hidden" id="question_4">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-code text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col pb-2.5">
                                         <span class="text-sm font-medium text-gray-700">
                                             Jenny attended a Nature Photography Immersion workshop
                                         </span>
                                         <span class="text-xs font-medium text-gray-500">
                                             3 days ago, 11:45 AM
                                         </span>
                                     </div>
                                     <div class="card shadow-none">
                                         <div class="card-body">
                                             <div class="grid gap-4">
                                                 <div class="flex flex-col md:flex-row md:items-center gap-5">
                                                     <div class="flex items-center gap-5 shrink-0">
                                                         <div class="border border-brand-clarity rounded-lg max-h-20">
                                                             <div
                                                                 class="flex items-center justify-center border-b border-b-brand-clarity bg-brand-light rounded-t-lg">
                                                                 <span class="text-2sm text-brand fw-medium p-2">
                                                                     Apr
                                                                 </span>
                                                             </div>
                                                             <div class="flex items-center justify-center size-12">
                                                                 <span
                                                                     class="fw-semibold text-gray-800 text-1.5xl tracking-tight">
                                                                     02
                                                                 </span>
                                                             </div>
                                                         </div>
                                                         <img alt="" class="rounded-lg max-h-20 max-w-full"
                                                             src="../../../../static/metronic/tailwind/dist/assets/media/images/600x400/8.jpg">
                                                         </img>
                                                     </div>
                                                     <div class="flex flex-col gap-2">
                                                         <a class="text-xs font-medium text-brand leading-[14px] hover:text-primary-active mb-px"
                                                             href="#">
                                                             Photo Workshop
                                                         </a>
                                                         <a class="text-md font-semibold hover:text-primary text-gray-900 leading-4"
                                                             href="#">
                                                             Nature Photography Immersion
                                                         </a>
                                                         <p class="text-xs font-medium text-gray-700 leading-[22px]">
                                                             Enhance your nature photography skills in a hands-on workshop
                                                             guided by experienced photographers.
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="flex items-start relative">
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
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
                                 <div
                                     class="w-9 left-0 top-9 absolute bottom-0 translate-x-1/2 border-l border-l-gray-300">
                                 </div>
                                 <div
                                     class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-300 size-9 text-gray-600">
                                     <i class="ki-filled ki-rocket text-base">
                                     </i>
                                 </div>
                                 <div class="pl-2.5 mb-7 text-md grow">
                                     <div class="flex flex-col">
                                         <div class="text-sm font-medium text-gray-800">
                                             Completed phase one of client project ahead of schedule.
                                         </div>
                                         <span class="text-xs font-medium text-gray-500">
                                             6 days ago, 10:45 AM
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
