<template x-if="active === 'launch'">
    <div x-transition class="max-w-4xl">
        <h1 class="heading-font text-5xl md:text-8xl italic mb-6 text-white uppercase leading-none break-words">
            Thijs<br><span class="text-indigo-500">Derogee</span>
        </h1>
        <p class="text-slate-500 text-lg md:text-xl max-w-xl border-l border-indigo-500/30 pl-6 mb-12">
            Full-Stack Developer focused on high-performance systems and immersive web logic.
        </p>

        <div class="flex flex-wrap gap-4 items-center">
            
            <button @click="active = 'projects'" 
                    class="group relative px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-white transition-all duration-300">
                <div class="absolute -left-1 top-0 h-full w-[2px] bg-indigo-400 group-hover:bg-white"></div>
                <div class="flex flex-col items-start leading-none">
                    <span class="text-[8px] font-mono opacity-50 mb-1">01//</span>
                    <span class="font-bold uppercase text-xs tracking-[0.2em]">View Projects</span>
                </div>
            </button>

            <button @click="active = 'pilot'" 
                    class="group relative px-8 py-4 border border-slate-800 hover:border-indigo-500 bg-slate-900/40 text-slate-400 hover:text-white transition-all duration-300">
                <div class="flex flex-col items-start leading-none">
                    <span class="text-[8px] font-mono opacity-50 mb-1">02//</span>
                    <span class="font-bold uppercase text-xs tracking-[0.2em]">About Me</span>
                </div>
            </button>

            <button @click="active = 'engine'" 
                    class="group relative px-8 py-4 border border-slate-800 hover:border-indigo-500 bg-slate-900/40 text-slate-400 hover:text-white transition-all duration-300">
                <div class="flex flex-col items-start leading-none">
                    <span class="text-[8px] font-mono opacity-50 mb-1">03//</span>
                    <span class="font-bold uppercase text-xs tracking-[0.2em]">My Skills</span>
                </div>
            </button>

            <a href="https://github.com/KaketoeYT" target="_blank"
               class="group relative px-8 py-4 border border-indigo-500/20 hover:border-indigo-500/50 bg-indigo-500/5 text-indigo-400/70 hover:text-indigo-300 transition-all duration-300">
                <div class="absolute top-0 right-0 w-2 h-2 border-t border-r border-indigo-500/40 group-hover:border-indigo-500"></div>
                
                <div class="flex flex-col items-start leading-none">
                    <span class="text-[8px] font-mono opacity-50 mb-1">EXT//</span>
                    <div class="flex items-center gap-2">
                        <span class="font-bold uppercase text-xs tracking-[0.2em]">GitHub</span>
                        <svg class="w-3 h-3 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </div>
                </div>
            </a>

        </div>
    </div>
</template>