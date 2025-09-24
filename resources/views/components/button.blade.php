@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/components/button.css') }}">
    @endpush
@endonce

<div class="button-wrapper">

    <button type="button" class="btn {{ $buttonType }} {{ $buttonUsage }}" id="{{ $buttonId }}">
        {{ $buttonLabel }}
    </button>

</div>