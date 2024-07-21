<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificate Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Image Preview Column -->
                    <div class="flex justify-center">
                        <img src="{{ asset('files/Maedot_Tadesse_Certificate_lalo_dev.jpg') }}" alt="Certificate Preview" class="w-full h-auto border rounded-lg">
                    </div>

                    <!-- Certificate Details Column -->
                    <div>
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
                        <a href="{{ $certificate->certificate_url }}" target="_blank" class="inline-block bg-green-500 text-white px-4 py-2 rounded mr-2">Download Certificate</a>
                        <a href="{{ route('dashboard') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded">Back to Certificates</a>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="{{ $certificate->certificate_url }}" target="_blank" class="inline-block bg-yellow-500 text-white px-4 py-2 rounded">View Certificate</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
