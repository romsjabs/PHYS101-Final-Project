@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/partials/menu.css') }}">
    @endpush
@endonce

<div class="menu" id="menu">
    
    <div class="menu-wrapper">

        <h3 class="title">The Laws of Newton</h3>

        <div class="fields-container">

            @include('components.inputField', [
                'inputVar' => 'massInput',
                'inputLabel' => 'mass',
                'inputColor' => 'main',
            ])

            @include('components.inputField', [
                'inputVar' => 'forceInput',
                'inputLabel' => 'force',
                'inputColor' => 'main',
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
            ])

        </div>

        <div class="buttons-container dual">

            @include('components.button', [
                'buttonType' => 'main',
                'buttonId' => 'startBtn',
                'buttonLabel' => 'Pause',
            ])

            @include('components.button', [
                'buttonType' => 'danger',
                'buttonId' => 'startBtn',
                'buttonLabel' => 'Stop',
            ])

        </div>

    </div>

</div>
