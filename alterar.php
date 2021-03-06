<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados - Gerenciamento de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/favicon.ico" rel="icon" type="image/x-icon" />
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="corFundo">
  <?php session_start(); ?>
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Gerenciamento de Biblioteca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="alterar.php">Alterar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inserir.php">Inserir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="deletar.php">Deletar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="consultar.php">Consultar</a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="post" action="php/controlLogin.php">
              <button type="submit" class="btn btn-primary" name="acao" value="deslogarUsuario"><a class="nav-link fonte" href="index.php">Log Out</a></button>
            </form>
          </div>
        </div>
      </nav>
      <center class="fonte">
            <b>
              <?php if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                $_SESSION['msg'] = "";
              }?>
            </b>
          </center>
      <form action="php/controlAlterar.php" method="post">
      
        <div class="container">
        

          <!-- Tabela Autor -->

          <br><br>
          <h2 class="text-center fonte">Alterar Tabela Autor</h2>
          <br>
            <div class="row" >
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo c??digo</h4></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeAutorNovo">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                        <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codAutorNome">
                        <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeAutorCodigo">Alterar</button>
                    <br><br>
                </div>


                
                <div class="col-lg-4">
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar pa??s pelo c??digo</h4></label>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">Novo Valor</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Pa??s desejado" name="paisAutorNovo">
                      <div id="emailHelp" class="form-text instrucao">Coloque aqui o pa??s que deseja colocar</div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                      <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codAutorPais">
                      <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="acao" value="alterarPaisAutorCodigo">Alterar</button>
                  <br><br>
              </div>



              <div class="col-lg-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar data pelo c??digo</h4></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">Novo Valor</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Data no formato DD/MM/AAAA" name="dataAutorNovo">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui a data que deseja colocar</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                    <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codAutorData">
                    <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
                </div>
                <button type="submit" class="btn btn-primary" name="acao" value="alterarDataAutorCodigo">Alterar</button>
                <br><br>
            </div>
        </div>

        <!-- Tabela Biblioteca -->

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Biblioteca</h2>
        <br>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo c??digo</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeBibliotecaNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codBibliotecaNome">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeBibliotecaCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar endere??o pelo c??digo</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo endere??o</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Endere??o desejado (rua, n??mero, complemento se preciso)" name="enderecoBibliotecaNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o endere??o que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codBibliotecaEndereco">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarEnderecoBibliotecaCodigo">Alterar</button>
            <br><br>
          </div>
        </div>

        <!-- Tabela Livro -->

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Livro</h2>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar nome pelo c??digo</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo Nome</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Nome desejado" name="nomeLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o nome que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codLivroNome">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNomeLivroCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar n??mero de paginas</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo N??mero de P??ginas</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="N??mero desejado" name="numPagLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o n??mero de p??ginas que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codLivroNumPag">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarNumPagLivroCodigo">Alterar</button>
            <br><br>
          </div>
          


          <div class="col-lg-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar g??nero pelo c??digo</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Novo G??nero</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="G??nero desejado" name="generoLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o g??nero que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codLivroGenero">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarGeneroLivroCodigo">Alterar</button>
            <br><br>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar editora pelo c??digo</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Nova Editora</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Editora desejada" name="editoraLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui a editora que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codLivroEditora">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarEditoraLivroCodigo">Alterar</button>
            <br><br>
          </div>



          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar classifica????o de idade</h4></label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">Nova Classifica????o</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="Classifica????o desejada" name="classificacaoLivroNovo">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui a classifica????o de idade que deseja colocar</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
                <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codLivroClassificacao">
                <div id="emailHelp" class="form-text instrucao">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
            </div>
            <button type="submit" class="btn btn-primary" name="acao" value="alterarClassificacaoLivroCodigo">Alterar</button>
            <br><br>
          </div>
        </div>

        <br><br>
        <h2 class="text-center fonte">Alterar Tabela Exemplar</h2>
        <br><br>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar c??digo do Exemplar</h4></label>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Novo c??digo</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="N??mero desejado" name="codExemplar">
              <div id="emailHelp" class="form-text">Coloque aqui o n??mero que deseja colocar</div>
            </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="valorExemplar">
              <div id="emailHelp" class="form-text">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
          </div>
          <button type="submit" class="btn btn-primary" name="acao" value="alterarCodExemplarCodigo">Alterar</button>
          <br><br>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fonte"><h4>Alterar valor do Exemplar</h4></label>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">Novo valor do Exemplar</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="N??mero desejado" name="valorExemplarAlterar">
              <div id="emailHelp" class="form-text">Coloque aqui o valor que deseja colocar</div>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fonte">C??digo do registro</label>
              <input type="text" class="form-control corFundo fonte" id="exampleInputPassword1" placeholder="C??digo do registro" name="codExemplarAlterar">
              <div id="emailHelp" class="form-text">Coloque aqui o c??digo que consta no registro alvo de altera????o</div>
          </div>
          <button type="submit" class="btn btn-primary" name="acao" value="alterarValorExemplarCodigo">Alterar</button>
          <br><br>
        </div>

      </div>
      </form>
</body>
</html>