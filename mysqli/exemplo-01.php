<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");
// nesse caso, a primeira informação dentro das aspas é para o ip, a segunda para o admin, terceira para senha e a ultima para qual banco de dados que deverá ser acessado.
if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
    
}

$data = array();

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

while($row = $result->fetch_array(MYSQLI_ASSOC)){ //ou fetch_assoc

    array_push($data, $row);
    //var_dump($row);

}

echo json_encode($data);

?>