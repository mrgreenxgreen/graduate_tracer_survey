
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h1> Register</h1>
    <main>
        <div>
             <form action="registerx.php" method="post" name="Register">
                <div>
            
                <label for="Username"> Username: </label>
                <input type="text" name="username" placeholder="  " minlength="6"  maxlength="18" required/>
                </div>

                <div>
                <label for="Password"> Password: </label>
                <input type="password" name="password" placeholder= ""  minlength="8" maxlength="18" required />
                </div>

                <div>
                <label for="ConfirmPassword"> Confirm Password: </label>
                <input type="password" name="confirmPassword" placeholder="" minlength="8" maxlength="18" required/>
                </div>

                <div>
                    <label for="Phone"> Phone Number: </label>
                    <input type="text" name="phoneNumber" minlength="11" maxlength="11" required />

                <div>
                <input type="submit" name="RegisterSubmit" value="Register" />
                </div>
            </form>
        </div>
    </main>
</body>
</html>