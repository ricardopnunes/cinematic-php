<?php include "cabecalho.php"?>
<body>
    <nav class="nav-extended  deep-purple accent-1">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
    </div>

    <div class="nav-header center">
        <h1>CINEMATICS</h1>
    </div>
    
    <div class="nav-content">
      <ul class="tabs tabs-transparent deep-purple accent-2">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content white-text">
                <span class="card-title">Cadastrar Filme</span>
                <div class="row">
                    <!-- Input do Titulo -->
                    <div class="input-field col s12">
                        <input id="titulo" type="text" class="validate" require>
                        <label for="titulo">Título do filme</label>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                        <label for="nota">Nota</label>
                    </div>
            </div>

            <div class="file-field input-field ">
                <div class="btn deep-purple accent-1">
                    <span>Poster</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <div class="card-action">
                <a href="#" class="waves-effect waves-light btn deep-purple accent-2">Enviar</a>
                <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
            </div>
        </div>
    </div>
</div>