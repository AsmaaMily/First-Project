<x-layouts.default>
    <div class="flex items-center justify-center min-h-screen ">
        <div class="my-auto card p-6 py-7 max-w-md w-full shadow-[0_0_30px_2px_rgba(83,88,154,0.5)]">
            <div class="mb-10 flex justify-center">
                <a class=" text-base-content link-neutral font-bold no-underline" href="/">
                    <span class="icon-[tabler--brand-twitter] size-25 "></span>
                    <h1 class="text-4xl">
                        عصفور
                    </h1>
                </a>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.default>