window.onload=function(){
	var username=document.getElementById("username");
	   username.onblur=function(){
	   	var name=this.value;
	   	if(name!=""){
	   		var xhr=new XMLHttpRequest();
	   	xhr.open("POST","reg/addajax","true");
	   	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	   	xhr.send("username="+name);	   	
	   	xhr.onreadystatechange=function(){
	   		if(this.readyState==4 && this.status==200){
	   			alert(this.responseText);
	   			if(this.responseText!=1){
	   				 document.getElementById("tip").innerHTML="用户存在";
	   			}else{
	   				 document.getElementById("tip").innerHTML="用户不存在";
	   			}
	   		}
	      }
	   	}else{
	   		document.getElementById("tip").innerHTML="用户名不能为空"
	   	}
	   	
	   }
	// 

}