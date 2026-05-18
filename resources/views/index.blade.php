<x-app-layout>

    <section class="relative bg-stone-100/80 dark:bg-slate-950 transition-colors duration-500">
        {{-- HOME SLIDER --}}
        <x-home-slider>
            <x-home-carousel />
        </x-home-slider>
    </section>

    {{-- SERVICES & PLATFORMS SECTION --}}
    <x-section-services />

    {{-- PLAYSTATION SECTION --}}
    <x-section-header :title="__('متجر الاشتراكات والألعاب')" :description="__('شحن فوري وآمن لجميع بطاقات الألعاب المفضلة لديك وبأرخص الأسعار.')" />
    <x-games-carousel id="steam" :title="__('العاب منصة ستيم للحاسوب')" :hasProducts="false" />
    <x-games-carousel id="playstation" :title="__('العاب بلايستيشن')" :hasProducts="true" />
    <x-games-carousel id="xbox" :title="__('العاب إكس بوكس')" :hasProducts="false" />
    <x-games-carousel id="windows" :title="__('اشتراكات ويندوز والبرامج')" :hasProducts="true" />
    <x-games-carousel id="ai" :title="__('اشتراكات تطبيقات (AI)')" :hasProducts="false" />
    <x-games-carousel id="video-games" :title="__('اشتراكات ألعاب الفيديو')" :hasProducts="true" />

</x-app-layout>
