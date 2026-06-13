<x-app-layout>
    {{-- الحاوية الرئيسية مع خلفية موحدة --}}
    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <x-sidebar x-bind:open="open" />

        {{-- main: استخدمنا max-w-7xl لتوسيط المحتوى في الشاشات الكبيرة --}}
        <main class="flex-1 p-4 md:p-8 w-full">
            <div class="max-w-7xl mx-auto">

                {{-- الهيدر --}}
                <div class="mb-8">
                    <h1 class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white">
                        {{ __('إضافة منتج رقمي جديد') }}</h1>
                    <p class="text-sm md:text-base text-slate-500 dark:text-slate-400 mt-1">
                        {{ __('املأ البيانات أدناه لإضافة منتجك الجديد للمتجر') }}
                    </p>
                </div>

                {{-- الفورم --}}
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                    class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8">
                    @csrf

                    {{-- العمود الرئيسي --}}
                    <div class="lg:col-span-6 space-y-6">
                        <div
                            class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6 md:p-8">
                            <div class="space-y-6">
                                <div>
                                    <label
                                        class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('اسم المنتج') }}</label>
                                    <input type="text" name="name"
                                        class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-purple-500 dark:text-white transition-all"
                                        placeholder="{{ __('أدخل اسم المنتج...') }}">
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('وصف المنتج') }}</label>
                                    <textarea name="description" rows="8"
                                        class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-purple-500 dark:text-white transition-all"
                                        placeholder="{{ __('اكتب وصفاً مفصلاً للمنتج...') }}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- العمود الجانبي --}}
                    <div class="lg:col-span-4 space-y-6">
                        {{-- كارت الصورة --}}
                        <div class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6"
                            x-data="{
                                imageUrl: null,
                                x: 0,
                                y: 0,
                                scale: 1,
                                dragging: false,
                                isDragging: false,
                                startX: 0,
                                startY: 0,
                                initialDist: 0,
                                initialScale: 1,
                                reset() { this.x = 0;
                                    this.y = 0;
                                    this.scale = 1; },
                                getDist(e) { return Math.hypot(e.touches[0].clientX - e.touches[1].clientX, e.touches[0].clientY - e.touches[1].clientY); },
                                handleStart(e) {
                                    this.dragging = true;
                                    this.isDragging = false;
                                    let clientX = e.touches ? e.touches[0].clientX : e.clientX;
                                    let clientY = e.touches ? e.touches[0].clientY : e.clientY;
                                    if (e.touches?.length === 2) { this.initialDist = this.getDist(e);
                                        this.initialScale = this.scale; } else { this.startX = clientX - this.x;
                                        this.startY = clientY - this.y; }
                                },
                                handleMove(e) {
                                    if (!this.dragging) return;
                                    if (e.cancelable) e.preventDefault();
                                    this.isDragging = true;
                                    let clientX = e.touches ? e.touches[0].clientX : e.clientX;
                                    let clientY = e.touches ? e.touches[0].clientY : e.clientY;
                                    if (e.touches?.length === 2) { this.scale = this.initialScale * (this.getDist(e) / this.initialDist); } else { this.x = clientX - this.startX;
                                        this.y = clientY - this.startY; }
                                }
                            }">

                            <label
                                class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-4">{{ __('صورة المنتج') }}</label>

                            <div class="relative w-full aspect-video rounded-2xl border-2 border-dashed border-slate-200 dark:border-slate-700 flex items-center justify-center overflow-hidden bg-slate-50 dark:bg-slate-800 cursor-pointer hover:border-purple-500 transition-colors group h-50"
                                style="touch-action: none;" @mousedown="handleStart($event)"
                                @mousemove="handleMove($event)" @mouseup="dragging = false"
                                @mouseleave="dragging = false" @touchstart="handleStart($event)"
                                @touchmove="handleMove($event)" @touchend="dragging = false"
                                @click="if (!isDragging) document.getElementById('product_image').click()">

                                <input type="file" name="image" id="product_image" class="hidden" accept="image/*"
                                    @change="if ($event.target.files.length > 0) { 
                                    if (imageUrl) URL.revokeObjectURL(imageUrl); 
                                    imageUrl = URL.createObjectURL($event.target.files[0]); 
                                    reset(); 
                                }">

                                <template x-if="imageUrl">
                                    <img :src="imageUrl"
                                        class="absolute cursor-move object-contain hover:opacity-90 transition-opacity"
                                        :style="`transform: translate(${x}px, ${y}px) scale(${scale}); transition: ${dragging ? 'none' : 'transform 0.2s'}`">
                                </template>

                                <template x-if="!imageUrl">
                                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </template>
                            </div>

                            <template x-if="imageUrl">
                                <div class="mt-4 flex gap-2 justify-center items-center text-slate-500">
                                    <button type="button" @click.stop="scale += 0.1"
                                        class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg hover:text-purple-600 transition-colors cursor-pointer">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </button>
                                    <button type="button" @click.stop="scale = Math.max(0.1, scale - 0.1)"
                                        class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg hover:text-purple-600 transition-colors cursor-pointer">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18 12H6"></path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        @click.stop="document.getElementById('product_image').click()"
                                        class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg hover:text-blue-600 transition-colors cursor-pointer">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button" @click.stop="reset()"
                                        class="p-2 bg-red-50 text-red-500 rounded-lg hover:bg-red-100 transition-colors cursor-pointer">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        {{-- الأسعار والزر --}}
                        <div
                            class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6 space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('السعر') }}</label>
                                    <input type="number" name="price"
                                        class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-3 text-sm focus:ring-2 focus:ring-purple-500 dark:text-white"
                                        placeholder="0.00">
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-2">{{ __('الخصم') }}</label>
                                    <input type="number" name="discount"
                                        class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-3 text-sm focus:ring-2 focus:ring-purple-500 dark:text-white"
                                        placeholder="0%">
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-purple-600 hover:bg-purple-700 text-white py-4 rounded-xl font-bold text-sm transition-all shadow-lg shadow-purple-600/20 cursor-pointer">
                                {{ __('حفظ المنتج') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
