<!--Utilizando transações de dados no banco de dados com PDO-->

<?php 

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
    
    $id = 11;

    $stmt->bindParam(":ID",$id);

    $stmt->execute(array($id));

    //$conn->rollback(); cancela se der errado a transação
    $conn->commit(); //confirma a transação caso dê certo

    echo "Deletado com sucesso!";

?>
