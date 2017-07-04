<?php include ("../header.php"); ?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hotspot</h1>
                </div>
            </div>
            <!-- ... Your content goes here ... -->
            <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Hotspot Menu
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Summary</a>
                                    </li>
                                    <li><a href="#profile" data-toggle="tab">Profiles</a>
                                    </li>
                                    <li><a href="#messages" data-toggle="tab">User</a>
                                    </li>
                                    <li><a href="#settings" data-toggle="tab">Active</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <h4>Hotspot Summary</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <h4>Hotspot Profiles</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <h4>Hotspot User</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="settings">
                                        <h4>Hotspot Active User</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
            </div>
        </div>       
</div>
<!--<script>
function validateForm() {
    var a = document.forms["frm_user_add"]["username"].value;
    var b = document.forms["frm_user_add"]["group"].value;
    var c = document.forms["frm_user_add"]["password"].value;
    var d = document.forms["frm_user_add"]["valid_password"].value;
    if (a == "") {
        alert("Name must be filled out");
        return false;
    } else if (b == "") {
        alert("group must be choosen");
        return false;
    } else if (c == "") {
        alert("password must be filled out");
        return false;
    } else if (d == "") {
        alert("Confirm Password must be filled out");
    } else if (c != d){
        alert("password invalid");
        return false;
    }
}
    
function resetForm() {
    var a = document.forms["frm_user_add"]["username"].value;
    var b = document.forms["frm_user_add"]["group"].value;
    var c = document.forms["frm_user_add"]["password"].value;
    var d = document.forms["frm_user_add"]["valid_password"].value;
    var e = document.forms["frm_user_add"]["status"].value;
    a="";
    b="";
    c="";
    d="";
    e="";
}
</script>-->
<?php include ("../footer.php"); ?>