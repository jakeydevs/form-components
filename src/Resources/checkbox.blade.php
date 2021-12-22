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
  
  <div class="flex items-center">
    <span>
      <input type="checkbox" id="{{ $name }}" name="{{ $name }}" value="true" class="absolute inset-0 sr-only" @if ($isChecked()) checked @endif>
      <label for="{{ $name }}"
      class="slider:bg-indigo-600 bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
      <span class="sr-only"></span>
      <span aria-hidden="true" class="slider:translate-x-5 translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 pointer-events-none"></span>
    </label>
  </span>
  
  <span class="ml-3">
    <x-dynamic-component 
    :component="config('form-components.name').'-label'" 
    name="{{ $name }}"
    text="{{ $label }}"
    :required="$isRequired()"
    />
  </span>
</div>

@if ($help)
<x-dynamic-component 
:component="config('form-components.name').'-help'" 
name="{{ $name }}"
text="{{ $help }}"
/>
@endif

</fieldset>


@once
@push('forms-head')
<style>
  :checked + .slider\:bg-indigo-600 {
    --tw-bg-opacity: 1;
    background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
  }
  
  :checked + label > .slider\:translate-x-5 {
    --tw-translate-x: 1.25rem;
  }
</style>
@endpush    
@endonce