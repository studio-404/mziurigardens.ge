<?php defined('DIR') OR exit; ?>
<div class="ContentDiv WithBackground BackgroundBlue PaddingBottom0Mobile" style="display:none;">
	<div class="container Padding0">
		<div class="row">
			<div class="col-sm-6">
				<div class="Info">
					<div class="Title ColorWhite"><?php echo $title ?></div>
					<div class="Text ColorWhite">
						<?php echo $content ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="Image">
					<img src="<?php echo $image1 ?>" class="img-responsive" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
     $children = db_fetch("SELECT * from ".c("table.pages")." where menutype = {$menuid} and visibility=1 and deleted=0 and language='".l()."'");
     $parent = db_fetch("SELECT * from ".c("table.pages")." where id = {$children['masterid']} and visibility=1 and deleted=0 and language='".l()."'");
?>

<div class="FloorContentDiv">
	<div class="WithBackground BackgroundBlue"></div>
	<div class="container Padding0">
		<div class="row">
			<div class="col-sm-12"> 
				<div class="FloorPageDiv">
					<div class="Head">
						<div class="row">
							<div class="col-sm-6">
								<div class="Title"><?php echo (int)$children['title'];?> <?php echo l('floor');?></div>
							</div>
							<div class="col-sm-6">
								<div class="FloorSlide InlineBlock">
									<div class="SmallTitle">
										<?php echo l('choose.mobile');?> - <?php echo $parent['title'];?>
									</div>
									<div class="LeftArrowNumbers"></div>
									<div class="NumberContent">
										<div class="SlideNum">
                                        <?php if($parent['id']==7){?>
<!--											<a href="<?php echo href('103');?>">1</a>
											<a href="<?php echo href('89');?>">2</a>
											<a href="<?php echo href('90');?>">3</a>
											<a href="<?php echo href('91');?>">4</a> 
											<a href="<?php echo href('92');?>">5</a> 
											<a href="<?php echo href('93');?>">6</a>--> 
											<a href="<?php echo href('94');?>">7</a> 
											<a href="<?php echo href('95');?>">8</a> 
											<a href="<?php echo href('96');?>">9</a> 
											<a href="<?php echo href('97');?>">10</a> 
											<a href="<?php echo href('98');?>">11</a>
                                        <?php }else if($parent['id']==8){ ?>
											<a href="<?php echo href('102');?>">1</a>
											<a href="<?php echo href('72');?>">2</a>
											<a href="<?php echo href('73');?>">3</a>
											<a href="<?php echo href('74');?>">4</a> 
											<a href="<?php echo href('75');?>">5</a> 
											<a href="<?php echo href('76');?>">6</a> 
											<a href="<?php echo href('77');?>">7</a> 
											<a href="<?php echo href('78');?>">8</a> 
											<a href="<?php echo href('79');?>">9</a> 
											<a href="<?php echo href('80');?>">10</a> 
											<a href="<?php echo href('81');?>">11</a>
                                        <?php }else{ ?>   
											<a href="<?php echo href('104');?>">1</a>
											<a href="<?php echo href('61');?>">2</a>
											<a href="<?php echo href('62');?>">3</a>
											<a href="<?php echo href('63');?>">4</a> 
											<a href="<?php echo href('64');?>">5</a> 
											<a href="<?php echo href('65');?>">6</a> 
											<a href="<?php echo href('66');?>">7</a> 
											<a href="<?php echo href('67');?>">8</a> 
											<a href="<?php echo href('68');?>">9</a> 
											<a href="<?php echo href('69');?>">10</a> 
											<a href="<?php echo href('70');?>">11</a>                                                                                        
                                        <?php } ?>   
										</div>
									</div>
									<div class="RightArrowNumbers"></div>
								</div>
							</div>	
						</div>
					</div>
					<div class="Content InlineBlock">
						<div class="row row20 HideDesktop">
							<div class="MobileFloorChange">
								<div class="FloorNumber1"><?php echo l('choose.mobile');?></div>
                                    <?php if($parent['id']==7){?>
                                    <select id="SelectOnChangeValue">
<!--                                        <option value="<?php echo href('89');?>">2</option>
                                        <option value="<?php echo href('90');?>">3</option>
                                        <option value="<?php echo href('91');?>">4</option>
                                        <option value="<?php echo href('92');?>">5</option>
                                        <option value="<?php echo href('93');?>">6</option>-->
                                        <option value="<?php echo href('94');?>">7</option>
                                        <option value="<?php echo href('95');?>">8</option>
                                        <option value="<?php echo href('96');?>">9</option>
                                        <option value="<?php echo href('97');?>">10</option>
                                        <option value="<?php echo href('98');?>">11</option>
                                        <option value="<?php echo href('99');?>">12</option>
                                    </select>                                     
                                    <?php }else if($parent['id']==8){ ?>
                                    <select id="SelectOnChangeValue"> 
                                        <option value="<?php echo href('72');?>">2</option>
                                        <option value="<?php echo href('73');?>">3</option>
                                        <option value="<?php echo href('74');?>">4</option>
                                        <option value="<?php echo href('75');?>">5</option>
                                        <option value="<?php echo href('76');?>">6</option>
                                        <option value="<?php echo href('77');?>">7</option>
                                        <option value="<?php echo href('78');?>">8</option>
                                        <option value="<?php echo href('79');?>">9</option>
                                        <option value="<?php echo href('80');?>">10</option>
                                        <option value="<?php echo href('81');?>">11</option>
                                        <option value="<?php echo href('82');?>">12</option> 
                                    </select>                                    
                                    <?php }else{ ?>
                                    <select id="SelectOnChangeValue"> 
                                        <option value="<?php echo href('61');?>">2</option>
                                        <option value="<?php echo href('62');?>">3</option>
                                        <option value="<?php echo href('63');?>">4</option>
                                        <option value="<?php echo href('64');?>">5</option>
                                        <option value="<?php echo href('65');?>">6</option>
                                        <option value="<?php echo href('66');?>">7</option>
                                        <option value="<?php echo href('67');?>">8</option>
                                        <option value="<?php echo href('68');?>">9</option>
                                        <option value="<?php echo href('69');?>">10</option>
                                        <option value="<?php echo href('70');?>">11</option>
                                        <option value="<?php echo href('71');?>">12</option> 
                                    </select>                                   
                                    <?php } ?>   
							</div>
						</div>
						<div class="FlatInfoDiv InlineBlock">
							<div class="FlatHead">
								<span><?php echo $space ?> m<label>2</label></span>
								<div><?php echo l('room');?> - <?php echo (int)$title; ?></div>
							</div>
							<div class="InfoList InlineBlock">
								<div class="List">
                                
                            <?php if($space==65){?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>27,5 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>12 m<label>2</label></div></li>
                            <?php } else if ($space==46.3) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>29,6 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>4,7 m<label>2</label></div></li>
                            <?php } else if ($space==48.6) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>27,65 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>4,9 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>4,7 m<label>2</label></div></li>
                            <?php } else if ($space==68.60) { ?>
									<li><span><?php echo l('hall');?></span><div>4,2 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>39 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5,3 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>17,7 m<label>2</label></div></li>
                            <?php } else if ($space==70.90) { ?>
									<li><span><?php echo l('hall');?></span><div>4,2 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>53,2 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5,3 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>17,7 m<label>2</label></div></li>
                            <?php } else if ($space==43.6) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>27,65 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>4,9 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>7,6 m<label>2</label></div></li>
                            <?php } else if ($space==46.7) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>27 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>7,6 m<label>2</label></div></li>
                            <?php } else if ($space==66) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>25 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>15,5 m<label>2</label></div></li>								
                            <?php } else if ($space==72.8) { ?>
									<li><span><?php echo l('hall');?></span><div>4,7 m<label>2</label></div></li>
									<li><span><?php echo l('s1');?></span><div>34,5 m<label>2</label></div></li>
									<li><span><?php echo l('wc');?></span><div>5,3 m<label>2</label></div></li>
									<li><span><?php echo l('balcony');?></span><div>26 m<label>2</label></div></li>
                             <?php }  ?> 
								</div>
							</div>
							<div class="Info">
								<div class="DownloadButton"><?php echo l('pdf');?>  pdf</div>
								<div class="FlootSocial">
									<div class="sharethis-inline-share-buttons"></div>                                 
								</div>
							</div>
						</div>
						<div class="RightBitImage">
							<div class="Image">
                            <?php if($space==81.8){?>
								<a href="https://mziurigardens.ge/files/flats/apartments/65.0/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/65.0/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==52) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/46.30/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/46.30/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==48.6) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/43.0/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/43.0/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==68.60) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/68.60/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/68.60/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==70.90) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/70.90/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/70.90/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==43.6) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/43.6/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/43.6/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==46.7) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/46.70/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/46.70/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==66) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/66/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/66/main.jpg" class="img-responsive"/></a>
                            <?php } else if ($space==72.8) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/72.8/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/72.8/main.jpg" class="img-responsive"/></a>  
                            <?php } else if ($space==46) { ?>
								<a href="https://mziurigardens.ge/files/flats/apartments/46/main.jpg" class="fancybox"><img src="https://mziurigardens.ge/files/flats/apartments/46/main.jpg" class="img-responsive"/></a>
                            <?php }  ?>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<div class="container Padding0">
		<div class="ImageGallery">
			<div class="Title"><?php echo l('interior.design');?></div>
			<div class="row">
				<div class="GallerySlide InlineBlock">
					<?php if($space==81.8){?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/65.0/65-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/65.0/65-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/65.0/65-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/65.0/65-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/65.0/65-3.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/65.0/65-3.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==52) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46.30/46.30-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46.30/46.30-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46.30/46.30-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46.30/46.30-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==48.6) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/43.0/43-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/43.0/43-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/43.0/43-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/43.0/43-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==68.60) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/68.60/1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/68.60/1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/68.60/2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/68.60/2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/68.60/3.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/68.60/3.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/68.60/4.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/68.60/4.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==70.90) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-3.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/70.90/70.90-3.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==43.6) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/43.6/43.6-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/43.6/43.6-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/43.6/43.6-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/43.6/43.6-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==46.7) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46.70/46.70-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46.70/46.70-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46.70/46.70-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46.70/46.70-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<?php } else if ($space==66) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/66/66-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/66/66-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/66/66-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/66/66-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/66/66-3.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/66/66-3.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==72.8) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-3.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/72.8/72.8-3.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
                    <?php } else if ($space==46) { ?>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46/46-1.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46/46-1.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>
					<div class="col-sm-2"> 
						<div class="Item">
							<a href="https://mziurigardens.ge/files/flats/apartments/46/46-2.jpg" class="fancybox" data-fancybox="group1">
								<div class="Image"><img src="https://mziurigardens.ge/files/flats/apartments/46/46-2.jpg" class="img-responsive" alt="" title=""/></div>
							</a>
						</div>
					</div>  
                    <?php }  ?>
				</div>
			</div>
		</div>
	</div>
</div>
 

<style type="text/css">
	@media (max-width:992px) {
		.FooterContact .Contact1 {
			margin-top:120px;
		}
	}
</style>