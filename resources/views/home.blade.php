<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Home</title>
    <style>
        div { border: 1px solid black; }
    </style>
</head>
    <body style="background-color: #cccccc; margin:2%;">

            <nav class="navbar">
                <div class="btn btn-secondary">Opciones</div>
            </nav>   

            <div class="row">
                <canvas class="col" id="canv" style="margin: 2% 2% 0% 0%">xd</canvas>
                <!--<div class="col" style="height: 700px; width:90%; background-color: white;">holas</div>-->
                <div class="col" style="text: left;">
                    <div class="row" style="margin: 1% 10% 0% 10%;">
                        <a class="btn btn-secondary" href="#">Lapiz</a>
                        <a class="btn btn-secondary" href="#">Borrador</a>
                        <a class="btn btn-secondary" href="#">Gotero</a>
                    </div>
                </div>
            </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"></script>
        
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
    </body>
</html>