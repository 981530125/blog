<?php
function check_verify($code,$id=""){
	$Verify=new\Think\Verify();
	return $Verify->check($code,$id);
}
?>