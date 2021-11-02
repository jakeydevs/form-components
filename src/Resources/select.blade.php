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
  
  <select id="{{ $name }}" name="{{ $name }}" class="{{ $gc('select') }}" {{ $attributes }}>
    @foreach($options AS $key => $value)
      <option value="{{ $key }}" @if ($getValue() == $key) SELECTED @endif>
          {{ $value }}
      </option>
      @endforeach
  </select>
  
  @if ($help)
  <x-dynamic-component 
  :component="config('form-components.name').'-help'" 
  name="{{ $name }}"
  text="{{ $help }}"
  />
  @endif
  
</fieldset>