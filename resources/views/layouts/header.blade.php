<!-- Header -->
<header class="flex items-center transition-[height] shrink-0 bg-[#fefefe] dark:bg-coal-500 h-[--tw-header-height]"
    data-sticky="true"
    data-sticky-class="transition-[height] fixed z-10 top-0 left-0 right-0 shadow-sm backdrop-blur-md bg-white/70 dark:bg-coal-500/70 dark:border-b dark:border-b-coal-100"
    data-sticky-name="header" data-sticky-offset="200px" id="header">
    <!-- Container -->
    <div class="container-fixed flex justify-between items-center lg:gap-4" id="header_container">
        <div class="flex items-center 2xl:-ml-[60px]">
            <div
                class="flex items-center justify-center rounded-full border border-gray-300 bg-light size-[42px] shrink-0 mr-2 lg:mr-5">
                <a href="/dashboard">
                    <img class="default-logo min-h-[22px] max-w-none" src="{{ asset('images/icon.png') }}"
                        width="30" />
                </a>
            </div>
            <div class="flex items-center">
                <h3 class="text-gray-700 text-base hidden md:block">
                    Learning Hub
                </h3>
                <span class="text-sm text-gray-400 font-medium px-2.5 hidden md:inline">
                    |
                </span>
                <div class="menu menu-default" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-start"
                        data-menu-item-toggle="dropdown" data-menu-item-trigger="hover">
                        <a href="/dashboard" class="menu-toggle text-gray-900 font-medium">
                            Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Logo -->
        <!-- Topbar -->
        <div class="flex items-center gap-3.5">
            <div class="flex items-center gap-1">
                <div class="dropdown" data-dropdown="true" data-dropdown-offset="115px, 10px"
                    data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
                    <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-600">
                        <i class="ki-filled ki-notification-on text-gray-600">
                        </i>
                    </button>
                    <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
                        <div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5"
                            id="notifications_header">
                            Notifications
                            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                                data-dropdown-dismiss="true">
                                <i class="ki-filled ki-cross">
                                </i>
                            </button>
                        </div>
                        <div class="border-b border-b-gray-200">
                        </div>
                        <div class="grow" id="notifications_tab_all">
                            <div class="flex flex-col">
                                <div class="scrollable-y-auto" data-scrollable="true"
                                    data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                    data-scrollable-offset="200px">
                                    <div class="flex flex-col gap-5 pt-3 pb-4 divider-y divider-gray-200">
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-4.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            Joe Lincoln
                                                        </a>
                                                        <span class="text-gray-700">
                                                            mentioned you in
                                                        </span>
                                                        <a class="hover:text-primary-active text-primary"
                                                            href="#">
                                                            Latest Trends
                                                        </a>
                                                        <span class="text-gray-700">
                                                            topic
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        18 mins ago
                                                        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                        </span>
                                                        Web Design 2024
                                                    </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                                                    <div class="text-2sm font-semibold text-gray-600 mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            @Cody
                                                        </a>
                                                        <span class="text-gray-700 font-medium">
                                                            For an expert opinion, check out what Mike has to say on
                                                            this topic!
                                                        </span>
                                                    </div>
                                                    <label class="input input-sm">
                                                        <input placeholder="Reply" type="text" value="" />
                                                        <button class="btn btn-icon">
                                                            <i class="ki-filled ki-picture">
                                                            </i>
                                                        </button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-5.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            Leslie Alexander
                                                        </a>
                                                        <span class="text-gray-700">
                                                            added new tags to
                                                        </span>
                                                        <a class="hover:text-primary-active text-primary"
                                                            href="#">
                                                            Web Redesign 2024
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        53 mins ago
                                                        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                        </span>
                                                        ACME
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <span class="badge badge-sm badge-info badge-outline">
                                                        Client-Request
                                                    </span>
                                                    <span class="badge badge-sm badge-warning badge-outline">
                                                        Figma
                                                    </span>
                                                    <span class="badge badge-sm badge-light badge-outline">
                                                        Redesign
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-27.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            Guy Hawkins
                                                        </a>
                                                        <span class="text-gray-700">
                                                            requested access to
                                                        </span>
                                                        <a class="hover:text-primary-active text-primary"
                                                            href="#">
                                                            AirSpace
                                                        </a>
                                                        <span class="text-gray-700">
                                                            project
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        14 hours ago
                                                        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                        </span>
                                                        Dev Team
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                        data-dismiss="#notification_request_3">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                        data-dismiss="#notification_request_3">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-1.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">
                                                            invites you to review a file.
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 hours ago
                                                        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                        </span>
                                                        742kb
                                                    </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <img class="h-5"
                                                        src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/pdf.svg" />
                                                    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1"
                                                        href="#">
                                                        Launch_nov24.pptx
                                                    </a>
                                                    <span class="font-medium text-gray-500 text-2xs">
                                                        Edited 39 mins ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-11.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="text-2sm font-medium mb-px">
                                                    <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                        href="#">
                                                        Raymond Pawell
                                                    </a>
                                                    <span class="text-gray-700">
                                                        posted a new article
                                                    </span>
                                                    <a class="hover:text-primary-active text-primary" href="#">
                                                        2024 Roadmap
                                                    </a>
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    1 hour ago
                                                    <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                    </span>
                                                    Roadmap
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                    src="assets/media/avatars/300-14.png" />
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                            href="#">
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">
                                                            wants to view your design project
                                                        </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                                                        3 day ago
                                                        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                        </span>
                                                        Metronic Launcher mockups
                                                    </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div
                                                        class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-light rounded border border-gray-200">
                                                        <img class="h-5"
                                                            src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/file-types/figma.svg" />
                                                    </div>
                                                    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1"
                                                        href="#">
                                                        Launcher-UIkit.fig
                                                    </a>
                                                    <span class="font-medium text-gray-500 text-2xs">
                                                        Edited 2 mins ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_all_footer">
                                    <button class="btn btn-sm btn-light justify-center">
                                        Archive all
                                    </button>
                                    <button class="btn btn-sm btn-light justify-center">
                                        Mark all as read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu" data-menu="true">
                <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end"
                    data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                    <div class="menu-toggle btn btn-icon rounded-full">
                        <img alt=""
                            class="size-9 rounded-full justify-center rounded-full border border-gray-900 shrink-0"
                            @if (Auth::user()->profile_pic == null)
                                src="{{ asset('students_pic/' . Auth::user()->profile_pic) }}"
                             @else
                                src="{{ asset('students_pic/' . Auth::user()->profile_pic) }}"
                            @endif
                            >
                        </img>
                    </div>
                    <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
                        <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                            <div class="flex items-center gap-2">
                                <img alt="" class="size-9 rounded-full border-2 border-success"
                                    src="{{ asset('students_pic/' . Auth::user()->profile_pic) }}">
                                <div class="flex flex-col gap-1.5">
                                    <span class="text-sm text-gray-800 font-semibold leading-none">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                        href="/profile">
                                        {{ Str::limit(Auth::user()->email, 14) }}
                                    </a>
                                </div>
                                </img>
                            </div>
                            @if (Auth::user()->status == 'pending' || Auth::user()->status == 'oncheck')
                                <span class="badge badge-xs badge-danger badge-outline">
                                    Unverified
                                </span>
                            @endif
                            @if (Auth::user()->status == 'approved')
                                <span class="badge badge-xs badge-primary badge-outline">
                                    verified
                                </span>
                            @endif
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('profile.edit') }}">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-profile-circle">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        My Profile
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-50px, 0"
                                data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                                data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-setting-2">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        My Account
                                    </span>
                                    <span class="menu-arrow">
                                        <i class="ki-filled ki-right text-3xs">
                                        </i>
                                    </span>
                                </div>
                                <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="/getstarted">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-coffee">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                    @if (Auth::user()->payment == 'done')
                                        <div class="menu-item">
                                            <a class="menu-link" href="/billing">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-icon">
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Billing
                                                </span>
                                                <span class="menu-badge" data-tooltip="true"
                                                    data-tooltip-placement="top">
                                                    <i class="ki-filled ki-information-2 text-md text-gray-500">
                                                    </i>
                                                    <span class="tooltip" data-tooltip-content="true">
                                                        Payment and subscription info
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    @endif

                                    <div class="menu-item">
                                        <a class="menu-link" href="/courses">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-medal-star">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Courses
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="/courses/completed">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-graph-up">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                completed courses
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-separator">
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('profile.edit') }}">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-switch">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Edit profile
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-10px, 0"
                                data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                                data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-icon">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Language
                                    </span>
                                    <div
                                        class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
                                        coming soon
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col">
                            <div class="menu-item mb-0.5">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-moon">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Dark Mode
                                    </span>
                                    <label class="switch switch-sm">
                                        <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                            type="checkbox" value="1" />
                                    </label>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="menu-item px-4 py-1.5">

                                    <a class="btn btn-sm btn-light justify-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Topbar -->
    </div>
    <!-- End of Container -->
