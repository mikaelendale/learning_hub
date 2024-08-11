<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>
        Lalo Dev Learning Hub | @yield('head')
    </title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">


    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('demo/assets/css/icons.css') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('demo/assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/css/style.css') }}">
    <link href="{{ asset('demo/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css') }}" rel="stylesheet">

</head>

<body data-bs-theme="dark">


    <div id="wrapper" class="horizontal">

        <!--  Header  -->
        <header class="is-transparent is-dark border-b backdrop-filter backdrop-blur-2xl"
            uk-sticky="cls-inactive: is-dark is-transparent border-b">
            <div class="header_inner">
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="home.html">
                            <img src="{{asset('images/icon.png')}}" alt="">
                            <img src="{{asset('images/icon.png')}}" class="logo_inverse" alt="">
                            <img src="{{asset('images/icon.png')}}" class="logo_mobile" alt="">
                        </a>
                    </div>

                    <!-- icon menu for mobile -->
                    <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible">
                    </div>

                    <!-- menu bar for mobile -->
                    <nav class="header_menu">
                        <ul>
                            <li>
                                <a href="#"> Courses</a>
                                <div uk-drop="mode: click" class="category-dropdown">
                                    <ul>
                                        <li> <a href="courses.html"> <ion-icon name="newspaper-outline"
                                                    class="is-icon"></ion-icon> Web Development </a></li>
                                        <li> <a href="courses.html"> <ion-icon name="leaf-outline"
                                                    class="is-icon"></ion-icon> Mobile App </a> </li>
                                        <li> <a href="courses.html"> <ion-icon name="briefcase-outline"
                                                    class="is-icon"></ion-icon> Business </a> </li>
                                        <li> <a href="courses.html"> <ion-icon name="color-palette-outline"
                                                    class="is-icon"></ion-icon> Desings </a></li>
                                        <li> <a href="courses.html"> <ion-icon name="megaphone-outline"
                                                    class="is-icon"></ion-icon> Marketing </a></li>
                                        <li> <a href="courses.html"> <ion-icon name="camera-outline"
                                                    class="is-icon"></ion-icon> Photography </a> </li>
                                        <li> <a href="courses.html"> <ion-icon name="accessibility-outline"
                                                    class="is-icon"></ion-icon> Life Style </a> </li>
                                    </ul>
                                </div>

                            </li>
                            <li> <a href="categories.html" class="active"> Categories </a></li>
                            <li> <a href="episodes.html"> Episode </a></li>
                            <li> <a href="books.html"> Book </a></li>
                            <li> <a href="blog.html"> Blog</a></li>
                            <li> <a href="#">Pages</a>
                                <div uk-drop="mode: click" class="menu-dropdown">
                                    <ul>
                                        <li> <a href="pages-pricing.html"> Pricing</a></li>
                                        <li> <a href="pages-faq.html"> Faq </a></li>
                                        <li> <a href="pages-help.html"> Help </a></li>
                                        <li> <a href="pages-terms.html"> Terms </a></li>
                                        <li> <a href="pages-setting.html"> Setting </a></li>
                                        <li> <a href="#"> Development </a>
                                            <div class="menu-dropdown"
                                                uk-drop="mode: click;pos:right-top;animation: uk-animation-slide-right-small">
                                                <ul>
                                                    <li><a href="development-elements.html"> Elements </a></li>
                                                    <li><a href="development-components.html"> Compounents </a></li>
                                                    <li><a href="development-plugins.html"> Plugins </a></li>
                                                    <li><a href="development-icons.html"> Icons </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="course-intro.html"> Course intro 1 </a>
                                            <div uk-drop="mode: click;pos:right-center" class="menu-dropdown">
                                                <ul>
                                                    <li> <a href="pages-pricing.html"> Pricing</a></li>
                                                    <li> <a href="pages-faq.html"> Faq </a></li>
                                                    <li> <a href="pages-help.html"> Help </a></li>
                                                    <li> <a href="pages-terms.html"> Terms </a></li>
                                                    <li> <a href="pages-setting.html"> Setting </a></li>
                                                    <li> <a href="#"> Development </a>
                                                        <div class="menu-dropdown"
                                                            uk-drop="mode: click;pos:right-top;animation: uk-animation-slide-right-small">
                                                            <ul>
                                                                <li><a href="development-elements.html"> Elements </a>
                                                                </li>
                                                                <li><a href="development-components.html"> Compounents
                                                                    </a></li>
                                                                <li><a href="development-plugins.html"> Plugins </a>
                                                                </li>
                                                                <li><a href="development-icons.html"> Icons </a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li> <a href="course-intro.html"> Course intro 1 </a></li>
                                                    <li> <a href="course-intro-2.html"> Course intro 2 </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="course-intro-2.html"> Course intro 2 </a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    <!-- overly for small devices -->
                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
                <div class="right-side">

                    <!-- cart -->
                    <a href="#" class="header_widgets">
                        <ion-icon name="cart-outline" class="is-icon"></ion-icon>
                    </a>
                    <div uk-drop="mode: click" class="dropdown_cart">
                        <div class="cart-headline"> My Cart
                            <a href="#" class="checkout">Checkout</a>
                        </div>
                        <ul class="dropdown_cart_scrollbar" data-simplebar>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-1.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> Learn Angular Beginner to Advanced Fundamentals </h4>
                                </div>
                                <div class="cart_price">
                                    <span> $12.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-1.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> Become a Web Developer from Scratch to Advanced </h4>
                                </div>
                                <div class="cart_price">
                                    <span> $19.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-2.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> Angular Fundamentals for Beginner to advance </h4>
                                </div>
                                <div class="cart_price">
                                    <span> $12.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-3.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> Ultimate Web Developer Course for Beginners 2020</h4>
                                </div>
                                <div class="cart_price">
                                    <span> $14.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-4.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> The Complete JavaScript From beginning to advance </h4>
                                </div>
                                <div class="cart_price">
                                    <span> $16.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="demo/assets/images/courses/img-5.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <h4> Become a Web Developer from Scratch to Advanced</h4>
                                </div>
                                <div class="cart_price">
                                    <span> $12.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                        </ul>

                        <div class="cart_footer">
                            <p> Subtotal : $ 320 </p>
                            <h1> Total : <strong> $ 320</strong> </h1>
                        </div>
                    </div>

                    <!-- notification -->
                    <a href="#" class="header_widgets">
                        <ion-icon name="mail-outline" class="is-icon"></ion-icon>
                    </a>
                    <div uk-drop="mode: click" class="header_dropdown">
                        <div class="drop_headline">
                            <h4>Notifications </h4>
                            <div class="btn_action">
                                <div class="btn_action">
                                    <a href="#">
                                        <ion-icon name="settings-outline"
                                            uk-tooltip="title: Notifications settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#">
                                        <ion-icon name="checkbox-outline"
                                            uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <ul class="dropdown_scrollbar" data-simplebar>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <p> <strong>Adrian Mohani</strong> Like Your Comment On Course
                                            <span class="text-link">Javascript Introduction </span>
                                        </p>
                                        <span class="time-ago"> 2 hours ago </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <p>
                                            <strong>Stella Johnson</strong> Replay Your Comments in
                                            <span class="text-link">Programming for Games</span>
                                        </p>
                                        <span class="time-ago"> 9 hours ago </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <p>
                                            <strong>Alex Dolgove</strong> Added New Review In Course
                                            <span class="text-link">Full Stack PHP Developer</span>
                                        </p>
                                        <span class="time-ago"> 12 hours ago </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <p>
                                            <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                            <span class="text-link">Css Flex Box </span>
                                        </p>
                                        <span class="time-ago"> Yesterday </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="see-all">See all</a>
                    </div>

                    <!-- messages -->
                    <a href="#" class="header_widgets">
                        <ion-icon name="notifications-outline" class="is-icon"></ion-icon>
                        <span> 2 </span>
                    </a>
                    <div uk-drop="mode: click" class="header_dropdown">
                        <div class="drop_headline">
                            <h4>Messages </h4>
                            <div class="btn_action">
                                <a href="#">
                                    <ion-icon name="settings-outline"
                                        uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="checkbox-outline"
                                        uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                </a>
                            </div>
                        </div>
                        <ul class="dropdown_scrollbar" data-simplebar>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> John menathon </strong> <span class="time"> 6:43 PM</span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> Zara Ali </strong> <span class="time">12:43 PM</span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> Mohamed Ali </strong> <span class="time"> Wed</span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> John menathon </strong> <span class="time"> Sun </span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> Zara Ali </strong> <span class="time"> Fri </span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="drop_avatar"> <img src="demo/assets/images/avatars/avatar-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="drop_content">
                                        <strong> Mohamed Ali </strong> <span class="time">1 Week ago</span>
                                        <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="see-all">See all</a>
                    </div>

                    <!-- profile -->
                    <a href="#">
                        <img src="demo/assets/images/avatars/placeholder.png" class="header_widgets_avatar"
                            alt="">
                    </a>
                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                        <ul>
                            <li>
                                <a href="#" class="user">
                                    <div class="user_avatar">
                                        <img src="demo/assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user_name">
                                        <div> Stella Johnson </div>
                                        <span> @Johnson </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>
                            <li>
                                <a href="#" class="is-link">
                                    <ion-icon name="rocket-outline" class="is-icon"></ion-icon> <span> Upgrade
                                        Membership </span>
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="card-outline" class="is-icon"></ion-icon>
                                    Subscriptions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="color-wand-outline" class="is-icon"></ion-icon>
                                    My Billing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                                    Account Settings
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>
                            <li>
                                <a href="#" id="night-mode" class="btn-night-mode"
                                    onclick="UIkit.notification({ message: 'Hmm...  <strong> Night mode </strong> feature is not available yet. ' , pos: 'bottom-right'  })">
                                    <ion-icon name="moon-outline" class="is-icon"></ion-icon>
                                    Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <!-- Slideshow -->
        <div class="uk-position-relative uk-visible-toggle overflow-hidden mb-8 lg:-mt-20" tabindex="-1"
            uk-slideshow="animation: scale ;min-height: 200; max-height: 500 ;autoplay: true">

            <ul class="uk-slideshow-items rounded">
                <li>
                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                        <img src="demo/assets/images/hero-1.jpg" class="object-cover" alt="" uk-cover>
                    </div>
                    <div class="container relative p-20 lg:mt-12 h-full">
                        <div uk-slideshow-parallax="scale: 1,1,0.8"
                            class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0"
                                class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best1</h1>
                            <p uk-slideshow-parallax="y: 150,0,0"
                                class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online
                                video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,50" href="#"
                                class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get
                                Started </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                        <img src="demo/assets/images/hero-2.jpg" class="object-cover" alt="" uk-cover>
                    </div>
                    <div class="container relative p-20 lg:mt-12 h-full">
                        <div uk-slideshow-parallax="scale: 1,1,0.8"
                            class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0"
                                class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0"
                                class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online
                                video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,0" href="#"
                                class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get
                                Started </a>
                        </div>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
                uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
                uk-slideshow-item="next"></a>

        </div>

        <div class="mx-auto max-w-5xl p-4">

            <!--  course feature -->
            <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                <h2 class="text-2xl font-semibold"> Featured Classes </h2>
            </div>

            <div class="relative -mt-3" uk-slider="finite: true">
                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-1@m uk-grid">
                        <li>

                            <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                                <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                    <img src="demo/assets/images/courses/img-6.jpg" alt=""
                                        class="w-full h-full absolute inset-0 object-cover">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                        class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                                </div>
                                <div class="flex-1 md:p-6 p-4">
                                    <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed">Learn How to
                                        Build Responsive Web Design Essentials HTML5 CSS3 and Bootstrap </div>
                                    <div class="line-clamp-2 mt-2 md:block hidden">Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                                    <div class="font-semibold mt-3"> John Michael </div>
                                    <div class="mt-1 flex items-center justify-between">
                                        <div class="flex space-x-2 items-center text-sm pt-2">
                                            <div> 13 hours </div>
                                            <div>·</div>
                                            <div> 32 lectures </div>
                                        </div>
                                        <div class="text-lg font-semibold"> $14.99 </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li>

                            <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                                <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                    <img src="demo/assets/images/courses/img-1.jpg" alt=""
                                        class="w-full h-full absolute inset-0 object-cover">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                        class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                                </div>
                                <div class="flex-1 md:p-6 p-4">
                                    <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed"> Learn
                                        JavaScript and Express to become a professional JavaScript developer. </div>
                                    <div class="line-clamp-2 mt-2 md:block hidden">Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                                    <div class="font-semibold mt-3"> John Michael </div>
                                    <div class="mt-1 flex items-center justify-between">
                                        <div class="flex space-x-2 items-center text-sm pt-2">
                                            <div> 13 hours </div>
                                            <div>·</div>
                                            <div> 32 lectures </div>
                                        </div>
                                        <div class="text-lg font-semibold"> $14.99 </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <a class="absolute bg-white uk-position-center-left -ml-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                <a class="absolute bg-white uk-position-center-right -mr-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white"
                    href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>


            <!--  slider courses -->
            <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                <h2 class="text-2xl font-semibold"> Popular Classes </h2>
                <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
            </div>

            <div class="mt-3">

                <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden> <ion-icon
                        name="star"></ion-icon> Featured today </h4>

                <div class="relative" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid">

                            <li>

                                <a href="course-intro.html" class="uk-link-reset">
                                    <div class="bg-white shadow-sm rounded-lg uk-transition-toggle">
                                        <div class="w-full h-40 overflow-hidden rounded-t-lg relative">
                                            <img src="demo/assets/images/courses/img-1.jpg" alt=""
                                                class="w-full h-full absolute inset-0 object-cover">
                                            <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                                class="w-12 h-12 uk-position-center uk-transition-fade"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <div class="font-semibold line-clamp-2"> Learn JavaScript and Express to
                                                become a professional
                                                JavaScript developer. </div>
                                            <div class="flex space-x-2 items-center text-sm pt-3">
                                                <div> 13 hours </div>
                                                <div>·</div>
                                                <div> 32 lectures </div>
                                            </div>
                                            <div class="pt-1 flex items-center justify-between">
                                                <div class="text-sm font-semibold"> John Michael </div>
                                                <div class="text-lg font-semibold"> $14.99 </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="course-intro.html" class="uk-link-reset">
                                    <div class="bg-white shadow-sm rounded-lg uk-transition-toggle">
                                        <div class="w-full h-40 overflow-hidden rounded-t-lg relative">
                                            <img src="demo/assets/images/courses/img-2.jpg" alt=""
                                                class="w-full h-full absolute inset-0 object-cover">
                                            <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                                class="w-12 h-12 uk-position-center uk-transition-fade"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <div class="font-semibold line-clamp-2">Learn Angular Fundamentals From
                                                beginning to advance </div>
                                            <div class="flex space-x-2 items-center text-sm pt-3">
                                                <div> 26 hours </div>
                                                <div>·</div>
                                                <div> 26 lectures </div>
                                            </div>
                                            <div class="pt-1 flex items-center justify-between">
                                                <div class="text-sm font-semibold"> Stella Johnson </div>
                                                <div class="text-lg font-semibold"> $18.99 </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="course-intro.html" class="uk-link-reset">
                                    <div class="bg-white shadow-sm rounded-lg uk-transition-toggle">
                                        <div class="w-full h-40 overflow-hidden rounded-t-lg relative">
                                            <img src="demo/assets/images/courses/img-3.jpg" alt=""
                                                class="w-full h-full absolute inset-0 object-cover">
                                            <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                                class="w-12 h-12 uk-position-center uk-transition-fade"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <div class="font-semibold line-clamp-2">Responsive Web Design Essentials
                                                HTML5 CSS3 Bootstrap </div>
                                            <div class="flex space-x-2 items-center text-sm pt-3">
                                                <div> 18 hours </div>
                                                <div>·</div>
                                                <div> 42 lectures </div>
                                            </div>
                                            <div class="pt-1 flex items-center justify-between">
                                                <div class="text-sm font-semibold"> Monroe Parker </div>
                                                <div class="text-lg font-semibold"> $11.99 </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="course-intro.html" class="uk-link-reset">
                                    <div class="bg-white shadow-sm rounded-lg uk-transition-toggle">
                                        <div class="w-full h-40 overflow-hidden rounded-t-lg relative">
                                            <img src="demo/assets/images/courses/img-1.jpg" alt=""
                                                class="w-full h-full absolute inset-0 object-cover">
                                            <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                                class="w-12 h-12 uk-position-center uk-transition-fade"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <div class="font-semibold line-clamp-2"> Learn JavaScript and Express to
                                                become a professional
                                                JavaScript developer. </div>
                                            <div class="flex space-x-2 items-center text-sm pt-3">
                                                <div> 32 hours </div>
                                                <div>·</div>
                                                <div> lec 4 </div>
                                            </div>
                                            <div class="pt-1 flex items-center justify-between">
                                                <div class="text-sm font-semibold"> Jesse Stevens </div>
                                                <div class="text-lg font-semibold"> $29.99 </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>

                        </ul>

                        <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>

            </div>

            <!--  books  -->
            <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                <h2 class="text-2xl font-semibold"> Latest Books </h2>
                <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
            </div>

            <div class="relative" uk-slider="finite: true">
                <div class="uk-slider-container px-1 py-3">
                    <ul
                        class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center">
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book4.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate">HTML Breaker</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book5.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate"> CSS Master </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book1.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate"> Vue.js Basics </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book2.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate"> HTML5 & CSS3 </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book3.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate"> Learn CSS </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book4.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate">HTML Breaker</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="relative overflow-hidden bg-white shadow-sm md:rounded-lg rounded-md">
                                <a href="book-description.html">
                                    <img src="demo/assets/images/book/book5.jpg" alt=""
                                        class="w-full h-52 object-cover">
                                    <div class="p-3 truncate"> CSS Master </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>

            <!--  episcodes  -->
            <!-- this is user toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
            <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4"> Latest Episodes </h4>

                <div class="relative -mx-1" uk-slider="finite: true">

                    <div class="uk-slider-container md:px-1 px-2 py-3">
                        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid">
                            <li>
                                <a href="episodes-watch.html">
                                    <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                        <img src="demo/assets/images/episodes/img-2.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                        <span
                                            class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                            12:21</span>
                                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                            class="w-12 h-12 uk-position-center" alt="">
                                    </div>
                                </a>
                                <div class="pt-3">
                                    <a href="episodes-watch.html" class="font-semibold line-clamp-2"> The PHP
                                        Singleton class </a>
                                    <p class="text-sm pt-1"> By <a href="#"> Stella Johnson </a> </p>
                                </div>
                            </li>
                            <li>
                                <a href="episodes-watch.html">
                                    <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                        <img src="demo/assets/images/episodes/img-4.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                        <span
                                            class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                            12:21</span>
                                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                            class="w-12 h-12 uk-position-center" alt="">
                                    </div>
                                </a>
                                <div class="pt-3">
                                    <a href="episodes-watch.html" class="font-semibold line-clamp-2"> Larafel $
                                        fliepond </a>
                                    <p href="episodes-watch.html" class="text-sm pt-1"> By <a href="#"> Jesse
                                            Stevens </a> </p>
                                </div>
                            </li>
                            <li>
                                <a href="episodes-watch.html">
                                    <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                        <img src="demo/assets/images/episodes/img-1.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                        <span
                                            class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                            12:21</span>
                                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                            class="w-12 h-12 uk-position-center" alt="">
                                    </div>
                                </a>
                                <div class="pt-3">
                                    <a href="episodes-watch.html" class="font-semibold line-clamp-2"> Creating a
                                        Laravel Package </a>
                                    <p class="text-sm pt-1"> By <a href="#"> John Michael </a> </p>
                                </div>
                            </li>
                            <li>
                                <a href="episodes-watch.html">
                                    <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                        <img src="demo/assets/images/episodes/img-3.jpg" alt=""
                                            class="w-full h-full absolute inset-0 object-cover">
                                        <span
                                            class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                            12:21</span>
                                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg"
                                            class="w-12 h-12 uk-position-center" alt="">
                                    </div>
                                </a>
                                <div class="pt-3">
                                    <a href="episodes-watch.html" class="font-semibold line-clamp-2"> Creating sticky
                                        in HTML </a>
                                    <p class="text-sm pt-1"> By <a href="#"> Monroe Parker </a> </p>
                                </div>
                            </li>
                        </ul>

                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="previous"> <ion-icon
                                name="chevron-back-outline"></ion-icon> </a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                            href="#" uk-slider-item="next"> <ion-icon
                                name="chevron-forward-outline"></ion-icon></a>

                    </div>

                </div>

            </div>


        </div>

        <!-- footer -->
        <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
            <div
                class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                <p class="capitalize font-medium"> © copyright 2021 Courseplus</p>
                <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                    <a href="#"> About</a>
                    <a href="#"> Help</a>
                    <a href="#"> Terms</a>
                    <a href="#"> Privacy</a>
                </div>
            </div>
        </div>

    </div>


    <!-- Javascript
    ================================================== -->
    <script src="demo/code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="demo/assets/js/uikit.js"></script>
    <script src="demo/assets/js/tippy.all.min.js"></script>
    <script src="demo/assets/js/simplebar.js"></script>
    <script src="demo/assets/js/custom.js"></script>
    <script src="demo/assets/js/bootstrap-select.min.js"></script>
    <script src="demo/unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>


<!-- Mirrored from demo.foxthemes.net/courseplus/horizontal/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Aug 2024 11:21:05 GMT -->

</html>
