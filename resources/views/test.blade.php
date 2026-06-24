<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Fundamentos de Fabric.js</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"></script>
  <style>
    canvas { border: 1px solid #ccc; }
  </style>
</head>
<body>

  <canvas id="miCanvas" width="600" height="400"></canvas>

  <script>
    // 2. Inicializar el contenedor de Fabric.js vinculado al ID
    const canvas = new fabric.Canvas('miCanvas');

    // 3. Crear un objeto (un rectángulo interactivo azul)
    const rectangulo = new fabric.Rect({
      left: 100,
      top: 100,
      fill: '#3498db',
      width: 100,
      height: 80,
      angle: 15 // Ligeramente rotado
    });

    // 4. Agregar el objeto al lienzo ¡y listo! Ya es interactivo
    canvas.add(rectangulo);
  </script>
</body>
</html>