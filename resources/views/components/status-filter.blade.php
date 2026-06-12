<select x-model="statusFilter"
    class="bg-slate-50 dark:bg-slate-800 border-none text-sm text-slate-600 dark:text-slate-300 rounded-xl px-3 py-1 outline-none cursor-pointer">
    <option value="all">{{ __('كل الطلبات') }}</option>
    <option value="completed">{{ __('مكتملة') }}</option>
    <option value="pending">{{ __('معلقة') }}</option>
    <option value="cancelled">{{ __('ملغاة') }}</option>
</select>