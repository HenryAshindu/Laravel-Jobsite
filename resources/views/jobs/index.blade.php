<x-layout>
    <div class="space-y-10">
        <section class="pt-10 text-center">
                <h1 class="font-bold text-4xl py-6">Let's Find You a Great Job</h1>
                <form action="/search" class="mt-4">
                    <input type="text" placeholder="I'm looking for..." class="bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
                </form>
        </section>
        <section class="pt-10">
            <x-heading>Top Jobs</x-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    @foreach ($featuredJobs as $job)
                    <a href="{{ route('jobs.show', ['job' => $job->id]) }}">
                        <x-job-card :$job />
                    </a>
                    @endforeach
                </div>

            </a>
    
        </section>
    
        <section>
            <x-heading>Recent Jobs</x-heading>
            <div class="mt-6">
                @foreach ($jobs as $job)
                <a href="{{ route('jobs.show', ['job' => $job->id]) }}">
                    <x-job-card-wide :$job />
                </a>

                @endforeach
            </div>
        </section>
    </div>

</x-layout>