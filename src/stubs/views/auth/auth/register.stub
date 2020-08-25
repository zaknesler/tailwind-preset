<x-template.base content-full title="Sign up">
    <x-template.form subtext="Create a new account" :action="route('register')" method="POST">
        <div class="space-y-6">
            <x-form.input autofocus required type="text" name="name" label="Name" placeholder="John Doe" />
            <x-form.input required type="email" name="email" label="Email" placeholder="you@example.com" />
            <x-form.input required type="password" name="password" label="Password" placeholder="••••••••" />
            <x-form.input required type="password" name="password_confirmation" label="Confirm Password" placeholder="••••••••" />
        </div>

        <div class="flex items-center justify-between">
            <div class="text-sm">
                Have an account?

                <x-link class="font-semibold" :href="route('login')" text="Sign in" />
            </div>

            <button class="btn px-6 py-3 text-sm">Sign up</button>
        </div>
    </x-template.form>
</x-template.base>
