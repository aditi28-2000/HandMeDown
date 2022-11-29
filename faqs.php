<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `faq`";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>


<!--breadcrumbs start-->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4">
				<h1>
					Book Exchnage FAQs
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
			<form name="frm" action="lib/faq.php" method="post">
			  <section class="panel">
				 
				  <table class="table table-striped table-advance table-hover" style="color:#000000">
				   <tbody>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr><th style="background-color:#34495e; color:#FFFFFF;"><?=$data[faq_title]?></th></tr>
						<tr><td><?=$data[faq_description]?></td></tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="faq_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>

    <!--footer start-->
		<?php include_once("includes/footer.php"); ?>
    <!--small footer end-->
  </body>
</html>
