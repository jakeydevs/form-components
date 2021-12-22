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

@once
  @push('forms-js')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/base.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css"/>
  <script src='https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js'></script>
  @endpush    
@endonce

@push('forms-js')
<script>
  const element = document.querySelector('#{{ $name }}');
  new Choices(element);
</script>
@endpush