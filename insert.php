<?php
$conn = mysqli_connect("localhost",'root','0326','opentutorials');

$sql = '
INSERT INTO topic (title,description, created)
            VALUE ("MYSQL","MYSQL is ...", NOW())
';
echo $sql.'<br>';

$result = mysqli_query($conn,$sql);

if ($result == false) {
    echo mysqli_error($conn);
}

// echo mysqli_query($conn, $sql);

?>