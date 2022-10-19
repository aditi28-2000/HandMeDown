<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[language_id])
	{
		$SQL="SELECT * FROM `language` WHERE language_id = $_REQUEST[language_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#language_date" ).datepicker({
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
                    <h1>Book Language Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/language.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Book Language</h2>
                <div class="login-wrap">                    
				    <div class="form-group">
						<label for="pwd">Language Title</label>
						<input type="text" class="form-control" placeholder="Language Title" autofocus="" name="language_title" value="<?=$data[language_title]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Language Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="language_description" ><?=$data[language_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_language">
				<input type="hidden" name="language_id" value="<?=$data[language_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
