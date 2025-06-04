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

    <div class="dev-icons">
        <div class="icon-section">
            <p class="icon-section-label">Web Development</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jquery/jquery-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/p5js/p5js-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/socketio/socketio-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />  
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/wordpress/wordpress-plain.svg" />
            </div>
        </div>

        <div class="icon-section">
            <p class="icon-section-label">Cross-Platform Development</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/dotnetcore/dotnetcore-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/blazor/blazor-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/csharp/csharp-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" />
            </div>
        </div>

        <div class="icon-section">
            <p class="icon-section-label">Servers & Datas</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/apache/apache-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mariadb/mariadb-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" />
            </div>
        </div>

        <div class="icon-section">
            <p class="icon-section-label">Platforms</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/apple/apple-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cloudflare/cloudflare-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/ubuntu/ubuntu-original.svg" />
            </div>
        </div>

        <div class="icon-section">
            <p class="icon-section-label">Development Environments</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vim/vim-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unity/unity-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/gitlab/gitlab-original.svg" />
            </div>
        </div>

        <div class="icon-section">
            <p class="icon-section-label">Scripting</p>
            <div class="icons">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" />
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg" />
            </div>
        </div>
        
    </div>

    <p class="projects-header">Recent Projects</p>
    <div class="project-collection">
        <?php while($row = $results->fetch_assoc()) { ?>
        <div class="project-card">
            <div class="project-image-container">
                <img src="/images/projects/<?php echo str_replace(" ", "-", $row["title"]);?>.png" alt="project image" class="project-image">
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