 <?php
 require('./dbConfig');
    try {
        if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message'])){
            $res = 'Fields cannot be empty';
           return $res;
        }else{
            $name = $_POST['name']; 
            $email =  $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
         $send_mail =  mail(  $email,  $subject, $message);
         if($send_mail === true){
            $sql = "INSERT INTO contact_us (name, email, subject, message) VALUES ($name, $email, $subject, $message)";
           $conn->exec($sql);
            $response = array(
                "status" => "success",
                "error" => false,
                "data"=>$send_mail,
                "message" =>  "Message sucessfully sent"
            );
            echo json_encode($response);
         }else{
             throw new Exception($e->send_mail);
         } //save to database or send mail     
        }
    } catch (Exception $e) {
        // throw new Exception($e->errorMessage());
        $response = array(
            "status" => "failure",
            "error" => true,
            "message" => "Failed to send contact message"
        );
 
        echo json_encode($response);
    }
// }
?> 
