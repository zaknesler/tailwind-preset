<x-template.base content-full title="Sign in">
    <x-template.form subtext="Sign in to your account" :action="route('login')" method="POST">
        <div class="space-y-6">
            <x-form.input autofocus required name="email" type="email" label="Email" placeholder="you@example.com" />
            <x-form.input required name="password" type="password" label="Password" placeholder="••••••••" />
        </div>

        <div class="flex items-center justify-between">
            <x-form.checkbox checked name="remember" label="Remember me" />

            <button class="btn px-6 py-3 text-sm">Sign in</button>
        </div>

        <div class="text-sm text-center">
            @if (Route::has('register'))
                <x-link class="font-semibold" :href="route('register')" text="Create account" />
            @endif

            @if (Route::has('register') and Route::has('password.request'))
                <span class="mx-1 text-gray-500">&middot;</span>
            @endif

            @if (Route::has('password.request'))
                <x-link :href="route('password.request')" text="Forgot password?" />
            @endif
        </div>
    </x-template.form>
</x-template.base>
