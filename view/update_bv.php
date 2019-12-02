<?php
include_once("header.php");
include_once("nav.php");
include_once("../model/entity/Post.php");
if (isset($_GET)) {
    $id = $_GET["id"];
  $rs = Post::getListById($id);
  }
?>
 
 <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              
                $tieude=$_POST['tieude']; 
                // var_dump($tieude);
                // die();
                $anhnen=$_FILES['fImg']['name'];
                $noidung=$_POST['noidung'];
                $dm_id = $_POST['dm_id'];
                $status = $_POST['status'];
                Post::update_bv($id, $tieude, $noidung, $anhnen, $dm_id, $status);
                  
                move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$anhnen");
                echo"<b><i> THÊM MỚI THÀNH CÔNG </i></b>";
                     
                        
                
                
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Sửa tin tức</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                
                               
                                <div class="control-group">
                                    <label class="control-label">Tiêu đề </label>
                                        <div class="controls">
                                            <input type="text" name="tieude" class="span7" value="<?php if(isset($rs)) echo $rs['name'];?>"/>
                                           
                                        </div>
                                </div>   
                              
                               <div class="control-group">
                                    <label class="control-label"> Ảnh nền </label>
                                        <div class="controls">
                                            <input type="file" name="fImg" value="<?php if(isset($rs)) echo $rs['thumbnail'];?>"/>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label"> Nội dung</label>
                                        <div class="controls">
                                            <textarea name="noidung" class="ckeditor"><?php if(isset($rs)) echo $rs['content'];?></textarea>
                                            
                                        </div>
                                       
                                </div> 
                                <div class="control-group">
                                    <label class="control-label">Mã danh mục </label>
                                        <div class="controls">
                                            <input type="number" name="dm_id" class="span7" value="<?php if(isset($rs)) echo $rs['danhmuc_id'];?>"/>
                                           
                                        </div>
                                </div> 
                                <div class="control-group">
                                    <label class="control-label">Status</label>
                                        <div class="controls">
                                            <input type="number" name="status" class="span7" value="<?php if(isset($rs)) echo $rs['status'];?>"/>
                                           
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Cập Nhật</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>


<?php
  include_once("footer.php");
?>