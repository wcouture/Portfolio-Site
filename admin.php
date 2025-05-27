<?php
$root = $_SERVER["DOCUMENT_ROOT"];

$page_title = "admin";
$page_css = "<link rel='stylesheet' type='text/css' href='/css/admin.css'>";
include_once $root . "/includes/db-connect.php";

$authorized = false;
if (isset($_POST["auth_submit"])) {
    // update authorization
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $db = create_db_connection('portfolio');
    $sql = "SELECT user, pass FROM auth;";

    $result = $db->query($sql);

    $row = $result->fetch_assoc();

    $auth_user = $row["user"];
    $auth_pass = $row["pass"];

    if ($auth_pass == $password && $auth_user == $username) {
        $authorized = true;
    }
}
else if (isset($_POST["submit"])) {
    // upload portfolio entry

    $proj_title = $_POST["title"];
    $proj_desc = $_POST["description"];
    $proj_repo = $_POST["github"];
    $proj_src = $_POST["demo"];
    $proj_date = $_POST["date"];

    $db = create_db_connection('portfolio');

    $sql = 'INSERT INTO portfolio_item (title, description, repo_link, src, demo, date) VALUES ("'. $proj_title . '","'. $proj_desc . '","'. $proj_repo . '","'. $proj_src . '",1, "'.$proj_date.'");';
    $results = $db->query($sql);

    header('/');
}

if (!$authorized) {
?>
<div class="main_container">
    <form class="auth_form" method="post" action="admin.php">
        <input type="text" placeholder="username" name="user"/>
        <input type="password" placeholder="password" name="pass"/>
        <input type="submit" name="auth_submit" value="submit"/>
    </form>
</div>
<?php
} else {
?>

<div class="main_container">
    <form method="POST" action="admin.php">
        <table>
            <tr>
                <td><label>Project Title: </label></td>
                <td><input type="text" name="title" id="title"/></td>
            </tr>
            <tr>
                <td><label>Project Description: </label></td>
                <td><input type="text" name="description" id="description"/></td>
            </tr>
            <tr>
                <td><label>Project Date: </label></td>
                <td><input type="text" name="date" id="date"/></td>
            </tr>
            <tr>
                <td><label>GitHub Link: </label></td>
                <td><input type="text" name="github" id="github"/></td>
            </tr>
            <tr>
                <td><label>Demo Link: </label></td>
                <td><input type="text" name="demo" id="demo"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="submit"/></td>
            </tr>
        </table>
    </form>
</div>

<?php
}
include_once $root . "/includes/footer.php";
?>