<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[category_id])
	{
		$SQL="SELECT * FROM `category` WHERE category_id = $_REQUEST[category_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#category_date" ).datepicker({
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
                    <h1>Category Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/category.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Category</h2>
                <div class="login-wrap">                    
				    <div class="form-group">
						<label for="pwd">Category Title</label>
						<input type="text" class="form-control" placeholder="Category Title" autofocus="" name="category_title" value="<?=$data[category_title]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Category Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="category_description" ><?=$data[category_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_category">
				<input type="hidden" name="category_id" value="<?=$data[category_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
