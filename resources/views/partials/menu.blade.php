@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/partials/menu.css') }}">
    @endpush
@endonce

<div class="menu" id="menu">
    
    <div class="menu-wrapper">

        <h3 class="title">The Laws of Motion</h3>

        @include('components.inputField', [
            'inputVar' => 'massInput',
            'inputLabel' => 'mass',
        ])

        @include('components.inputField', [
            'inputVar' => 'forceInput',
            'inputLabel' => 'force',
        ])

        @include('components.switch', [
            'switchVar' => 'allowFriction',
            'switchLabel' => 'Allow Friction (µ_k = 0.2)',
        ])

    </div>

</div>
