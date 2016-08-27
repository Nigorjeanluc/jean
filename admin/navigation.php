
 <?php 
 $mainMenu = array("HOME","DELETE","ADD","USERS");
 $limitt = 4;
 $str = "";
  $is_he_a_user = "no";
 $var = isset($_POST['okk'])&&isset($_POST['user_S']);
   if($var) 
   {
   $is_he_a_user = $_POST['user_S'];
   if($is_he_a_user=="yes")
     {
	 echo ' <script>
 $(document).ready(function() 
		            {
					var bik = $("#pipBody form").html();
					bik += "<input type='; echo "'text' name='user_S' value='yes' id='looas'/>";
	          echo '";
			        $("#pipBody form").html(bik);
					$("#looas").hide();
					});
					
</script>';
     $mainMenu = array("HOME","DELETE","ADD");
     $limitt = 3;
     $is_he_a_user = "yes";
     $str = "&hdhd=dfdd";
	  }
   }
 if(isset($_REQUEST['hdhd']))
 {$mainMenu = array("HOME","DELETE","ADD");
 $limitt = 3;
 $is_he_a_user = "yes";
 $str = "&amp;hdhd=dfdd";
echo ' <script>
 $(document).ready(function() 
		            {
					var bik = $("#pipBody form").html();
					bik += "<input type='; echo "'text' name='user_S' value='yes' id='looas'/>";
	          echo '";
			        $("#pipBody form").html(bik);
					$("#looas").hide();
					});
					
</script>';
 }
 
   $SubMenu1 = array("Music","Video","Amafoto","Artist","News");
   $SubMenu2 = array("Accounts","Comments");
   $CSSclass = array("home","remove","save","log-out");
   $CSSclass2 = array("music","hd-video","book","cloud","education");
   $ONE = 5;
 ?>
 <div id = "pipNAv">
   <?php
     for($v=0; $v<$limitt; $v++)
	  {
	  if($limit==3) $ONE = 2;
	  if($v==$limit)
	    {
		echo 
		'<a href="#" class="active btn btn-link btn color glyphicon glyphicon-'.$CSSclass[$v].' pipClass PIPact"><b>'.$mainMenu[$v].'</b></a><br />';
		echo 
		  '<p  class="text-center" style="width:70%;margin-left:50%;">';
		  for($vv=0;$vv<$ONE;$vv++)
		 { if(($limit==3)&&($from==$SubMenu1[$vv]))
		    echo '<a href="'.$mainMenu[$limit].'.php?lll='.$SubMenu2[$vv].'" 
		        class="active btn btn-link btn color glyphicon glyphicon-'.$CSSclass2[$vv].' pipClass PIPact">'.$SubMenu2[$vv].'</a><br />';
		   else	if(($limit==3)&&!($from==$SubMenu1[$vv]))
		    echo '<a href="'.$mainMenu[$limit].'.php?lll='.$SubMenu2[$vv].'" 
		        class="btn btn-link btn color glyphicon glyphicon-'.$CSSclass2[$vv].' pipClass PIPact">'.$SubMenu2[$vv].'</a><br />';
		  else if($from==$SubMenu1[$vv])
		  echo '<a href="'.$mainMenu[$limit].'.php?lll='.$SubMenu1[$vv].$str.'" 
		        class="active btn btn-link btn color glyphicon glyphicon-'.$CSSclass2[$vv].' pipClass PIPact">'.$SubMenu1[$vv].'</a><br />';
		  else
		  echo '<a href="'.$mainMenu[$limit].'.php?lll='.$SubMenu1[$vv].$str.'" 
		        class="btn btn-link btn color glyphicon glyphicon-'.$CSSclass2[$vv].' pipClass PIPact">'.$SubMenu1[$vv].'</a><br />'; }
		  echo '</p>';
		} 
	  else
	    echo '<a href="'.$mainMenu[$v].'.php?'.$str.'" class="btn btn-link btn color glyphicon glyphicon-'.$CSSclass[$v].' pipClass"><b>'.$mainMenu[$v].'</b></a><br />';
	  }
   ?>
  </div>
