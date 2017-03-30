<?php include ("header.php"); ?>
<?php include ("db_connect.php"); ?>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Welcome <?php echo $login_session; ?>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $query_list = mysqli_query($connection,"SELECT * FROM temp_user WHERE username='$login_session'");
                            $row = mysqli_fetch_array($query_list);
                            $row_uid = $row['user_id'];
                            $row_uname = $row['username'];
                            $row_group = $row['u_group'];
                        ?>
                        <p>This is your basic information</p>
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>uid</th>
                                    <th>Username</th>
                                    <th>Group</th>
                                </tr>
                            </thead>
                            <tbody><?php
                             echo "<tr><td>$row_uid</td>";
                             echo "<td>$row_uname</td>";
                             echo "<td>$row_group</td></tr>";
                            ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        For more action click <a href="#">here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ("footer.php"); ?>