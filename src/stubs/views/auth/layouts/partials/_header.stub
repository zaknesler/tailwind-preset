<div class="h-2 w-full block bg-brand-500"></div>

<div class="p-6 w-full bg-gray-100 border-b">
    <div class="max-w-3xl mx-auto flex flex-wrap items-center justify-between">
        <div class="mr-6 text-lg">
            <a class="font-semibold text-gray-600 hover:text-gray-700 no-underline" href="/">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="block md:hidden">
            <a @click.prevent="displayNavigation = !displayNavigation" class="p-2 flex items-center no-underline text-brand-700 hover:text-brand-900" href="#">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </a>
        </div>

        <div :class="{ hidden: !displayNavigation }" class="mt-6 md:mt-0 w-full md:w-auto md:flex md:flex-grow md:items-center">
            <div class="block md:flex-grow">
                <ul class="-mb-6 md:-mr-6 md:mb-0 flex flex-col md:flex-row">
                    <li class="mb-6 md:mr-6 md:mb-0">
                        <a class="block md:inline text-brand-700 hover:text-brand-900 no-underline" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-6 md:mt-0">
                <ul class="-mb-6 md:-mr-6 md:mb-0 flex flex-col md:flex-row">
                    @auth
                        <li class="mb-6 md:mr-6 md:mb-0">
                            <a class="block md:inline text-brand-700 hover:text-brand-900 no-underline" href="#" onclick="document.querySelector('#logoutForm').submit()">
                                Logout
                            </a>
                        </li>

                        <form id="logoutForm" class="hidden" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @else
                        <li class="mb-6 md:mr-6 md:mb-0">
                            <a class="block md:inline text-brand-700 hover:text-brand-900 no-underline" href="{{ route('login') }}">
                                Sign in
                            </a>
                        </li>

                        <li class="mb-6 md:mr-6 md:mb-0">
                            <a class="block md:inline text-brand-700 hover:text-brand-900 no-underline" href="{{ route('register') }}">
                                Sign up
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
