window.onload=function(){
  var aid=document.getElementById('hideid');
  var pid=document.getElementById('R_pid');
  var btn=document.getElementById('btn');
  var hint=document.getElementById('hint');
  btn.onclick=function(){
    var Aid=aid.value;
    var R_pid=pid.value;
   var txtarea=document.getElementById('txtarea').value;
     if(!txtarea){
      hint.innerHTML="*内容不能为空";
     }else{
     var xhr=new XMLHttpRequest();
   xhr.open('post','blogcontent/ajaxreview',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('Aid='+Aid+'&&txtarea='+txtarea+'&&pid='+R_pid);
    xhr.onreadystatechange=function(){
      if(xhr.readyState==4 && xhr.status==200){
        if(xhr.responseText=="success"){
          hint.innerHTML="上传成功";
        }
        if(xhr.responseText=="error"){
          hint.innerHTML="上传失败";
        }
      }
    }
     }

  }
  var blogcomment=document.getElementsByName('blogcomment'); 
 var lis = document.getElementsByClassName('returnrv');
                var funny = function(i){
                    lis[i].onclick = function(){
                        if(blogcomment[i].style.display=='none'){
                          blogcomment[i].style.display='block';
                        }else{
                          blogcomment[i].style.display='none';
                        }
                    }
                }
                for(var i=0;i<lis.length;i++){
                    funny(i);
                }
}