@php
    // بيانات تجريبية للعملاء
    $allCustomers = [
        ['id' => 1, 'name' => 'محمد عبدالله', 'email' => 'mohammed@example.com', 'country' => 'السعودية', 'orders_count' => 12, 'total_spent' => '$1,250', 'status' => 'active'],
        ['id' => 2, 'name' => 'أحمد علي', 'email' => 'ahmed@example.com', 'country' => 'مصر',  'orders_count' => 5, 'total_spent' => '$420', 'status' => 'inactive'],
        ['id' => 3, 'name' => 'سارة خالد', 'email' => 'sara@example.com', 'country' => 'الإمارات', 'orders_count' => 8, 'total_spent' => '$850', 'status' => 'active'],
        ['id' => 4, 'name' => 'خالد يوسف', 'email' => 'khaled@example.com', 'country' => 'الكويت',  'orders_count' => 2, 'total_spent' => '$150', 'status' => 'active']
    ];

    // فلترة العملاء حسب الحالة
    $status = request('status');
    $filteredCustomers = $status 
        ? array_filter($allCustomers, fn($c) => $c['status'] == $status) 
        : $allCustomers;

    $customers = array_values($filteredCustomers);
@endphp

    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-start">
        <h2 class="font-bold text-lg text-slate-900 dark:text-white w-full sm:w-auto">
            {{ request()->routeIs('customers.index') ? __('قائمة العملاء') : __('أحدث العملاء') }}
        </h2>

        <div class="flex items-center gap-2 sm:gap-4 w-full sm:w-auto justify-center sm:justify-end">
                <div class="flex items-center gap-6 px-2">
                    <x-customer-status-filter />
                </div>
            
        </div>
    </div>

    {{-- الجدول --}}
    <div class="overflow-x-auto">
        <table class="w-full text-right border-collapse">
            <thead class="bg-slate-50 dark:bg-slate-950/50 text-slate-500 text-xs uppercase tracking-wider">
                <tr class="text-center">
                    <th class="px-2 py-4 font-semibold">{{ __('اسم العميل') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('البريد الإلكتروني') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('الدولة') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('عدد الطلبات') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('إجمالي الإنفاق') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('الحالة') }}</th>
                    <th class="px-2 py-4 font-semibold">{{ __('المزيد') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                @foreach ($customers as $customer)
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors text-center">
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white whitespace-nowrap">
                            {{ $customer['name'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 whitespace-nowrap">
                            {{ $customer['email'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap">
                            {{ $customer['country'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 whitespace-nowrap">
                            {{ $customer['orders_count'] }}
                        </td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white whitespace-nowrap">
                            {{ $customer['total_spent'] }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-block w-24 px-3 py-1.5 rounded-full text-xs font-bold 
                                {{ $customer['status'] === 'active' 
                                    ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' 
                                    : 'bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400' }}">
                                {{ $customer['status'] === 'active' ? __('نشط') : __('غير نشط') }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
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
