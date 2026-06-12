@props(['showFilter' => false])

<div class="xl:col-span-2 bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden"
    x-data="{
        statusFilter: 'all',
        dateFilter: 'newest',
        orders: [
            { id: '#1001', customer: 'محمد عبدالله', country: 'السعودية', date: '2026-06-07', amount: '$250', status: 'completed' },
            { id: '#1002', customer: 'أحمد علي', country: 'مصر', date: '2026-06-05', amount: '$120', status: 'pending' },
            { id: '#1003', customer: 'سارة خالد', country: 'الإمارات', date: '2026-06-10', amount: '$450', status: 'cancelled' },
            { id: '#1004', customer: 'خالد يوسف', country: 'الكويت', date: '2026-06-01', amount: '$300', status: 'completed' }
        ],
        get filteredOrders() {
            let filtered = [...this.orders];
            if (this.statusFilter !== 'all') {
                filtered = filtered.filter(o => o.status === this.statusFilter);
            }
            if (this.dateFilter === 'newest') {
                filtered.sort((a, b) => new Date(b.date) - new Date(a.date));
            } else {
                filtered.sort((a, b) => new Date(a.date) - new Date(b.date));
            }
            return filtered;
        }
    }">

    {{-- الهيدر --}}
    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-start">
        <h2 class="font-bold text-lg text-slate-900 dark:text-white w-full sm:w-auto">
            {{ request()->routeIs('orders') ? __('جميع الطلبات') : __('أحدث الطلبات') }}
        </h2>

        <div class="flex items-center gap-2 sm:gap-4 w-full sm:w-auto justify-center sm:justify-end">
            @if ($showFilter)
                <div class="flex items-center gap-2">
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
    <div class="overflow-x-auto [&::-webkit-scrollbar]:hidden">
        <table class="w-full text-right border-collapse">
            <thead class="bg-slate-50 dark:bg-slate-950/50 text-slate-500 text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4 font-semibold">{{ __('رقم الطلب') }}</th>
                    <th class="px-6 py-4 font-semibold">{{ __('ااسم العميل') }}</th>
                    <th class="px-6 py-4 font-semibold">{{ __('الدولة') }}</th>
                    <th class="px-6 py-4 font-semibold">{{ __('التاريخ') }}</th>
                    <th class="px-6 py-4 font-semibold">{{ __('المبلغ') }}</th>
                    <th class="px-6 py-4 font-semibold text-center">{{ __('الحالة') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                <template x-for="order in filteredOrders" :key="order.id">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white whitespace-nowrap" x-text="order.id"></td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-700 dark:text-slate-300 whitespace-nowrap" x-text="order.customer"></td>
                        <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap" x-text="order.country"></td>
                        <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap" x-text="order.date"></td>
                        <td class="px-6 py-4 text-sm text-slate-900 dark:text-white font-bold whitespace-nowrap" x-text="order.amount"></td>
                        <td class="px-6 py-4 flex justify-center items-center">
                            <span x-text="order.status"
                                class="inline-block w-28 text-center px-3 py-1.5 rounded-full text-xs font-bold"
                                :class="order.status === 'completed' ?
                                    'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' :
                                    (order.status === 'pending' ?
                                    'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400' :
                                    'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400')">
                            </span>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</div>