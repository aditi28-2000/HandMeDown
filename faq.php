<?php
	include_once("includes/header.php");
	if($_REQUEST[faq_id])
	{
		$SQL="SELECT * FROM `faq` WHERE faq_id =$_REQUEST[faq_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#faq_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
    <!--breadcrumbs start-->
    <div class="breadcrumbs" style="background-color:white; color:black">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>FAQs Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/faq.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add FAQs</h2>
                <div class="login-wrap">
				    <div class="form-group">
						<label for="pwd">Question</label>
						<input type="text" class="form-control" required placeholder="Faq Title" autofocus="" name="faq_title" value="<?=$data[faq_title]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Answer</label>
						<textarea class="form-control" required rows="8" style="height:150px;" name="faq_description" ><?=$data[faq_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_faq">
				<input type="hidden" name="faq_id" value="<?=$data[faq_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
