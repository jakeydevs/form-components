<div class="bg-white shadow rounded-md overflow-hidden">
  <div class="bg-white border-b border-gray-200 p-6">
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