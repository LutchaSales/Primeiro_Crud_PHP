<?php 

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    updateUserAction($conn, $_POST["id"])

?>