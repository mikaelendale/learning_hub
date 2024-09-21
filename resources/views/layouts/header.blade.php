<!-- Header -->
<style>
    #digital-clock {
        font-family: 'Courier New', Courier, monospace;
        font-size: 20px;
        font-weight: bold;
    }
</style>

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
                <script>
                    // Get the CSRF token from the meta tag
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    var timeDuration = "{{ Auth::user()->time_duration }}"; // Format: YYYY-MM-DD HH:MM:SS

                    function updateClock() {
                        var endTime = new Date(timeDuration);

                        var timer = setInterval(function() {
                            var now = new Date();
                            var timeRemaining = endTime - now;

                            if (timeRemaining <= 0) {
                                // Time is up
                                document.getElementById('digital-clock').textContent = "Expired";

                                // Check current status before updating
                                fetch('{{ route('get.status') }}', { // Ensure this route is defined
                                        method: 'GET',
                                        headers: {
                                            'X-CSRF-TOKEN': csrfToken
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === 'pending') {
                                            console.log('Status is already pending.');
                                        } else {
                                            // Update status to 'pending'
                                            fetch('{{ route('update.status') }}', { // Ensure this route is defined
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                                                    },
                                                    body: JSON.stringify({
                                                        status: 'pending'
                                                    }) // Sending the status as JSON
                                                })
                                                .then(response => response.json())
                                                .then(data => {
                                                    if (data.success) {
                                                        console.log('Status updated to pending.');
                                                        window.location.href =
                                                            '{{ route('dashboard') }}'; // Redirect to dashboard
                                                    } else {
                                                        console.error('Failed to update status.');
                                                    }
                                                })
                                                .catch(error => console.error('Error:', error));
                                        }

                                        clearInterval(timer); // Stop the timer
                                    })
                                    .catch(error => console.error('Error fetching status:', error));
                            } else {
                                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                                var formattedTime = [
                                    hours.toString().padStart(2, '0'),
                                    minutes.toString().padStart(2, '0'),
                                    seconds.toString().padStart(2, '0')
                                ].join(':');

                                document.getElementById('digital-clock').textContent = formattedTime;
                            }
                        }, 1000);
                    }

                    updateClock();
                </script>
                <a href="/account/subscription"
                    class="badge badge-xs badge-warning badge-outline rounded hover:bg-gray-light hover:text-gray-200 text-gray-900 font-sm mt-1"
                    id="digital-clock">
                </a> 
            </div>
            <div class="menu" data-menu="true">
                <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end"
                    data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                    <div class="menu-toggle btn btn-icon rounded-full">
                        <img alt=""
                            class="size-9 rounded-full justify-center rounded-full border border-gray-900 shrink-0"
                            @if (Auth::user()->profile_pic == null) src="{{ asset('students_pic/' . Auth::user()->profile_pic) }}"
                             @else
                                src="{{ asset('storage/students_pic/' . Auth::user()->profile_pic) }}" @endif>
                        </img>
                    </div>
                    <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
                        <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                            <div class="flex items-center gap-2">
                                <img alt="" class="size-9 rounded-full border-2 border-success"
                                    src="{{ asset('storage/students_pic/' . Auth::user()->profile_pic) }}">
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
                                <a class="menu-link" href="/courses/enrolled">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-graph-up">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        completed courses
                                    </span>
                                </a>
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
                                    There will be more menu once you finish the transaction
                                </span>
                            </a>
                        </div>
                    @endif
                    @if (Auth::user()->status == 'approved')
                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900 {{ request()->is('dashboard') || request()->is('courses') || request()->is('courses/level') ? 'here' : '' }} "
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
                                            Courses Status
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

                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900 {{ request()->is('courses/list') || request()->is('courses/enrolled') || request()->is('courses/progress') ? 'here' : '' }}"
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
                        <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900  {{ request()->is('status/rank') || request()->is('status/leaderboard') ? 'here' : '' }}"
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
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-gray-900 menu-item-here:border-b-gray-900 {{ request()->is('account/subscription') ? 'here' : '' }}">
                            <a class="menu-link gap-2.5 pb-2 lg:pb-4 " href="/account/subscription" tabindex="0">
                                <span
                                    class="menu-title text-nowrap font-medium text-sm text-gray-800 menu-item-active:text-gray-900 menu-item-active:font-medium menu-item-here:text-gray-900 menu-item-here:font-medium menu-item-show:text-gray-900 menu-link-hover:text-gray-900 ">
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
