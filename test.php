<?php
$connection = mysqli_connect("127.0.0.1", "root", "biska", "temp_api");
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else {
    $counter = mysqli_query($connection, "SELECT MAX(user_id) as max FROM temp_user");
    $row = mysqli_fetch_array($counter);
    $counter_get = $row['max']+1;
    echo "$counter_get";
    $check_input = mysqli_query($connection, "INSERT INTO temp_user VALUES ($counter_get, 'Doni', 'endri', 'endri')");
    if(!$check_input){
        echo "Error input data";
    }
    mysqli_close($connection);
}
?>