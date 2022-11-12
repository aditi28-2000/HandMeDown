<?php
	include_once("includes/header.php");
	include_once("includes/db_connect.php");
	$SQL="SELECT * FROM `request`,`user`,`city`,`state`,`country` WHERE user_city = city_id AND state_id = user_state AND country_id = user_country AND user_id = request_user_id";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>

<script>
$(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(request_id)
{
	this.document.frm.act.value="delete_request";
	this.document.frm.submit();
}
</script>
<!--breadcrumbs start-->
<div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              All Users Requests/Queries
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
						<th style="background-color:#34495e; color:#FFFFFF;">Book Request/Query</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Mobile</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Email</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Full Address</th>
						<th style="background-color:#34495e; color:#FFFFFF; width:350px">Message</th>
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
						<td><?=$data[request_title]?></td>
						<td><?=$data[user_mobile]?></td>
						<td><?=$data[user_email]?></td>
						<td>
						<?=($data[user_add1]." ".$data[user_add2])?><br>
						<?=($data[city_name]." ".$data[state_name])?><br>
						<?=$data[country_name]?>
						</td>
						<td><?=nl2br($data[request_description])?></td>
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
