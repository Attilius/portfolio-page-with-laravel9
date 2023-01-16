<div class="flex items-center min-h-screen p-16 dark:bg-LightSlateGray-900 dark:text-gray-100">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
        <div style="max-width: 28rem;" class="text-center">
            <h2 style="font-size: 8rem; line-height: 1; color: #dc2626; font-weight: 800;" class="mb-8">
                404
            </h2>
            <p style="font-size: 1.5rem; line-height: 2rem; font-weight: 600;" class="md:text-3xl">{{ __('page-not-found.sorry') }}</p>
            <p class="mt-4 mb-8 dark:text-gray-400">{{ __('page-not-found.opportunity') }}</p>
            <x-button-link href="/" variant="primary" class="rounded-lg">
                {{ __('page-not-found.back_to_homepage') }}
            </x-button-link>
        </div>
    </div>
</div>
