<x-template.base content-full title="Verify your email">
    <x-template.branded>
        <div class="space-y-6 mx-auto text-center">
            <div class="text-gray-600">
                @if (session('resent'))
                    We have sent you a fresh verification link, please check your email.
                @else
                    You must verify your email address before proceeding. Please check your email for a verification link.
                @endif
            </div>

            <div class="mx-auto w-16 h-px block bg-gray-400"></div>

            <div>
                Didn't get the email?
                <x-form.action :action="route('verification.resend')" method="POST" class="font-semibold text-brand-600 hover:text-brand-800">Resend it</x-form.action>
            </div>
        </div>
    </x-template.branded>
</x-template.base>
