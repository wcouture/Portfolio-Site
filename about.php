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
                Web Developer | IT Specialist
            </div>
            <div class="about-bio">
            Graduating with a bachelor's of science in Computer Science and Cum Laude latin honors at Florida State University, programming has been a passion of mine since the beginning developing small video games in C# using the Unity game enigne.
            <br><br>
            More recently, I have branched into web development, designing a modern responsive website from the ground up utilizing NodeJS, and now with my current position as a PHP/WordPress developer and web technician at <a href="https://wfsu.org" target="_blank">WFSU Public Media</a>. My relentless drive for improvement and passion for programming has motivated me to develop various side projects to continually grow my skillset. The projects focus on data management, app development, education, and game development. 
            <br><br>
            This site aims to highlight several of my recent finished projects.
            </div>
            <div class="about-resume">
                <a class="resume-link" href="/docs/william-couture-resume.pdf">
                    View Resume
                </a>
            </div>
        </div>
    </div>
</div>
<?php 
include_once $root . "/includes/footer.php";
?>