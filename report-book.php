<?php
	include_once("includes/header.php");
	include_once("includes/db_connect.php");
	if($_SESSION['user_details']['user_level_id'] == 1) {
		$SQL="SELECT * FROM `user`,`book`, `publication`, `author` WHERE book_publication_id = publication_id AND author_id = book_author_id AND book_user_id = user_id ";
	} else {
		$SQL="SELECT * FROM `user`,`book`, `publication`, `author` WHERE book_publication_id = publication_id AND author_id = book_author_id AND book_user_id = user_id AND user_id = ".$_SESSION['user_details']['user_id'];
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
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
</script>

    <!--breadcrumbs start-->
    <div style="background-color:white; color:black" class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              All Available Book Report
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!--breadcrumbs end-->

 <div class="container">
		 <?php if($_REQUEST['msg']) { ?>
		  <div class="alert alert-success fade in" style="margin:10px;">
			  <strong><?=$_REQUEST['msg']?></strong>
		  </div>
		  <?php } ?>
		<div class="row">
		  <div class="col-lg-12">
			<form name="frm" action="lib/book.php" method="post">
			  <section class="panel">

				  <table class="table table-striped table-advance table-hover" style="color:#000000">
				   <tbody>
					  <tr class="bg-primary">
						<th style="background-color:#34495e; color:#FFFFFF;">Sr. No.</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Image</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Name</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Uploaded By</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Author</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Publication</th>
						<th style="background-color:#34495e; color:#FFFFFF;">ISBN</th>
						<th style="background-color:#34495e; color:#FFFFFF;"><i class="icon_cogs"></i> Action</th>
					  </tr>
					  <?php
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
						<td style="text-align:center; font-weight:bold;"><?=$sr_no++?></td>
						<td><img src="<?=$SERVER_PATH.'uploads/'.$data[book_image]?>" style="heigh:50px; width:50px"></td>
						<td><?=$data[book_title]?></td>
						<td><?=$data[user_name]?></td>
						<td><?=$data[author_name]?></td>
						<td><?=$data[publication_name]?></td>
						<td><?=$data[book_isbn]?></td>
						<td>
						  <div class="btn-group">
						     <a href="book.php?book_id=<?php echo $data[book_id] ?>" class="btn btn-success">Edit</a>
                  <a class="delete-dialog btn btn-danger" data-id="<?php echo $data[book_id] ?>" data-toggle="modal" href="#myModal-2">Delete</a>
						  </div>
						  </td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="book_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>

    <!--footer start-->
		<?php include_once("includes/footer.php"); ?>
    <!--small footer end-->
  </body>
</html>
