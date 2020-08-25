<x-template.base content-full title="Reset your password">
    <x-template.form
        subtext="Enter your email and we'll send you a link to reset your password"
        :action="route('password.email')"
        method="POST"
    >
        <x-form.input autofocus required name="email" type="email" label="Email" placeholder="you@example.com" />

        <div class="flex items-center justify-between">
            <div class="text-sm">
                Remember it?

                <x-link class="font-semibold" :href="route('login')" text="Sign in" />
            </div>

            <button class="btn px-5 py-2 text-sm">Send Link</button>
        </div>
    </x-template.form>
</x-template.base>
