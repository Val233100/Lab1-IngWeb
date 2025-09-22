<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Área y Perímetro de un Círculo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2 class="text-center mb-3">Área y Perímetro de un Círculo</h2>
      <p class="lead text-center">Fórmulas: área = π·r² · perímetro = 2·π·r</p>

      <!-- Formulario -->
      <form method="post">
        <div class="mb-3">
          <label for="radio" class="form-label">Radio (r):</label>
          <input type="number" step="any" min="0" id="radio" name="radio" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2" type="submit" name="calcular">Calcular</button>
      </form>

      <!-- Resultado -->
      <?php
      if (isset($_POST['calcular'])) {
        $r = floatval($_POST['radio']);           
        $area = pi() * pow($r, 2);                
        $perimetro = 2 * pi() * $r;               

        echo '<div class="card bg-success text-white mt-4 p-3 text-center">';
        echo '<h5>Resultados:</h5>';
        echo '<p><b>Radio:</b> ' . number_format($r, 2, ',', '.') . '</p>';
        echo '<p><b>Área:</b> ' . number_format($area, 2, ',', '.') . ' u²</p>';
        echo '<p><b>Perímetro:</b> ' . number_format($perimetro, 2, ',', '.') . ' u</p>';
        echo '</div>';
      }
      ?>

      <a href="index.php" class="btn btn-link mt-3">Volver al inicio</a>
    </div>
  </div>
</body>
</html>
