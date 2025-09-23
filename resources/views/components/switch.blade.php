@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/components/switch.css') }}">
    @endpush
@endonce

<div class="switch-wrapper">

    <span class="switch-label">{{ $switchLabel }}</span>

    <label class="switch-toggle">

        <div class="switch-container">
            <input type="checkbox" id="{{ $switchVar }}">
            <span class="slider"></span>
        </div>
        
    </label>

</div>