							<div class="panel">
								<div class="panel-body">
									<ul class="media-list">
									<?php
									        include('../connection.php');
											$pipsql = mysql_query("SELECT * FROM news ORDER BY id DESC",$conn);
											while($myrow = mysql_fetch_array($pipsql))
											{
											$cat = $myrow["categorie"];
										     echo'
											   <li class="media">
											      <div class="media-left">
													    <img class="media-object" src="../'.$myrow["top_pic"].'" alt="..." width="120" height="120">
												     </a>
											      </div>
											      <div class="media-body">';
											echo '<br />';
										    echo '<h4 class="media-heading text-center">'.$myrow["title"].'</h4>';
											echo '<br />';
                                            echo "<p>".$myrow["resume"].
											     '<br />
												 <a href="DELETE.php?lll=news&hdfjafreuruqifhjak='.$myrow["id"].'&wherewhere=news" class="btn btn-link pull-right pip-graphics pip-icon-more">
												 Delete</a>';
                                            echo "<a href='Newsdisplay.php?hdfjafreuruqifhj=$cat' class='btn'>".$myrow["categorie"].'</a></p>
												  </div>
										       </li>
											';
											}
											?>
									</ul>
								</div>
							</div>
