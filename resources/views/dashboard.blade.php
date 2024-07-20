<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (Auth::user()->id == '27')
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="  overflow-hidden sm:rounded-lg">
                                        {{__('you have certificate')}}
                                        <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificate Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">{{ $certificate->title }}</h1>
                <p class="mb-2"><strong>Issuer:</strong> {{ $certificate->issuer }}</p>
                <p class="mb-2"><strong>Issue Date:</strong> {{ $certificate->issue_date }}</p>
                @if($certificate->certificate_url)
                    <p class="mb-2">
                        <strong>Certificate URL:</strong> 
                        <a href="{{ $certificate->certificate_url }}" target="_blank" class="text-blue-600">{{ $certificate->certificate_url }}</a>
                    </p>
                @endif

                @php
                    $linkedin_url = "https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&name=" . urlencode($certificate->title) . "&organizationName=" . urlencode($certificate->issuer) . "&issueYear=" . date('Y', strtotime($certificate->issue_date)) . "&issueMonth=" . date('m', strtotime($certificate->issue_date)) . "&certUrl=" . urlencode($certificate->certificate_url);
                @endphp

                <a href="{{ $linkedin_url }}" target="_blank" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mr-2">Add to LinkedIn</a>
                <a href="{{ route('certificates.index') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded">Back to Certificates</a>
            </div>
        </div>
    </div>
</x-app-layout>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        {{ __('welcome') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
