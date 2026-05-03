<?php
    session_start();
    
    if(isset($_POST['user'])){
        $user = $_POST['user'];
        $data = json_decode($user);
        
        
        if($data->username == "" || $data->password == "" || $data->email == ""){
            $response = [
                'success' => false,
                'message' => 'All fields are required!'
            ];
        } else {
            $user_data = [
                'username' => $data->username, 
                'password' => $data->password, 
                'email' => $data->email
            ];
            $_SESSION['user'] = $user_data;
            
            $response = 'Signup successful! Redirecting to login...';
        }
        
        echo json_encode($response);
        exit();
    }
    
   
    // if(isset($_REQUEST['submit'])){
    //     $username = $_REQUEST['username'];
    //     $password = $_REQUEST['password'];
    //     $email  = $_REQUEST['email'];
        
    //     if($username == "" || $password == "" || $email == ""){
    //         echo "null username/password/email!";
    //     }else{
           
    //         $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
    //         $_SESSION['user'] = $user;
    //         header('location: ../view/login.php');
    //     }
    // }else{
    //     echo "please submit form...";
    // }

?>