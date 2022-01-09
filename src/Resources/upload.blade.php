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
  name="{{ $name }}"
  {{ $attributes }}
  @class([
    'border-red-700' => $hasError()
  ])
  class="{{ $gc('upload') }}"
  >
  
  @if ($help)
  <x-dynamic-component 
  :component="config('form-components.name').'-help'" 
  name="{{ $name }}"
  text="{{ $help }}"
  />
  @endif
  
</fieldset>