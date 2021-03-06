<?php

include_once('Tabela Autor/funcaoTabAutor.php');
include_once('Tabela Biblioteca/funcaoTabBiblioteca.php');
include_once('funcaoConectarBancoBiblioteca.php');
include_once('Tabela Livro/funcaoTabLivro.php');
include_once('Tabela Usuario/funcaoTabUsuario.php');
include_once('Tabela Exemplar/funcaoTabExemplar.php');
session_start();

extract($_REQUEST,EXTR_SKIP);

if (isset($acao)) {
    # code...

    # tabela autor

    if($acao == "alterarNomeAutorCodigo"){
        if(isset($codAutorNome) && isset($nomeAutorNovo)){
            $nomeAutorNovo = htmlspecialchars_decode(strip_tags($nomeAutorNovo));
            $codAutorNome = htmlspecialchars_decode(strip_tags($codAutorNome));
            if (alterarNomeAutor($nomeAutorNovo,$codAutorNome)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
        
    }
    if($acao == "alterarPaisAutorCodigo"){
        if(isset($codAutorPais) && isset($paisAutorNovo)){
            $paisAutorNovo = htmlspecialchars_decode(strip_tags($paisAutorNovo));
            $codAutorPais = htmlspecialchars_decode(strip_tags($codAutorPais));
            if (alterarPaisAutor($paisAutorNovo,$codAutorPais)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }
   if($acao == "alterarDataAutorCodigo"){
        if(isset($dataAutorNovo) && isset($codAutorData)){
            $dataAutorNovo = htmlspecialchars_decode(strip_tags($dataAutorNovo));
            $codAutorData = htmlspecialchars_decode(strip_tags($codAutorData));
            if (!validar_data($dataAutorNovo)) {
                # code...
                $_SESSION['msg'] = "Data informada é inválida !!" . "<br>";
            }
            else {
                # code...
                if (alterarDataAutor($dataAutorNovo,$codAutorData)) {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
                }
                else {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
                }
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    # tabela biblioteca

    if($acao == "alterarNomeBibliotecaCodigo"){
        if(isset($codBibliotecaEndereco) && isset($nomeBibliotecaNovo)){
            $nomeBibliotecarNovo = htmlspecialchars_decode(strip_tags($nomeBibliotecaNovo));
            $codBibliotecaNome = htmlspecialchars_decode(strip_tags($codBibliotecaNome));
            if (alterarNomeBiblioteca($nomeBibliotecaNovo,$codBibliotecaNome)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarEnderecoBibliotecaCodigo"){
        if(isset($codBibliotecaEndereco) && isset($enderecoBibliotecaNovo)){
            $enderecoBibliotecarNovo = htmlspecialchars_decode(strip_tags($enderecoBibliotecaNovo));
            $codBibliotecaEndereco = htmlspecialchars_decode(strip_tags($codBibliotecaEndereco));
            if (alterarEnderecoBiblioteca($enderecoBibliotecaNovo,$codBibliotecaEndereco)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    # tabela livro

    if($acao == "alterarNomeLivroCodigo"){
        if (isset($nomeLivroNovo) && isset($codLivroNome)) {
            # code...
            $nomeLivroNovo = htmlspecialchars_decode(strip_tags($nomeLivroNovo));
            $codLivroNome = htmlspecialchars_decode(strip_tags($codLivroNome));
            if (alterarNomeLivro($nomeLivroNovo,$codLivroNome)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarNumPagLivroCodigo"){
        if (isset($numPagLivroNovo) && isset($codLivroNumPag)) {
            # code...
            $numPagLivroNovo = htmlspecialchars_decode(strip_tags($numPagLivroNovo));
            $codLivroNumPag = htmlspecialchars_decode(strip_tags($codLivroNumPag));
            if (alterarNumPagLivro($numPagLivroNovo,$codLivroNumPag)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarGeneroLivroCodigo"){
        if (isset($generoLivroNovo) && isset($codLivroGenero)) {
            # code...
            $generoLivroNovo = htmlspecialchars_decode(strip_tags($generoLivroNovo));
            $codLivroGenero = htmlspecialchars_decode(strip_tags($codLivroGenero));
            if (alterarGeneroLivro($generoLivroNovo,$codLivroGenero)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarEditoraLivroCodigo"){
        if (isset($editoraLivroNovo) && isset($codLivroEditora)) {
            # code...
            $editoraLivroNovo = htmlspecialchars_decode(strip_tags($editoraLivroNovo));
            $codLivroEditora = htmlspecialchars_decode(strip_tags($codLivroEditora));
            if (alterarEditoraLivro($editoraLivroNovo,$codLivroEditora)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
        
    }

    if($acao == "alterarClassificacaoLivroCodigo"){
        if (isset($classificacaoLivroNovo) && isset($codLivroClassificacao)) {
            # code...
            $classificacaoLivroNovo = htmlspecialchars_decode(strip_tags($classificacaoLivroNovo));
            $codLivroClassificacao = htmlspecialchars_decode(strip_tags($codLivroClassificacao));
            if (alterarClassificacaoLivro($classificacaoLivroNovo,$codLivroClassificacao)) {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
            }
            else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarSenhaUsuario"){
        if (isset($loginUsuarioAlterar) && isset($senhaUsuarioAlterarConfirmar) && isset($senhaUsuarioAlterar)){
            $loginUsuarioAlterar = htmlspecialchars_decode(strip_tags($loginUsuarioAlterar));
            $senhaUsuarioAlterarConfirmar = htmlspecialchars_decode(strip_tags($senhaUsuarioAlterarConfirmar));
            $senhaUsuarioAlterar = htmlspecialchars_decode(strip_tags($senhaUsuarioAlterar));

            if($senhaUsuarioAlterar == $senhaUsuarioAlterarConfirmar){
                if(alterarSenhaUsuario($loginUsuarioAlterar,$senhaUsuarioAlterar)){
                    $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
                    header('Location: '.'../index.html'); # redireciona direto para a pagina de login, sem contagem nem nada, só redireciona
                }
                else {
                    # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
                }
            }
            else{
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida, confirme sua senha de forma correta!" . "<br>";
            }
        }
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path");
    }

    if($acao == "alterarValorExemplarCodigo"){
        if(isset($codExemplarAlterar) && isset($valorExemplarAlterar)){
            $codExemplarAlterar = htmlspecialchars_decode(strip_tags($codExemplarAlterar));
            $valorExemplarAlterar = htmlspecialchars_decode(strip_tags($valorExemplarAlterar));
            if (alterarValorExemplarAlterar($valorExemplarAlterar,$codExemplarAlterar)) {
                # code...
                    $_SESSION['msg'] = "<br>" . "\n" . "Alteração feita com sucesso" . "<br>";
                }
                else {
                # code...
                $_SESSION['msg'] = "<br>" . "\n" . "Alteração mal sucedida" . "<br>";
                }
            }
            $path = $_SERVER['HTTP_REFERER'];
            header("Location: $path");
        }
    
        if($acao == "alterarCodExemplarCodigo"){
            if(isset($codExemplarAlterar) && isset($valorExemplarAlterar)){
                $codExemplarAlterar = htmlspecialchars_decode(strip_tags($codExemplarAlterar));
                $valorExemplarAlterar = htmlspecialchars_decode(strip_tags($valorExemplarAlterar));
                if(alterarValorExemplarAlterar($valorExemplarAlterar, $codExemplarAlterar)){
                    $_SESSION['msg'] = "<br>". "\n". "Alteração feita com sucesso". "<br>";
                }
                else{
                    $_SESSION['msg'] = "<br>". "\n". "Alteração mal sucedida". "<br";
                }
            }
            $path = $_SERVER['HTTP_REFERER'];
            header("Location: $path");
            
        }

}