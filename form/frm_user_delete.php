<?php include ("../header.php"); ?>
<?php $error_delete="" ?>;
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">Delete User</h1>
            </div>
        </div>
        <!-- ... Your content goes here ... -->
        <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Delete Registered User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" name="frm_user_delete" onsubmit="return submitForm()" action="../module/mdl_user_delete.php" onreset="return resetForm()" role="form">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter username">
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
<script>
function submitForm() {
    var a = document.forms["frm_user_delete"]["username"].value;
    if (a == "") {
        alert("username is invalid");
        return false;
    }
}
function resetForm() {
    var a = document.forms["frm_user_delete"]["username"].value;
    a="";
}
</script>
<?php include ("../footer.php"); ?>