<div class="h-2 w-full block bg-brand-500"></div>

<div class="w-full bg-header border-b">
    <div class="max-w-5xl mx-auto flex flex-wrap items-center justify-between">
        <div class="m-5 sm:mr-6">
            <a href="/" class="text-lg font-semibold text-brand-500 hover:text-brand-600 flex items-center">
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 280">
                    <path d="M271.38 63.42c-.03-.13-.11-.24-.15-.37-.09-.23-.16-.47-.28-.68-.08-.14-.2-.26-.3-.39-.13-.17-.24-.36-.39-.51-.13-.13-.29-.22-.43-.33-.16-.13-.3-.27-.48-.37l-52.45-30.2a4.356 4.356 0 00-4.36 0l-52.45 30.2c-.18.1-.32.25-.48.37-.14.11-.3.2-.43.33-.15.15-.26.34-.39.51-.1.13-.22.25-.3.39-.12.21-.2.45-.28.68-.05.12-.12.24-.15.37-.1.37-.15.75-.15 1.14v57.36l-43.71 25.17V34.87c0-.39-.05-.77-.15-1.14-.03-.13-.11-.24-.15-.37-.09-.23-.16-.47-.28-.68-.08-.14-.2-.26-.3-.39-.13-.17-.24-.36-.39-.51-.13-.13-.29-.22-.43-.33-.16-.13-.3-.27-.48-.37L59.57.88a4.354 4.354 0 00-4.36 0L2.76 31.08c-.18.1-.32.25-.48.37-.14.11-.3.2-.43.33-.15.15-.26.34-.39.51-.1.13-.22.25-.3.39-.12.21-.2.45-.28.68-.05.12-.12.24-.15.37-.1.37-.15.75-.15 1.14v179.66c0 1.56.84 3.01 2.19 3.79l104.91 60.4c.23.13.48.21.72.3.11.04.22.11.34.14.733.2 1.507.2 2.24 0 .1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4a4.355 4.355 0 002.19-3.79v-57.36l50.26-28.94a4.355 4.355 0 002.19-3.79V64.56c-.05-.39-.11-.77-.2-1.14zM109.78 209.5l-43.63-24.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58zM210.33 97.29v49.8l-18.36-10.57-25.36-14.6v-49.8l18.36 10.57 25.36 14.6zm4.37-57.89l43.69 25.16-43.69 25.16-43.69-25.16L214.7 39.4zM80.07 166.72l-18.36 10.57V67.6L87.07 53l18.36-10.57v109.68l-25.36 14.61zm-22.73-157l43.69 25.16-43.69 25.16-43.69-25.16L57.34 9.72zM9.25 42.43L27.61 53l25.36 14.6v117.26c0 .17.05.33.07.49.03.21.03.43.09.64v.01c.05.17.14.33.21.49.08.18.13.38.23.55 0 0 0 .01.01.01.09.15.22.28.33.42.12.16.22.32.36.46l.01.01c.12.12.28.21.42.32.16.12.3.26.47.36.01 0 .01 0 .02.01.01 0 .01.01.02.01l50.24 28.43v50.29L9.25 212V42.43zM210.33 212l-96.17 55.37v-50.3l71.22-40.66 24.95-14.24V212zm52.45-90.08l-43.71 25.17v-49.8l25.36-14.6 18.36-10.57v49.8h-.01z" />
                </svg>

                <div class="ml-2">{{ config('app.name') }}</div>
            </a>
        </div>

        <div class="m-3 block sm:hidden">
            <a
                href="#"
                class="p-3 flex items-center no-underline text-gray-400 hover:text-white focus:bg-gray-900 rounded-lg"
                aria-label="Toggle navigation"
                :aria-expanded="displayNavigation"
                aria-controls="#header-nav"
                @click.prevent="displayNavigation = !displayNavigation"
            >
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </a>
        </div>

        <div
            id="#header-nav"
            class="py-3 sm:p-0 sm:mr-6 w-full sm:w-auto sm:flex sm:flex-grow sm:items-center shadow-inner-md sm:shadow-none"
            :class="{ hidden: !displayNavigation }"
            :aria-expanded="displayNavigation"
        >
            <nav class="sm:flex-1" aria-label="Left navigation">
                <ul class="sm:flex sm:items-baseline">
                    <x-nav-item route="home">Home</x-nav-item>
                </ul>
            </nav>

            <nav class="sm:flex sm:items-center" aria-label="Right navigation">
                <ul class="sm:flex sm:items-baseline">
                    @auth
                        <x-nav-item :action="route('logout')" method="POST" id="logout-form">Sign out</x-nav-item>
                    @else
                        <x-nav-item route="login">Sign in</x-nav-item>
                        <x-nav-item route="register">Sign up</x-nav-item>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</div>
