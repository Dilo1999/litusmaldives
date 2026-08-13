<footer>
    <div class="bg-litus-navy">
        <div class="litus-container pt-[60px] pb-[52px]">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-[1.1fr_1.2fr_1fr_1fr_0.8fr] lg:gap-10">
                <div>
                    <div class="mb-8">
                        <img
                            src="{{ asset(config('litus.logo')) }}"
                            alt="LITUS Maldives"
                            class="h-11 w-auto object-contain brightness-0 invert"
                        >
                    </div>
                    <div class="mb-7">
                        <div class="mb-2.5 text-[0.72rem] tracking-[0.12em] text-white/45">Pre-Sales</div>
                        <a href="mailto:sales@litusmaldives.com" class="mb-1 block text-[0.82rem] text-litus-accent no-underline">sales@litusmaldives.com</a>
                        <a href="tel:+9607979055" class="block text-[0.82rem] text-white/75 no-underline">+960 797 9055</a>
                    </div>
                    <div>
                        <div class="mb-2.5 text-[0.72rem] tracking-[0.12em] text-white/45">Operations</div>
                        <a href="mailto:{{ config('litus.contact.ops_email') }}" class="mb-1 block text-[0.82rem] text-litus-accent no-underline">{{ config('litus.contact.ops_email') }}</a>
                        <a href="tel:+9607797172" class="block text-[0.82rem] text-white/75 no-underline">+960 779 7172</a>
                    </div>
                </div>

                <div>
                    <div class="mb-7">
                        <div class="mb-2 text-[0.82rem] font-bold text-white">Malé Office</div>
                        <div class="text-[0.8rem] leading-relaxed text-white/55">
                            Ma. Dydum, 2nd Floor,<br>
                            Buruzu Magu, 20340, Malé,<br>
                            Republic of Maldives
                        </div>
                    </div>
                    <div>
                        <div class="mb-2 text-[0.82rem] font-bold text-white">Warehouse</div>
                        <div class="text-[0.8rem] leading-relaxed text-white/55">
                            Malé Commercial Harbour,<br>
                            Bonded Zone, Malé
                        </div>
                    </div>
                </div>

                <div>
                    <ul class="m-0 flex list-none flex-col gap-3 p-0">
                        @foreach(['About Us' => 'about', 'Services' => 'services', 'Gallery' => 'gallery', 'Blog' => 'blog', 'Contact' => 'contact'] as $label => $route)
                            <li>
                                <a href="{{ route($route) }}" class="text-[0.82rem] text-white/60 no-underline transition-colors hover:text-litus-accent">{{ $label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <ul class="m-0 flex list-none flex-col gap-3 p-0">
                        @foreach(['North Malé Atoll', 'South Malé Atoll', 'Addu Atoll', 'Lhaviyani Atoll', 'Baa Atoll'] as $location)
                            <li class="text-[0.82rem] text-white/60">{{ $location }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex flex-col items-start gap-3.5">
                    <a href="{{ route('contact') }}" class="rounded-md bg-litus-accent px-7 py-2.5 text-[0.75rem] font-bold tracking-[0.06em] text-white no-underline whitespace-nowrap transition-opacity hover:opacity-85">
                        Contact Us
                    </a>
                    <a href="{{ route('services') }}" class="rounded-md bg-litus-accent px-7 py-2.5 text-[0.75rem] font-bold tracking-[0.06em] text-white no-underline whitespace-nowrap transition-opacity hover:opacity-85">
                        Know More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-white/6 bg-litus-navy-dark">
        <div class="litus-container flex flex-wrap items-center justify-between gap-4 py-5">
            <div class="flex flex-wrap gap-7">
                @foreach(['Privacy Policy', 'Terms', 'Cancellation Policy', 'Copyrights', 'Fees and Charges'] as $policy)
                    <a href="#" class="text-[0.73rem] text-white/45 no-underline transition-colors hover:text-litus-accent">{{ $policy }}</a>
                @endforeach
            </div>
            <div class="flex gap-2">
                @foreach(['f', '𝕏', 'in', '◎'] as $social)
                    <a href="#" class="flex h-8 w-8 items-center justify-center rounded-md bg-white/8 text-[0.72rem] font-bold text-white/60 no-underline transition-all hover:bg-litus-accent hover:text-white">{{ $social }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-litus-navy">
        <div class="litus-container py-3 text-center">
            <span class="text-[0.75rem] font-medium text-white">© {{ date('Y') }} LITUS Maldives | All Rights Reserved.</span>
        </div>
    </div>
</footer>
