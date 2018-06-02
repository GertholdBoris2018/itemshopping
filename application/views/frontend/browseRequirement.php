<!-- start: APP CONTENT -->
<div class="app-content">
				<div class="main-content">
					<section id="page-title">
						<div class="container">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Search Result</h1>
									<span class="mainDescription">You can find the requirements from any customers.</span>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Find requirements</span>
									</li>
									<li class="active">
										<span>Search Result</span>
									</li>
								</ol>
							</div>
						</div>
					</section>

					<section class="container-fluid container-fullw bg-white">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="search-classic">
										<form action="#">
											<div class="input-group well">
												<input type="text" class="form-control" placeholder="Search...">
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button">
														<i class="fa fa-search"></i> Search
													</button> </span>
											</div>
										</form>
										<h3>Search results for Requirements</h3>
                                        <?php
                                        foreach($requirements as $requirement){
                                            $price_range = $requirement->price;
                                            $currency = $requirement->currency;
                                            $prices = explode("_",$price_range);
                                            $price = '';
                                            $len = count($prices);
                                            switch ($len) {
                                                case 1:
                                                    $price = $currency.$prices[0];
                                                    break;
                                                case 2:
                                                    if($prices[0] == '') $price = 'Under '.$currency.$prices[1];
                                                    elseif($prices[1] == '') $price = 'Over '.$currency.$prices[0];
                                                    else $price = $currency.$prices[0].' ~ '.$currency.$prices[1];
                                                    break;
                                                default:
                                                    $price = '';
                                                    break;
                                                    
                                            }
                                            ?>
                                            <hr>
                                            <div class="search-result">
                                                <h4><a href="#"> <?php echo $requirement->title;?> </a></h4>
                                                <p class="pull-right"><?php echo $price;?></p>
                                                <p>
                                                    <?php echo $requirement->description;?>
                                                </p>
                                                
                                            </div>
                                            <?php
                                        }
                                        ?>
										
										
										<hr>
										<ol class="pagination pull-right">
											<li class="prev disabled">
												<a href="#"> Prev </a>
											</li>
											<li class="active">
												<a href="#"> 1 </a>
											</li>
											<li class="next disabled">
												<a href="javascript:;"> Next </a>
											</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>