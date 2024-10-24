@props(['job'])

<x-panel class="flex gap-x-6 ">
    <div>
        <x-employer-logo :employer ='$job-> employer'/>
    </div>

    <div class="flex-1 flex flex-col space-y-5">
        <div class="self-start text-sm text-gray-400">{{$job->employer->name}}</div>

        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-800 transition-colors duration-300">{{$job->title}}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>

    </div>

</x-panel>

