<?php
    if(!isset($_POST["user"])){
        header("location: login.php?note=1");
        exit;
    }

    include_once "config.php";

    if($_POST["user"]===""){
        header("location: login.php?note=1");
            exit;
    }

    $izraz=$veza->prepare("select * from operater where email=:email");
    $izraz->execute(array("email"=>$_POST["user"]));

    $o = $izraz->fetch(PDO::FETCH_OBJ);

    ($o!=null && $o->lozinka==password_verify($_POST["lozinka"], $o->lozinka)){
//pusti dalje
    $o->lozinka="";
    $_SESSION[$idAPP, "o"]= $o;
        header("location: private/dashboard.php");
    }else{
        header("location: login.php?note=2");
    };
?>

<?php
//if submit button is not sent
if(!isset($_POST["submit"])){
    header("location: login.php?msg=1");
    exit; 
}
include_once "config.php";
//if entered username is empty
if($_POST["email"] == ""){
    header("location: login.php?msg=1");
    exit; 
}
    if(($_POST["email"] == "tokiclorna31@gmail.com" && $_POST["lozinka"] == "a")
    ||
    ($_POST["email"] == "bonny.tokic@gmail.com" && $_POST["lozinka"] == "u")){
        //let go
        $_SESSION[$idAPP."o"] = $_POST["email"]; 
        header("location: private/dashboard.php"); 
    }else {
        header("location: login.php?msg=2"); 
    }
?>