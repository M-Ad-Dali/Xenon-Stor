<x-app-layout>

    
    <section class="relative bg-stone-100/80 dark:bg-slate-950 transition-colors duration-500">
        {{-- HOME SLIDER --}}
        <x-home-slider>
            <x-home-carousel />
        </x-home-slider>
    </section>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- SERVICES & PLATFORMS SECTION --}}
    <x-section-header id="services" :title="__('الخدمات الرقمية')" :description="__('نوفر لكم أفضل الخدمات الرقمية واشتراكات البرامج بأعلى معايير الجودة.')" />
    <x-section-services />

    {{-- PLAYSTATION SECTION --}}
    <x-section-header id="gaming" :title="__('متجر الاشتراكات والألعاب')" :description="__('شحن فوري وآمن لجميع بطاقات الألعاب المفضلة لديك وبأرخص الأسعار.')" />
    <x-section-games id="steam" :title="__('العاب منصة ستيم للحاسوب')" :hasProducts="false" />
    <x-section-games id="playstation" :title="__('العاب بلايستيشن')" :hasProducts="true" />
    <x-section-games id="xbox" :title="__('العاب إكس بوكس')" :hasProducts="false" />
    <x-section-games id="windows" :title="__('اشتراكات ويندوز والبرامج')" :hasProducts="true" />
    <x-section-games id="ai" :title="__('اشتراكات تطبيقات (AI)')" :hasProducts="false" />
    <x-section-games id="video-games" :title="__('اشتراكات ألعاب الفيديو')" :hasProducts="true" />

    </div>

</x-app-layout>
