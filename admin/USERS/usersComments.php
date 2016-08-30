<div class="panel-body table-responsive pcolor">
									<!--table-->
									<table class="table table-condensed pcolor1">
										<thead>
											<td class="col-md-1"><b>No.</b></td>
											<td class="col-md-6"><b>Items</b></td>
											<td class="col-md-1"><b>izina</b></td>
											<td class="col-md-4"><b>numero</b></td>
											<td class="col-md-4"><b>kugaragara</b></td>
										</thead>
										
										<tbody>
										<?php 
										    include('connection.php');
								            $pipsql = mysql_query("SELECT * FROM `comments`",$conn);
											$count = 0;
											while(($myrow = mysql_fetch_array($pipsql))&&($count<1000))
											  {
											  $categorie = $myrow['tel'] ;
											     echo "<tr>";
												 for($data=0; $data<5; $data++)
												 { 
												 switch( $data)
												   {
												   case 0 : 									   
												  { echo "<td>". ($count+1) . "</td>" ; };
												  break;
													 case 1 : 									   
												  { echo '<td>
												  <b>
												  <a class="deleting" href="USERS.php?lll=Comments&amp;ppppd='.$myrow['ID'].'">'.$myrow['EEmail']." - ".$myrow['commment'].
												  "</a>
												  </b>
												  </td>" ; };
												  break;
												   case 2 : 									   
												  { echo "<td>".$myrow['name']."</td>" ; };
												  break;
												  
												   case 3 : 									   
												  { echo "<td> $categorie </td>" ; };
												  break;
												   case 4 : 									   
												  { echo '<td><a class="deleting" href="USERS.php?lll=Comments&amp;ddddp='.$myrow['ID'].'" > allow : '.$myrow['allow'].' </a></td>' ; };
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