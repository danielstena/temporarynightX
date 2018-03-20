<?php 
    include "header.php";
    include "functions.php";
login($_SESSION["users"], $_POST["username"], $_POST["password"]);
?>

<div class="outerWrapper">
    <div class="wrapper">
        <div id="div1">
            <form action="admin.php" method="post">
                <input type="text">
                <br/>
                <input type="password">
                <br/>
                <input type="submit">
            </form>
        </div>
    </div>    
</div>