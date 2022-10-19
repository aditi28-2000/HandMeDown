<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[message_id])
	{
		$SQL="SELECT * FROM `message` WHERE message_id = $_REQUEST[message_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#message_date" ).datepicker({
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
                    <h1>Message to User</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/message.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Message To Book Admin</h2>
				<?php if($_REQUEST['msg']) { ?>
				<div class="alert alert-success fade in" style="margin:10px;">
					<strong><?=$_REQUEST['msg']?></strong>
				</div>
				<?php } ?>
				
                <div class="login-wrap">                    
				    <div class="form-group">
						<label for="pwd">Message Subject</label>
						<input type="text" class="form-control" placeholder="Message Title" autofocus="" name="message_title" value="<?=$data[message_title]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Message Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="message_description" ><?=$data[message_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_message">
				<input type="hidden" name="message_id" value="<?=$data[message_id]?>">
				<input type="hidden" name="user_id" value="<?=$_REQUEST[user_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
