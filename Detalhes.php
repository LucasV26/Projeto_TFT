<!DOCTYPE html>
<html>
  <head>
     <title> Detalhes </title>
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
            $i = $_GET["i"];
            echo("<h1 class='p-2 border border-warning bg-dark text-warning text-center'> TFT Informações - <spam class='text-primary'>". $TFT[$i][0] ."</spam> - <spam class='text-danger'>". $TFT[$i][1] ."</spam></h1><br/>
            
            <div class='container bg-dark border border-warning text-light'>
                    <div class='text-center'>
                        <img class='img-thumbnail mt-3 bg-dark border border-dark' src='imagens_matriz/".$TFT[$i][1].".png' width='300px' heigth='300px' alt='Foto de ". $TFT[$i][0]."' title='Foto de ". $TFT[$i][0]."'/>
                        <h1 class='text-primary'>Detalhes:</h1>
                        <p class='font-weight-bold text-uppercase'>". $TFT[$i][2] ."</p>
                        <br/><br/><br/>
                        <h1 class='text-warning'>Informações Extras:</h1><br/><br/>");
        
                        if($TFT[$i][0] == "Personagens"){
                            $k = 0;
                            echo("<h2 class='text-danger' style='text-decoration: underline'>Origens e Classes pertencentes</h2>
                            
                            <div class='row justify-content-center'>");
                            
                            for($f=3; $f < 6; $f++){
                                if($TFT[$i][$f] == "nada"){
                                    continue;
                                }
                                for($f2=0; $f2 < count($TFT); $f2++){
                                    if($TFT[$f2][1] == $TFT[$i][$f]){
                                        $k = $f2;
                                        break;
                                    }
                                }
                                echo("<div class='col-3 m-4 text-center bg-dark border border-danger'>
                                        <a href='Detalhes.php?i=$k' data-toggle='tooltip' data-placement='top' title='Detalhar...'><h3 class='text-danger'>".$TFT[$k][1]."</h3>
                                        <img class='img-fluid m-3' src='imagens_matriz/".$TFT[$k][1].".png' width='100px' heigth='100px' alt='Foto da ".$TFT[$k][0]." da Personagem = ".$TFT[$k][1]."' title='Foto da ".$TFT[$k][0]." da Personagem = ".$TFT[$k][1]."'/></a>
                                    </div>");
                            }
                            echo("</div>");
                            
                        }else{
                            if($TFT[$i][0] == "Itens"){
                                $aux = 3;
                                echo("<h2 class='text-danger' style='text-decoration: underline'>Itens Formados</h2>
                            
                                <div class='row justify-content-center'>");
                                    for($f=0; $f < 8; $f++){
                                        $f2 = $f+51;
                                        echo("<div class='col-3 m-3 text-center border border-danger'>
                                                <h6 class='text-danger'>".$TFT[$i][1]."</h6>
                                                <img class='img-fluid mt-3' src='imagens_matriz/".$TFT[$i][1].".png' width='100px' heigth='100px' alt='Foto do Item Atual' title='Foto do Item Atual'/>
                                            </div>
                                            <h1 class='mt-5'>+</h1>
                                            <div class='col-3 m-3 text-center border border-danger'>
                                                <a href='Detalhes.php?i=$f2' data-toggle='tooltip' data-placement='top' title='Detalhar...'><h6 class='text-danger'>".$TFT[$f2][1]."</h6>
                                                <img class='img-fluid mt-3' src='imagens_matriz/".$TFT[$f2][1].".png' width='100px' heigth='100px' alt='Foto do Item Combinado = ".$TFT[$f2][1]."' title='Foto do Item Combinado = ".$TFT[$f2][1]."'/></a>
                                            </div>
                                            <h1 class='mt-5'>=</h1>
                                            <div class='col-3 m-3 text-center border border-danger'>
                                                <h6 class='text-danger'>".$TFT[$i][$aux]."</h6>
                                                <img class='img-fluid m-3' src='imagens_matriz/".$TFT[$i][$aux].".png' width='100px' heigth='100px' alt='Foto do Item Resultante' title='Foto do Item Resultante'/>
                                                <p>".$TFT[$i][$aux+1]."</p>
                                            </div>"
                                            );
                                        $aux+=2;
                                    }
                        echo("</div>");
                                
                            }else{
                                echo("<h2 class='text-danger' style='text-decoration: underline'>Personagens Pertencentes</h2>
                            
                                <div class='row justify-content-center'>");

                                for($j=0; $j < count($TFT); $j++){
                                    if($TFT[$j][0] == "Personagens"){
                                        for($f=3; $f < 6; $f++){
                                            if($TFT[$j][$f] == $TFT[$i][1]){
                                                echo("<div class='col-2 m-4 text-center bg-dark border border-danger'>
                                                        <a href='Detalhes.php?i=$j' data-toggle='tooltip' data-placement='top' title='Detalhar...'><h3 class='text-danger'>".$TFT[$j][1]."</h3>
                                                        <img class='img-fluid m-3' src='imagens_matriz/".$TFT[$j][1].".png' width='100px' heigth='100px' alt='Foto da Personagem = ".$TFT[$j][1]."' title='Foto da Personagem = ".$TFT[$j][1]."'/></a>
                                                    </div>");
                                            }
                                        }
                                    }
                                }
                                echo("</div>");
                            }
                        }
                        
             echo("</div>
            </div>
            
            <br/><br/>
            <a href='Listar.php?categoria=".$TFT[$i][0]."' class='btn-lg btn-warning'> Voltar para a Lista</a>
            <a href='index.php' class='btn-lg btn-warning'> Voltar para a Página Inicial</a>");
        ?>
    </div>
  </body>
</html>