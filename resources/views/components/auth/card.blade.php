<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <x-brand.logo/>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
