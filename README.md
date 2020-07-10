# Projeto
Projeto proposto no segundo semestre de Análise e Desenvolvimento de Sistemas pela matéria de Linguagem de Programação.

A ideia era desenvolver 3 sites interconectados por formulários HTML e lidar com os valores de tais formulários com linguagem PHP.
O primeiro site, Index.php, representaria um simples menu, expondo informações gerais sobre o tema e possuindo uma região com opções para o próximo site.
O site seguinte, Listar.php, Se alteraria conforme a opção escolhida em Index.php, listando diversas outras opções sobre o tema escolhido, tais opções irão modificar a próxima página
Por fim, a página Detalhes.php apresenta as informações detalhadas sobre a opção escolhida em Listar.php.

***

# TFT
TFT é a sigla do jogo eletrônico da empresa Riot Games e é sobre ele que meu prejoto trata.
A ideia era de explorar as habilidades e descrições de cada campeão do jogo, além de descrever o efeito de todos os itens.
O fluxo de dados segue a seguinte linha, nos sites:
* Index: Apresenta informações gerais sobre o jogo e possui um formulário com as opções (Personagens, Itens, Origens, Classes) que serão a base para editar as informações da página Listar.php;
* Listar: Apresenta uma lista da categoria escolhida na página anterior, todas as opções desta lista possuem informações superficiais, clicar em alguma delas leva o usuário à página Detalhes.php para saber mais sobre aquela opção;
* Detalhes: Página final, simplesmente demonstra todas as informações sobre a opção escolhida em Listar.php.

Todas as modificações das páginas são feitas a partir de índices de uma enorme matriz chamada TFT.inc que é incluída no Index.php.
Esta matriz simula um tratamento com banco de dados, possuindo os dados separados em colunas distintas.
