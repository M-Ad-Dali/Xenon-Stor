@props(['showFilter' => false])

@php
    $allOrders = [
        ['id' => '#1001', 'customer' => 'محمد عبدالله', 'email' => 'mohammed@example.com', 'country' => 'السعودية', 'date' => '2026-06-07', 'amount' => '$250', 'status' => 'completed'],
        ['id' => '#1002', 'customer' => 'أحمد علي', 'email' => 'ahmed@example.com', 'country' => 'مصر', 'date' => '2026-06-05', 'amount' => '$120', 'status' => 'pending'],
        ['id' => '#1003', 'customer' => 'سارة خالد', 'email' => 'sara@example.com', 'country' => 'الإمارات', 'date' => '2026-06-10', 'amount' => '$450', 'status' => 'cancelled'],
        ['id' => '#1004', 'customer' => 'خالد يوسف', 'email' => 'khaled@example.com', 'country' => 'الكويت', 'date' => '2026-06-01', 'amount' => '$300', 'status' => 'completed']
    ];

    // الفلترة
    $status = request('status');
    $filteredOrders = $status 
        ? array_filter($allOrders, fn($o) => $o['status'] == $status) 
        : $allOrders;

    // إعادة ترتيب المفاتيح بعد الفلترة
    $orders = array_values($filteredOrders);

    // الترتيب حسب التاريخ
    $sort = request('sort', 'newest');
    usort($orders, function($a, $b) use ($sort) {
        return $sort === 'newest' 
            ? strtotime($b['date']) - strtotime($a['date']) 
            : strtotime($a['date']) - strtotime($b['date']);
    });
@endphp



<div class="xl:col-span-2 bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden">

    {{-- الهيدر --}}
    <div
        class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-start">
        <h2 class="font-bold text-lg text-slate-900 dark:text-white w-full sm:w-auto">
            {{ request()->routeIs('orders') ? __('جميع الطلبات') : __('أحدث الطلبات') }}
        </h2>

        <div class="flex items-center gap-2 sm:gap-4 w-full sm:w-auto justify-center sm:justify-end">
            @if ($showFilter)
                <div class="flex items-center gap-6 px-2">
                    <x-status-filter />
                    <x-date-filter />
                </div>
            @else
                <a href="{{ route('orders') }}"
                    class="text-purple-600 text-sm font-bold hover:underline whitespace-nowrap">
                    {{ __('عرض الكل') }}
                </a>
            @endif
        </div>
    </div>

    {{-- الجدول --}}
    <div class="overflow-x-auto">
        <table class="w-full text-right border-collapse">
            <thead class="bg-slate-50 dark:bg-slate-950/50 text-slate-500 text-xs uppercase tracking-wider">
                <tr class="text-center">
                    <th class="px-2 py-4 font-semibold">{{ __('رقم الطلب') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('اسم العميل') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('البريد الإلكتروني') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('الدولة') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('التاريخ') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('المبلغ') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('الحالة') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('المزيد') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                {{-- قمنا باستبدال template x-for بـ foreach الخاص بلارافل --}}
                @foreach ($orders as $order)
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors text-center">
                        {{-- استخدمنا {{ $order['id'] }} بدلاً من x-text --}}
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white whitespace-nowrap">
                            {{ $order['id'] }}
                        </td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-700 dark:text-slate-300 whitespace-nowrap">
                            {{ $order['customer'] }}
                        </td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-700 dark:text-slate-300 whitespace-nowrap">
                            {{ $order['email'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap">
                            {{ $order['country'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap">
                            {{ $order['date'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-900 dark:text-white font-bold whitespace-nowrap">
                            {{ $order['amount'] }}
                        </td>
                        <td class="px-6 py-4 flex justify-center items-center">
                            {{-- استخدمنا كود PHP لعرض الحالة والكلاسات --}}
                            <span
                                class="inline-block w-28 text-center px-3 py-1.5 rounded-full text-xs font-bold 
                    {{ $order['status'] === 'completed'
                        ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400'
                        : ($order['status'] === 'pending'
                            ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400'
                            : 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400') }}">
                                {{ $order['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{-- الآن الرابط سيعمل بشكل طبيعي مع Laravel Route --}}
                            <a href="{{ route('orders.show', ['id' => str_replace('#', '', $order['id'])]) }}"
                                class="group flex items-center justify-center gap-2 text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 font-bold text-sm transition-colors">
                                <span>{{ __('عرض') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transform transition-transform group-hover:translate-x-1 rtl:group-hover:-translate-x-1 rtl:rotate-180"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
