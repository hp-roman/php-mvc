<h2>News</h2>

<?php
while ($row = mysqli_fetch_array($data['name'])) {
    echo $row['hoten'] . '<br/>';
}
?>