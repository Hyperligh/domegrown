<?php
class FileUpload {
	public $path;

	public function __construct($dir) {
		if(!is_dir($dir) || !is_writable($dir) ){
			die("Check to make sure that $dir exists");
		}//end of if

		$this->path = $dir;

	}//constructor

	public function upload($file, $dbh, $title, $caption, $category) {
		$name = $file['name'];
		$tmpName = str_replace(' ', '_',$file['tmp_name']);
		$size = $file['size'];
		$err = $file['error'];
		$type = $file['type'];
		if($this->fileExists($name) && $this->checkDuplicates($name) && $this->checkSize($size) && $this->checkMimme($tmpName) && $this->checkEx($name) && $this->getErrNo($err)) {
			$this->move($tmpName,$name);
			$this->writeToDB($dbh, $name, $title, $caption, $category);
		}//endif


	}//methodupload

	public function fileExists($name) {
		if($name == " ") {
			echo "No file attached";
			return false;
	 	}
	 	else{
	 		
	 		return true;
		}//endif
	}//methodfileExists


	public function checkDuplicates($name) {
		$dest = $this->path.$name;
		if(file_exists($dest)) {
			echo "Already Exists";
			return false;
		}
		else {
			
			return true;
		}//endif


	}//methodCheckDuplicates


	public function checkSize($size){
		if($size > 20000000) {
			echo"File size is too big";
			return false;
		}
		else{
			
			return true;
		}//endofif


	}//methodchecksize


	public function checkMimme($tmpName){
		if(!exif_imagetype($tmpName)) {
			echo"Incorrect file Type";
			return false;
		}
		else{
			return true;
		}//endif
	}//methodCheckMime


	public function checkEx($name){
		$ext = pathinfo($name, PATHINFO_EXTENSION);
		if($ext == 'jpg' || $ext =='jpeg' || $ext =='png' || $ext == 'gif' || $ext='tiff') {
			
			return true;
		}
		else{
			echo"Wrong type of file";
			return true;
		}



	}//methodCheckEx

	public function move($tempName, $name) {
		$newName = $this->path.$name;
		if(move_uploaded_file($tempName, $newName)) {
			echo"The file $name was uploaded as $newName";
		}
		else{
			echo"Unexpected failure";
		}//end if

	}//methodmove

	
	public function checkStamp() {
		$t = time();
		return date('Y-m-d-i-s', $t);
	}//methodCheckStamp
	

	public function getErrNo($err){
		if($err > 0){
			echo"Upload error";
			return false;
		}	
		else
		{
			return true;
		}//end if


	}//methodErr

	public function writeToDB($dbh, $name, $title, $caption, $category){
		$newName = $this->path.$name;
		$query = "INSERT INTO photogallery(path, title, caption, archive, category) VALUES('$newName', '$title', '$caption',1, '$category')";
		$result = mysqli_query($dbh, $query) or die("Photo name already taken");

	}//methodWriteToDB


}//class
?>