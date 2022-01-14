<!--Inserindo dados no banco de dados com PDO-->

<?php 

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE(:LOGIN,:PASSWORD)");

    $login = "jose";
    $password = "1234567890";

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->execute();

    echo "Inserido com sucesso!";

?>