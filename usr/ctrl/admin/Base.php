<?php
namespace Ctrl\Admin;
use Lib;
use Model;
use Model\Helper as MH;

class Base extends Lib\CtrlBase{
	public $helper = null;

	//function __construct(){
	//	parent::__construct();//要显式调用父类的构造函数
	//}
	function __construct(){
		$this->set("_root",Lib\Config::get("root"));
		$this->set("_cfgurl", Lib\Config::get("url"));
	}


}

?>