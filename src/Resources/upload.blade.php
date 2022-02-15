<fieldset 
@class([
'space-y-2',
'bg-red-50 p-6 rounded' => $hasError()
])
>

@if ($getErrors())
<span class="inline-flex items-center px-3 py-1 rounded text-sm font-medium bg-red-100 text-red-800">
  <ul>
    @foreach($getErrors() AS $e)
    <li>{!! $e !!}</li>
    @endforeach
  </ul>
</span>
@endif

@if ($label)
<x-dynamic-component 
:component="config('form-components.name').'-label'" 
name="{{ $name }}"
text="{{ $label }}"
:required="$isRequired()"
/>
@endif

<div class="flex justify-start items-center space-x-3">
  @if (!is_null($getValue()))
  <div class="shrink-0">
    @switch($getFileType())
    
    @case('FILE')

    @php
      $ext = pathinfo($getValue(), PATHINFO_EXTENSION);
    @endphp
    <a href='{{ $getValue() }}' target="_blank">
      <div class="text-center text-gray-600 hover:text-blue-500">
        <div>
          <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        </div>
        <div class="uppercase text-sm">{{ $ext }}</div>
      </div>
    </a>
    @break
    
    @case("IMAGE")
    <a href='{{ $getValue() }}' target="_blank">
      <img src='{{ $getValue() }}' class='h-14 object-cover rounded' />
    </a>
    @break
    
    @endswitch
  </div>
  @endif
  <input 
  type="file"
  id="{{ $name }}" 
  type="{{ $type }}"
  name="{{ $name }}"
  {{ $attributes }}
  @class([
  'focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-gray-300 rounded-md p-3',
  'border-red-700' => $hasError()
  ])
  >
</div>

@if ($help)
<x-dynamic-component 
:component="config('form-components.name').'-help'" 
name="{{ $name }}"
text="{{ $help }}"
/>
@endif

</fieldset>