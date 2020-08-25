<x-template.base content-full title="Reset your password">
    <x-template.form subtext="Reset your password" :action="route('password.request')" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="space-y-4">
            <x-form.input autofocus required name="email" type="email" label="Email" :value="request('email')" placeholder="you@example.com" />
            <x-form.input required type="password" name="password" label="Password" placeholder="••••••••" />
            <x-form.input required type="password" name="password_confirmation" label="Confirm Password" placeholder="••••••••" />
        </div>

        <div class="text-right">
            <button class="btn px-5 py-2 text-sm">Reset password</button>
        </div>
    </x-template.form>
</x-template.base>
