<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up.html</title>
    <link rel="stylesheet" type="text/css"
    href="Sign Up.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div id="wrap">
        <form id="form-signup" action="Login.html">
            <h1 class="form-heading">Sign-Up form</h1>
            <div class="form-group">
                <label for="fullname">Full Name</label><br>
                <input type="text" name="fullname" id="fullname">
            </div>

            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label><br>
                <input type="number" name="age" id="age" min="18" max="100" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" id="male" required>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" required>
                <label for="female">Female</label>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday</label><br>
                <input type="date" name="birthday" id="birthday" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label><br>
                <textarea name="address" id="address" cols="10" rows="5"></textarea>
            </div><br>

            <button type="submit" class="form-submit">Sign Up</button>
        </form>
    </div>
</body>
</html>