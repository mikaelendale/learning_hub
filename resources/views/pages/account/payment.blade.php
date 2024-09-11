@extends('layouts.master')
@section('head')
    Account
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('title')
            Subscription
        @endslot
        @slot('subtitle')
            Account
            @slot('li_1')
                Subscription
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="scrollable-x-auto pt-3 -mt-3">
                <table
                    class="table table-fixed min-w-[1000px] table-border-b table-border-r table-rounded card-rounded [&amp;_tr:nth-of-type(2)>td]:table-border-t [&amp;_tr:nth-of-type(2)>td:first-child]:card-rounded-tl">
                    <tbody>
                        <tr>
                            <td class="!border-b-0 align-bottom !p-5 !pt-7.5 !pb-6">
                                <label class="switch switch-sm">
                                    <input checked="" class="order-1" name="check" type="checkbox" value="1">
                                    <div class="switch-label order-2">
                                        <span class="text-gray-800 text-2sm font-semibold">
                                            Annual Billing
                                        </span>
                                    </div>
                                </label>
                            </td>
                            <td
                                class="!border-b-0 table-border-l table-border-t card-rounded-tl bg-light-active dark:bg-coal-100 !p-5 !pt-7.5 relative">
                                <span
                                    class="absolute badge badge-sm badge-outline badge-success absolutes top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                    Current Plan
                                </span>
                                <h3 class="text-lg text-gray-900 font-semibold pb-2">
                                    Basic
                                </h3>
                                <div class="text-gray-600 text-2sm font-medium">
                                    Essential features for startups individuals
                                </div>
                                <div class="py-4">
                                    <h4 class="text-2xl text-gray-900 font-semibold leading-none">
                                        Free
                                    </h4>
                                </div>
                                <div class="">
                                    <button class="btn btn-light btn-sm flex justify-center w-full">
                                        Switch to Team
                                    </button>
                                </div>
                            </td>
                            <td class="!border-b-0 table-border-l table-border-t !p-5 !pt-7.5">
                                <h3 class="text-lg text-gray-900 font-semibold pb-2">
                                    Pro
                                </h3>
                                <div class="text-gray-600 text-2sm font-medium">
                                    Advanced tools for growing businesses
                                </div>
                                <div class="py-4">
                                    <div class="flex items-end gap-1.5" data-plan-type="pro">
                                        <div class="text-2xl text-gray-900 font-semibold leading-none"
                                            data-plan-price-annual="$79" data-plan-price-regular="$99">
                                            $99
                                        </div>
                                        <div class="text-gray-600 text-2xs font-medium" data-plan-payment-annual=">annual"
                                            data-plan-payment-regular=">per month">
                                            per month
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary btn-sm text-center flex justify-center w-full">
                                        Upgrade
                                    </button>
                                </div>
                            </td>
                            <td class="!border-b-0 table-border-l table-border-t !p-5 !pt-7.5">
                                <h3 class="text-lg text-gray-900 font-semibold pb-2">
                                    Premium
                                </h3>
                                <div class="text-gray-600 text-2sm font-medium">
                                    Comprehensive suite for large-scale operations
                                </div>
                                <div class="py-4">
                                    <div class="flex items-end gap-1.5" data-plan-type="premium">
                                        <div class="text-2xl text-gray-900 font-semibold leading-none"
                                            data-plan-price-annual="$179" data-plan-price-regular="$199">
                                            $199
                                        </div>
                                        <div class="text-gray-600 text-2xs font-medium" data-plan-payment-annual=">annual"
                                            data-plan-payment-regular=">per month">
                                            per month
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary btn-sm text-center flex justify-center w-full">
                                        Upgrade
                                    </button>
                                </div>
                            </td>
                            <td class="!border-b-0 table-border-l table-border-t card-rounded-tr !p-5 !pt-7.5">
                                <h3 class="text-lg text-gray-900 font-semibold pb-2">
                                    Enterprise
                                </h3>
                                <div class="text-gray-600 text-2sm font-medium">
                                    Tailored solutions for enterprise needs
                                </div>
                                <div class="py-4">
                                    <div class="flex items-end gap-1.5" data-plan-type="enterprise">
                                        <div class="text-2xl text-gray-900 font-semibold leading-none"
                                            data-plan-price-annual="$1,079" data-plan-price-regular="$1,299">
                                            $1,299
                                        </div>
                                        <div class="text-gray-600 text-2xs font-medium" data-plan-payment-annual=">annual"
                                            data-plan-payment-regular=">per month">
                                            per month
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary btn-sm text-center flex justify-center w-full">
                                        Upgrade
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    User Accounts
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Up to 5
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Up to 20
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Up to 50
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Unlimited
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Data Storage
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    10 GB
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    50 GB
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    200 GB
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Custom
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    CAPI Calls
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    1,000/month
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    10,000/month
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    50,000/month
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Unlimited
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Support
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Email
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Email + Chat
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Priority
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    24/7 Live Support
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Data Backup
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Weekly
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Daily
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Hourly
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Real-time
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Analytics Tools
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Basic
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Advanced
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Comprehensive
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Custom
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Integration Options
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Limited
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Standard
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Extended
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    Full Suite
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Uptime Guarantee
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    99%
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    99.9%
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    99.99%
                                </div>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-700 text-2sm font-medium">
                                    99.999%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Custom Reports
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Mobile Access
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-border-l !px-5 !py-3.5">
                                <div class="text-gray-900 text-2sm leading-none font-semibold">
                                    Custom Branding
                                </div>
                            </td>
                            <td class="table-border-l bg-light-active dark:bg-coal-100 !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                            </td>
                            <td class="table-border-l !px-5 !py-3.5">
                                <i class="ki-filled ki-check text-success text-lg">
                                </i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        FAQ
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div data-accordion="true" data-accordion-expand-all="true">
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_1_content">
                                <span class="text-base text-gray-900 font-medium">
                                    How is pricing determined for each plan ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_1_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision.
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision.
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_2_content">
                                <span class="text-base text-gray-900 font-medium">
                                    What payment methods are accepted for subscriptions ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_2_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_3_content">
                                <span class="text-base text-gray-900 font-medium">
                                    Are there any hidden fees in the pricing ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_3_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_4_content">
                                <span class="text-base text-gray-900 font-medium">
                                    Is there a discount for annual subscriptions ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_4_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_5_content">
                                <span class="text-base text-gray-900 font-medium">
                                    Do you offer refunds on subscription cancellations ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_5_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200"
                            data-accordion-item="true">
                            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_6_content">
                                <span class="text-base text-gray-900 font-medium">
                                    Can I add extra features to my current plan ?
                                </span>
                                <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
                                </i>
                                <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
                                </i>
                            </button>
                            <div class="accordion-content hidden" id="faq_6_content">
                                <div class="text-gray-700 text-md pb-4">
                                    Metronic embraces flexible licensing options that empower you to choose the perfect fit
                                    for your project's needs and budget.
                                    Understanding the factors influencing each plan's pricing helps you make an informed
                                    decision
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
                <div class="card">
                    <div class="card-body px-10 py-7.5 lg:pr-12.5">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                            <div class="flex flex-col items-start gap-3">
                                <h2 class="text-1.5xl font-semibold text-gray-900">
                                    Questions ?
                                </h2>
                                <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                    Visit our Help Center for detailed assistance on billing, payments, and subscriptions.
                                </p>
                            </div>
                            <img alt="image" class="dark:hidden max-h-[150px]"
                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/2.svg">
                            <img alt="image" class="light:hidden max-h-[150px]"
                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/2-dark.svg">
                        </div>
                    </div>
                    <div class="card-footer justify-center">
                        <a class="btn btn-link" href="#">
                            Go to Help Center
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body px-10 py-7.5 lg:pr-12.5">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                            <div class="flex flex-col items-start gap-3">
                                <h2 class="text-1.5xl font-semibold text-gray-900">
                                    Contact Support
                                </h2>
                                <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
                                    Need assistance? Contact our support team for prompt, personalized help your queries
                                    &amp; concerns.
                                </p>
                            </div>
                            <img alt="image" class="dark:hidden max-h-[150px]"
                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/4.svg">
                            <img alt="image" class="light:hidden max-h-[150px]"
                                src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/illustrations/4-dark.svg">
                        </div>
                    </div>
                    <div class="card-footer justify-center">
                        <a class="btn btn-link" href="#">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
