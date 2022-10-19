<?php
	include_once("includes/header.php");
	if($_REQUEST[request_id])
	{
		$SQL="SELECT * FROM `request` WHERE request_id = $_REQUEST[request_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#request_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
    <!--breadcrumbs start-->
		<div style="background-color:white; color:black" class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-4">
					</div>
				</div>
			</div>
			</div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/request.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Request New Books/Add Query</h2>
				<?php if($_REQUEST['msg']) { ?>
				<div class="alert alert-success fade in" style="margin:10px;">
					<strong><?=$_REQUEST['msg']?></strong>
				</div>
				<?php } ?>

                <div class="login-wrap">
				    <div class="form-group">
						<label for="pwd">Book Title</label>
						<input type="text" class="form-control" placeholder="Request Title" autofocus="" name="request_title" value="<?=$data[request_title]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Book Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="request_description" ><?=$data[request_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_request">
				<input type="hidden" name="request_id" value="<?=$data[request_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
