<x-layout>
    <div x-data="{ 
            active: 'launch', 
            sections: @js(collect($sections)->pluck('id')),
            next() { let idx = this.sections.indexOf(this.active); if(idx < this.sections.length - 1) this.active = this.sections[idx + 1]; },
            prev() { let idx = this.sections.indexOf(this.active); if(idx > 0) this.active = this.sections[idx - 1]; }
         }" 
         @keydown.right.window="next()" @keydown.left.window="prev()"
         class="h-screen w-screen flex flex-col relative overflow-hidden">

        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 pointer-events-none"></div>

        <div class="fixed top-0 left-0 h-[2px] bg-indigo-500 shadow-[0_0_10px_#6366f1] transition-all duration-700 z-[100]"
             :style="'width: ' + ((sections.indexOf(active) + 1) / sections.length * 100) + '%'"></div>

        <nav class="fixed left-8 top-1/2 -translate-y-1/2 z-50 flex flex-col gap-10">
            @foreach($sections as $s)
                <button @click="active = '{{ $s['id'] }}'" class="group flex items-center gap-4">
                    <div :class="active === '{{ $s['id'] }}' ? 'bg-indigo-400 w-10' : 'bg-slate-800 w-3 group-hover:bg-slate-600'" 
                         class="h-[1px] transition-all duration-500"></div>
                    <span :class="active === '{{ $s['id'] }}' ? 'opacity-100' : 'opacity-0 -translate-x-2'"
                          class="text-[9px] heading-font uppercase text-indigo-400 transition-all font-bold">
                        {{ $s['title'] }}
                    </span>
                </button>
            @endforeach
        </nav>

        <main class="flex-1 relative flex items-center justify-start pl-24 md:pl-48 pr-12 z-10">
            <x-sections.title/>

            <x-sections.about />
            
            <x-sections.projects :projects="$projects" />
            
            <x-sections.skills :skills="$skills" />
        </main>

        <footer class="p-8 text-center text-[10px] tracking-[1em] text-slate-600 uppercase">
            Arrow Keys to Control Track
        </footer>
    </div>
</x-layout>