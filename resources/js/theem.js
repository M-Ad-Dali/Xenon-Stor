// {{-- Anti FOUC Dark Mode (الأهم) --}}
(function () {
  const theme = localStorage.getItem('theme');
  const isDark = theme ?
    theme === 'dark' :
    window.matchMedia('(prefers-color-scheme: dark)').matches;

  document.documentElement.classList.toggle('dark', isDark);
})();