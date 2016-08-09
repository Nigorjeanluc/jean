<div class="panel-body">
								<?php
								            $_start = 0;
											$_end = 16;
											$page = 1;
								     if(isset($_REQUEST['hddhsjskaairoe']))
									   {
								            $page = $_REQUEST['hddhsjskaairoe'];
											switch($page)
											{
											  case 1 : {$_start = 0; $_end = 4;} break;
											  case 2 : {$_start = 5; $_end = 8;} break;
											  case 3 : {$_start = 9; $_end = 12;} break;
											  default : {$_start = 13; $_end = 16;} break;
											}
										}
										     include('connection.php');
											 $MyQuerry = "SELECT * FROM soft  ORDER BY id DESC LIMIT $_start,$_end";
											if(isset($_REQUEST['type']))
											  {$type = $_REQUEST['type']; $MyQuerry ="SELECT * FROM soft WHERE categorie='$type' LIMIT $_start,$_end";}
											$pipsql = mysql_query($MyQuerry,$conn);
											$count = 0;
											$name = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$year = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$categorie = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$file = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											$ids = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
											while(($myrow = mysql_fetch_array($pipsql))&&($count<16))
											  {
											     $name[$count] = $myrow['name'];
												 $year[$count] = $myrow['year'];
												 $categorie[$count] = $myrow['categorie'];
												 $file[$count] = $myrow['file_url'];
												 $ids[$count] = $myrow['id'];
												 $count++;
											  }
											  $count = 0;
											     for($cont = 1; $cont<5;$cont++ ) 
												 {
												   echo '<div class="row">';
															 for($vont = 1; $vont<5;$vont++ )
															 {
															   $_echo = $count++;
															   if($name[$_echo]==" ")
															     echo " ";
															   else
															    echo '<div class="col-xs-6 col-md-3 text-center pip">
																         <a href="DELETE.php?lll=Soft&hdfjafreuruqifhjak='.$ids[$_echo].'&wherewhere=soft" class="thumbnail">'.
																		 "<b>$name[$_echo]</b><br />
									                                        year:<i style='color:orange;'>$year[$_echo]</i> <br />
																			categorie:<i style='color:orange;'>$categorie[$_echo]</i>
																		</a>
                                                                      </div>";
															 }
													echo '</div>';
												 }
											  ?>
							</div>