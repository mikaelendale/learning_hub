<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Certificates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">Your Certificates</h1>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2">Title</th>
                            <th class="py-2">Issuer</th>
                            <th class="py-2">Issue Date</th>
                            <th class="py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($certificates as $certificates)
                            <tr>
                                <td class="border px-4 py-2">{{ $certificates->title }}</td>
                                <td class="border px-4 py-2">{{ $certificates->issuer }}</td>
                                <td class="border px-4 py-2">{{ $certificates->issue_date }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('certificates.show', $certificates) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
