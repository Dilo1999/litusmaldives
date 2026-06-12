<section class="py-24 bg-litus-bg">
    <div class="max-w-7xl mx-auto px-7">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-18 items-center">
            <div class="animate-on-scroll" data-animate="slideLeft">
                <x-section-label text="WHAT WE DO" />
                <h2 class="text-litus-primary font-black text-[clamp(1.8rem,3.5vw,2.8rem)] leading-tight mb-5">Our Operations</h2>
                <p class="text-litus-muted leading-relaxed text-[0.92rem] mb-9">
                    Litus Maldives, taking the Maldives logistics to another level. Our dedication with absolute standards, special staffing, and modern machinery will provide you with an incredible experience — from container loading in Malé to the final island delivery.
                </p>
                <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-litus-primary text-white font-bold text-[0.7rem] tracking-[0.12em] rounded-sm no-underline hover:bg-litus-primary transition-colors">
                    OUR OPERATIONS
                    <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
                </a>
            </div>

            <div class="grid grid-cols-2 grid-rows-2 gap-2 h-[408px]">
                <div class="row-span-2 overflow-hidden rounded-md">
                    <x-litus-sample-img :index="0" alt="operations" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                </div>
                @foreach([1, 2] as $i)
                    <div class="overflow-hidden rounded-md">
                        <x-litus-sample-img :index="$i" alt="operations" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-2">
            @foreach([3, 4, 5, 6] as $i)
                <div class="h-[140px] overflow-hidden rounded-md">
                    <x-litus-sample-img :index="$i" alt="operations" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                </div>
            @endforeach
        </div>

        <div class="text-center mt-9">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 px-8 py-3.5 border-2 border-litus-primary text-litus-primary font-bold text-[0.7rem] tracking-[0.12em] rounded-sm no-underline hover:bg-litus-primary hover:text-white transition-colors">
                VIEW MORE
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>
    </div>
</section>
