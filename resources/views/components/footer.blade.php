<footer class="bg-litus-navy-dark">
    <div class="bg-litus-navy py-7">
        <div class="max-w-7xl mx-auto px-7 flex items-center justify-between flex-wrap gap-4">
            <div>
                <div class="text-white font-black text-lg tracking-wide">Ready to move your cargo?</div>
                <div class="text-white/80 text-sm mt-1">Get a free quote from the Maldives' leading logistics team.</div>
            </div>
            <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-litus-navy font-extrabold text-[0.72rem] tracking-[0.14em] rounded-sm no-underline whitespace-nowrap hover:opacity-90 transition-opacity">
                CONTACT US NOW
            </a>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-7 pt-[72px] pb-9">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1.2fr] gap-14 mb-14">
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-[38px] h-[38px] rounded bg-white flex items-center justify-center text-litus-navy">
                        <x-litus-icon name="ship" class="w-[18px] h-[18px]" />
                    </div>
                    <div>
                        <div class="text-white font-black text-sm tracking-[0.3em] leading-none">LITUS</div>
                        <div class="text-white/60 text-[7px] tracking-[0.3em] mt-0.5">MALDIVES</div>
                    </div>
                </div>
                <p class="text-white/38 text-[0.84rem] leading-relaxed mb-7">
                    The leading inter-atoll freight and logistics company in the Republic of Maldives — connecting every island with reliable, professional cargo services.
                </p>
                <div class="flex flex-col gap-3">
                    <div class="flex gap-2.5 items-start">
                        <x-litus-icon name="map-pin" class="w-3.5 h-3.5 text-white/50 mt-0.5 shrink-0" />
                        <span class="text-white/35 text-[0.78rem] leading-snug">{{ config('litus.contact.address') }}</span>
                    </div>
                    <div class="flex gap-2.5 items-start">
                        <x-litus-icon name="phone" class="w-3.5 h-3.5 text-white/50 mt-0.5 shrink-0" />
                        <span class="text-white/35 text-[0.78rem]">{{ implode(' · ', config('litus.contact.phones')) }}</span>
                    </div>
                    <div class="flex gap-2.5 items-start">
                        <x-litus-icon name="mail" class="w-3.5 h-3.5 text-white/50 mt-0.5 shrink-0" />
                        <span class="text-white/35 text-[0.78rem]">{{ config('litus.contact.email') }}</span>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="text-white font-extrabold text-[0.68rem] tracking-[0.22em] mb-5">SERVICES</h4>
                <ul class="flex flex-col gap-2.5 list-none p-0 m-0">
                    @foreach(array_slice(config('litus.services'), 0, 6) as $service)
                        <li><a href="{{ route('services') }}" class="text-white/35 text-[0.82rem] no-underline hover:text-white transition-colors">{{ $service['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-extrabold text-[0.68rem] tracking-[0.22em] mb-5">COMPANY</h4>
                <ul class="flex flex-col gap-2.5 list-none p-0 m-0">
                    @foreach(['About Us' => 'about', 'Gallery' => 'gallery', 'Blog' => 'blog', 'Contact' => 'contact'] as $label => $route)
                        <li><a href="{{ route($route) }}" class="text-white/35 text-[0.82rem] no-underline hover:text-white transition-colors">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-extrabold text-[0.68rem] tracking-[0.22em] mb-5">STAY UPDATED</h4>
                <p class="text-white/35 text-[0.8rem] leading-relaxed mb-4">Get logistics news and updates from Litus Maldives.</p>
                <form class="flex" onsubmit="return false;">
                    <input type="email" placeholder="Your email" class="flex-1 px-3.5 py-2.5 bg-white/6 border border-white/10 border-r-0 rounded-l-sm text-white text-[0.8rem] outline-none">
                    <button type="submit" class="px-4 py-2.5 bg-white border-0 rounded-r-sm cursor-pointer text-litus-navy font-bold text-[0.7rem]">GO</button>
                </form>
            </div>
        </div>

        <div class="border-t border-white/7 pt-7 flex items-center justify-between flex-wrap gap-3">
            <p class="text-white/20 text-[0.75rem] m-0">Copyright © {{ date('Y') }} LITUS Maldives — All Rights Reserved.</p>
            <div class="flex gap-2">
                @foreach(['f', 'in', 'tw'] as $social)
                    <a href="#" class="w-8 h-8 flex items-center justify-center border border-white/12 rounded-sm text-white/30 text-[0.72rem] font-bold no-underline hover:bg-white hover:border-white hover:text-litus-navy transition-all">{{ $social }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
