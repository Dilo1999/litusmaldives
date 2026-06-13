<section class="relative py-[50px] pb-20">
    <div class="litus-orb -right-20 top-0 h-[360px] w-[360px] opacity-40"></div>

    <div class="relative mx-auto max-w-[1260px] px-7">
        <div class="mb-14 text-center">
            <h2 class="mb-4 text-[clamp(1.8rem,3.5vw,2.6rem)] leading-[1.15] font-black text-litus-navy">
                As the leading logistics provider in the Maldives,<br class="hidden sm:block">
                we specialise in
            </h2>
            <p class="mx-auto m-0 max-w-[660px] text-[0.95rem] leading-[1.88] text-litus-muted">
                {{ config('litus.intro') }}
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            @foreach(config('litus.home_services') as $service)
                <a
                    href="{{ route('services') }}"
                    class="group litus-card flex cursor-pointer flex-col items-center px-4 py-7 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-litus-navy"
                >
                    <div class="service-card-icon-wrap mb-3.5 flex h-[52px] w-[52px] items-center justify-center rounded-full bg-litus-surface transition-all duration-300">
                        <x-litus-icon :name="$service['icon']" class="service-card-icon h-[22px] w-[22px] text-litus-accent transition-transform duration-300" />
                    </div>
                    <span class="text-[0.78rem] leading-snug font-bold text-litus-navy transition-colors duration-300 group-hover:text-white">
                        {{ $service['label'] }}
                    </span>
                </a>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <x-arrow-link :href="route('services')" variant="dark" label="View All Services" />
        </div>
    </div>
</section>
