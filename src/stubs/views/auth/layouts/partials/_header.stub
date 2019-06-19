<div class="h-2 w-full block bg-brand-500"></div>

<div class="w-full bg-gray-100 border-b">
    <div class="max-w-3xl mx-auto flex flex-wrap items-center justify-between">
        <div class="m-6 sm:mr-0">
            <a href="/" class="font-semibold text-gray-600 hover:text-gray-800 no-underline">{{ config('app.name') }}</a>
        </div>

        <div class="m-3 block sm:hidden">
            <a
                href="#"
                class="p-3 flex items-center no-underline text-brand-600 hover:text-brand-800 focus:bg-gray-200 rounded-lg"
                aria-label="Toggle navigation"
                :aria-expanded="displayNavigation"
                aria-controls="#headerNav"
                @click.prevent="displayNavigation = !displayNavigation"
            >
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </a>
        </div>

        <div
            id="#headerNav"
            class="py-3 sm:p-0 sm:mr-6 w-full sm:w-auto sm:flex sm:flex-grow sm:items-center shadow-inner sm:shadow-none"
            :class="{ hidden: !displayNavigation }"
            :aria-expanded="displayNavigation"
        >
            <nav class="sm:flex-1" aria-label="Left navigation">
                <ul class="sm:flex sm:items-baseline">
                    <li><a href="{{ route('home') }}" class="px-6 py-3 sm:p-0 sm:ml-5 block sm:inline-block text-brand-600 hover:text-brand-900 hover:bg-gray-200 sm:hover:bg-transparent no-underline">Home</a></li>
                </ul>
            </nav>

            <nav class="sm:flex sm:items-center" aria-label="Right navigation">
                <ul class="sm:flex sm:items-baseline">
                    @auth
                        <li>
                            <a href="#" class="px-6 py-3 sm:p-0 sm:ml-5 block sm:inline-block text-brand-600 hover:text-brand-900 hover:bg-gray-200 sm:hover:bg-transparent no-underline" onclick="document.querySelector('#logoutForm').submit()">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm" class="hidden">@csrf</form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="px-6 py-3 sm:p-0 sm:ml-5 block sm:inline-block text-brand-600 hover:text-brand-900 hover:bg-gray-200 sm:hover:bg-transparent no-underline">Sign in</a></li>
                        <li><a href="{{ route('register') }}" class="px-6 py-3 sm:p-0 sm:ml-5 block sm:inline-block text-brand-600 hover:text-brand-900 hover:bg-gray-200 sm:hover:bg-transparent no-underline">Sign up</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</div>
