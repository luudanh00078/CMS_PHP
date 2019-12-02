<?php
  include_once("header.php");
  include_once("./model/entity/News.php");
  if (isset($_GET)) {
    $id = $_GET["id"];
  $rs = News ::getListById($id);  
  //var_dump($rs);
  
  }
?>
<!-- CONTAINER -->
<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
                    <h2><?php echo $rs["name"]; ?></h2>
                               
                    <img src="../././hinhanhsp/<?php echo $rs["thumbnail"]; ?>" class="img-thumbnail" alt="Cinque Terre" width="100%" height="236"> 
                    <?php echo $rs["content"]; ?>
                    </div>
                </div>
</div>                    

<?php
 include_once("footer.php");
?>