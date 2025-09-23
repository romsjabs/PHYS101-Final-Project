@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/inputField.css') }}">
@endsection

@section('component')
    
@endsection

<div class="input-field-wrapper">

    <label class="input-label" for="{{ $inputVar }}">
        {{ ucfirst(strtolower($inputLabel)) }}
        <input type="text" id="{{ $inputVar }}" class="input-field" placeholder="Enter number for {{ $inputLabel }}" autocomplete="off" autofocus>
    </label>

</div>

<script src="{{ asset('assets/js/components/inputField.js') }}"></script>