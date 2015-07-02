<?php
class LogFile {
	//用户定义变量
	private $_fp;

	public function __construct($filename) {
    	$this->_fp = fopen($filename, "a");
    //如有需要, 增加文件锁
	}

	//要对$document_root进行设置
	public function write($str) {
		if($this->_fp) {
			fputs($_fp, $str);
			fclose($_fp);
		}
	}
//	public function get_var($name, $default) {
//		if($var = getenv($name)) {
//			return $var;
//		} else {
//			return $default;
//		}
//	}

	// if($remote_host = get_var( "REMOTE_HOST", false)) {
	// 	$remote_host = get_var( "REMOTE_ADDR", "-");
	// }
	// $remote_user = get_var( "REMOTE_USER", "-");
	// $remote_ident = get_var( "REMOTE_IDENT", "-");
	// $server_port = get_var( "SERVER_PORT", 80);
	// if($server_port!=80) {
	// 	$server_port = ":" . $server_port;
	// } else {
	// 	$server_port = "";
	// }
	// $server_name = get_var( "SERVER_NAME", "-");
	// $request_method = get_var( "REQUEST_METHOD", "GET");
	// $request_uri = get_var( "REQUEST_URI", "");
	// $user_agent = get_var( "HTTP_USER_AGENT", "");
	// if($lookup_size == true && $document_root) {
	// 	$filename = ereg_replace( "\?.*", "", $request_uri);
	// 	$filename = "$document_root$filename";
	// if(!$size = filesize($filename)) {
	// 	$size = 0;
	// }
	// } else {
	// 	$size = 0;
	// }
	// $date = gmdate( "d/M/Y:H:I:s");
	// $log = "$remote_host $remote_ident $remote_user [$date $timezone] \"".
	// "$request_method http://$server_name$server_port$request_uri\" 200 $size\n";
}
?>
