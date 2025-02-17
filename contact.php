<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$root = $_SERVER["DOCUMENT_ROOT"];
$page_title = "contact";
$page_css = "<link rel='stylesheet' type='text/css' href='css/contact.css'>";
include_once $root . "/includes/header.php";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"] . "\nFROM: " . $email;

    $date = date('y-m-d-h:m:s');
    $filename = $root . "/emails/email_" . $date . '.txt';

    $email_file = fopen($filename, 'w');

    $output = "Email: " .  $email . "\nSubject: " . $subject . "\nMessage: " . $message; 
    fwrite($email_file, $output);
    fclose($email_file);

    $message_sent = true;
}

?>

<div class="contact-container">
    <div class="row">
        <div class="contact-form">
            <form name="contact-form" action="" method="POST">
                <table class="contact-form-table">
                    <tr>
                        <td class="form-label" width="100px">Email:</td>
                        <td class="form-input" width="auto"><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td class="form-label">Subject:</td>
                        <td class="form-input"><input type="text" name="subject" id="subject"></td>
                    </tr>
                    <tr>
                        <td class="form-label">Message:</td>
                        <td class="form-input"><textarea name="message" id="message"></textarea></td>
                    </tr>
                    <tr>
                        <td class="form-submit">
                            <input type="submit" name="submit" id="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            <?php if(isset($message_sent) && $message_sent) { ?>
            <div class="message-sent-box">
                Message sent successfully!
            </div>
            <?php } ?>
        </div>

        <div class="contact-info-container">
            <div class="contact-header">
                Contact Me!
            </div>
            <div class="direct-contact">
                wcouture@fsu.edu | 802.734.8950
            </div>
            <div class="category-header">
                LinkedIn
            </div>
            <div class="category-info">
                <a href="https://www.linkedin.com/in/wcouture/">https://www.linkedin.com/in/wcouture/</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once $root . "/includes/footer.php";
?>