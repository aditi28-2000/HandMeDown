<?php
	include_once("includes/header.php");
	if($_REQUEST[book_id])
	{
		$SQL="SELECT * FROM `book`, `publication`, `author`,`category`,`user` WHERE user_id = book_user_id AND category_id = book_category_id AND book_publication_id = publication_id AND author_id = book_author_id  AND book_id = $_REQUEST[book_id]";
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
function openUrl(url) {
	location.href = url;
}
</script>
<style>
th {
	background-color:#34495e;
	color:#FFFFFF;
	padding:5px;
	border:1px solid #FFFFFF;
}
.book-details td {
	padding-left:8px;
	border:1px solid #000000;
}
</style>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Book Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/book.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Book Details of <?=$data[book_title]?></h2>
				<?php if($_REQUEST['msg']) { ?>
					<div class="alert alert-success fade in" style="margin:10px;">
						<strong><?=$_REQUEST['msg']?></strong>
					</div>
				<?php } ?>
                <div class="login-wrap">
					<table style="width:100%" cellspacing="5">
						<tr>
							<td style="vertical-align:top; width:50%">
								<div><img src="<?=$SERVER_PATH.'uploads/'.$data[book_image]?>" style="width: 90%"></div><br>
							</td>
							<td style="vertical-align:top;">
							<table style="width:100%;" class="book-details">
								<tr>
									<th style="width:40%">Book Name</th>
									<td style="width:60%"><?=$data[book_title]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Author</th>
									<td style="width:60%"><?=$data[author_name]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Publication</th>
									<td style="width:60%"><?=$data[publication_name]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Category</th>
									<td style="width:60%"><?=$data[category_title]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Condition</th>
									<td style="width:60%"><?=$data[book_volume]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book ISBN No.</th>
									<td style="width:60%"><?=$data[book_isbn]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Purchase Date</th>
									<td style="width:60%"><?=$data[book_edition]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Edition Year</th>
									<td style="width:60%"><?=$data[book_edition_year]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Price.</th>
									<td style="width:60%"><?=$data[book_price]?></td>
								</tr>
								<tr>
									<th style="width:40%">Book Location</th>
									<td style="width:60%"><?=$data[book_location]?></td>
								</tr>
								<tr>
									<th colspan="2">Uploaded By User</th>
								</tr>
								<tr>
									<td colspan="2">
									<table style="width:100%">
										<tr>
											<td><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="heigh:50px; width:50px"></td>
											<td>
												Name : <?=$data['user_name']?><br>
												Mobile : <?=$data['user_mobile']?><br>
												Email : <?=$data['user_email']?><br>
												Address : <?=($data['user_add1']." ".$data['user_add2'])?><br>
												<input type="button" value="Send Message" style="margin:10px;" onClick="openUrl('message.php?act=save_message&user_id=<?=$data['user_id']?>')">&nbsp;
											</td>
										</tr>
									</table>
									</td>
								</tr>
							</table>
							<?php if($_SESSION['login'] != 1) {?>
								<div style="text-align:right; padding-top:20px;"><input type="button" onClick="openUrl('login.php?msg=Login to your account to request the book.')" value="Login to Request This Book"></div>
							<?php } else { ?>
								<div style="text-align:right; padding-top:20px;"><input type="button" onClick="openUrl('lib/book_request.php?act=save_request&book_id=<?=$data['book_id']?>')" value="Request This Book"></div>
							<?php } ?>
				</td>
						</tr>
					</table>
                <input type="hidden" name="act" value="save_book">
                <input type="hidden" name="avail_image" value="<?=$data[book_image]?>">
				<input type="hidden" name="book_id" value="<?=$data[book_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
