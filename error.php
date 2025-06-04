<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    $page_title = "Error";
    $page_css = "<link rel='stylesheet' type='text/css' href='/css/error.css'>";


    include $root . "/includes/header.php";
?>

<div class="error-container">
    <p class="error-header">
        404 Not Found
    </p>
    <p class="error-message">
        Sorry, the requested page couldn't be found.
    </p>
</div>


<?php
    include $root . "/includes/footer.php";
?>