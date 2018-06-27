<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Municípios</title>

        <!-- CSS do Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    </head>
    <body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/uf">Unidades Federativas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/municipios">Municípios</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Fim do menu -->



  <div class="container">

{{ Form::model($municipio, array('route' => array('municipios-salvar', $municipio->COD_MUNICIPIO), 'method' => 'GET')) }}
{{ Form::hidden('inputCod', $municipio->COD_MUNICIPIO, array('class' => 'form-control')) }}
    <div class="form-group">
      <label for="inputNome">Nome</label>
      {{ Form::text('inputNome', $municipio->NOM_MUNICIPIO, array('class' => 'form-control', 'required' => 'required')) }}
    </div>
    <div class="form-group">
      <label for="inputPopulacao">População</label>
      {{ Form::number('inputPopulacao', $municipio->NUM_POPULACAO, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      <label for="inputPrefeito">Prefeito</label>
      {{ Form::text('inputPrefeito', $municipio->NOM_PREFEITO, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      <label for="inputUF">Unidade Federativa</label>
      {!! Form::select('inputUF', $uf, null, ['class' => 'form-control']) !!}
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href='{{ URL::previous() }}' class="btn btn-primary">Cancelar</a>
{{ Form::close() }}

        <footer class="footer text-center fixed-bottom">Desenvolvido por Paulo Roberto Elias</footer>
        <!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
        <!-- <script src="javascript.js"></script> -->
    </body>
</html>
