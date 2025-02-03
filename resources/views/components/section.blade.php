{{-- <div class="bg-blue-100 container mx-auto mt-8">

    <div class="xs:px-16 sm:px-32 bg-blue-200">

        {{ $slot }}

    </div>
</div> --}}

<div {{ $attributes->merge(['class' => 'container mx-auto sm:px-6 lg:px-8']) }}>
    <div class="overflow-hidden">
        <div class="p-6 w-full space-y-6">
            {{ $slot }}
        </div>
    </div>
</div>
