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
                            <div class="flex flex-wrap gap-2">
                                @foreach($p['stack'] as $tech)
                                    <span class="px-2 py-1 bg-indigo-500/5 text-indigo-400/80 border border-indigo-500/20 text-[9px] font-mono tracking-widest uppercase">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full md:w-72 flex flex-col gap-3">
            <h3 class="text-[9px] heading-font text-slate-600 uppercase tracking-[0.5em] mb-2 px-4">Select Module</h3>
            
            @foreach($projects as $idx => $p)
                @php
                    // Check if this is the portfolio project to apply the "stickout" style
                    $isPortfolio = str_contains(strtolower($p['name']), 'portfolio');
                @endphp

                <button @click="current = {{ $idx }}" 
                        :class="current === {{ $idx }} 
                            ? '{{ $isPortfolio ? 'border-indigo-400/50 bg-indigo-500/10 text-white shadow-[0_0_20px_rgba(99,102,241,0.15)]' : 'border-indigo-500 bg-indigo-500/5 text-white shadow-[0_0_15px_rgba(99,102,241,0.1)]' }}' 
                            : '{{ $isPortfolio ? 'border-indigo-500/20 bg-indigo-500/5 text-indigo-400/60' : 'border-slate-800 text-slate-500' }}'"
                        class="group relative text-left p-4 border transition-all hover:border-slate-600 uppercase text-[10px] font-bold tracking-tighter overflow-hidden">
                    
                    @if($isPortfolio)
                        <div class="absolute top-0 right-0 w-2 h-2 border-t border-r border-indigo-500/40 group-hover:border-indigo-500 transition-colors"></div>
                    @endif

                    <div x-show="current === {{ $idx }}" 
                         class="absolute left-0 top-0 h-full w-[2px] bg-indigo-500"></div>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col">
                            @if($isPortfolio)
                                <span class="text-[7px] font-mono text-indigo-500/50 mb-1">SYSTEM//</span>
                            @endif
                            <span>{{ $p['name'] }}</span>
                        </div>
                        <span class="text-[8px] opacity-30 group-hover:opacity-100 transition-opacity font-mono">
                            {{ $isPortfolio ? 'META' : '0' . ($idx + 1) }}
                        </span>
                    </div>
                </button>
            @endforeach
        </div>

    </div>
</template>