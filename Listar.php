<!DOCTYPE html>
<html>
  <head>
     <title> Lista </title>
     <meta charset="utf-8" />
     <link rel="icon" type="image/x-icon" href="imagens/favicon.png"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" type = "text/css"  href="estilo.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta charset="utf-8"/>
     <meta name="author" content="Lucas Vinicius Sousa Silva"/>
	 <meta name="description" content="Projeto Linguagem de Programação, Curso de Análise e Desenvolvimento de Sistemas"/>
     <meta name="keywords" content="Projeto, PHP, TFT"/>
     <meta name="generator" content="Brackets"/>
  </head>

  <body>
    <div class="container m-4 p-2 mx-auto">
        <?php
            include "TFT.inc";
            $cont = 1;
            $categoria = $_REQUEST["categoria"];
            printf("<a id='topo'><h1 class='p-2 m-2 border border-warning bg-dark text-warning text-center'> TFT Informações - <spam class='text-primary'> $categoria </spam></h1></a><br/>
            
                  <button class='btn btn-dark p-2 m-2 border border-warning' type='button' data-toggle='collapse' data-target='#lista' aria-expanded='false' aria-controls='lista'>
                    Viagem Rápida
                  </button>
                  
                  <div class='collapse' id='lista'>
                    <div class='row'>");
                        for($i=0; $i < count($TFT); $i++){
                            if($TFT[$i][0] == $categoria){
                                echo("<div class='col-2 bg-dark border border-primary'>
                                        <a class='dropdown-item text-primary' href='#$i'>".$TFT[$i][1]."</a>
                                    </div>");
                            }
                        }
            echo(" </div>
                </div>
            
                <div class='container text-light'>
                    <div class='row justify-content-center'>");
        
                    for($i=0; $i < count($TFT); $i++){
                        if($TFT[$i][0] == $categoria){
                            
                            echo("<a id='$i'><div class='col-5 m-4 text-center bg-dark border border-warning'>
                                         <a href='Detalhes.php?i=$i'><img class='img-fluid mt-3'
                                         src='imagens_matriz/".$TFT[$i][1].".png' alt='Foto da Notícia' width='100px' heigth='100px' title='Elemento $cont da Lista $categoria' alt='Elemento $cont da Lista $categoria'/>
                                         <p class='font-weight-bold'>".$TFT[$i][1]."</p></a>
                                         <p class='text-justify'>".$TFT[$i][2]."</p>
                                    </div></a>");
                            $cont++;
                            
                        }
                    }
            printf("
                    </div>
                </div>");
            
        ?>
        <br/>
        <a href='index.php' class='btn-lg btn-warning'> Voltar </a>
        <a class='btn-lg btn-warning float-right' href='#topo'> Topo </a>
    </div>
      
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>