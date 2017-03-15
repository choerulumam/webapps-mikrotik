<?php
include ("../header.php");
include ("api_connect_2.php");
$util->setMenu('/user');
$u_user  = array();
$u_group = array();
$u_log   = array();
$ctr=0;
foreach ($util->getAll() as $item) {
    $u_user[$ctr]  = $item->getProperty('name');
    $u_group[$ctr] = $item->getProperty('group');
    $u_log[$ctr]   = $item->getProperty('last-logged-in');
    $ctr++;
    $arr_index=$ctr;
}
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registered User
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Group</th>
                                    <th>Last Loggin</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $ctr_loop=0; ?>
                            <?php while ($ctr_loop < $arr_index){
                             echo "<tr><td>$ctr_loop</td>";
                             echo "<td>$u_user[$ctr_loop]</td>";
                             echo "<td>$u_group[$ctr_loop]</td>";
                             echo "<td>$u_log[$ctr_loop]</td></tr>";
                             $ctr_loop++;
                             }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<?php include ("../footer.php"); ?>