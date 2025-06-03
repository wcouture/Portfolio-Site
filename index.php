<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    $page_title = "home";
    $page_css = "<link rel='stylesheet' type='text/css' href='/css/home.css'>";


    include $root . "/includes/header.php";
    include $root . "/includes/db-connect.php";

    $db = create_db_connection('portfolio');
    $sql = "SELECT * FROM portfolio_item ORDER BY id DESC;";
    $results = $db->query($sql);

    $item = null;
    
    if ($results->num_rows <= 0) {
        echo "Failed retrieving portfolio data";
    }
?>

Home page

<?php
    include_once $root . "/includes/footer.php";
?>