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
        <!-- begin: grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
            <div class="col-span-2">
                <style>
                    .upgrade-bg {
                        background-image: url('{{ asset('assets/media/images/2600x1200/bg-14.png') }}');
                    }

                    .dark .upgrade-bg {
                        background-image: url('{{ asset('assets/media/images/2600x1200/bg-14-dark.png') }}');
                    }
                </style>
                <div class="card rounded-xl">
                    <div
                        class="flex items-center justify-between grow gap-5 p-5 bg-[center_right_-8rem] bg-no-repeat bg-[length:700px] upgrade-bg">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2.5">
                                    <span class="text-base font-semibold text-gray-900">
                                        Your current class: {{ ucfirst($classAttended) }}
                                    </span>
                                    <span class="badge badge-sm badge-info badge-outline">
                                        {{ $remainingDays > 0 ? $remainingDays . ' days remaining' : 'Subscription expired' }}
                                    </span>
                                </div> 
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            @if ($classAttended !== 'advanced')
                                <!-- Button to trigger the upgrade -->
                                    <a href="{{route('subscription.upgrade')}}"  class="btn btn-dark">Upgrade </a>
                            @else
                                <button class="btn btn-sm btn-dark" type="button" disabled>
                                    Already at the highest level
                                </button>
                            @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 flex">
                <div class="card grow">
                    <div class="card-header">
                        <h3 class="card-title">
                            Latest Payment
                        </h3>
                        <a href="{{ route('invoice.download') }}" class="btn btn-light btn-sm">
                            <i class="ki-filled ki-exit-down"></i>
                            Download PDF
                        </a>
                    </div>
                    <div class="card-body pt-4 pb-3">
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                    <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                        Type of Plan
                                    </td>
                                    <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                        {{Auth::user()->class_attended}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-medium text-gray-500 min-w-36 pb-5 pe-6">
                                        Card used to pay:
                                    </td>
                                    <td class="flex items-center gap-2.5 text-sm font-medium text-gray-700">
                                        <img alt="" class="w-10 shrink-0"
                                            src="https://th.bing.com/th/id/R.c278fbb21b15539a1b24fbad7f71fd13?rik=I2XNeRLgHJ9%2b6g&pid=ImgRaw&r=0">
                                        telebirr
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: grid -->
    </div>
    {{-- Modal section --}}
    <div class="modal" data-modal="true" data-modal-disable-scroll="false" id="response_modal">
        <div class="modal-content max-w-[500px] top-5 lg:top-[15%]">
            <div class="modal-header pr-2.5">
                <h3 class="modal-title">
                    Notification
                </h3>
                <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                    <i class="ki-filled ki-cross">
                    </i>
                </button>
            </div>
            <div class="modal-body grid gap-5 px-0 py-5">
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="text-gray-900 font-semibold text-2sm" id="modal_message">
                        <!-- Message will be inserted here -->
                    </div>
                </div>
                <div class="border-b border-b-gray-200">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                document.getElementById('modal_message').innerText = "{{ session('success') }}";
                document.getElementById('response_modal').style.display = 'block';
            @elseif (session('error'))
                document.getElementById('modal_message').innerText = "{{ session('error') }}";
                document.getElementById('response_modal').style.display = 'block';
            @elseif (session('info'))
                document.getElementById('modal_message').innerText = "{{ session('info') }}";
                document.getElementById('response_modal').style.display = 'block';
            @endif
        });
    </script>
@endsection
