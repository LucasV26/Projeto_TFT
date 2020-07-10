<!DOCTYPE html>
<html>
  <head>
     <title> TFT </title>
     <meta charset="utf-8" />
     <link rel="icon" type="image/x-icon" href="imagens/favicon.png"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type = "text/css"  href="estilo.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta charset="utf-8"/>
     <meta name="author" content="Lucas Vinicius Sousa Silva"/>
	 <meta name="description" content="Projeto Linguagem de Programação, Curso de Análise e Desenvolvimento de Sistemas"/>
     <meta name="keywords" content="Projeto, PHP, TFT"/>
     <meta name="generator" content="Brackets"/>
  </head>

  <body>
    <img src="imagens/logo.png" class='img-fluid mx-auto d-block' width="70%" title="LogoTFT" alt="LogoTFT"/>  
    <div class="container border border-dark m-4 p-2 mx-auto" id="conteudo">
        <h3 class="p-2 m-2 border border-warning bg-dark text-light text-center">Depois de muito tempo, a empresa Riot Games, famosa pelo jogo League of Legends, Lançou um novo jogo.</h3><br/>
        <img class="img-thumbnail rounded mx-auto d-block" src="imagens/riot.jpg" title="Riot Games Logo" alt="Riot Games Logo"/><br/>
        <p class="p-2 m-2 border border-warning bg-dark text-light text-center">Antes conhecida como a empresa de jogos que possuía um único jogo apenas, Riot surge este ano com um jogo inédito. Baseando-se nos elementos de seu jogo principal, Teamfight Tactics surge como um estilo de jogo totalemten diferente e inovador, um estilo que ficou conhecido como "Auto Chess" ou "Xadrez Automático". Este estilo de jogo consiste na organização de um time de peças que apresentam relações entre si, fazendo com que um conjunto determinado de peças tornem-se mais fortes ao serem agrupadas. O objetivo do jogo é agrupar e organizar a melhor equipe para vencer as equipes adversárias, o diferencial deste modo de jogo seria o "Auto" em seu nome, visto que os combates são feitos de maneira automática pela inteligência artificial, sendo o único papel do jogador o de montar e posicionar as peças</p>
    </div>

          <div id="carrossel" class="carousel slide p-2 m-1 mx-auto border border-dark" data-ride="carousel" style="width: 75%">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner border border-warning">
              <div class="carousel-item active">
                <img src="imagens/carrosel1.jpg" class="d-block w-100" alt="TFT logo">
                <div class="carousel-caption d-none d-md-block text-warning bg-dark border border-light">
                  <h5>A última Novidade de Riot Games</h5>
                  <p>Teamfight Tactics surge como o novo jogo de uma empresa que, até então, possuía apenas um produto.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagens/carrosel2.jpg" class="d-block w-100" alt="TFT personagems">
                <div class="carousel-caption d-none d-md-block text-warning bg-dark border border-light">
                  <h5>Jogabilidade Totalmente Diferente</h5>
                  <p>Procure pelas peças perfeitas, monte suas composições, equipe seus personagens e torça pela sorte.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagens/carrosel3.jpg" class="d-block w-100" alt="TFT evolução">
                <div class="carousel-caption d-none d-md-block text-warning bg-dark border border-light">
                  <h5>Colecione Personagens Iguais</h5>
                  <p>Junte 3 personagens iguais para formar sua versão melhorada, junte 3 versões melhoradas para formar sua versão suprema.</p>
                </div>
              </div>              
              <div class="carousel-item">
                <img src="imagens/carrosel4.jpg" class="d-block w-100" alt="TFT pequenas lendas">
                <img src="imagens/carrosel4_1.jpg" class="d-block w-100" alt="TFT pequenas lendas">
                <div class="carousel-caption d-none d-md-block text-warning bg-dark border border-light">
                  <h5>Coleções até Fora do Jogo</h5>
                  <p>Compre mini-personagens que te representarão durante uma partida e te acompanharão em outros modos de jogo.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carrossel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrossel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      <div class="container border border-dark m-4 p-2 mx-auto" id="conteudo">
        
          <button class="btn btn-dark border border-warning" type="button" data-toggle="modal" data-target="#formulario" id="botao">
                <spam class='text-warning'>Conhecer mais sobre o jogo! </spam>
          </button>
          
          <div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="formulario" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="formulario">Saiba mais sobre o Jogo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form method="post" action="Listar.php">
                  <div class="modal-body">
                    <label> Assunto: </label>
                    <select name='categoria' class='btn-secondary shadow p-1 mb-5 rounded' required>
                        <option selected disabled value=''> Selecione... </option>
                        <option value='Personagens'> Personagens </option>
                        <option value='Itens'> Itens </option>
                        <option value='Origens'> Origens </option>
                        <option value='Classes'> Classes </option>
                    </select><br/>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input class='btn btn-secondary' type="submit" value="Procurar"/>
                  </div>
                </form>
                </div>
              </div>
            </div>
        
    </div>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>