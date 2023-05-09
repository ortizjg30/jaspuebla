
<!doctype html>
<html>
    <head>
        <title>How to make photo gallery from image directory with PHP</title>
    </head>
    <body>
        <div class='container'>
            <div class="row">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'images/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "images/thumbnail/".$file;

                            // Image path
                            $image_path = "images/".$file;
                            
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <div class="col-sm-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="pages/<?php echo($image_path); ?>" class="card-img-top" id="<?php echo $file; ?>">
                                </div>
                                </div>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="btnModal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display:none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center" style="padding:0; margin:0;">
        <img src="" alt="" srcset="" class="img-fluid" id="imgModal">
      </div>
    </div>
  </div>
</div>
        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
            $(".card-img-top").click(function(){
                $("#btnModal").trigger("click");
                $imgsrc=$(this).attr('src');
                $("#imgModal").attr('src',$imgsrc);
            });
        });
        </script>
    </body>
</html>