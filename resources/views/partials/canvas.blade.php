<link rel="stylesheet" href="{{ asset('assets/css/partials/canvas.css') }}">

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

            

        </div>

    </div>

</div>