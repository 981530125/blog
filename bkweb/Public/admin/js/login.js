var validate={username:1,password:1}
$(function(){
	$("#login_form").submit(function(){
		if(validate.username==0 && validate.password==0){
			alert("true") ;
		}
		//验证用户名
		$("input[name='username']").trigger("blur");
		//验证密码
		$("input[name='password']").trigger("blur");
		//验证验证码
		// $("input[name='code']").trigger("blur");
		return false;
	})
})
$(function(){
	//验证用户名
	$("input[name='username']").blur(function(){
		var username = $("input[name='username']");
		if(username.val().trim()==''){
			username.parent().find("span").remove().end().append("<span class='error'>用户名不能为空</span>");
			return ;
		}
		$.post(CONTROL+"/checkusername",{username:username.val().trim()},function(stat){
			if(stat==1){
				validate.username=0;
				username.parent().find("span").remove();
			}else{
				username.parent().find("span").remove().end().append("<span class='error'>用户不存在</span>");
			}

		})
	})
	//验证密码
	$("input[name='password']").blur(function(){
		var password = $("input[name='password']");
		var username=$("input[name='username']");
		if(username.val().trim()==''){
			return;
		}
		if(password.val().trim()==''){
			password.parent().find("span").remove().end().append("<span class='error'>密码不能为空</span>");
			return ;
		}
		$.post(CONTROL+"/checkpassword",{password:password.val().trim(),username:username.val().trim()},function(stat){
			if(stat==1){
				validate.password=0;
				password.parent().find("span").remove();
			}else{
				password.parent().find("span").remove().end().append("<span class='error'>密码错误</span>");
			}

		})
	})
	//验证验证码
})

