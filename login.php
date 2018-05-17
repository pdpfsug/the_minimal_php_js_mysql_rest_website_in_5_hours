<?php
require "header.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];


    if( authenticated($username, $password) ) ){
        $_SESSION['login'] = $username;
        header ("Location: index.php");
        exit;
    }
    else {
        $_SESSION['login'] ="";
    }
}
?>

<section class="section">
    <form class="container" action="" method="POST">
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success">Login</button>
            </p>
        </div>
    </form>
</section>


<?php require "footer.html"; ?>