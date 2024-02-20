
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Hotel</title>

    <!-- link bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
        <!-- Aggiungi il form per il filtraggio -->
    <form action="" method="get">
        <div class="mb-3">
            <label for="parkingCheckbox" class="form-label">Parcheggio</label>
            <input type="checkbox" id="parkingCheckbox" name="parking" <?php echo isset($_GET['parking']) ? 'checked' : ''; ?>>
        </div>
        <div class="mb-3">
            <label for="ratingInput" class="form-label">Voto minimo</label>
            <input type="number" id="ratingInput" name="rating" min="1" max="5" value="<?php echo isset($_GET['rating']) ? $_GET['rating'] : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Filtra</button>
    </form>
    </div>
  </body>
</html>
