<template x-if="active === 'pilot'">
    <div x-transition class="w-full max-w-5xl">
        <div class="flex flex-col md:flex-row gap-16 items-start">
            
            <div class="w-full md:w-1/3">
                <div class="relative group">
                    <div class="aspect-[3/4] bg-slate-900 border border-slate-800 relative overflow-hidden">
                        <div class="absolute inset-0 bg-indigo-500/10 mix-blend-color"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-slate-800 uppercase tracking-[0.5em] text-xs font-bold -rotate-90">
                            Personnel File // THJ-06
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 border-r border-b border-indigo-500/30"></div>
                </div>

                <div class="mt-12 space-y-6">
                    <h3 class="text-[9px] heading-font text-slate-600 uppercase tracking-[0.5em]">Primary Skills</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['PHP', 'Laravel', 'JS', 'ThreeJS', 'C#', 'Unity', 'Python'] as $skill)
                            <span class="px-2 py-1 bg-indigo-500/5 text-indigo-400/80 border border-indigo-500/10 text-[9px] font-mono uppercase">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex-1 space-y-10">
                <div>
                    <h2 class="heading-font text-6xl text-white uppercase italic leading-none mb-4">Thijs Derogee</h2>
                    <p class="text-indigo-400 font-mono text-xs tracking-widest uppercase">Software Developer</p>
                </div>

                <div class="prose prose-invert prose-slate text-slate-400 leading-relaxed">
                    <p>
                        I've independently learned <span class="text-white">Unity, ThreeJS, and Javascript</span> to build immersive 3D environments, alongside developing robust backend systems with <span class="text-white">Laravel</span>. I bridge the gap between technical reliability and creative interactivity.
                    </p>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 border-y border-slate-800 py-8">
                    <div>
                        <h4 class="text-[9px] text-slate-600 uppercase tracking-widest mb-1">Status</h4>
                        <p class="text-indigo-400 text-xs animate-pulse">3rd Year Student</p>
                    </div>
                    <div>
                        <h4 class="text-[9px] text-slate-600 uppercase tracking-widest mb-1">Location</h4>
                        <p class="text-white text-xs">Haarlem, NL</p>
                    </div>
                    <div>
                        <h4 class="text-[9px] text-slate-600 uppercase tracking-widest mb-1">Born</h4>
                        <p class="text-white text-xs">22-04-2006</p>
                    </div>
                    <div>
                        <h4 class="text-[9px] text-slate-600 uppercase tracking-widest mb-1">Interests</h4>
                        <p class="text-white text-xs italic">Gaming, Roller Coasters</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <h3 class="text-[10px] font-bold text-white uppercase tracking-[0.2em] flex items-center gap-2">
                            <span class="w-1 h-1 bg-indigo-500"></span> Education
                        </h3>
                        <div class="space-y-4 border-l border-slate-800 pl-4">
                            <div>
                                <p class="text-xs text-white font-bold uppercase">Software Development Niv. 4</p>
                                <p class="text-[10px] text-slate-500">Nova College | 2024 - Present</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase">Medewerker ICT Support Niv. 2</p>
                                <p class="text-[10px] text-indigo-500/70 font-mono">GRADUATED | 2023 - 2024</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-[10px] font-bold text-white uppercase tracking-[0.2em] flex items-center gap-2">
                            <span class="w-1 h-1 bg-indigo-500"></span> Service History
                        </h3>
                        <div class="space-y-4 border-l border-slate-800 pl-4">
                            <div>
                                <p class="text-xs text-white font-bold uppercase">Hardware Repair Specialist</p>
                                <p class="text-[10px] text-slate-500">Total Progress | 2023 - 2024</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase">Retail & ICT Intern</p>
                                <p class="text-[10px] text-slate-500">Suny Tele Technics | 2022</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <a href="mailto:thijsderogee@gmail.com" class="inline-flex items-center gap-4 text-white group">
                        <span class="h-[1px] w-12 bg-indigo-500 group-hover:w-20 transition-all"></span>
                        <span class="heading-font uppercase italic tracking-widest text-sm">Contact Here</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>