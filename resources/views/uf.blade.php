<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unidades Federativas</title>

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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Sigla</th>
        <th scope="col">Nome</th>
        <th scope="col"><a href="uf/novo">Novo</a></th>
      </tr>
    </thead>
    <tbody>
        @foreach($uf as $unidade)
        <tr>
        <td>{{ $unidade->NOM_UNIDADE_FEDERATIVA }}</td>
        <td>{{ $unidade->SGL_UNIDADE_FEDERATIVA }}</td>
        <td><a href="/uf/editar/{{ $unidade->SGL_UNIDADE_FEDERATIVA }}">Editar</a> / <a class="b_del" href="#" onclick="deleteConfirm('{{ $unidade->SGL_UNIDADE_FEDERATIVA }}')" >Excluir</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>

  <div id="dialog" title="Confirmar exclusão" style="display: none">
    Tem certeza que deseja excluir? Esta ação não pode ser desfeita. Se houverem MUNICÍPIOS associados, os mesmos também serão EXCLUÍDOS!!!!!
  </div>​




        <footer class="footer text-center fixed-bottom">Desenvolvido por Paulo Roberto Elias</footer>
        <!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
        <script src="{{ asset('js/javascript-uf.js') }}"></script>
    </body>
</html>
