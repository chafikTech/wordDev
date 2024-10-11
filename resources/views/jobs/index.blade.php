<x-layout>
    <h1 class="text-2xl">All jobs</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
        <x-job-card :job="$job" />
        @empty
        <li>No jobs Available</li>
        @endforelse
    </div>
</x-layout>
