window.onload =function(){
  var ull=document.getElementById("ull");
  var odiv=document.getElementById("tab-list");
  var oli=ull.getElementsByTagName("li");
  var asection=odiv.getElementsByTagName("section"); 
   for (var i=0; i < oli.length ; i++){
            oli[i].index=i;
          oli[i].onclick=function(){
          	for(var i=0;i<oli.length;i++){
          		oli[i].className="";
          	}
          	this.className="active";
          	for (var j = 0; j < asection.length; j++) {
          		asection[j].className="hide";
          	}
          	asection[this.index].className = "show";
          }
   }
}