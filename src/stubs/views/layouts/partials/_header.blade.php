<div class="w-full block h-1 bg-blue"></div>

<div class="w-full bg-grey-lightest border-b p-6 mb-6">
    <div class="max-w-2xl mx-auto flex items-center justify-between">
        <div class="text-lg">
            <a class="font-medium text-grey-darker no-underline hover:underline" href="/">{{ config('app.name') }}</a>
        </div>

        <ul class="list-reset flex items-center -mr-6">
            @auth
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('home') }}">Home</a></li>
            @else
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('login') }}">Login</a></li>
                <li class="mr-6"><a class="text-blue-dark no-underline hover:underline" href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</div>
