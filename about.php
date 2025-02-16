<?php
$root = $_SERVER["DOCUMENT_ROOT"];
$page_title = "about";
$page_css = "<link rel='stylesheet' type='text/css' href='/css/about.css'>";
include_once $root . "/includes/header.php"
?>
<div class="about-container">
    <div class="row">
        <div class="profile-image">
            <img src="/images/profile.jpeg" alt="Headshot of William Couture">
        </div>
        <div class="about-header">
            <div class="about-name">
                William Couture
            </div>
            <div class="about-subtitle">
                Web Developer | IT Specialist
            </div>
            <div class="about-bio">
            Graduating with a bachelor's of science in Computer Science and Cum Laude latin honors at Florida State University, my programming passion began years before, in high school, developing games with the Unity game engine. 
            <br><br>
            I have since branched into web development, redesigning a local company's website as well as configuring local deployment utilizing NodeJS, and now my current position as a PHP web developer and technician for WFSU Public Media. My drive for continuous improvement and passion for programming has motivated me to develop various side projects relating to data management and game development. 
            <br><br>
            This site aims to highlight several of my recent finished projects.
            </div>
        </div>
    </div>
</div>
<?php 
include_once $root . "/includes/footer.js";
?>