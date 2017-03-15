<?php include ("../header.php"); ?>
<script>
$(document).ready(function(){
    $("#submit").click(function(){
        var name = $("#username").val();
        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name1='+ name ;
        if(name=='')
        {   
            alert("Please Fill All Fields");
        } else {
            // AJAX Code To Submit Form.
            $.ajax({
            type: "POST",
            url: "frm_user_delete_getuser.php",
            data: dataString,
            cache: false,
            success: function(result){
                    alert(result);
            }
            });
        }
        return false;
    });
});
</script>

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
                                        <form name="frm_user_add" onreset="return resetForm()" role="form">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username" value="">
                                            </div>
                                            <button type="submit" id="submit" class="btn btn-default">Submit</button>
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
function resetForm() {
    var a = document.forms["frm_user_add"]["username"].value;
    a="";
}
</script>
<?php include ("../footer.php"); ?>