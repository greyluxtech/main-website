 <?php
    try {
        if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message'])){
            $res = 'Fields cannot be empty';
           return $res;
        }else{
            $name = $_POST['name']; 
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            //save to database or send mail
            $response = array(
                "status" => "success",
                "error" => false,
                "data"=> $email ,
                "message" =>  "Message sucessfully sent"
            );
            echo json_encode($response);
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
