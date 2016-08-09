// JavaScript Document
var t = 0;
		   var x = document.getElementById('add_picture');
		   var y = document.getElementById('add_picture2');
		   x.ondblclick =
		   function()
		   {
		 
		       var tt = document.createElement("input");
			   var ttt = document.createAttribute("class");
			   var tt_type = document.createElement("div");
			   ttt.value = "form-control";
			   tt.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "node1" + t;
			   tt.setAttributeNode(ttt);
			   ttt = document.createAttribute("type");
			   ttt.value = "text";
			   tt.setAttributeNode(ttt);
			   ttt = document.createAttribute("name");
			   ttt.value = "otherPics" + t;
			   tt.setAttributeNode(ttt);
			   y.appendChild(tt);
			   t++;
			   
		   };
var xx = function(v) { return document.getElementById(v);}
var prewiw = xx("new_display");
prewiw.style.visibility = 'hidden';
xx("display").onclick = function() { prewiw.style.visibility = 'visible'; xx("display").style.visibility = 'hidden';}
xx("control").onclick = function() { prewiw.style.visibility = 'hidden'; xx("display").style.visibility = 'visible';}
var k = setInterval( function() 
							  {
							  xx("head1").innerHTML = xx("name").value;
							  xx("inchamake").innerHTML = xx("inchama").value;
							  xx("all").innerHTML = xx("allstaff").value;
							  },10);
var clicked = false;
xx("add_a_para").ondblclick = function()

		   {
		    if(!clicked)
			{
		       var tt = document.createElement("textarea");
			   var ttt = document.createAttribute("class");
			   var tt_type = document.createElement("div");
			   var pp = document.createElement("p");
			   var pp2 = document.createElement("p");
			   ttt.value = "form-control";
			   tt.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "node1";
			   tt.setAttributeNode(ttt); 
			   ttt = document.createAttribute("class");
			   ttt.value = "btn btn-link color";
			   pp.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "X_Close";
			   pp.setAttributeNode(ttt);
			   pp.innerHTML = "close";
			   xx("add_picture2").appendChild(tt);
			   xx("add_picture2").appendChild(pp);
			   ttt = document.createAttribute("class");
			   ttt.value = "btn btn-link color";
			   pp2.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "X_Ok";
			   pp2.setAttributeNode(ttt);
			   pp2.innerHTML = "O.k";
			   xx("add_picture2").appendChild(pp2);
			   clicked = true;
			   
			   
			}
			
xx("X_Ok").onclick = function() 
{ 
                   xx("allstaff").value +="<br /><br />" + xx("node1").value;
				   xx("add_picture2").removeChild(pp2);
				   xx("add_picture2").removeChild(pp);
				   xx("add_picture2").removeChild(tt);
				   clicked = false;
}
xx("X_Close").onclick = function() 
{ 
				   xx("add_picture2").removeChild(pp2);
				   xx("add_picture2").removeChild(pp);
				   xx("add_picture2").removeChild(tt);
				   clicked = false;
}
			
		   };
		   


xx("add_a_link").ondblclick = function()

		   {
		    if(!clicked)
			{
		       var tt = document.createElement("input");
			   var tt2 = document.createElement("input");
			   var ttt = document.createAttribute("class");
			   var pp = document.createElement("p");
			   var pp2 = document.createElement("p");
			   ttt.value = "form-control"; tt.setAttributeNode(ttt);
			   ttt = document.createAttribute("class"); ttt.value = "form-control"; tt2.setAttributeNode(ttt);
			   ttt = document.createAttribute("id"); ttt.value = "node1"; tt.setAttributeNode(ttt); 
			   ttt = document.createAttribute("id"); ttt.value = "node2"; tt2.setAttributeNode(ttt);
			   ttt = document.createAttribute("placeholder"); ttt.value = "name"; tt.setAttributeNode(ttt); 
			   ttt = document.createAttribute("placeholder"); ttt.value = "url"; tt2.setAttributeNode(ttt);
			   ttt = document.createAttribute("class"); ttt.value = "btn btn-link color"; pp.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "X_Close";
			   pp.setAttributeNode(ttt);
			   pp.innerHTML = "close";
			   xx("add_picture2").appendChild(tt);
			   xx("add_picture2").appendChild(tt2);
			   xx("add_picture2").appendChild(pp);
			   ttt = document.createAttribute("class");
			   ttt.value = "btn btn-link color";
			   pp2.setAttributeNode(ttt);
			   ttt = document.createAttribute("id");
			   ttt.value = "X_Ok";
			   pp2.setAttributeNode(ttt);
			   pp2.innerHTML = "O.k";
			   xx("add_picture2").appendChild(pp2);
			   clicked = true;
			   
			   
			}
			
xx("X_Ok").onclick = function() 
{ 
                   xx("allstaff").value += "<a href=\"" + xx("node2").value + "\"/>" + xx("node1").value + "</a>";
				   xx("add_picture2").removeChild(pp2);
				   xx("add_picture2").removeChild(pp);
				   xx("add_picture2").removeChild(tt);
				   xx("add_picture2").removeChild(tt2);
				   clicked = false;
}
xx("X_Close").onclick = function() 
{ 
				   xx("add_picture2").removeChild(pp2);
				   xx("add_picture2").removeChild(pp);
				   xx("add_picture2").removeChild(tt);
				   xx("add_picture2").removeChild(tt2);
				   clicked = false;
}
			
		   };