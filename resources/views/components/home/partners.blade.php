<section class="py-[50px]">
    <div class="mx-auto max-w-[1260px] px-7">
        <div class="litus-card rounded-3xl px-8 py-11 md:px-[52px]">
            <div class="mb-9 text-center">
                <span class="text-[0.62rem] font-bold tracking-[0.22em] text-litus-accent">TRUSTED BY LEADING BRANDS</span>
                <h2 class="mt-2.5 mb-0 text-[1.7rem] font-black text-litus-navy">We've Partnered With</h2>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-6 md:gap-x-[52px]">
                @foreach(config('litus.partners') as $partner)
                    <img
                        src="{{ asset($partner['logo']) }}"
                        alt="{{ $partner['name'] }}"
                        title="{{ $partner['name'] }}"
                        class="h-16 w-auto max-w-[200px] cursor-pointer object-contain transition-all duration-200 ease-out hover:scale-105 hover:-translate-y-0.5 hover:drop-shadow-md md:h-20 md:max-w-[260px]"
                        loading="lazy"
                    >
                @endforeach
            </div>
        </div>
    </div>
</section>
