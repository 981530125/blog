<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\Rbac;
class CommonController extends Controller{
 Public function _initialize(){
 	if(!isset($_SESSION['Admin_USER'])){
 		$this->redirect('Admin/login/index');
 	}
 	// $notAuth=in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))||
 	// in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));

 	// if(C('USER_AUTH_ON') && !$notAuth){
 	// 	RBAC::AccessDecision()||$this->error("没有权限");

 	// }
 }
}
//|| !isset($_SESSION['username'])
?> 