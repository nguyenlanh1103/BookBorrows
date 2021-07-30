<?php 
$conn = mysqli_connect("localhost", "root", "", "qlythuviensach" );
$response = array();
if($conn){
    $sql = "SELECT * FROM categorys";
    $result = $conn->query($sql);
    
    if($result){
        header("Content-Type: JSON");
        $i =0;
        while($row = $result->fetch_assoc()){
            $response[$i]['id'] = $row['id'];
            $response[$i]['booktitle'] = $row['booktitle'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
                                    

    }
}
else{
    echo "Data Connection Failed";
}
?>