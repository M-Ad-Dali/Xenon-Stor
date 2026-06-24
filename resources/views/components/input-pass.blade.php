<div
    class="flex items-center w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden focus-within:ring-2 focus-within:ring-indigo-500">

    <x-input type="password" id="password" name="password"
        class="flex-1 w-full bg-transparent border-none py-3 px-4 focus:outline-none focus:ring-0 text-slate-900 dark:text-white"
        required />

    <button type="button"
        onclick="
          let x = document.getElementById('password');
          let show = document.getElementById('icon-show');
          let hide = document.getElementById('icon-hide');

          if (x.type === 'password') {
              x.type = 'text';
              show.classList.add('hidden');
              hide.classList.remove('hidden');
          } else {
              x.type = 'password';
              show.classList.remove('hidden');
              hide.classList.add('hidden');
          }
        "
        class="px-4 py-3 text-slate-400 hover:text-indigo-600 transition-colors cursor-pointer">

        {{-- عين مفتوحة --}}
        <svg id="icon-show" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6.936 0A11.94 11.94 0 0112 19.5A11.94 11.94 0 012.064 12A11.94 11.94 0 0112 4.5A11.94 11.94 0 0121.936 12z" />
        </svg>

        {{-- عين مشطوبة --}}
        <svg id="icon-hide" class="w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3l18 18M10.584 10.587A2 2 0 0012 14a2 2 0 001.414-.586M9.88 5.09A10.94 10.94 0 0112 4.5c5.25 0 9.645 3.438 10.936 7.5a11.827 11.827 0 01-4.043 5.654M6.228 6.228A11.827 11.827 0 001.064 12a11.94 11.94 0 005.32 6.32" />
        </svg>

    </button>
</div>
