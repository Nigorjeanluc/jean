// JavaScript Document
$(document).ready(function() 
		            {
						$("#amatekaSlides").height($("#AmatekaSlides div.active img").height() + 200);
						$("#AmatekaSlides div.item img").css("width","100%");
					    $("#AmatekaSlides div.item").css("display","none");
					    $("#AmatekaSlides div#slidingImg0").css("display","block");
					   var xxx = 0;
					   var tt = setInterval( function()
													  {
													  var xxxx = xxx+1;
													  if(xxx==-1) 
													  {
														  $("#AmatekaSlides div#slidingImg0").css("display","block");
													  }
													  $("#AmatekaSlides div#slidingImg" + xxx).css("display","none");
													  $("#AmatekaSlides div#slidingImg" + xxxx).css("display","block");
													  xxx++;
													  if(xxx == 2){ xxx = -1; }
													  },3000);
					var title =" Comment(s) ";
					var New = $("#uyunguyu").attr("value")+ " " + title;
					//alert(New);
					$("#title").html(New);
					});