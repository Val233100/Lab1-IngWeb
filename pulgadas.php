<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pulgadas a Centímetros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2 class="text-center mb-4">Conversión: Pulgadas a Centímetros</h2>

      <form method="post">
        <div class="mb-3">
          <label for="pulgadas" class="form-label">Pulgadas:</label>
          <input type="number" step="any" min="0" id="pulgadas" name="pulgadas" class="form-control" required>
        </div>

        <button type="submit" name="convertir" class="btn btn-secondary mt-3">
          Calcular
        </button>
      </form>

      <?php
      if (isset($_POST['convertir'])) {
        $in = floatval($_POST['pulgadas']);       // lee pulgadas del formulario
        $cm = $in * 2.54;                         // conversión
        echo '<div class="alert alert-info mt-3">';
        echo '<b>Resultado:</b> ' . number_format($in, 2, ',', '.') . ' in = ' .
                              number_format($cm, 2, ',', '.') . ' cm';
        echo '</div>';
      }
      ?>

      <a href="index.php" class="btn btn-link mt-3">Volver al inicio</a>
    </div>
  </div>
</body>
</html>
