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
                <svg viewBox="0 0 71 20" fill="none" role="img" class="icon-md mt-px h-5 w-[72px] text-default max-md-gutters:hidden" title="Expo"><path d="M9.258 6.342c.158-.23.331-.26.472-.26.14 0 .374.03.532.26 2.06 2.806 6.332 10.208 6.727 10.611.585.597 1.388.225 1.854-.452.46-.667.587-1.135.587-1.634 0-.34-6.653-12.614-7.324-13.636C11.462.248 11.252 0 10.15 0h-.825c-1.1 0-1.259.248-1.903 1.23C6.75 2.254.097 14.528.097 14.868c0 .5.127.967.587 1.634.466.677 1.269 1.05 1.854.452.395-.403 4.661-7.805 6.72-10.61zm14.941-5.237v15.344h9.35v-3.113h-6.125v-3.244h5.45V6.98h-5.45V4.218h6.125V1.105h-9.35zM46.25 16.449l-3.88-5.568 3.619-5.195h-3.662L40.54 8.23l-1.765-2.543h-3.706l3.618 5.217-3.857 5.546h3.661l2.027-2.915 2.027 2.915h3.705zm7.572-10.982c-1.482 0-2.637.614-3.378 1.732V5.686H47.37V20h3.073v-5.063c.74 1.117 1.896 1.731 3.378 1.731 2.768 0 4.97-2.52 4.97-5.611 0-3.091-2.202-5.59-4.97-5.59zm-.697 8.242c-1.504 0-2.681-1.14-2.681-2.652 0-1.49 1.177-2.653 2.68-2.653 1.483 0 2.681 1.184 2.681 2.653 0 1.49-1.198 2.652-2.68 2.652zm12.188-8.242c-3.16 0-5.558 2.411-5.558 5.612 0 3.2 2.397 5.59 5.557 5.59 3.139 0 5.558-2.39 5.558-5.59 0-3.2-2.42-5.612-5.558-5.612zm0 2.96c1.438 0 2.55 1.117 2.55 2.652 0 1.49-1.112 2.63-2.55 2.63-1.46 0-2.55-1.14-2.55-2.63 0-1.535 1.09-2.653 2.55-2.653z" fill="currentColor"></path></svg>
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