<?php
namespace App\Traits;

Trait FileUploadTrait{

  public function upload($file, $fileName, Array $rules = NULL, $path = NULL){

    if($rules == NULL){
      $path = ($path == NULL) ? 'uploads/':$path;
      $path = $file->storeAs($path, time().$fileName);
    } else {

      if(isset($rules['extensions'])){
        if(!in_array($file->getClientOriginalExtension(), $rules['extensions'])){
          return "Invalid file extension.";
        }
      }

      if(isset($rules['max_size'])){
        if($file->getClientSize() > $rules['max_size']){
          return "File size exceeds the limit.";
        }
      }

    }

    return true;

  }

}
