<fieldset class="{{ $gc('fieldset') }}">
  
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
  id="{{ $name }}" 
  type="{{ $type }}"
  name="{{ $name }}"
  value="{{ $getValue() }}"
  class="{{ $gc('input') }}"
  {{ $attributes }}
  >
  
  @if ($help)
  <x-dynamic-component 
  :component="config('form-components.name').'-help'" 
  name="{{ $name }}"
  text="{{ $help }}"
  />
  @endif
  
</fieldset>