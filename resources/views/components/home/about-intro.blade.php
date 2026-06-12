<section class="py-24 pb-20 bg-litus-bg">
    <div class="max-w-7xl mx-auto px-7">
        <div class="flex flex-col items-center text-center mb-14">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-11 h-11 rounded-md bg-litus-primary flex items-center justify-center text-white">
                    <x-litus-icon name="ship" class="w-[22px] h-[22px]" />
                </div>
                <div class="text-left">
                    <div class="text-litus-primary font-black text-xl tracking-[0.3em] leading-none">LITUS</div>
                    <div class="text-litus-primary text-[9px] tracking-[0.3em]">MALDIVES</div>
                </div>
            </div>
            <p class="text-litus-muted max-w-2xl leading-relaxed text-[0.95rem] m-0">
                LITUS Maldives is a specialist freight management company with offices, warehousing, and an exceptional operations team providing end-to-end logistics services throughout the archipelago. Our dedication to absolute standards, specialised staffing, and modern machinery provides an incredible experience for every client.
            </p>
        </div>

        <div class="flex items-center gap-5 mb-13">
            <div class="flex-1 h-px bg-litus-primary/10"></div>
            <span class="text-litus-primary font-bold text-[0.6rem] tracking-[0.24em] whitespace-nowrap">AS THE LEADING LOGISTICS PROVIDER IN THE MALDIVES, WE SPECIALISE IN</span>
            <div class="flex-1 h-px bg-litus-primary/10"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 border border-litus-primary/8 rounded-lg overflow-hidden">
            @foreach(config('litus.services') as $i => $service)
                <div
                    class="group flex flex-col items-center text-center p-8 border-litus-primary/8 hover:bg-litus-primary transition-colors cursor-pointer animate-on-scroll"
                    data-animate="fadeInUp"
                    data-delay="{{ $i * 0.06 }}"
                    @class([
                        'border-r' => ($i % 4) !== 3,
                        'border-b md:border-b-0' => $i < 4,
                        'border-b' => $i >= 4 && $i < 8,
                    ])
                >
                    <div class="w-[52px] h-[52px] rounded-full bg-litus-primary/10 flex items-center justify-center mb-3.5 text-litus-primary group-hover:text-white">
                        <x-litus-icon :name="$service['icon']" class="w-[22px] h-[22px]" />
                    </div>
                    <span class="text-litus-primary font-bold text-[0.78rem] leading-snug group-hover:text-white">{{ $service['label'] }}</span>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-11">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-9 py-3.5 bg-litus-primary text-white font-bold text-[0.7rem] tracking-[0.14em] rounded-sm no-underline hover:bg-litus-primary-dark transition-colors">
                VIEW ALL SERVICES
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>
    </div>
</section>
