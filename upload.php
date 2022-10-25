<?PHP
if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
	echo '檔案名稱： ' . $_FILES['my_file']['name'] . '<br/>';
	echo '檔案類型： ' . $_FILES['my_file']['type'] . '<br/>';
	echo '檔案大小： ' . ($_FILES['my_file']['size']/1024) . ' KB<br/>';
	echo '暫存名稱： ' . $FILES['my_file']['tmp_name'] . '<br/>';
	
	if(file_exists('upload/' . $_FILES['my_file']['name'])){
		echo '檔案已存在。<br/> file_exists = true <br/>';
	}else{
		$file = $_FILES['my_file']['tmp_name'];
		$dest = 'upload/' . $_FILES['my_file']['name'];
		
		move_uploade_file($file,$dest);
	}
}else{
	echo '錯誤代碼： ' . $FILES['my_file']['error'] . '<br/>';
}

?>