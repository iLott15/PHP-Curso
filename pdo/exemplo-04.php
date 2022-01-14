<!--Alterando dados no banco de dados com PDO-->

<?php 

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "Lucas";
    $password = "000999123";
    $id = 12;

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindParam(":ID",$id);

    $stmt->execute();

    echo "Atualizado com sucesso!";

?>
