<template x-if="active === 'pilot'">
    <div x-transition class="w-full max-w-5xl">
        <div class="flex flex-col md:flex-row gap-16 items-start">
            
            <div class="w-full md:w-1/3">
                <div class="relative group">
                    <div class="aspect-[3/4] bg-slate-900 border border-slate-800 relative overflow-hidden">
                        <div class="absolute inset-0 bg-indigo-500/10 mix-blend-color"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-slate-800 uppercase tracking-[0.5em] text-xs font-bold -rotate-90">
                            Personnel File
                        </div>
                        </div>
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 border-r border-b border-indigo-500/30"></div>
                </div>
            </div>

            <div class="flex-1 space-y-10">
                <div>
                    <h2 class="heading-font text-6xl text-white uppercase italic leading-none mb-4">Thijs Derogee</h2>
                    <p class="text-indigo-400 font-mono text-xs tracking-widest uppercase">Full-Stack Developer</p>
                </div>

                <div class="prose prose-invert prose-slate text-slate-400 leading-relaxed">
                    <p>
                        Based in the Netherlands, I build digital systems that bridge the gap between heavy-duty backend logic and immersive frontend experiences. My journey started with <span class="text-white">JavaScript</span> game engines and evolved into a passion for <span class="text-white">Laravel</span> architecture and <span class="text-white">3D WebGL</span> environments.
                    </p>
                    <p>
                        I don't just write code; I optimize for performance and design for impact. Whether it's managing complex game states or squeezing every millisecond out of an API call, I treat every project as a piece of high-performance machinery.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 border-t border-slate-800 pt-8">
                    <div>
                        <h4 class="text-[10px] text-slate-600 uppercase tracking-widest mb-2">Location</h4>
                        <p class="text-white text-sm">Haarlem, NL</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] text-slate-600 uppercase tracking-widest mb-2">Specialization</h4>
                        <p class="text-white text-sm">Full-Stack Developer</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] text-slate-600 uppercase tracking-widest mb-2">Status</h4>
                        <p class="text-indigo-400 text-sm animate-pulse">Seeking Internship 2026</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] text-slate-600 uppercase tracking-widest mb-2">Interests</h4>
                        <p class="text-white text-sm">Game Dev, Web Dev, Rollercoasters</p>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="mailto:thijsderogee@gmail.com" class="inline-flex items-center gap-4 text-white group">
                        <span class="h-[1px] w-12 bg-indigo-500 group-hover:w-20 transition-all"></span>
                        <span class="heading-font uppercase italic tracking-widest">Connect via Mail</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>