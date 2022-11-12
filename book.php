<?php
	include_once("includes/header.php");
	if($_REQUEST[book_id])
	{
		$SQL="SELECT * FROM `book` WHERE book_id = $_REQUEST[book_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#book_dob" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
    <!--breadcrumbs start-->
    <div style="background-color:white" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1 style="color:black">List your books here</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form name="listbook" action="lib/book.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px" onsubmit="return validateForm()">
                <h2 class="form-signin-heading">Add New Book</h2>
                <div class="login-wrap">
				    <div class="form-group">
							<label for="pwd">Book Name</label>
							<input type="text" required class="form-control" placeholder="Book Name" autofocus="" name="book_title" id="book_title" value="<?=$data[book_title]?>">
				    </div>
						<div class="form-group">
							<label for="pwd">Book Author</label>
							<select name="book_author_id" required class="form-control" placeholder="Select Author" autofocus=""/>
								<?php echo get_new_optionlist("author","author_id","author_name",$data[book_author_id]); ?>
							</select>
				    </div>
				    <div class="form-group">
							<label for="pwd">Book Publication</label>
							<select name="book_publication_id" required class="form-control" placeholder="Select Publication" autofocus=""/>
								<?php echo get_new_optionlist("publication","publication_id","publication_name",$data[book_publication_id]); ?>
							</select>
				    </div>
				    <div class="form-group">
							<label for="pwd">Book Category</label>
							<select name="book_category_id" required class="form-control" placeholder="Select Type" autofocus=""/>
								<?php echo get_new_optionlist("category","category_id","category_title",$data[book_category_id]); ?>
							</select>
				    </div>
				    <div class="form-group">
							<label for="pwd">Book Language</label>
							<select name="book_language_id" required class="form-control" placeholder="Select Laguage" autofocus=""/>
								<?php echo get_new_optionlist("language","language_id","language_title",$data[book_language_id]); ?>
							</select>
				    </div>
				    <div class="form-group">
							<label for="pwd">Book ISBN No</label>
							<input type="text" required class="form-control" placeholder="Book ISBN No" autofocus="" name="book_isbn" id="book_isbn" value="<?=$data[book_isbn]?>">
				    </div>
				    <div class="form-group">
							<label for="pwd">Purchase Date</label>
							<input type="date" value="2017-06-01" required class="form-control" placeholder="Purchase Date" autofocus="" name="book_edition" id="book_edition" value="<?=$data[book_edition]?>">
				    </div>
				    <div class="form-group">
							<label for="pwd">Book Edition Year</label>
							<input type="text" required class="form-control" placeholder="Book Edition Year" autofocus="" id="book_edition_year" name="book_edition_year" value="<?=$data[book_edition_year]?>">
				    </div>
				    <div class="form-group">
							<label for="pwd">No. Of Copies</label>
							<input type="text" required class="form-control" placeholder="No of Copies" autofocus="" name="book_number_copies" id="book_number_copies" value="<?=$data[book_number_copies]?>">
				    </div>
				    <div class="form-group">
							<label for="pwd">Book Condition</label>
							<input type="text" required class="form-control" placeholder="Book Condition" autofocus="" name="book_volume" id="book_volume" value="<?=$data[book_volume]?>">
				    </div>
						<div class="form-group">
							<label for="pwd">Book Price</label>
							<input type="text" required class="form-control" placeholder="Book Price" autofocus="" name="book_price" id="book_price" value="<?=$data[book_price]?>">
				    </div>
            <div class="form-group">
							<label for="pwd">Book Location</label>
							<input type="text" required class="form-control" placeholder="Book Location" autofocus="" name="book_location" id="book_location" value="<?=$data[book_location]?>">
				    </div>
            <div class="form-group">
							<label for="pwd">Book Picture</label>
							<input type="file" required class="form-control" placeholder="Book Mobile" autofocus="" name="book_image" id="book_image" value="<?=$data[book_image]?>">
							<?php if(isset($data[book_image]) && $data[book_image] != "")  {?>
							<div><img src="<?=$SERVER_PATH.'uploads/'.$data[book_image]?>" style="width: 100px"></div><br>
							<?php } ?>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_book">
                <input type="hidden" name="avail_image" value="<?=$data[book_image]?>">
				<input type="hidden" name="book_id" value="<?=$data[book_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
		<script>
		function validateForm() {
		  let x = document.forms["listbook"]["book_title"].value;
			var content = /^[0-9a-zA-Z-+()]+$/;
		  if (!x.match(content)) {
		    alert("Fill in correct Book name");
		    return false;
			}
			let y = document.forms["listbook"]["book_isbn"].value;
			var regex = /^[0-9-+()]*$/;
			if (!y.match(regex)) {
		    alert("Fill in correct ISBN");
		    return false;
       }
			 let z = document.forms["listbook"]["book_edition_year"].value;
 			var regex2 = /^[0-9]*$/;
 			if (!z.match(regex2)) {
 		    alert("Fill in correct Edition Year");
 		    return false;
        }
				let z1 = document.forms["listbook"]["book_number_copies"].value;
  			if (!z1.match(regex2)) {
  		    alert("Fill in correct Number of Copies");
  		    return false;
         }
		}
		</script>
<?php include_once("includes/footer.php"); ?>