</header>


{{-- second nav  --}}


<!-- Navbar -->
<div class="border-b border-gray-200 pb-5 lg:pb-0 mb-5 lg:mb-10">
    <!-- Container -->
    <div class="container-fixed flex flex-wrap justify-between items-center gap-2">
        <div class="grid">
            <div class="scrollable-x-auto">
                <div class="menu gap-5 lg:gap-7.5" data-menu="true">
                    @if (Auth::user()->status == 'pending' || Auth::user()->status == 'oncheck')
                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900 here"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4" tabindex="0">
                                <span
                                    class="menu-title text-nowrap text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Dashboard
                                </span>
                                <span class="menu-arrow">
                                    <i class="ki-filled ki-down text-2xs text-gray-500">
                                    </i>
                                </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                                    <a class="menu-link" href="/dashboard" tabindex="0">
                                        <span class="menu-title">
                                            Index
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900">
                            <a class="menu-link gap-2.5 pb-2 lg:pb-4 {{ request()->is('account/completed-certificates') ? 'active' : '' }}"
                                tabindex="0">
                                <span
                                    class="menu-title text-nowrap font-medium text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    !! There will be more menu once you finish the transaction
                                </span>
                            </a>
                        </div>
                    @endif
                    @if (Auth::user()->status == 'approved')
                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900 here"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4" tabindex="0">
                                <span
                                    class="menu-title text-nowrap text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Dashboard
                                </span>
                                <span class="menu-arrow">
                                    <i class="ki-filled ki-down text-2xs text-gray-500">
                                    </i>
                                </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                                    <a class="menu-link" href="/dashboard" tabindex="0">
                                        <span class="menu-title">
                                            Index
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item {{ request()->is('courses') ? 'active' : '' }}">
                                    <a class="menu-link" href="/courses" tabindex="0">
                                        <span class="menu-title">
                                            Courses Attended
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item {{ request()->is('courses/level') ? 'active' : '' }}">
                                    <a class="menu-link" href="/courses/level" tabindex="0">
                                        <span class="menu-title">
                                            My level
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4" tabindex="0">
                                <span
                                    class="menu-title text-nowrap text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Courses
                                </span>
                                <span class="menu-arrow">
                                    <i class="ki-filled ki-down text-2xs text-gray-500">
                                    </i>
                                </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item {{ request()->is('courses/list') ? 'active' : '' }}">
                                    <a class="menu-link" href="/courses/list" tabindex="0">
                                        <span class="menu-title">
                                            Available Courses
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item {{ request()->is('courses/enrolled') ? 'active' : '' }}">
                                    <a class="menu-link" href="/courses/enrolled" tabindex="0">
                                        <span class="menu-title">
                                            Enrolled Courses
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item {{ request()->is('courses/progress') ? 'active' : '' }}">
                                    <a class="menu-link" href="/courses/progress" tabindex="0">
                                        <span class="menu-title">
                                            Progress
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4" tabindex="0">
                                <span
                                    class="menu-title text-nowrap text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Status
                                </span>
                                <span class="menu-arrow">
                                    <i class="ki-filled ki-down text-2xs text-gray-500">
                                    </i>
                                </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item {{ request()->is('status/rank') ? 'active' : '' }}">
                                    <a class="menu-link" href="/status/rank" tabindex="0">
                                        <span class="menu-title">
                                            Rank
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item {{ request()->is('status/leaderboard') ? 'active' : '' }}">
                                    <a class="menu-link" href="/status/leaderboard" tabindex="0">
                                        <span class="menu-title">
                                            Leader Board
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900">
                            <a class="menu-link gap-2.5 pb-2 lg:pb-4 {{ request()->is('account/completed-certificates') ? 'active' : '' }}"
                                href="/account/completed-certificates" tabindex="0">
                                <span
                                    class="menu-title text-nowrap font-medium text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Completed & Certificates
                                </span>
                            </a>
                        </div>

                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900">
                            <a class="menu-link gap-2.5 pb-2 lg:pb-4 {{ request()->is('account/subscription') ? 'active' : '' }}"
                                href="/account/subscription" tabindex="0">
                                <span
                                    class="menu-title text-nowrap font-medium text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Subscription
                                </span>
                            </a>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- End of Container -->
</div>
