<?php


include_once "config.php";

$firstname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname=mysqli_real_escape_string($conn, $_POST['lastname']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){

    //validity of user email
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        //check repeatation

        $sql=mysqli_query($conn, "SELECT email FROM users WHERE email='{$email}'");
        if(mysqli_num_rows($sql)>0){ //if email id used
                echo"$email Already exists";
        } else {
            //check if user uploaded
            if(isset($_FILES['image']))//if uploaded
            {
                $img_name=$_FILES['image']['name']; //geting image name
                $img_type=$_FILES['image']['type']; //getting image type
                $tmp_name=$_FILES['image']['tmp_name']; //temporary folder

                $img_explode=explode('.', $img_name);
                $img_ext =end($img_explode);
                $extensions =['png','jpg','jpeg'];
                if(in_array($img_ext , $extensions)==true){
                   

                    $time=time(); //to generate random unique number to every uploaded file
                    $updated_img_name=$time.$img_name;
                   if( move_uploaded_file($tmp_name,"images/.".$updated_img_name)){
                      
                    $status="Active Now";
                    $random_id=rand(time(),100000); //random id for user
                    $sql2 = mysqli_query($conn ,"INSERT INTO users (unique_id, firstname, lastname, email, password, img, status) 
                    VALUES ('$random_id','$firstname','$lastname','$email','$password','$updated_img_name','$status')");
                    
                  
                if($sql2){
                    
                    $sql3=mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}'");
                        if(mysqli_num_rows($sql3) > 0){
                            $row=mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id']=$row['unique_id'];
                            
                        }
                }
                }
                    
                }else{
                    echo " ---- $img_ext----FIle type invalid";
                }
                
            } else{
                echo "Please select an image";
            }
        }

    }else{
        echo "$email is not valid";
    }



}else{
    echo "All input field are required ";
}

?>