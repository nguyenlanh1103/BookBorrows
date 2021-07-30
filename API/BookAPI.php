<?php 
$conn = mysqli_connect("localhost", "root", "", "qlythuviensach" );
$response = array();
if($conn){
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    
    if($result){
        header("Content-Type: JSON");
        $i =0;
        while($row = $result->fetch_assoc()){
            $response[$i]['id'] = $row['id'];
            $response[$i]['booktitle'] = $row['booktitle'];
            $response[$i]['describes'] = $row['describes'];
            $response[$i]['category_id'] = $row['category_id'];
            $response[$i]['img'] = $row['img'];
            $response[$i]['quantity'] = $row['quantity'];
            $response[$i]['detail'] = $row['detail'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
                                    

    }
}
else{
    echo "Data Connection Failed";
}
?>