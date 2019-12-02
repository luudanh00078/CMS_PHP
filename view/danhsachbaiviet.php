<?php
include_once("header.php");
include_once("nav.php");
include_once("../model/entity/Post.php");
?>
<script>
    function check(matt)
            {
                if(confirm("Bạn có muốn xóa tin tức này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="delete_bv.php?matt="+matt;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách tin tức</h3>
                      </div>
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tiêu đề
                                            </th>
                                            
                                            
                                            <th>
                                                 Ảnh nền 
                                            </th>
                                            <th>
                                                Nội dung
                                            </th>
                                            <th>
                                                Mã dm 
                                            </th>
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $rs = Post::getListFromDb();
                                        foreach($rs as $value) 
                                        {                
                                            echo "<tr>"
                                                   
                                                    . "<td>$value->name</td>"
                                                    . "<td><img src='../hinhanhsp/$value->thumbnail' width='100px'/></td>"
                                                    . "<td>".substr($value->content, 0, 400 )."...</td>"
                                                    . "<td>$value->danhmuc_id</td>"
                                                    
                                                    . "<td>"
                                                    . "<a href='update_bv.php?id=$value->id'>Sửa</a> "

                                                    ."<a onclick='check($value->id)' href='#' >Xoá</a>"
                                                    . "</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                  
                                    </table>
                                    <a href='create_bv.php'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  
<?php
  include_once("footer.php");
?>