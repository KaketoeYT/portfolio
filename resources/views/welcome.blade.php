<x-layout>
    <div x-data="{ active: 'launch' }" class="h-screen w-screen overflow-hidden bg-slate-950 text-slate-100 font-sans flex flex-col">
        
        <header class="p-6 flex justify-between items-center border-b border-white/10">
            <div class="flex items-center gap-4">
                <div class="w-3 h-3 rounded-full bg-orange-500 animate-pulse"></div>
                <span class="font-mono text-sm tracking-widest uppercase">System Status: Internship Ready</span>
            </div>
            <nav class="hidden md:flex gap-8 text-xs font-bold uppercase tracking-widest">
                <a href="https://github.com" class="hover:text-orange-500 transition">Github</a>
                <a href="https://linkedin.com" class="hover:text-orange-500 transition">LinkedIn</a>
            </nav>
        </header>

        <main class="flex-1 relative flex items-center justify-center">
            
            <template x-if="active === 'launch'">
                <div x-transition:enter="transition ease-out duration-500 transform" 
                     x-transition:enter-start="opacity-0 scale-90 translate-x-full"
                     x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                     class="text-center">
                    <h1 class="text-8xl font-black italic tracking-tighter leading-none mb-4">
                        FAST <span class="text-orange-500">CODE.</span><br>DEEP <span class="text-indigo-500">STACK.</span>
                    </h1>
                    <p class="text-slate-400 font-mono">Building high-velocity web experiences with Laravel 12.</p>
                </div>
            </template>

            <template x-if="active === 'engine'">
                <div x-transition:enter="transition ease-out duration-500 transform" 
                     x-transition:enter-start="opacity-0 scale-90 translate-x-full"
                     class="max-w-4xl grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-5xl font-bold mb-6 italic">THE ENGINE</h2>
                        <p class="text-slate-400 leading-relaxed mb-4">I architect back-ends that handle high loads without breaking a sweat. From complex SQL optimizations to Redis-backed real-time queues.</p>
                        <div class="grid grid-cols-2 gap-2 font-mono text-xs">
                            <div class="bg-white/5 p-3 border-l-2 border-indigo-500">PHP 8.4 / Laravel 12</div>
                            <div class="bg-white/5 p-3 border-l-2 border-indigo-500">PostgreSQL / MySQL</div>
                            <div class="bg-white/5 p-3 border-l-2 border-indigo-500">Docker & AWS</div>
                            <div class="bg-white/5 p-3 border-l-2 border-indigo-500">REST & GraphQL</div>
                        </div>
                    </div>
                    <div class="bg-indigo-500/10 border border-indigo-500/20 h-64 rounded-xl flex items-center justify-center">
                        <span class="text-indigo-500 font-mono animate-pulse text-sm">[ CODE_ENGINE_RUNNING ]</span>
                    </div>
                </div>
            </template>

            <template x-if="active === 'visuals'">
                <div x-transition:enter="transition ease-out duration-500 transform" 
                     class="text-right max-w-2xl">
                    <h2 class="text-5xl font-bold mb-6 italic">THE G-FORCE</h2>
                    <p class="text-slate-400 leading-relaxed mb-6">Interfaces should be visceral. I use Tailwind and Alpine.js to build lightweight, lightning-fast UIs that keep users engaged.</p>
                    <div class="flex justify-end gap-4">
                        <span class="text-orange-500 font-bold border-b-2 border-orange-500">REACTIVE</span>
                        <span class="text-orange-500 font-bold border-b-2 border-orange-500">ACCESSIBLE</span>
                        <span class="text-orange-500 font-bold border-b-2 border-orange-500">PERFORMANT</span>
                    </div>
                </div>
            </template>

            <template x-if="active === 'projects'">
                <div x-data="{ currentProject: 0, projectCount: {{ count($projects) }} }" 
                    x-transition:enter="transition ease-out duration-500 transform" 
                    x-transition:enter-start="opacity-0 scale-95 translate-y-10"
                    class="w-full max-w-5xl px-12">
                    
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="flex-1 space-y-6">
                            <div class="inline-block px-3 py-1 bg-orange-500 text-black text-[10px] font-black uppercase tracking-widest italic">
                                Active Project
                            </div>
                            
                            @foreach($projects as $index => $project)
                                <div x-show="currentProject === {{ $index }}" 
                                    x-transition:enter="transition duration-300"
                                    x-transition:enter-start="opacity-0 translate-x-4">
                                    <h2 class="text-6xl font-black italic mb-2">{{ $project['name'] }}</h2>
                                    <p class="text-indigo-400 font-mono text-sm mb-4">{{ $project['type'] }}</p>
                                    <p class="text-slate-400 text-lg leading-relaxed max-w-md">
                                        {{ $project['desc'] }}
                                    </p>
                                    
                                    <div class="mt-6 flex gap-3">
                                        @foreach($project['stack'] as $tech)
                                            <span class="text-[10px] border border-slate-700 px-2 py-1 rounded font-mono">{{ $tech }}</span>
                                        @endforeach
                                    </div>

                                    <a href="{{ $project['link'] }}" class="inline-block mt-8 text-white border-b-2 border-orange-500 pb-1 hover:text-orange-500 transition font-bold uppercase tracking-tighter">
                                        Inspect Source →
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="w-full md:w-64 space-y-4">
                            @foreach($projects as $index => $project)
                                <button @click="currentProject = {{ $index }}"
                                        :class="currentProject === {{ $index }} ? 'border-orange-500 bg-orange-500/10' : 'border-white/10 hover:border-white/30'"
                                        class="w-full text-left p-4 border-2 transition-all group relative overflow-hidden">
                                    <span class="text-[10px] block font-mono opacity-50">0{{ $index + 1 }}</span>
                                    <span class="font-bold uppercase tracking-tight">{{ $project['name'] }}</span>
                                    
                                    <div class="absolute right-0 top-0 h-full w-1 bg-orange-500 transform translate-x-full group-hover:translate-x-0 transition-transform"></div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="active === 'station'">
                <div x-transition:enter="transition ease-out duration-500" class="text-center">
                    <h2 class="text-7xl font-bold mb-8 italic">END OF LINE.</h2>
                    <p class="mb-12 text-slate-400">Ready to hire a developer who doesn't play it safe?</p>
                    <a href="mailto:you@example.com" class="inline-block px-12 py-4 bg-orange-600 hover:bg-orange-500 text-white font-black uppercase tracking-widest transform skew-x-12 transition-all">
                        Contact Me
                    </a>
                </div>
            </template>

        </main>

        <footer class="p-8 border-t border-white/10 flex justify-center">
            <div class="flex gap-4">
                @foreach($sections as $s)
                    <button @click="active = '{{ $s['id'] }}'" 
                            :class="active === '{{ $s['id'] }}' ? 'bg-orange-600 w-16' : 'bg-slate-800 w-8 hover:bg-slate-700'"
                            class="h-2 rounded-full transition-all duration-300">
                    </button>
                @endforeach
            </div>
        </footer>
    </div>
</x-layout>