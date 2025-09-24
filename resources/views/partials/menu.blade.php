@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/partials/menu.css') }}">
    @endpush
@endonce

<div class="menu" id="menu">
    
    <div class="menu-wrapper">

        <h3 class="title">The Laws of Motion</h3>

        <div class="fields-container">

            @include('components.inputField', [
                'inputVar' => 'massInput',
                'inputLabel' => 'mass',
            ])

            @include('components.inputField', [
                'inputVar' => 'forceInput',
                'inputLabel' => 'force',
            ])

        </div>

        <div class="switches-container">
            @include('components.switch', [
                'switchVar' => 'allowFriction',
                'switchLabel' => 'Allow Friction (µ_k = 0.2)',
            ])
        </div>

        <div class="buttons-container">

            @include('components.button', [
                'buttonType' => 'main',
                'buttonId' => 'start',
                'buttonLabel' => 'Start',
                'buttonUsage' => 'single',    
            ])

        </div>

        <div class="buttons-container">

            @include('components.button', [
                'buttonType' => 'main',
                'buttonId' => 'startBtn',
                'buttonLabel' => 'Pause',
                'buttonUsage' => 'dual'
            ])

            @include('components.button', [
                'buttonType' => 'danger',
                'buttonId' => 'startBtn',
                'buttonLabel' => 'Stop',
                'buttonUsage' => 'dual'
            ])

        </div>

    </div>

</div>
