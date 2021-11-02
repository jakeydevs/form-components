<div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8">
    <div class="hidden lg:block lg:col-span-1">
        <div class="px-4 sm:px-0 sticky top-8">
            <h3 class="text-xl font-medium leading-6 text-gray-900">
                {!! $title !!}
            </h3>
            <p class="mt-1 text-gray-600">
                {!! $description !!}
            </p>
        </div>
    </div>
    <div class="md:col-span-2 space-y-8">
        
        <div class="bg-white rounded-md overflow-hidden">
            <div class="lg:hidden bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {!! $title !!}
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    {!! $description !!}
                </p>
            </div>
            <div>
                {!! $slot !!}
            </div>
        </div>
        
    </div>
</div>