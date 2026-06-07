<x-app-layout>

    <section class="relative bg-stone-100/80 dark:bg-slate-950 transition-colors duration-500">
        {{-- HOME SLIDER --}}
        <x-swiper>
            <x-swiper-carousel />
        </x-swiper>
    </section>

    {{-- SERVICES & PLATFORMS SECTION --}}
    <section id="services" class="bg-violet-50 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- العنوان --}}
            <x-section-header :title="__('الخدمات الرقمية')" :description="__('نوفر لكم أفضل الخدمات الرقمية واشتراكات البرامج بأعلى معايير الجودة.')" />

            {{-- الخدمات --}}
            <div class="mt-12">
                <x-section-services />
            </div>
        </div>

    </section>

    {{-- PLAYSTATION SECTION --}}
    <section id="gaming" class="bg-white/80 dark:bg-slate-950 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header  :title="__('متجر الاشتراكات والألعاب')" :description="__('شحن فوري وآمن لجميع بطاقات الألعاب المفضلة لديك وبأرخص الأسعار.')" />
            <x-section-games id="offers" :title="__('العروض')" :hasProducts="false" />
            <x-section-games id="steam" :title="__('العاب منصة ستيم للحاسوب')" :hasProducts="true" />
            <x-section-games id="playstation" :title="__('العاب بلايستيشن')" :hasProducts="true" />
            <x-section-games id="xbox" :title="__('العاب إكس بوكس')" :hasProducts="false" />
            <x-section-games id="premium" :title="__('اشتراكات ويندوز والبرامج')" :hasProducts="true" />
            <x-section-games id="ai" :title="__('اشتراكات تطبيقات (AI)')" :hasProducts="false" />
            <x-section-games id="entertainment" :title="__('اشتراكات نيتفليكس ويوتيوب بريميوم وشاهد')" :hasProducts="true" />
    </section>

</x-app-layout>
