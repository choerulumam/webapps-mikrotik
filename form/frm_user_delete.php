<?php include ("../header.php"); ?>
<?php $error_delete="" ?>;
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Delete User</h1>
                </div>
            </div>
            <!-- ... Your content goes here ... -->
            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Delete Registered User
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form method="post" name="frm_user_delete" action="<?php echo $_SERVER['PHP_SELF']; ?>" onreset="return resetForm()" role="form">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username" value="">
                                                <?php echo "<p class='text-danger'>$error_delete</p>";?>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                            <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php
include ("../db_connect.php");
include ("../module/api_connect_2.php");
if(isset($_POST['submit'])) 
{ 
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
$ctr_loop=0;
    while ($ctr_loop < $arr_index){
        if (($u_user[$ctr_loop]) == (isset($_POST['username'])))
        {
            echo '
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <!-- start panel-heading -->
                                    User Info
                        </div> <!-- end panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Group</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                         <tr>';
                                         echo "<td>$ctr_loop</td>";
                                         echo "<td>$u_user[$ctr_loop]</td>";
                                         echo "<td>$u_group[$ctr_loop]</td>";
                                         echo '</tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            $error_delete = '<div class="alert alert-danger">user not found</div>';
            $ctr_loop=$ctr_loop + 1;
            break;
        }
    }
} else {
    $error_delete ='<div class="alert alert-danger">username invalid</div>';
    mysql_close($connection);
}

?>

<script>    
function resetForm() {
    var a = document.forms["frm_user_add"]["username"].value;
    a="";
}
</script>
<?php include ("../footer.php"); ?>