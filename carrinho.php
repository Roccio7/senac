<?php
$conexao = mysqli_connect("localhost", "root", "", "7ssoqueedaora");

$id_user = $_SESSION ['email']

if(isset($_GET['email'])){
    $idProduto = (int) $_GET['id'];
    $produtos = "SELECT * FROM carrinho WHERE id_produto = $idprodutos AND $id_usuarios = $id_user";
    $carrinhoQuery = mysqli_query($conexao,$produtos);
    $carrinhoQueryNumRows = $carrinhoQuery->num_rows;

    if($carrinhoQueryNumRows == 0){
        //insert
        $insert = "INSERT INTO carrinho (id_user, id_produto, quantidade) VALUES ($id_usuarios, $idprodutos,1)";
        mysqli_query($conexao, $insert);
    }else{
        //UPDATE tabela SET campo a ser alterado WHERE condição
        $update = "UPDATE carrinho SET quantidade+1 WHERE $id_usuarios = id_user AND $idprodutos = id_produtos";
        mysqli_query($conexao, $update);
    }

}

 if(isset($_GET['remover'])){
    $produtodeletado = $_GET['remover'];
    $carrinhobuscadelete = "DELETE FROM carrinho WHERE produtos = $produtodeletado AND $usuarioid = carrinho.id_usuario ";
    $deletequery = mysqli_query($conexao,$carrinhobuscadelete);
    
    header('Location: carrinho.php');
   }

echo "<script>window.history.back();</script>";
?>