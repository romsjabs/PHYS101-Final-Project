@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/components/iconButton.css') }}">
    @endpush
@endonce

<div class="icon-button-wrapper">
    
    <button type="button" class="icon-btn {{ $buttonType }}" id="{{ $buttonId }}">
        <span class="button-icon {{ $buttonIcon }}"></span>
    </button>

</div>