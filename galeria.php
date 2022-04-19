<?php include "cabecalho.php"?>
<?php 
$filme1 = [
    "titulo"=>"Vingadores: Ultimato",
    "nota"=>9.6,
    "sinopse"=> "Xubirubi",
    "poster"=>"https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filme2 = [
    "titulo"=>"Ad Astra",
    "nota"=>8.0,
    "sinopse"=> "Birutchu!",
    "poster"=>"https://www.themoviedb.org/t/p/w300/hyiYLUOmf4EyC3TSaFgkGgsCB3T.jpg"
];

$filmes = [$filme1,$filme2];
?>
<body>
    <nav class="nav-extended  deep-purple accent-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active">
                    <a href="galeria.php">Galeria</a>
                </li>
                <li>
                    <a href="cadastrar.php">Cadastrar</a>
                </li>
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
    <?php 
    foreach($filmes as $filme):
    ?>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src= <?=$filme["poster"]?>>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons deep-purple accent-2">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title"><?=$filme["titulo"]?></span>
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star_rate</i><?=$filme["nota"]?>
                    </p>
                    <p><?=$filme["sinopse"]?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

</body>
</html>