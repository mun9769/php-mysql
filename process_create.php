<?php
$conn = mysqli_connect("localhost",'root','0326','opentutorials');

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSER INTO topic (title,description,created)
                    VALUE (
                        '{$_POST['title']}',
                        '{$_POST['description']}',
                        NOW())
";

$result = mysqli_query($conn,$sql);
if ($result == false) {
    error_log(mysqli_error($conn)); // in mysql, tail -f /Application/mampstack -7./apache2/log/error_log.txt
}


?>