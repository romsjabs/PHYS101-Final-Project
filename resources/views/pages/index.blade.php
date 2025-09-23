@extends('layouts.app')

@section('content')

    <div class="content">
        
        @include('partials.menu')

        @include('partials.canvas', [
            'units' => [
                'F = 0.00 N', 'a = 0.00 m/s²', 'v = 0.00 m/s'    
            ],
        ])

    </div>

@endsection