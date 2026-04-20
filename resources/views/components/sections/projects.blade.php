<template x-if="active === 'projects'">
    <div x-data="{ current: 0 }" x-transition class="w-full flex flex-col md:flex-row gap-12 lg:gap-20">
        
        <div class="flex-1 min-w-0"> 
            @foreach($projects as $idx => $p)
                <div x-show="current === {{ $idx }}" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    
                    <h2 class="heading-font text-4xl md:text-6xl text-white mb-4 uppercase italic break-words leading-tight">
                        {{ $p['name'] }}
                    </h2>
                    
                    <p class="text-slate-400 text-lg mb-8 max-w-lg leading-relaxed">
                        {{ $p['desc'] }}
                    </p>

                    <div class="flex items-center gap-6">
                        <a href="/projects/{{ $p['slug'] }}" 
                           class="inline-flex items-center gap-2 text-indigo-400 font-bold uppercase text-[10px] tracking-[0.2em] border-b border-indigo-400/20 pb-2 hover:border-indigo-400 hover:text-white transition-all">
                            Technical Analysis →
                        </a>
                        
                        <div class="flex gap-3">
                            @foreach(array_slice($p['stack'], 0, 3) as $tech)
                                <span class="text-[9px] text-slate-600 uppercase font-mono">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full md:w-72 flex flex-col gap-3">
            <h3 class="text-[9px] heading-font text-slate-600 uppercase tracking-[0.5em] mb-2 px-4">Select Module</h3>
            
            @foreach($projects as $idx => $p)
                <button @click="current = {{ $idx }}" 
                        :class="current === {{ $idx }} ? 'border-indigo-500 bg-indigo-500/5 text-white shadow-[0_0_15px_rgba(99,102,241,0.1)]' : 'border-slate-800 text-slate-500'"
                        class="group relative text-left p-4 border transition-all hover:border-slate-600 uppercase text-[10px] font-bold tracking-tighter overflow-hidden">
                    
                    <div x-show="current === {{ $idx }}" 
                         class="absolute left-0 top-0 h-full w-[2px] bg-indigo-500"></div>
                    
                    <div class="flex justify-between items-center">
                        <span>{{ $p['name'] }}</span>
                        <span class="text-[8px] opacity-30 group-hover:opacity-100 transition-opacity font-mono">
                            0{{ $idx + 1 }}
                        </span>
                    </div>
                </button>
            @endforeach
        </div>

    </div>
</template>