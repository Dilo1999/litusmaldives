<section class="py-24 bg-litus-bg">
    <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 lg:grid-cols-2 gap-18 items-start">
        <div class="rounded-md overflow-hidden border border-litus-primary/8">
            <iframe
                title="Litus Maldives Location"
                src="{{ config('litus.contact.map_embed') }}"
                class="w-full h-[460px] border-0 block"
                loading="lazy"
            ></iframe>
        </div>

        <div>
            <x-section-label text="CONTACT US" />
            <h2 class="text-litus-primary font-black text-[clamp(1.8rem,3.5vw,2.6rem)] leading-tight mb-4">
                Have Questions?<br>Get in Touch!
            </h2>
            <p class="text-litus-muted leading-relaxed text-[0.9rem] mb-9">
                We are experienced in handling the formalities and documentation required for your imports and exports. We work with all international stations to guarantee your load safely reaches without any delays.
            </p>
            <x-contact-form />
        </div>
    </div>
</section>
