<?php

$usrname = $_POST["username"];
$pwd = $_POST["password"];

/*
echo $usrname;
echo $pwd;
print_r($usrname);
*/

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://ec2-18-213-26-201.compute-1.amazonaws.com:3030/users/login",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\n    \"email\": \"$usrname\",\n    \"password\": \"$pwd\"\n}",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
    ),
));
//CURLOPT_POSTFIELDS =>"{\n    \"email\": \"r@gmail.com\",\n    \"password\": \"admin\"\n}",

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if(json_decode($response)->response == "INCORRECT_PASSWORD" || json_decode($response)->response == "USER_NOT_FOUND"){
        //echo json_decode($response)->response;
        /*echo "Credenciales incorrectas \n\n";*/
        /*echo $response;*/
        header("Location: ../index.php?error=LOGIN_ERROR");
    }
    else{
        session_start();
            //echo json_encode($response);
            //echo $response;
            //include("../dashboard.php");
            $_SESSION["user_data"] = (json_decode($response)->response);
        session_write_close();
        header("Location: ../dashboard.php?upload=no");
        exit();
    }
}

?>