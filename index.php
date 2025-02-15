<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    $page_title = "explore";
    $page_css = "<link rel='stylesheet' type='text/css' href='/css/home.css'>";


    include $root . "/includes/header.php";
    include $root . "/includes/db-connect.php";

    $db = create_db_connection('portfolio');
    $sql = "SELECT * FROM portfolio_item;";
    $results = $db->query($sql);
    
    if ($results->num_rows <= 0) {
        echo "Failed retrieving portfolio data";
    }

    $items = array();
?>
    <script>
        const portfolio_items = [];
        var item;

        <?php 
            while ($item = $results->fetch_assoc()) {
                array_push($items, $item);
        ?>

        item = {
            "title": <?php echo $title; ?>,
            "description": <?php echo $description; ?>,
            "repo_link": <?php echo $repo_link; ?>,
            "src": <?php echo $src; ?>,
            "demo": <?php echo $demo; ?>
        }
        portfolio_items.push(item);

        <?php
            }
            ?>
<?php
?>
    </script>
<div class="explore-container">
    <div class="left-column"></div>
    <div class="middle-column">
        <div class="page-title">
            Explore Development Projects
        </div>

        <div class="project-select-container">
        <?php 
            $i = 1;
            while ($row = array_pop($items)) {
                echo '<div id="'. $i .'" onclick="select_project(this)" class="select-option active">' . $row["title"] . '</div>';
                $i++;
            }
        ?>
        </div>
        <div id="iframe-container" class="iframe-container">
            <iframe id="project-iframe" class="project-iframe" src="https://fo-stats.willc-dev.net" title="Project Demo Iframe"></iframe>
        </div>
        <div class="project-title">
            Face Off Stats Website - <a href="https://github.com/wcouture/FO-Stats-PHP/" class="repo-link">GitHub Repo</a>
        </div>
        <div class="project-description">
            This is where the description will go.
        </div>
    </div>
    <div class="right-column"></div>
</div>
<script src="/js/explore-select-buttons.js"></script>
<?php
include_once $root . "/includes/footer.js";
?>
