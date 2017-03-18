<?php include ("../header.php"); ?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Adduser</h1>
                </div>
            </div>
            <!-- ... Your content goes here ... -->
            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add User
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form method="post" name="frm_user_add" onsubmit="return validateForm()" onreset="return resetForm()" action="/../module/mdl_user_add.php" role="form">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username">
                                            </div>
                                            <div class="form-group">
                                                <label>Group User</label>
                                                <select name="group" class="form-control">
                                                    <option value="read">read</option>
                                                    <option value="write">write</option>
                                                    <option value="full">full</option>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="valid_password" class="form-control" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label>Disabled</label>
                                                <select name="status" class="form-control">
                                                    <option value="yes">yes</option>
                                                    <option value="no">no</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                            <button type="reset" name="reset" value="reset" class="btn btn-default">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<script>
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
</script>
<?php include ("../footer.php"); ?>