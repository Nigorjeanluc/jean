<div class="panel-body table-responsive pcolor">
									<!--table-->
									<table class="table table-condensed pcolor1">
										<thead>
											<td class="col-md-1"><b>No.</b></td>
											<td class="col-md-6"><b>Items</b></td>
											<td class="col-md-1"><b>Year</b></td>
											<td class="col-md-4"><b>Categories</b></td>
										</thead>
										
										<tbody>
										<?php 
										    include('connection.php');
								            $pipsql = mysql_query("SELECT * FROM `music`",$conn);
											$count = 0;
											while(($myrow = mysql_fetch_array($pipsql))&&($count<1000))
											  {
											  $categorie = $myrow['categorie'] ;
											     echo "<tr>";
												 for($data=0; $data<4; $data++)
												 { 
												 switch( $data)
												   {
												   case 0 : 									   
												  { echo "<td>". ($count+1) . "</td>" ; };
												  break;
													 case 1 : 									   
												  { echo '<td>
												  <b>
												  <a href="DELETE.php?lll=Music&hdfjafreuruqifhjak='.$myrow['id'].'&wherewhere=music">'.$myrow['artist']." - ".$myrow['name'].
												  "</a>
												  </b>
												  </td>" ; };
												  break;
												   case 2 : 									   
												  { echo "<td>".$myrow['year']."</td>" ; };
												  break;
												  
												   case 3 : 									   
												  { echo "<td> $categorie </td>" ; };
												  break;
												  default :{ echo "<td>Unknown</td>" ; };
												  break;
												  }
												  }
												  echo "</tr>";
											     
											     $count++;
											  }
											  ?>
											
										</tbody>
									</table>
								</div>