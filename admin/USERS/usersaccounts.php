<div class="panel-body table-responsive pcolor">
									<!--table-->
									<table class="table table-condensed pcolor1">
										<thead>
											<td class="col-md-1"><b>No.</b></td>
											<td class="col-md-4"><b>user</b></td>
											<td class="col-md-1"><b>contact</b></td>
											<td class="col-md-1"><b>password</b></td>
											<td class="col-md-1"><b>delete</b></td>
											<td class="col-md-1"><b>edit</b></td>
										</thead>
										
										<tbody>
										<?php 
										    include('connection2.php');
								            $pipsql = mysqli_query($conn,"SELECT * FROM `users_accounts`");
											$count = 0;
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<1000))
											  {
											  $categorie = $myrow['password'] ;
											     echo "<tr>";
												 for($data=0; $data<6; $data++)
												 { 
												 switch( $data)
												   {
												   case 0 : 									   
												  { echo "<td>". ($count+1) . "</td>" ; };
												  break;
													 case 1 : 									   
												  { echo '<td><img src=../'.$myrow['picture']."/>  ".$myrow['username']."</td>" ; };
												  break;
												   case 2 : 									   
												  { echo "<td><a href='#'>".$myrow['email']."</a></td>" ; };
												  break;
												  
												   case 3 : 									   
												  { echo "<td> $categorie</td>" ; };
												  break;
												  case 4 : 									   
												  { echo '<td><a href="dellete.php?del='.$myrow["indexes"].'">delete</a></td>' ; };
												  break;
												  case 5 : 									   
												  { echo "<td><a href='#'>edit</a></td>" ; };
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