<x-layout>
    <div class="min-h-screen bg-[#020617] selection:bg-indigo-500/30">
        <div class="max-w-5xl mx-auto px-8 py-20">
            <a href="/" class="text-indigo-400 text-[10px] font-bold uppercase tracking-[0.3em] hover:text-white transition flex items-center gap-2 mb-16">
                ← Return to Dashboard
            </a>

            <div class="flex flex-col lg:flex-row gap-20">
                <div class="flex-1">
                    <h1 class="heading-font text-6xl md:text-8xl text-white uppercase italic leading-none mb-8">
                        {{ $project['name'] }}
                    </h1>
                    
                    <div class="prose prose-invert max-w-none text-slate-400 text-lg leading-relaxed mb-12">
                        <p>{{ $project['long_desc'] }}</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 border-t border-white/5 pt-12">
                        <div>
                            <h3 class="text-white text-xs font-bold uppercase tracking-widest mb-4">Core Mechanics</h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    Spatial Partitioning for collision optimization
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    Smart rotation alignment logic
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    Custom Vertex Shaders for grid visualization
                                </li>
                            </ul>
                        </div>
                        <div class="bg-indigo-500/5 border border-indigo-500/10 p-6 rounded-sm">
                            <h3 class="text-indigo-400 text-[10px] font-bold uppercase tracking-widest mb-2">Use Case</h3>
                            <p class="text-xs text-slate-400 leading-relaxed italic">
                                Optimized for heavy-physics environments where cargo weight distribution impacts vehicle handling in real-time.
                                Made for a small indie game prototype, but the underlying system is designed to be modular and scalable for larger projects.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-80 space-y-6">
                    <div class="p-8 border border-slate-800 bg-slate-900/20">
                        <h4 class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-6">Engine & Language</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project['stack'] as $t)
                                <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 text-[10px] font-mono">
                                    {{ $t }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-8 border border-slate-800 bg-slate-900/20">
                        <h4 class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-4">Source Access</h4>
                        <a href="{{ $project['repo'] }}" class="group flex items-center justify-between text-xs font-bold text-white hover:text-indigo-400 transition" target="_blank">
                            VIEW REPOSITORY
                            <span class="group-hover:translate-x-1 transition">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 aspect-video w-full bg-slate-900/50 border border-slate-800 flex items-center justify-center group overflow-hidden relative">
                <div class="absolute inset-0 bg-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <span class="text-slate-700 heading-font text-xs uppercase tracking-[1em] group-hover:text-indigo-500/50 transition-colors">
                    System Architecture Visualization
                </span>
            </div>
        </div>
    </div>
</x-layout>