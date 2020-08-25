<x-template.base content-full title="Confirm your password">
    <x-template.form subtext="Please confirm your password before continuing" :action="route('password.confirm')" method="POST">
        <x-form.input autofocus required name="password" type="password" label="Password" placeholder="••••••••" />

        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
                <x-link class="text-sm font-semibold" :href="route('password.request')" text="Forgot password?" />
            @endif

            <button class="btn px-5 py-2 text-sm">Confirm</button>
        </div>
    </x-template.form>
</x-template.base>
