<!doctype html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="container">  
    <form action="table.php" method="get" class="my-3">
      <label for="nom" class="form-label my-2">Nom :</label>
      <input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="nom">
      <label for="prenom" class="form-label my-2">Prénom :</label>
      <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="helpId" placeholder="prénom">
      <label for="sexe" class="form-label my-2">Sexe :</label>
      <select class="form-select form-select-lg" name="sexe" id="sexe">
        <option value="M" selected>M</option>
        <option value="F">F</option>
      </select>
      <label class="form-check-label my-2" for="cours">Cours :</label>
      <select class="form-select form-select-lg" name="cours[]" id="cours" multiple>
        <option value="simple">simple</option>
        <option value="moyen">moyen</option>
        <option value="difficile" >difficile</option>
      </select><br>
      <button type="submit" class="btn btn-lg btn-primary my-3">Submit</button>
    </form>
  </div>
</body> 
</html>
