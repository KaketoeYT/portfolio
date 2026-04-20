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
                            <h3 class="text-white text-xs font-bold uppercase tracking-widest mb-4">The Logic Engine</h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    Turn-Phase Controller (Untap, Upkeep, Draw...)
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    Api based call requests
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="w-1 h-1 bg-indigo-500"></span>
                                    JSON-based card database integration
                                </li>
                            </ul>
                        </div>
                        <div class="bg-indigo-500/5 border border-indigo-500/10 p-6 rounded-sm self-start">
                            <h3 class="text-indigo-400 text-[10px] font-bold uppercase tracking-widest mb-2">The JS Pivot</h3>
                            <p class="text-xs text-slate-400 leading-relaxed italic">
                                This project taught me the importance of "Data First." Instead of moving HTML elements, I learned to update a JS Object and let the UI react to that data.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-80 space-y-6">
                    <div class="p-8 border border-slate-800 bg-slate-900/20">
                        <h4 class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-6">Learning Stack</h4>
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
                        <a href="{{ $project['repo'] }}" target="_blank" class="group flex items-center justify-between text-xs font-bold text-white hover:text-indigo-400 transition">
                            VIEW REPOSITORY
                            <span class="group-hover:translate-x-1 transition">→</span>
                        </a>
                    </div>

                    <a href="{{ $project['url'] }}" target="_blank" 
                       class="block w-full py-4 bg-white text-black font-bold text-center uppercase text-[10px] tracking-widest hover:bg-indigo-600 hover:text-white transition-all shadow-xl">
                        Launch Project Site
                    </a>
                </div>
            </div>

            <div class="mt-20 aspect-video w-full bg-slate-900/50 border border-slate-800 flex items-center justify-center group overflow-hidden relative">
                <div class="absolute inset-0 bg-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <span class="text-slate-700 heading-font text-xs uppercase tracking-[1em] group-hover:text-indigo-500/50 transition-colors">
                    Project Visuals Coming Soon
                </span>
            </div>
            
        </div>
    </div>
</x-layout>