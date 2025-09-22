<link rel="stylesheet" href="{{ asset('assets/css/components/inputField.css') }}">

<label class="input-label" for="{{ $inputVar }}"></label>
    {{ ucfirst(strtolower($inputLabel)) }}
</label>

<input type="text" id="{{ $inputVar }}" class="input-field" placeholder="Enter number for {{ $inputLabel }}" autocomplete="off" autofocus>

<script src="{{ asset('assets/js/components/inputField.js') }}"></script>