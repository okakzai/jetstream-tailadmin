<div class="md:col-span-1 flex justify-between">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">{{ $title }}</h3>

        <p class="text-sm text-gray-500 dark:text-gray-400 sm:text-base">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
