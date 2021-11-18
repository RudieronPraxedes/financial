<!DOCTYPE html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">

</head>


<html>
<body>

<form method="POST" action="process.php">

<div class="row">
  <div class="col">
      <span class="text_input">Nome da Despesa</span>
    <input type="text" name="nome_despesa" class="form-control">
  </div>

  <div class="col">
  <span class="text_input">Valor</span>
    <input type="number" name="valor_despesa" class="form-control">
  </div>

  <div class="col">
  <span class="text_input">Data</span>
    <input type="date" name="data_despesa" class="form-control">
  </div>

  <div class="col">
  <span class="text_input">Centro de Custo</span>
    <input type="text" name="centro_da_despesa" class="form-control">
  </div>
 
  <input type="submit" class="btn btn-primary" name="registrar" value="Registrar">
</div>




</form>
























</body>
</html>