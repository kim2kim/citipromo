 <?php
  // Specify your file details
   $current_file = 'publicimages/kesha.jpg';
    $max_width = '150';
     echo "The file is $current_file";
      print "<br>";
       echo "The width is $max_width";
        print "<br>";
         echo 'Original image: <img src="' .$current_file .'">';
          print "<br>";
           // Get the current info on the file
            $current_size = getimagesize($current_file);
             $current_img_width = $current_size[0];
              $current_img_height = $current_size[1];
               $image_base = explode('.', $current_file);
                // This part gets the new thumbnail name
                 $image_basename = $image_base[0];
                  $image_ext = $image_base[1];
                   $thumb_name = $image_basename.'-th.'.$image_ext;
                    // Determine if the image actually needs to be resized
                     // and if it does, get the new height for it
                      if ($current_img_width > $max_width)
                       {
                            $too_big_diff_ratio = $current_img_width/$max_width;
                                 $new_img_width = 100;
                                      $new_img_height = 50;
                                           // Convert the file
                                                $make_magick = system("convert -geometry 400 x 0 $current_file $thumb_name", $retval);
                                                        echo 'Thumbnail created: <img src="' .$thumb_name .'">';
                                                             }
                                                              else
                                                               {
                                                                    echo 'No need to resize.';
                                                                     }
 
                                                                      ?>
