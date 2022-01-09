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
  >{!! $getValue() !!}</textarea>
  
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" />
  <script>
    window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><\/script>')
    console.log('/// FORMS - Inserted JQuery///')
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js'></script>
  @endpush    
@endonce

@push('forms-js')
<script>
  $('#{{ $name }}').trumbowyg({
    btns: [
        ['viewHTML'],
        ['undo', 'redo'],
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ],
    semantic: true,
    resetCss: true,
    removeformatPasted: true,
    imageWidthModalEdit: true
})
.on('tbwinit', () => {});
</script>
@endpush