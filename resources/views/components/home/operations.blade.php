<section class="relative py-[50px]">
    <div class="litus-orb -right-[60px] top-0 h-[360px] w-[360px] opacity-35"></div>

    <div class="relative mx-auto max-w-[1260px] px-7">
        <div class="grid grid-cols-1 items-center gap-14 lg:grid-cols-[1fr_1.3fr]">
            <div>
                <x-section-badge text="WHAT WE DO" surface="white" />
                <h2 class="mb-[18px] text-[clamp(1.7rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">Our Operations</h2>
                <p class="mb-8 text-[0.92rem] leading-[1.88] text-litus-muted">
                    Litus Maldives, taking the Maldives logistics to another level. Our dedication with absolute standards, special staffing, and modern machinery will provide you with an incredible experience — from container loading in Malé to the final island delivery.
                </p>
                <x-arrow-link :href="route('gallery')" variant="dark" label="Our Operations" />
            </div>

            <div class="grid grid-cols-2 grid-rows-[220px_160px] gap-3">
                <div class="row-span-2 overflow-hidden rounded-[20px] shadow-[0_4px_20px_rgba(14,23,59,0.1)]">
                    <x-litus-sample-img :index="0" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                </div>
                @foreach([1, 2] as $index)
                    <div class="overflow-hidden rounded-[20px] shadow-[0_4px_20px_rgba(14,23,59,0.08)]">
                        <x-litus-sample-img :index="$index" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-3 grid grid-cols-2 gap-3 md:grid-cols-4">
            @foreach([3, 4, 5, 6] as $index)
                <div class="h-[130px] overflow-hidden rounded-[18px] shadow-[0_4px_16px_rgba(14,23,59,0.07)]">
                    <x-litus-sample-img :index="$index" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-[1.07]" />
                </div>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <x-arrow-link :href="route('gallery')" variant="outline" label="View More" />
        </div>
    </div>
</section>
