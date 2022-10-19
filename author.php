<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[author_id])
	{
		$SQL="SELECT * FROM `author` WHERE author_id = $_REQUEST[author_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#author_date" ).datepicker({
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
                    <h1>Author Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/author.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Author</h2>
                <div class="login-wrap">                    
                    <div class="form-group">
						<label for="pwd">Author Name</label>
						<input type="text" class="form-control" placeholder="Author Name" autofocus="" name="author_name" id="author_name" value="<?=$data[author_name]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Email</label>
						<input type="text" class="form-control" placeholder="Email" autofocus="" name="author_email" id="author_email" value="<?=$data[author_email]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Contact</label>
						<input type="text" class="form-control" placeholder="Contact No" autofocus="" name="author_contact" id="author_contact" value="<?=$data[author_contact]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="author_description" ><?=$data[author_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_author">
				<input type="hidden" name="author_id" value="<?=$data[author_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
