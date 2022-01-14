<!--Deletando dados no banco de dados com PDO-->

<?php 

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
    
    $id = 13;

    $stmt->bindParam(":ID",$id);

    $stmt->execute();

    echo "Deletado com sucesso!";

?>
