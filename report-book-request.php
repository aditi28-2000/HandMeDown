<?php
	include_once("includes/header.php");
	include_once("includes/db_connect.php");
	$SQL="SELECT * FROM `city`,`state`,`country`,`book_request`,`user`, `book` WHERE user_city = city_id AND user_state = state_id AND user_country = country_id AND book_id = br_book_id AND br_user_id =  user_id AND br_book_id IN (SELECT book_id FROM book WHERE book_user_id = ".$_SESSION['user_details']['user_id'].")";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>

<script>
$(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(user_id)
{
	this.document.frm.act.value="delete_user";
	this.document.frm.submit();
}
</script>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              All Book Requests
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
			<form name="frm" action="lib/user.php" method="post">
			  <section class="panel">

				  <table class="table table-striped table-advance table-hover" style="color:#000000">
				   <tbody>
					  <tr class="bg-primary">
						<th style="background-color:#34495e; color:#FFFFFF;">Sr. No.</th>
						<th style="background-color:#34495e; color:#FFFFFF;">User Image</th>
						<th style="background-color:#34495e; color:#FFFFFF;">User Name</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Book Image</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Request for Book</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Mobile</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Email</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Full Address</th>
					  </tr>
					  <?php
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
						<td style="text-align:center; font-weight:bold;"><?=$sr_no++?></td>
						<td><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="heigh:50px; width:50px"></td>
						<td><?=$data[user_name]?></td>
						<td><img src="<?=$SERVER_PATH.'uploads/'.$data[book_image]?>" style="heigh:50px; width:50px"></td>
						<td><?=$data[book_title]?></td>
						<td><?=$data[user_mobile]?></td>
						<td><?=$data[user_email]?></td>
						<td>
						<?=($data[user_add1]." ".$data[user_add2])?><br>
						<?=($data[city_name]." ".$data[state_name])?><br>
						<?=$data[country_name]?>
						</td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="user_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>

    <!--footer start-->
		<?php include_once("includes/footer.php"); ?>
    <!--small footer end-->
  </body>
</html>
