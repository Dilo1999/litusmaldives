<section class="bg-litus-primary py-24">
    <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div class="animate-on-scroll" data-animate="slideLeft">
            <x-section-label text="WHY CHOOSE US" :light="true" />
            <h2 class="text-white font-black text-[clamp(1.8rem,3.5vw,2.8rem)] leading-tight mb-6">
                We Take Care About Transportation<br>
                <span class="text-white/80">For Your Business</span>
            </h2>
            <p class="text-white/52 leading-relaxed text-[0.92rem] mb-9">
                Litus Maldives takes the Maldivian logistics to another level. Our dedication with absolute standards, specialised staffing, and modern machinery will provide you with an incredible experience and give you the confidence your cargo is in the best hands.
            </p>
            <ul class="list-none p-0 m-0 mb-10 flex flex-col gap-3.5">
                @foreach(config('litus.why_points') as $point)
                    <li class="flex items-start gap-3">
                        <x-litus-icon name="check-circle" class="w-4 h-4 text-white shrink-0 mt-0.5" />
                        <span class="text-white/72 text-[0.85rem]">{{ $point }}</span>
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white text-litus-primary font-bold text-[0.7rem] tracking-[0.12em] rounded-sm no-underline hover:opacity-90 transition-opacity">
                LEARN MORE
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>

        <div class="relative animate-on-scroll" data-animate="slideRight">
            <x-litus-sample-img :index="4" alt="Operations" class="w-full h-[440px] object-cover rounded-md block" />
            <div class="absolute -bottom-5 -right-5 px-7 py-5 bg-white rounded">
                <div class="text-litus-primary font-black text-3xl leading-none">15+</div>
                <div class="text-litus-primary/70 text-[0.6rem] tracking-[0.16em] mt-1">YEARS OF EXCELLENCE</div>
            </div>
            <div class="absolute -top-3 -left-3 w-20 h-20 border-t-[3px] border-l-[3px] border-white rounded-tl"></div>
        </div>
    </div>
</section>
