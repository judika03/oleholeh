var isicart=new Array();

  cart=0;



function viewcart(){
document.getElementById("cart").innerHTML="<a href='#' data-toggle='modal' data-target=''#myModal' ><span style='color:white;' class='glyphicon glyphicon-shopping-cart'></span>"+cart+"</a>";
}

//setInterval(viewcart, 100 );

function loadpage(str, str2, str3){
//isicart.push('This is a string.');
  if(str3=="remove"){
     $(str2).removeClass("carousel");
     $(str2).removeClass("slide");
  } else {
    $(str2).addClass("carousel");
    $(str2).addClass("slide");
  }
$.get(str+".html", function(data){
  $(str2).html(data);
});
}
function addtocart(str){
  cart+=1;
  document.getElementById("cart").innerHTML="<a href='#' data-toggle='modal' data-target='#myModal' ><span style='color:white;' class='glyphicon glyphicon-shopping-cart'></span>"+cart+"</a>";
isicart.push(str);
}
