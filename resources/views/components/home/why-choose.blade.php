<section class="relative py-[50px]">
    <div class="litus-orb -left-[100px] bottom-[-100px] h-[400px] w-[400px] opacity-40"></div>

    <div class="relative mx-auto max-w-[1260px] px-7">
        <div class="litus-card relative overflow-hidden rounded-[28px] px-8 py-12 md:px-16 md:py-14">
            <div class="pointer-events-none absolute -top-20 -right-20 h-[300px] w-[300px] rounded-full bg-[radial-gradient(circle,rgba(6,182,212,0.1)_0%,transparent_70%)]"></div>

            <div class="relative z-[1] grid grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-[72px]">
                <div>
                    <x-section-badge text="WHY CHOOSE US" />
                    <h2 class="mb-5 text-[clamp(1.6rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">
                        We Take Care About Transportation<br>
                        <span class="text-litus-accent">For Your Business</span>
                    </h2>
                    <p class="mb-7 text-[0.92rem] leading-[1.88] text-litus-muted">
                        Litus Maldives takes logistics to another level. Our dedication to absolute standards, specialised staffing, and modern machinery provides an incredible experience — and the confidence that your cargo is in the best hands.
                    </p>
                    <ul class="mb-9 flex list-none flex-col gap-3 p-0">
                        @foreach(config('litus.why_points') as $point)
                            <li class="flex items-start gap-3">
                                <x-litus-icon name="check-circle" class="mt-0.5 h-4 w-4 shrink-0 text-litus-accent" />
                                <span class="text-[0.85rem] text-litus-muted">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <x-arrow-link :href="route('about')" variant="accent" label="Learn More" />
                </div>

                <div class="relative">
                    <div class="overflow-hidden rounded-[20px]">
                        <x-litus-sample-img :index="0" alt="Operations" class="block h-[380px] w-full object-cover" />
                    </div>
                    <div class="absolute -right-4 -bottom-4 rounded-2xl bg-litus-navy px-[22px] py-[18px] shadow-[0_8px_24px_rgba(14,23,59,0.25)]">
                        <div class="text-[1.7rem] leading-none font-black text-white">15+</div>
                        <div class="mt-1 text-[0.58rem] tracking-[0.14em] text-white/60">YEARS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
