
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
        <h1 class="mt-5 mb-4">Hotels</h1>

        <!-- form filter -->
        <form action="index.php" method="get" class="mb-4">
            <div class="form-group">
                <label for="parking">Parcheggio</label>
                <input type="checkbox" name="parking" id="parking" />
            </div>
            <div class="form-group">
                <label for="rating">Voto (stelle)</label>
                <input type="number" name="rating" id="rating" min="1" max="5" />
            </div>
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>

        <!-- Tabella per gli hotel -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                </tr>
            </thead>
            <tbody>
                <!-- inserire php -->
                <?php foreach ($filteredHotels as $hotel): ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </body>
</html>
