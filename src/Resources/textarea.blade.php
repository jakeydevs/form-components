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
  
  <textarea 
  id="{{ $name }}" 
  name="{{ $name }}"
  {{ $attributes }}
  @class([
    'block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-300 rounded-md',
    'border-red-700' => $hasError()
  ])
  >{!! $getValue() !!}</textarea>
  
  @if ($help)
  <x-dynamic-component 
  :component="config('form-components.name').'-help'" 
  name="{{ $name }}"
  text="{{ $help }}"
  />
  @endif
  
</fieldset>