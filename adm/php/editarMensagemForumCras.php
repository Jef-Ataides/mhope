<?php
    include("../config/conexao.php");

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['btnEditarMensagemForumCras'])){
        $sql_mensagem = "UPDATE forum_cras SET mensagem = :mensagem WHERE id = :id";
        $query_mensagem = $conexao->prepare($sql_mensagem);
        $query_mensagem->bindParam(':id', $dados['id']);
        $query_mensagem->bindParam(':mensagem', $dados['msg']);

        if($query_mensagem->execute()){
            header('Location: ../../forumCras.php');
        }
    }
?>