<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    $page_title = "explore";
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
<script>
    var portfolio_items = [];
    var item;
    </script>

<div class="explore-container">
    <div class="left-column"></div>
    <div class="middle-column">
        <div class="page-title">
            Explore Development Projects
        </div>

        <div class="project-select-container">
        <?php 
            $i = 0;
            while ($row = $results->fetch_assoc()) { 
                if ($i == 0) {
                    $item = $row;
                }
                ?>
                <div id="<?php echo $i; ?>" onclick="select_project(this)" class="select-option"><?php echo $row["title"]; ?>
                    <script>
                        item = {
                            "title": "<?php echo $row["title"]; ?>",
                            "description": "<?php echo $row["description"]; ?>",
                            "repo_link": "<?php echo $row["repo_link"]; ?>",
                            "src": "<?php echo $row["src"]; ?>",
                        }
                        portfolio_items.push(item);
                        </script>
                </div>
            <?php
                $i++;
            }
        ?>
        </div>
        <div id="project-details-container" class="project-details">
            <a href="<?php echo $item["src"]?>" target="blank" id="project-title" class="project-title">
                <?php echo $item["title"]?>
            </a>
            <a id="repo-link" target="blank" href="<?php echo $item["repo_link"]?>" class="repo-link">GitHub Repo</a><br>
            <div id="project-description" class="project-description">
                <?php echo $item["description"]?>
            </div>
        </div>
        <div id="iframe-container" class="iframe-container">
            <iframe id="project-iframe" class="project-iframe" src="<?php echo $item["src"]?>" title="Project Demo Iframe"></iframe>
        </div>
        
    </div>
    <div class="right-column"></div>
</div>
<script src="/js/explore-select-buttons.js"></script>
<?php
include_once $root . "/includes/footer.php";
?>
