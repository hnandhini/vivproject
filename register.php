<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <?php include "includes/header.php";?>
        <style>
            .vertical {
            border-left: 1px solid grey;
            height: 40px;
            position:absolute;
            left: 82%;
            }
            .vertical1{
            border-left: 1px solid grey;
            height: 40px;
            position:absolute;
            left: 86.5%;
            }
            .vertical2{
            border-left: 1px solid grey;
            height: 40px;
            position:absolute;
            left: 93.2%;
            }
            .navbar-nav{
                flex-direction: row;
            }
            .nav-item{
                padding-left: 30px;
            }
            .checkbox{
                text-align: left;
            }
            .card-body{
                top: 75px;
                background-color:#7C7A7D;
                width:500px;
                height: 650px;
            }
            .heading-font{
                font-family: 'Rancho',cursive;
                font-style: normal;
                font-weight: normal;
                font-size:50px;
                line height:79.5px;
            }
            .shade{
                box-shadow:1px 1px 1px 1px rgba(0.1, 0.1, 0.1, 0.2);, 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            .bg{
                background-color:#D7D4CD;
            }
            ::placeholder {
            color:green;
            }
            .custom-font-color{
                color:#494F55;
                text-decoration: none;
            }
            .custom-font-color:hover{
                color:#494F55;
                text-decoration: none;
            }
        </style>
    </head>
    <body style="background-color:#D2D0D5;">
        <header class="bg">
            <?php include "includes/landing_nav.php";?>
        </header>
        <center>
            <?php
                /*if($showalert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is now created and now you can login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>';
                }
                if($showerror){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>'.$showerror.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>';
                    }*/
            ?>
</div>
            <div class="card card-body shade" style="color:white;">
                
                <label class="heading-font"> Registration </label><br>
                
                <form method="POST" action="registerfetch.php">
                <label for="choose">Select:</label>  
                    <br> <br> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="user_name" placeholder="Your Name">
                    </div>
                    <span id="name_err" class="text-danger"></span><br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="user_email" placeholder="Your Email">
                    </div>
                    <span id="email_err" class="text-danger"></span><br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="user_pwd" placeholder="Your Password">
                    </div>
                    <span id="password_err" class="text-danger"></span><br>
                    
                    <input type="submit" class="btn btn-outline-light" name="regbut" style="width:100px;" value="Register" onclick="validateForm()"><br>
                    
                    
                </form>
            </div>
        </center>    
            <?php include "includes/footer.php";?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                function printError(elemId, hintMsg){
                document.getElementById(elemId).innerHTML =hintMsg;
            }
            function validateForm(){
                event.preventDefault();
                var name=document.getElementById('user_name').value;
                var phno=document.getElementById('user_phno').value;
                var email=document.getElementById('user_email').value;
                var pwd=document.getElementById('user_pwd').value;
                var pwd1=document.getElementById('user_pwd1').value;
                var name_err=phno_err=email_err=password_err=passwordconfirm_err=true;
    
            if(name==""){
                printError("name_err","Please enter your name");
            } else{
            var regex = /^[a-zA-Z\s]+$/;
            if (regex.test(name)===false){
            printError("name_err","Please enter a valid name");
            }else{
            printError("name_err","");
            name_err=false;
            }
            }
            if(phno==""){
            printError("phno_err","Please enter your mobile number");
            } else{
            var regex = /^[1-9]\d{9}$/;
            if (regex.test(phno)===false){
            printError("phno_err","Please enter a valid mobile number");
            }else{
            printError("phno_err","");
            phno_err=false;
            }
            }
    
                if(email==""){
                    printError("email_err","Please enter your email address");
                } else{
                //Regular expression for basic email validation
                var regex = /^\S+@\S+\.\S+$/;
                if (regex.test(email)===false){
                    printError("email_err","Please enter a valid email address");
                }else{
                    printError("email_err","");
                    email_err=false;
                    }
                }
                //console.log(email+pwd);
                {if(pwd==""){
                    printError("password_err","Please enter password");  
                }else{
                    printError("password_err","");
                    password_err=false;
                    }}
                    {if(pwd1==""){
                    printError("passwordconfirm_err","Please enter confirm password");  
                }else{
                    printError("passwordconfirm_err","");
                    passwordconfirm_err=false;
                    }}
                    
            }
            </script>
    
    </body>
</html>