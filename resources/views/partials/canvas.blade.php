@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/partials/canvas.css') }}">
    @endpush
@endonce

<div class="canvas" id="canvas">
    
    <div class="canvas-wrapper">

        <div class="canvas-status">

            @foreach($units as $unit)
                <div class="canvas-unit">
                    {{ $unit }}
                </div>
            @endforeach

        </div>

        <div class="canvas-buttons">

            @include('components.iconButton', [
                'buttonType' => 'main',
                'buttonId' => 'zoomInBtn',
                'buttonIcon' => '<i class="fa-solid fa-plus"></i>',
            ])

            @include('components.iconButton', [
                'buttonType' => 'main',
                'buttonId' => 'zoomOutBtn',
                'buttonIcon' => '<i class="fa-solid fa-minus"></i>',
            ])

        </div>

    </div>

</div>

@once
    @push('scripts')
        <script src="{{ asset('assets/js/canvas.js') }}"></script>
    @endpush
@endonce