<?php include ("header.php"); ?>
<?php include ("db_connect.php"); ?>
<?php include ("module/api_connect_1.php"); ?>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="col-lg-4"> <!-- start panel user info -->
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
            </div> <!-- end panel user info -->
            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        System Information
                    </div>
                    <div class="panel-body">
                        <?php 
                        $ARRAY = $API->comm("/system/resource/print");
                        $first = $ARRAY['0'];
                        $memperc = ($first['free-memory']/$first['total-memory']);
                        $hddperc = ($first['free-hdd-space']/$first['total-hdd-space']);
                        $mem = ($memperc*100);
                        $hdd = ($hddperc*100);
                        $up = $first['uptime'];
                        $pl = $first['platform'];
                        $bn = $first['board-name'];
                        $cu = $first['cpu'];
                        $cl = $first['cpu-load'];
                        $cf = $first['cpu-frequency'];
                        $tm = $first['total-memory']/1000;
                        $fm = $first['free-memory'];
                        $td = $first['total-memory'];
                        $fd = $first['free-hdd-space'];
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Uptime</th>
                                        <?php echo "<td>$up</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Platform</th>
                                        <?php echo "<td>$pl</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Board Name</th>
                                        <?php echo "<td>$bn</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>CPU</th>
                                        <?php echo "<td>$cu</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>CPU Frequency</th>
                                        <?php echo "<td>$cf</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>CPU Load</th>
                                        <?php echo "<td>$cl</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Total Memory</th>
                                        <?php echo "<td>". number_format($tm,2) . " Kb";"% </td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Free Memory</th>
                                        <?php echo "<td>$fm</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Total Disk</th>
                                        <?php echo "<td>$td</td>"; ?>
                                    </tr>
                                    <tr>
                                        <th>Free Disk</th>
                                        <?php echo "<td>$fd</td>"; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ("footer.php"); ?>