<!-- ====== Page Not Found Section Start ====== -->
<section class="flex items-center min-h-screen h-full p-16 bg-[url('/img/404_light.jpg')]
                dark:bg-[url('/img/404_dark.jpg')] bg-no-repeat bg-cover dark:text-gray-100">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
        <div class="max-w-md text-center">
            <h2 class="mb-8 font-extrabold text-9xl text-red-600">
                <span class="sr-only">{{ __('page-not-found.error') }}</span>404
            </h2>
            <p class="text-xl font-semibold md:text-2xl">{{ __('page-not-found.sorry') }}</p>
            <p class="mt-4 mb-8 dark:text-gray-400">{{ __('page-not-found.opportunity') }}</p>
            <x-button-link href="/" variant="primary" class="rounded-lg">
                {{ __('page-not-found.back_to_homepage') }}
            </x-button-link>
        </div>
    </div>
</section>
<!-- ====== Page Not Found Section END ====== -->
