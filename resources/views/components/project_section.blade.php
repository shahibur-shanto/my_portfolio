
<section id="projects" class="py-20" style="background: linear-gradient(135deg, #4169E1, #FFD700);">
    <div class="container mx-auto">
        <h3 class="text-3xl font-bold text-center text-white mb-12">My Projects</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Project Card -->
            @foreach($projects as $project)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition duration-300">
                <img src="{{asset('storage/' . $project->image)}}" alt="Gineus Coaching" class="w-full">
                <div class="p-6">
                    <h4 class="text-xl font-bold mb-2">{{$project['title']}}</h4>
                    <p class="mb-4">{{$project['description']}}</p>
                    <a href="/projects/{{$project->id}}" class="text-primary hover:underline">View Details →</a>
                </div>
            </div>
            @endforeach
            <div><x-nav-link href="{{route('projects.index')}}">SHOW ALL PROJECTS</x-nav-link></div>
           </div>
    </div>
</section>
