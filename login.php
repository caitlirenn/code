<?php
include 'function.php';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $string_login = file_get_contents('login.json');
    $user = json_decode($string_login, true);
    if($user['email'] == $_POST['email'] && $_POST['password'] == $user['password']){
$_SESSION['isLoggedIn'] = true;
        header('Location: /index.php');
        exit;
    }
    else{
        die('Sorry you password do not match');
    }
}
?>
<html lang="en">
<?php $title = 'Contacts Home'; include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<form class="form-signin" method="post">

    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">


    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>

<?php include 'includes/footer.php'; ?>

</body>
</html>