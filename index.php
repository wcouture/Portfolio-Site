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

<section class="home-container">
    <p class="page-title">Welcome to WillC-Dev</p>
    <p class="page-subtitle">A portfolio of development projects</p>

    <div class="project-collection">
        <?php while($row = $results->fetch_assoc()) { ?>
        <div class="project-card">
            <div class="project-image-container">
                <img src="<?php echo $row["image"];?>" alt="door image" class="project-image">
            </div>
            <div class="project-information-container">
                <a href="<?php echo $row["src"];?>" class="project-title"><?php echo $row["title"];?></a>
                <p class="project-date"><?php echo $row["date"];?></p>
                <a href="<?php echo $row["repo_link"]; ?>" class="project-link">GitHub Repo</a>
                <p class="project-details"><?php echo $row["description"]; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>

</section>


<?php
    include_once $root . "/includes/footer.php";
?>