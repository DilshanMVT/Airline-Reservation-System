<?php
//first we need to import database connection 
include_once("db_conn.php");

//lets create our userfunction

function userRegistration($name,$email,$pwd,$phone,$nic){
    
    //create db connection
    $db_conn = Connection();

    //insert query section(If your insert any data into char ,varchar, date and float types you need warp that value by using single quotes)
    $newPwd = md5($pwd);
    
    
    
    $insertSql = "INSERT INTO user_login (user_account,email,user_password,phone,passport,role,status) 
    VALUES('$name','$email','$newPwd','$phone','$nic','user',1);";

    $insertLogin = "INSERT INTO user (user_account,email,phone,passport,role,status) 
                        VALUES('$name','$email','$phone','$nic','user',1);";

    $sqlResult = mysqli_query($db_conn,$insertSql);
    

    //check database errors
    /*if(mysqli_connect_errno($sqlResult)){
        echo(mysqli_connect_error($sqlResult));
    }*/

    if($sqlResult>0){
        //if the registration result is greater than 0 then lest feed data into our login table as well.
        //lets use MD5 
        $newPwd = md5($pwd);


        $insertSql = "INSERT INTO user_login (user_account,email,user_password,phone,passport,role,status) 
                  VALUES('$name','$email','$newPwd','$phone','$nic','user',1);";
        
        $loginResult = mysqli_query($db_conn,$insertLogin);
        
        //database error checking
       /* if(mysqli_connect_errno($loginResult)){
            echo(mysqli_connect_error($loginResult));
        }*/

        return("Your Registration is Success!");
    }
    else{
        return("Please try again!");
    }
}

function Authentication($userName,$userPwd){

    //create db connection
    $db_conn = connection();

   //SQL USER CHECK
   $sqlUserFetch = "SELECT * FROM user_login WHERE user_account = '$userName';";
   $sqlResult = mysqli_query($db_conn,$sqlUserFetch);

   //check database errors
   if(mysqli_connect_error($sqlResult)){
   echo(mysqli_connect_error($sqlResult));
   }
 
   //first we need to convert user password in to a hash value
   $newPwd = md5($userPwd);

   //we need to check the number of rows
   $nor = mysqli_num_rows($sqlResult);

   //now in validating the number of records are greater than o or not
   if($nor > 0){
       //im executes the code

       //first we need to fetch the records
       $rec = mysqli_fetch_assoc($sqlResult);

       //first we needs to validate your password
       if($rec['user_password'] == $newPwd){
           
           //lets check the user status
           if($rec['status'] == 1){

               //check user role
               if($rec['role'] == "Admin"){

                   //if the user is valid then we need to create a cookie and a session

                   //create a cookie
                   setcookie("Login29",$rec['login_id'],time()+60*60);

                   //lets create a session
                   $_SESSION['loginName'] = $rec['login_email'];
                   $_SESSION['loginId'] = $rec['login_id'];

                   //now lets redirect our user to the dashboard
                   header('location:reservation.php');
               }

           }
           else{
               return("Your Account has been Deactivated");
           }
       
       }
       else{
           return("Your Password is not correct,Please try again!");
       }
   }
   else{
       return ("No records are founds!");
   }

}



?>