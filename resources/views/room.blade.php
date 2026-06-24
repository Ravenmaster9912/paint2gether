@extends('layouts.index')

@section('head')
    <title>Room</title>
@endsection

@push('styles')
    <style>
        body{
            margin: 2%;
            background-color: #ccc;
        } 
        canvas{
            border: 1px solid black;
        }
        figure{
            border: 1px solid black;
        }
    </style>   
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="btn btn-secondary">Opciones</div>
        <div class="btn btn-secondary"> OPC2</div>
        <div class="btn btn-secondary"> OPC3</div>
    </nav>   

    <div class="row justify-content-md-center">
        <div id="canvas" class="col-10">
            <canvas class="col" id="canv" height="auto" width="auto">xd</canvas>
        </div>
        <!--<div class="col" style="height: 700px; width:90%; background-color: white;">holas</div>-->
        <div class="col" style="text: left;">
            <div class="row text-center" style="margin: 1% 10% 0% 10%;">
                <a class="btn btn-secondary" href="#">Lapiz</a>
                <a class="btn btn-secondary" href="#">Borrador</a>
                <a class="btn btn-secondary" href="#">Gotero</a>
                <p>Color 1</p>
                <figure class="figure">
                    xd
                </figure>
                <p>Color 2</p>
                <figure class="figure">
                    xd
                </figure>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const canvas = new fabric.Canvas('canv');

        const rectangulo = new fabric.Rect({
            left: 100,
            top: 100,
            fill: '#3498db',
            width: 100,
            height: 80,
            angle: 15
        });

        canvas.add(rectangulo);
    </script>
@endpush