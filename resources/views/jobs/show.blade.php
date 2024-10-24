<x-layout>
    <x-page-heading>Job Details</x-page-heading>

    <div class="py-12 space-y-4">
        <h1 class="text-3xl font-bold">{{ $jobs->title }}</h1>
        <p><strong>salary:</strong> {{ $jobs->salary }}</p>
        <p><strong>Location:</strong> {{ $jobs->location }}</p>
        <p><strong>Schedule:</strong></p>
        <p>{{ $jobs->schedule }}</p>
        <p><strong>Url:</strong> ${{ $jobs->url }}</p>

    </div>

    <div class="flex justify-between">
        <a href="/jobs" class="rounded-lg border border-transparent font-bold bg-blue-800 py-6 px-10 text-sm">Back to Home</a>
        <a href="{{ $jobs->url }}" class="rounded-lg border border-transparent font-bold bg-red-800 py-6 px-10 text-sm">APPLY</a>
    </div>



</x-layout>