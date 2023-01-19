<?php
include ("config.php");

$sql = "SELECT * from client WHERE nume_utilizator='".$_POST["nume_utilizator"]."' and parola='".$_POST["parola"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        header("Location:home.html");
        exit();
    }
} else {
    header("Location:home.html");
    // echo "Parola sau username gresite"

    
}

$conn->close();

?>