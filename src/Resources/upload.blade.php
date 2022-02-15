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
  
  <input 
  type="file"
  id="{{ $name }}" 
  type="{{ $type }}"
  name="{{ $name }}"
  value="{{ $getValue() }}"
  {{ $attributes }}
  @class([
    'focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-gray-300 rounded-md p-3',
    'border-red-700' => $hasError()
  ])
  >
  
  @if ($help)
  <x-dynamic-component 
  :component="config('form-components.name').'-help'" 
  name="{{ $name }}"
  text="{{ $help }}"
  />
  @endif
  
</fieldset>