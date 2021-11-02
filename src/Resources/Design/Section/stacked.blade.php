<div class="space-y-8 divide-y divide-gray-200">
    <div>
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {!! $title !!}
            </h3>
            <p class="mt-1 text-sm text-gray-500">
                {!! $description !!}
            </p>
        </div>
        <div class="mt-6">
            {!! $slot !!}
        </div>
    </div>
</div>