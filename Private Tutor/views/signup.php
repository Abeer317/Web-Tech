<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Inspiring Sign Up Page </title>
    <style>
        html {
            background: #e3e3ff;
        }
        
        .body-content {
            padding-top: 10vh;
        }
        
        .container {
            width: 350px;
            height: 452px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            border: 2px solid rgba(255, 255, 255, 0.049);
            border-radius: 15px;
            background: #8787c5;
            box-shadow: 0 0 25px #6c6cc9 ;
        }
        
        h2 {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        .form-item {
            margin: 5px;
            padding-bottom: 10px;
            display: flex;
        }
        
        .form-item input {
            width: 150px;
            height: 30px;
            border: 2px solid #e1dede69;
            border-radius: 5px;
            background: white;
            color: black;
            text-align: left;
            margin: 0 5px;
        }
        
        .form-item-email {
            margin: 0 5px;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
        }
        
        .form-item-email input {
            height: 30px;
            border: 2px solid #e1dede69;
            border-radius: 5px;
            background: white;
            color: black;
            text-align: left;
            margin: 0 5px;
        }
        
        .form-item-password {
            margin: 5px;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
        }
        
        .form-item-password input {
            height: 30px;
            border: 2px solid #e1dede69;
            border-radius: 5px;
            background: white;
            color: black;
            text-align: left;
            margin: 5px 5px;
        }
        
        .remember-box {
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: white;
            display: flex;
        }
        
        .remember-box a {
            text-decoration: none;
            color: white;
            margin-left: 30px;
        }
        
        .remember-box a:hover {
            color: grey;
        }
        
        .form-btns {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 10px 0;
        }
        
        .form-btns button {
            margin: auto;
            font-size: 20px;
            padding: 5px 15px;
            border: 0;
            border-radius: 15px;
            color: rgb(75, 61, 61);
            background: #fbba50;
            width: 280px;
            cursor: pointer;
        }
        
        .form-btns button:disabled {
            background: #8f8b85 !important;
            color: rgb(131, 120, 120) !important;
            cursor: not-allowed;
        }
        
        .form-btns button:hover {
            background: #d88a0c;
            color: antiquewhite;
        }
        
        .options {
            padding-top: 15px;
            margin: auto;
            color: white;
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .options a {
            font-size: 13px;
            color: white;
        }
        
        .options a:hover {
            color: rgb(167, 165, 165);
        }
        
        p {
            text-align: center;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
    </style>
</head>

<body>
    <div class="body-content">

        <div class="container">

            <h2>Sign Up</h2>
            <div class="login-form">
                <form action="">
                    <div class="form-item">
                        <input type="text" name="userName" id="userName" placeholder="First Name">
                        <input type="text" name="userName" id="userName" placeholder="Last Name">

                    </div>
                    <div class="form-item-email">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-item-password">
                        <input type="password" name="passWord" id="password" placeholder="Password">
                        <input type="password" name="passWord" id="confirmPassword" placeholder="Confirm Password">

                    </div>
                    <div class="remember-box">
                        <input type="checkbox" name="remember" id="remember">
                        <p>I accept the Terms of Use & Privacy Policy</p>
                    </div>
                    <div class="form-btns">

                        <button class="signup" type="submit" disabled>Sign Up</button>
                        <div class="options">
                            Already have an account?<a href="#">Login here</a>
                        </div>


                    </div>
                </form>
                <p>Copyright &copy; abeershuvo.com</p>
            </div>
        </div>
    </div>

    <script>
        let signUp = document.querySelector('.signup')
        let termCond = document.querySelector('#remember')
        let password = document.querySelector('#password')
        let confirmPassword = document.querySelector('#confirmPassword')
        const passwordPattern = /^[a-zA-Z0-9]{8,15}$/;

        password.addEventListener('keyup', event => {
            if (passwordPattern.test(password.value)) {
                password.style.borderColor = 'green'
            } else {
                password.style.borderColor = 'Red'
            }
        })
        password.addEventListener('focusout', event => {
            if (passwordPattern.test(password.value)) {
                password.style.borderColor = '#e1dede69'
            } else {
                password.style.borderColor = 'Red'
            }
        })

        confirmPassword.addEventListener(['keyup'], event => {
            if (passwordPattern.test(password.value) && password.value === confirmPassword.value) {
                confirmPassword.style.borderColor = 'green'
            } else {
                confirmPassword.style.borderColor = 'Red'
            }
        })
        confirmPassword.addEventListener('focusout', event => {
            if (passwordPattern.test(confirmPassword.value)) {
                confirmPassword.style.borderColor = '#e1dede69'
            } else {
                confirmPassword.style.borderColor = 'Red'
            }
        })

        termCond.addEventListener('change', () => {
            if (termCond.checked === true) {
                signUp.disabled = false;
            } else if (termCond.checked === false) {
                signUp.disabled = true;
            }
        })
    </script>

</body>

</html>