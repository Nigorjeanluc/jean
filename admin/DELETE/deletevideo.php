<div class="panel-body table-responsive">
							  <table class="table">
							<?php
											include('connection.php');
											$pipsql = mysql_query("SELECT * FROM videos",$conn);
											$count = 0;
											$name = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$artist = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$year = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$file2 = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$categorie = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$id = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											while(($myrow = mysql_fetch_array($pipsql))&&($count<16))
											{
											     
											     $name[$count] = $myrow['name'];
												 $artist[$count] = $myrow['artist'];
												 $year[$count] = $myrow['year'];
												 $file2[$count] = $myrow['icon_url'];
												 $categorie[$count] = $myrow['categorie'];
												 $id[$count] = $myrow['id'];
												 $count++;
											}
											$count = 0;
											     for($cont = 1; $cont<3;$cont++ ) 
												 {
												   echo '<tr>';
															 for($vont = 1; $vont<5;$vont++ )
															 {
															   $_echo = $count++;
															   if($name[$_echo]==" ")
															     echo " ";
															   else
															    echo '<td>
																         <a href="DELETE.php?lll=Video&hdfjafreuruqifhjak='.$id[$_echo].'&wherewhere=videos'.$str.'">'.
																		 "<img  src='../$file2[$_echo]' width='200' > 
																			<p class='text-center'> $artist[$_echo] - $name[$_echo]</p></a></td>  
																		    ";
															 }
													echo '</tr>';
												 }
											
										?>
										</table>
							</div>