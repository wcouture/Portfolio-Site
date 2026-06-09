<?php
$root = $_SERVER["DOCUMENT_ROOT"];
$page_title = "about";
$page_css = "<link rel='stylesheet' type='text/css' href='/css/about.css'>";
include_once $root . "/includes/header.php"
?>
<div class="about-container">
    <div class="row">
        <div class="profile-image">
            <img src="/images/profile-pic.png" alt="Headshot of William Couture">
        </div>
        <div class="about-header">
            <div class="about-name">
                William Couture
            </div>
            <div class="about-subtitle">
                Full Stack Developer | IT Specialist
            </div>
            <div class="about-bio">
            Graduating with a bachelor's of science in Computer Science and Cum Laude latin honors at Florida State University, programming has been a passion of mine since the beginning. I began my journey developing mini games with C# utilizing the Unity game engine.
            <br><br>
            Since then, I have pursued a career in web development, building and managing websites utilizing NodeJS, PHP, and C# with the .NET framework and Blazor. Throughout my career, I have been responsible for the full stack development of several websites, including the design and implementation of databases, APIs, and user interfaces. This has allowed me to develop a strong understanding of the entire web development process and the ability to work on all aspects of a project. I have also gained experience in IT support, providing technical assistance to users and troubleshooting hardware and software issues.
            <br><br>
            Application development, and programming as a whole brings me great joy. This site aims to showcase some of the projects I have chosen to work on in my free time, and give insight into my experience and background. If you have any questions or would like to connect, please feel free to reach out to me through the <a href="/contact.php">contact page</a> or click below to view my resume.
            </div>
            <div class="about-resume">
                <a class="resume-link" href="/docs/WilliamCouture.pdf">
                    View Resume
                </a>
            </div>
        </div>
    </div>
</div>
<?php 
include_once $root . "/includes/footer.php";
?>