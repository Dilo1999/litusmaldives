<section class="relative pb-[100px] pt-[50px]">
    <div class="litus-orb -right-[100px] -top-[60px] h-[400px] w-[400px] opacity-35"></div>

    <div class="relative mx-auto grid max-w-[1260px] grid-cols-1 gap-10 px-7 lg:grid-cols-2">
        <div data-faq>
            <x-section-badge text="COMMON QUESTIONS" surface="white" />
            <h2 class="mb-8 text-[clamp(1.7rem,3vw,2.2rem)] leading-[1.2] font-black text-litus-navy">Our Questions</h2>

            <div class="flex flex-col gap-3">
                @foreach(config('litus.faqs') as $index => $faq)
                    <div class="litus-card overflow-hidden rounded-2xl">
                        <button
                            type="button"
                            data-faq-toggle="{{ $index }}"
                            class="flex w-full cursor-pointer items-center justify-between gap-3 border-0 bg-transparent px-[22px] py-[18px] text-left font-[inherit]"
                        >
                            <span class="text-[0.88rem] font-bold text-litus-navy">{{ $faq['q'] }}</span>
                            <x-litus-icon
                                name="chevron-down"
                                data-faq-icon="{{ $index }}"
                                @class([
                                    'h-4 w-4 shrink-0 transition-transform duration-300',
                                    'rotate-180 text-litus-accent' => $index === 0,
                                    'text-[#b0bcd0]' => $index !== 0,
                                ])
                            />
                        </button>
                        <div
                            data-faq-panel="{{ $index }}"
                            @class(['border-t border-litus-navy/5 px-[22px] pb-[18px]', 'hidden' => $index !== 0])
                        >
                            <p class="mt-3.5 mb-0 text-[0.84rem] leading-[1.8] text-litus-muted">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="litus-card relative overflow-hidden rounded-3xl p-8 md:p-10">
            <div class="pointer-events-none absolute -top-[60px] -right-[60px] h-[200px] w-[200px] rounded-full bg-[radial-gradient(circle,rgba(6,182,212,0.08)_0%,transparent_70%)]"></div>

            <x-section-badge text="CONTACT US" />
            <h2 class="mb-2 text-[1.5rem] leading-[1.2] font-black text-litus-navy">
                Have Questions?<br>
                Get in Touch!
            </h2>
            <p class="mb-7 text-[0.83rem] leading-[1.72] text-litus-muted">
                We handle all formalities for your imports and exports, working with all international stations to guarantee your load arrives safely.
            </p>
            <x-contact-form variant="soft" />
        </div>
    </div>
</section>
