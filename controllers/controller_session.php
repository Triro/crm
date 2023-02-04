<?PHP

if(!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['loged-in'])) {
    header("Location: login.php");
}

?>