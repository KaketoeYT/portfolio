<template x-if="active === 'engine'">
    <div x-transition class="w-full max-w-6xl flex flex-col gap-12">
        <div class="flex flex-col md:flex-row gap-16 items-start">
            
            <div class="w-full md:w-1/3">
                <h2 class="heading-font text-4xl text-white mb-6 uppercase italic">Skills</h2>
                <div class="p-8 border border-slate-800 bg-slate-900/10 rounded-sm relative group overflow-hidden">
                    <div class="absolute inset-0 bg-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <p class="text-slate-500 text-sm italic leading-relaxed relative z-10">
                        Theres always more to learn "It's not a lake, it's an ocean" - Alan Wake
                    </p>
                </div>
            </div>

            <div class="flex-1 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-8">
                    @foreach($skills as $skill)
                        <div class="group">
                            <div class="flex justify-between mb-3 text-[9px] uppercase font-bold tracking-[0.2em]">
                                <span class="text-white opacity-80">{{ $skill['name'] }}</span>
                            </div>
                            
                            <div class="h-[1px] w-full bg-slate-800 relative overflow-hidden">
                                <div class="h-full bg-indigo-500 shadow-[0_0_10px_#6366f1] transition-all duration-[1500ms] ease-out"
                                    x-init="setTimeout(() => $el.style.width = '{{ $skill['percent'] }}%', 100)"
                                    style="width: 0%">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</template>