<button x-data="darkMode" x-bind="toggle" class="w-8 h-8 p-1 rounded-lg hover:gray-100 bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700">
    <svg class="block dark:hidden fill-gray-500" fill="currentColor" viewBox="0 0 20 20">
        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
    </svg>

    <svg class="hidden dark:block fill-gray-500" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
    </svg>
</button>

<script>
    const darkMode = () => ({
        theme: localStorage.getItem('theme') || '{{ $settings->get('cms_color_mode')}}',
        init() {
            localStorage.setItem('theme', this.theme)
            document.documentElement.classList.remove('dark', 'light')
            document.documentElement.classList.add(this.theme)
        },
        toggle: {
            ['@click']() {
                this.theme = this.theme === 'dark' ? 'light' : 'dark'
                this.init()
            },
        },
    })
</script>