<?php
	include_once("includes/header.php");
	include_once("includes/db_connect.php");
	$cond = "";
	if($_REQUEST['book_title']) {
		$cond .= " AND book_title LIKE '%".$_REQUEST['book_title']."%'";
	}
	if($_REQUEST['book_location']) {
		$cond .= " AND book_location LIKE '%".$_REQUEST['book_location']."%'";
	}
	if($_REQUEST['book_category_id']) {
		$cond .= " AND book_category_id LIKE '".$_REQUEST['book_category_id']."'";
	}
	if($_REQUEST['book_author_id']) {
		$cond .= " AND book_author_id LIKE '".$_REQUEST['book_author_id']."'";
	}
	$SQL="SELECT * FROM `book`, `publication`, `author`, `language`,`category` WHERE category_id = book_category_id AND language_id = book_language_id AND book_publication_id = publication_id AND author_id = book_author_id ".$cond;
	$rs= mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
$(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(book_id)
{
	this.document.frm.act.value="delete_book";
	this.document.frm.submit();
}
function goToPage(book_id,book_cost)
{
	location.href = "book-details.php?act=save_item&book_id="+book_id+"&cost="+book_cost;
}
</script>
<style>
.my-table{
	background-color: #2C3E50;
	height: 52px;
	width: 94%;
	color: #ffffff;
	font-weight: bold;
}
</style>
    <!-- Sequence Modern Slider -->
		<form action="#" method="post">
    <div class="container">
      <div class="row mar-b-30">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="" style="margin:30px;">
              Check your books here
            </h1>
          </div>
          <div class="row">
          <table class="my-table">
            <tr>
              <td>Book Name : </td>
              <td><input type="text" name="book_title"></td>
              <td>Category : </td>
              <td>
							<select name="book_category_id" class="form-control" placeholder="Select Type" autofocus=""/>
								<?php echo get_new_optionlist("category","category_id","category_title",$data[book_category_id]); ?>
							</select>
							</td>
							<th><input type="submit" value="Search Book">
            </tr>
          </table>
			  <?php
				$sr_no=1;
				while($data = mysqli_fetch_assoc($rs))
				{
			  ?>
				<div class="col" style="width:250px; float:left; padding:8px; text-align:center; border:1px solid #cccccc; margin:10px">
					<h3><?=$data[book_title]?></h3>
					<img src="<?=$SERVER_PATH.'uploads/'.$data[book_image]?>" style="height:250px; width:240px; margin-botton:50px">
					<div><b>Category : </b><?=$data[category_title]?></div>
					<div><b>Language : </b><?=$data[language_title]?></div>
					<div style="margin-bottom:15px;"><b>Publication : </b><?=$data[publication_name]?></div>
          <button class="btn btn-lg btn-primary btn-block" type="button" onClick="goToPage(<?=$data[book_id]?>,<?=$data[book_cost]?>)">View Book Details</button>
				</div>
			  <?php } ?>
		  </div>
          <!--feature end-->
        </div>
      </div>
    </div>
		</form>
    <!--property end-->
    <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js"></script>
	<script type="text/javascript">
		  $(function() {

			$('#da-slider').cslider({
			  autoplay    : true,
			  bgincrement : 100
			});

		  });
	</script>
<?php include_once("includes/footer.php"); ?>
