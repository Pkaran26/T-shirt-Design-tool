<?php 
class Img{     
    function simpleUpload($file, $upload_dir,$csize){
        $name = $file['name'];
        $tmp = $file['tmp_name'];
        $type = $file['type'];
        $size = $file['size'];
        $error = $file['error'];

        if($error==1){
          //  return $error;
        }
        if($size>$csize){
            unlink($tmp);
            return "";
        }
     /*   if(!preg_match("/\.(gif|jpg|png)$/i",$name)){
            return 0;
        }*/
        if(move_uploaded_file($tmp,$upload_dir.$name)){
            return $upload_dir.$name;
        }else{
            return "";
        }
    }
}
?>