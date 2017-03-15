<?php
include ("../session.php");
include ("../header.php");

$query_check = intval($_GET['query_check']);

$sql_user_delete="SELECT (user_id,username,u_group) FROM temp_user WHERE username = '".$query_check."'";
$sql_get_row_info = mysql_fetch_assoc($sql_user_delete);

$ID = $sql_get_row_info['user_id'];
$User = $sql_get_row_info['username'];
$Group = $sql_get_row_info['u_group'];


echo "<div class="table-responsive">
      <table class="table table-hover"><table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Group</th>
        </tr>
        <tr>
            <td> . $ID . </td>
            <td> . $User . </td>
            <td> . $Group . </td>
        </tr>
    </table>
    </div>";
mysql_close($connection);
include ("../footer.php");
?>