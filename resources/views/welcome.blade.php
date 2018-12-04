<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="app">
        <div id="register">
            <div id="left">
                <div class="signup">
                    <div class="logo">
                        <h1>BMS</h1>
                    </div>
                    <form>
                        <div class="form-group-name">
                            <label>Firstname</label>
                            <input type="text" class="text-input">
                        </div>
                        <div class="form-group-name form-padding">
                            <label>Lastname</label>
                            <input type="text" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" class="text-input">
                        </div>
                        <div>
                            <label>Username</label>
                            <input type="text" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" class="text-input">
                        </div>
                        <div>
                            <label>Confirm Password</label>
                            <input type="password" class="text-input">
                        </div>
                        <button type="button" class="btn primary-btn">Sign Up</button>
                    </form>
                    <div class="or">
                        <hr class="bar">
                        <span>Already have an account?</span>
                        <hr class="bar">
                    </div>
                    <div class="links">
                        <a href="#" class="btn secondary-outline-btn">Sign In</a>
                    </div>
                </div>
                <footer id="main-footer">
                    <p>Copyright &copy; 2018, BMS All Rights Reserved</p>
                    <div>
                        <a href="#">terms of use</a> | <a href="#">Privacy Policy</a>
                    </div>
                </footer>
            </div>
            <div id="right">
                <div id="showcase">
                    <div class="showcase-content">
                        <h1 class="showcase-text">
                            Lorem, ipsum dolor. <strong>together</strong>
                        </h1>
                        <a href="#" class="btn secondary-outline-btn">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>