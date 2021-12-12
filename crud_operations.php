<?php
require('db_conn.php');
    session_start();

    
    // insert user details in signup table
    $username= null;
    $user_email= null;
    $Password= null;
    $confirm_password= null;
if(isset($_POST['signup'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])){
        // name
        $_SESSION['name']= $_POST['name'];
        $username = $_SESSION['name'];

        // email
        $_SESSION['email']= $_POST['email'];
        $user_email = $_SESSION['email'];

        //password
        $password = $_POST['password'];

        //confirmpassword
        $confirm_password= $_POST['confirmpassword'];

        //insert into user credentials to database 
        $iQuery="insert into `signup` (`username`, `user_email`,`Password`,`confirm_password`) values ('$username', '$user_email', MD5('$password'), MD5('$confirm_password'));";

        //execute query statement
        $results = mysqli_query($connection, $iQuery);

        //check sql results
        if($results==TRUE){
            echo "sign up successful";
        }else{
            echo " sign up was not successful";
        }
    }
}


    // insert into Register table
         
    $name= null;
    $email= null;
    $age= null;
    $contact= null;
    $image= null;
    if(isset($_POST['register'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['contact']) && !empty($_POST['image'])){
            // name
            $_SESSION['name']= $_POST['name'];
            $name = $_SESSION['name'];

            // email
            $_SESSION['email']= $_POST['email'];
            $email = $_SESSION['email'];

            //age
            $age= $_POST['age'];

            //contact
            $contact= $_POST['contact'];

            //image
            $image= $_POST['image'];

            //insert into user credentials to database 
            $iQuery="insert into `registration` (`reg_name`, `email`,`age`,`phone`, `headshot`) values ('$name', '$email', '$age', '$contact','$image');";

            //execute query statement
            $results = mysqli_query($connection, $iQuery);

        //check sql results
        if($results==TRUE){
            echo "Registration is successful";
        }else{
            echo " Registration was not successful";
        }
    }
}

    //insert vote into database
    $name= null;
    $votecount= null;
    if(isset($_POST['vote'])){
        if(!empty($_POST['delegate-name']) && !empty($_POST['delegate-number'])){
            // name
            $name= $_POST['delegate-name'];

            //insert into user credentials to database 
            $iQuery="insert into `vote` (`Delegate_name`) values ('$name');";

            //execute query statement
            $results = mysqli_query($connection, $iQuery);

        //check sql results
        if($results==TRUE){
            echo "Thank you for your vote";
        }else{
            echo " please try again";
        }
    }
}


    //insert login details into database
    $email= null;
    $password= null;
    if(isset($_POST['login'])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            // email
            $_SESSION['email']= $_POST['email'];
            $email = $_SESSION['email'];

            // password
            $password= $_POST['password'];

            //insert into user credentials to database 
            $iQuery="insert into `login` (`email`, `password`) values ('$email', MD5('$password'));";

            //execute query statement
            $results = mysqli_query($connection, $iQuery);

        //check sql results
        if($results==TRUE){
            echo "sign in succesful";
        }else{
            echo " please try again";
        }
    }
    }


    //insert contact -message into database
    $name= null;
    $email= null;
    $subject= null;
    $message= null;
    if(isset($_POST['login'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
            // name
            $_SESSION['name']= $_POST['name'];
            $email = $_SESSION['name'];

            // email
            $_SESSION['email']= $_POST['email'];
            $email = $_SESSION['email'];

            //subject
            $_SESSION['subject']= $_POST['subject'];
            $email = $_SESSION['subject'];

            //message
            $_SESSION['message']= $_POST['message'];
            $email = $_SESSION['message'];

            //insert into user credentials to database 
            $iQuery="insert into `contactus` (`contact_name`, `contact_email`, `contact_subject`, `contact_message`) values ('$name', '$password', '$subject', '$message');";

            //execute query statement
            $results = mysqli_query($connection, $iQuery);

        //check sql results
        if($results==TRUE){
            echo "Message sent";
        }else{
            echo " message not sent ";
        }
    }
    }


    // Delete profile
    // Delete from database
    if(isset($_POST['delete'])){
        $id =$_POST['delete'];

        $dQuery= "delete from signin where user_id=?;";
        $stmt= $connection->prepare($dQuery);
        $stmt-> bind_param('i',$id);
        if($stmt->execute()){               
            $SESSION['msg']="profile successfully deleted.";
            $SESSION['alert'] = "alert alert-danger";
            }
        $stmt->close();
        header("location: user.php");

    }


    
    //         // insert Queries
    //         $iQuery= "insert into signin (username, user_email, password, confirm_password) values ('$username', '$user_email', '$password', '$confirm_password');";
    //     // $query2="insert into practical_lab_table(search_term) values ('$word2')";

    //     if ($connection->query($iQuery)===TRUE){ //&& $connection->query($query2)===TRUE){
    //         // echo "records inserted successfully";
    //     }
    //     else{
    //         echo "Unable to Sign in" . $iQuery . "<br>". $connection->error;
    //     }

    // }
    // }

    //     // Insert into Register database
    //     $name= null;
    //     $email= null;
    //     $age= null;
    //     $contact= null;
    //     $image= null;
    // if(isset($_GET['register'])){
    //     if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['contact']) && !empty($_POST['image'])){
    //         // name
    //         $_SESSION['name']= $_POST['name'];
    //         $name = $_SESSION['name'];

    //         // email
    //         $_SESSION['email']= $_POST['email'];
    //         $email = $_SESSION['email'];

    //         //age
    //         $_SESSION['age']= $_POST['age'];
    //         $age = $_SESSION['age'];

    //         //contact
    //         $_SESSION['contact']= $_POST['contact'];
    //         $contact = $_SESSION['contact'];

    //         //image
    //         $_SESSION['image']= $_POST['image'];
    //         $image = $_SESSION['image'];

    //         if ($connection-> connect_error){
    //             die('connection failed :'. $connection->connect_error);
    //         }else{
    //             $stmt= $connection->prepare("insert into registration (reg_name, email, age, phone, headshot) values (?,?,?,?,?);");
    //             $stmt-> bind_param("ssiib", $reg_name, $email, $age, $contact,$image);
    //             $stmt-> execute();
    //             echo "Registration Successful..";
    //             $stmt->close();

    //         }
    //     }
    // }

    // if ($connection-> connect_error){
            //     die('connection failed :'. $connection->connect_error);
            // }else{
            //     $stmt= $connection->prepare("insert into registration (username, user_email, password, confirm_password) values (?,?,?,?);");
            //     $stmt-> bind_param("ssss", $username, $user_email, $password, $confirm_password);
            //     $stmt-> execute();
            //     echo "Sign up Successful..";
            //     $stmt->close();
        
            // }


?>