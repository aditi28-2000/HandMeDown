<?php
	include_once("includes/header.php");
	if($_REQUEST[user_id])
	{
		$SQL="SELECT * FROM `user` WHERE user_id = $_REQUEST[user_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#user_dob" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>User Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/user.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add User</h2>
                <div class="login-wrap">
				    <div class="form-group">
						<label for="pwd">Full Name</label>
						<input type="text" class="form-control" placeholder="Full Name" autofocus="" name="user_name" id="user_name" value="<?=$data[user_name]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">User Email</label>
						<input type="text" class="form-control" placeholder="User Email" autofocus="" name="user_email" id="user_email" value="<?=$data[user_email]?>">
				    </div>
						<div class="form-group" id="userRole">
						<label for="pwd">Select Role</label>
						<select name="user_level_id" class="form-control" placeholder="Select Package" autofocus=""/>
							<?php echo get_new_optionlist("role","role_id","role_name",$data[user_level_id]); ?>
						</select>
				    </div>
				    <div class="form-group">
						<label for="pwd">Case ID</label>
						<input type="text" class="form-control" placeholder="Case ID is your Login ID" autofocus="" name="user_username" id="user_username" value="<?=$data[user_username]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Login Password</label>
						<input type="text" class="form-control" placeholder="Login Password" autofocus="" name="user_password" id="user_password" value="<?=$data[user_password]?>">
				    </div>
						<div class="form-group">
						<label for="pwd">User Mobile</label>
						<input type="text" class="form-control" placeholder="User Mobile" autofocus="" name="user_mobile" id="user_mobile" value="<?=$data[user_mobile]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">User Date of Birth</label>
						<input type="text" class="form-control" placeholder="User Date of Birth" autofocus="" id="user_dob" name="user_dob" value="<?=$data[user_dob]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">User Address Line 1</label>
						<input type="text" class="form-control" placeholder="User Address Line 1" autofocus="" name="user_add1" id="user_date" value="<?=$data[user_add1]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">User Address Line 2</label>
						<input type="text" class="form-control" placeholder="User Address Line 2" autofocus="" name="user_add2" id="user_add2" value="<?=$data[user_add2]?>">
				    </div>
                    <div class="form-group">
						<label for="pwd">User City</label>
						<select name="user_city" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("city","city_id","city_name",$data[user_city]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">User State</label>
						<select name="user_state" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("state","state_id","state_name",$data[user_state]); ?>
						</select>
				    </div>
				    <div class="form-group">
						<label for="pwd">User Country</label>
						<select name="user_country" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("country","country_id","country_name",$data[user_country]); ?>
						</select>
				    </div>
				    <div class="form-group">
						<label for="pwd">User Picture</label>
						<input type="file" class="form-control" placeholder="User Mobile" autofocus="" name="user_image" id="user_image" value="<?=$data[user_image]?>">
						<?php if(isset($data[user_image]) && $data[user_image] != "")  {?>
						<div><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="width: 100px"></div><br>
						<?php } ?>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_user">
                <input type="hidden" name="avail_image" value="<?=$data[user_image]?>">
				<input type="hidden" name="user_id" value="<?=$data[user_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<script>
	<?php if($_SESSION['user_details']['user_level_id'] != 1)  { ?>
		$("#userRole").hide();
	<?php } ?>
</script>
<?php include_once("includes/footer.php"); ?>
