<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <section class="form signup">
            <header>ChatBox</header>
            <form action="#" enctype="multipart/form-data">
                <div class="err-text">Error Message</div>
                <div class="name-details">
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="firstname" placeholder="First name" required>
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="lastname" placeholder="Last name" required>
                    </div>
                </div>
                    <div class="field">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <label>Select Profile Picture</label>
                        <input type="file"name="image" placeholder="image">
                    </div>
                    <div class="field button">
        
                        <input type="submit" placeholder="Sign-up">
                    </div>
                
            </form>
            <div class="link">Already have an account?<a href="./login.html"> Login Here</a></div>
        </section>
    </div>
    <script src="./js/signup.js"></script>
</body>
</html>