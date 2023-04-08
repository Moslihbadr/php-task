<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Table</title>
</head>
<body>
  <h1>Affichage des données saisies</h1>
  <a href="index.php">Essayez à nouveau</a>
  <div class="table-responsive-md container mt-4">
    <table class="table table-light table-hover table-striped table-bordered">
      <tbody>
        <tr class="">
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Sexe</th>
          <th scope="col">Cours</th>
        </tr>
        <tr class="">
          <td><?php echo $_GET['nom']; ?></td>
          <td><?php echo $_GET['prenom']; ?></td>
          <td><?php echo $_GET['sexe']; ?></td>
          <td>
            <?php
            foreach ( $_GET['cours'] as $selected) {
              echo "<li> $selected </li>";
            } ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
