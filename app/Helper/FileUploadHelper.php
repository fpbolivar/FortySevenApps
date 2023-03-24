<?php
namespace App\Helper;
/**
 *  file Upload Helper
 */
class FileUploadHelper 
{
	
	/**
	 * [UploadImage Create Upload File Path]
	 * @param [array] $file [description]
	 * @param [array] $path  [description]
	 */
	public function UploadFile($file,$path)
	{
	    $name = time().rand(1,1000).'.'.$file->getClientOriginalExtension();
	    $destinationPath = public_path($path);
	    $file->move($destinationPath, $name);
	    return $path."/".$name;
	}
	/**
	 * [CheckFile Check If file is exist in folder or not]
	 * @param [array] $path   [file Path]
	 * @param [array] $delete [1]
	 */
	public function CheckFile($path,$delete)
	{
		if ($delete == 1) {
			$returnData = file_exists(public_path($path));
			if($returnData){
				if (!empty($path)) {
					return $this->DeleteFile($path);
				}
			}
			return $returnData; 
		}else{
			return file_exists(public_path($path));
		}
	}
	/**
	 * [DeleteFile Delete file]
	 * @param [array] $path [file Path]
	 */
	public function DeleteFile($path)
	{
		return unlink(public_path($path));
	}

}