@extends('layouts.index')

@section('head')
    <title>Room</title>
@endsection

@push('styles')
    <style>
        body{
            margin: 0% 0% 0% 2%;
            background-color: #efefef;
        } 
        canvas{
            /*border: 1px solid black;*/
        }
        #canvas{
            height: 55em;
            border: 1px solid black;
            background-color: white;
        }

        .color{
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        div{
        }
    </style>   
@endpush

@section('content')  
    <div class="container-fluid">
        <div class="d-flex flex-row">
            <div id="canvas" class="flex-grow-1 vw-100">
                <nav class="navbar">
                    <a class="btn"><b>Opciones</b></a>
                    <a class="btn" data-bs-toggle="popover" data-bs-title="Users list" data-bs-content="Users" data-bs-placement="left"><b>Usuarios</b></a>
                </nav> 
                <canvas id="canv" height="830" width="1680">xd</canvas>
            </div>
            <!--<div class="col" style="height: 700px; width:90%; background-color: white;">holas</div>-->
            <div class="d-flex align-items-start flex-column flex-fill">
                <div class="d-flex flex-column mt-5 gap-3 mx-5">
                    <a class="btn btn-secondary p-2" href="#">Lapiz</a>
                    <a class="btn btn-secondary p-2" href="#">Borrador</a>
                    <a class="btn btn-secondary p-2" href="#">Gotero</a>
                </div>
                <div class="d-flex flex-column mx-auto mt-auto mb-5 justify-content-center text-center">
                    <p></p>
                    <p>Color 1</p>
                    <div class="color" data-bs-toggle="popover" data-bs-title="Colors" data-bs-content="Colores xd" data-bs-placement="left">
                        .
                    </div>
                    <p></p>
                    <p>Color 2</p>
                    <div class="color" data-bs-toggle="popover" data-bs-title="Colors" data-bs-content="Colores xd" data-bs-placement="left">
                        .
                    </div>
                </div>
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

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
@endpush