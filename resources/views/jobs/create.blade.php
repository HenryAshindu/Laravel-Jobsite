<x-layout>
    <x-page-heading>New Jobs</x-page-heading>

    <ul>
        @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

        
    </ul>

    <form action="/jobs" method="POST" class="mt-6 space-y-6">
        @csrf
        @method("POST")

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Title" class="px-5 text-lg font-bold">Title</label>

            </div>
            <input type="text" placeholder='CEO' name="title" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Salary" class="px-5 text-lg font-bold">Salary</label>

            </div>
            <input type="text" placeholder='ksh.90,000' name="salary" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Location" class="px-5 text-lg font-bold">Location</label>

            </div>
            <input type="text" placeholder='Kasarani, KE' name="location" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Schedule" class="px-5 text-lg font-bold">Schedule</label>
            </div>
            <select name="schedule" id="schedule" class="bg-white/5 text-white border-white/10 rounded-xl px-5 py-4 w-full">
                <option value="Full Time" {{ old('schedule') == 'Full Time' ? 'selected' : '' }} class="text-black">Full Time</option>
                <option value="Part Time" {{ old('schedule') == 'Part Time' ? 'selected' : '' }} class="text-black">Part Time</option>
            </select>
        </div>

        
        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Url" class="px-5 text-lg font-bold">URL</label>

            </div>
            <input type="url" placeholder='https://canva.site.com' name="url" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div>
            <input type="submit" class="rounded-lg border border-transparent font-bold bg-blue-800 py-6 px-10 text-lg" value="Publish">
        </div>
    </form>
</x-layout>