<?php
include "partials/header.php";
    var_dump("Berhasil dengan data = ", $state->fetchAll(PDO::FETCH_ASSOC));

    // if(empty($_GET['url'])){
    //     include "verified/login.inc.php";
    // }else{
        
    //     // Route
    //     if($_GET['url'] == "user"){
    //         include "landingpage/landing.inc.php";
    //     }else if($_GET['url'] == "admin"){
    //         include "Admin/admin.inc.php";
    //     }

    // }    
// Footer
include "partials/footer.php";