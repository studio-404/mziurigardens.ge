<?php defined('DIR') OR exit; 

    $maincat = db_fetch_all("SELECT id,title,masterid from ".c("table.pages")." where id = {$id} and visibility=1 and deleted=0 and language='".l()."'");
    $maincatid = $maincat[0]['masterid'];

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
								<div class="Title"><?php echo $title; ?></div>
							</div>
							<div class="col-sm-6">								
								<div class="FloorSlide InlineBlock">
									<div class="SmallTitle">
										<?php echo l('choose.mobile');?>
									</div>
									<div class="LeftArrowNumbers"></div>
									<div class="NumberContent">
                                    <?php if($maincatid==7){?>
										<div class="SlideNum">                                        
											<a href="<?php echo href('103');?>">1</a>
											<a href="<?php echo href('89');?>">2</a>
											<a href="<?php echo href('90');?>">3</a>
											<a href="<?php echo href('91');?>">4</a> 
											<a href="<?php echo href('92');?>">5</a> 
											<a href="<?php echo href('93');?>">6</a> 
											<a href="<?php echo href('94');?>">7</a> 
											<a href="<?php echo href('99');?>">8</a> 
											<a href="<?php echo href('96');?>">9</a> 
											<a href="<?php echo href('97');?>">10</a> 
											<a href="<?php echo href('98');?>">11</a>
										</div>
                                    <?php }else if($maincatid==8){ ?>
										<div class="SlideNum">                                        
											<a href="<?php echo href('102');?>">1</a>
											<a href="<?php echo href('72');?>">2</a>
											<a href="<?php echo href('73');?>">3</a>
											<a href="<?php echo href('74');?>">4</a> 
											<a href="<?php echo href('75');?>">5</a> 
											<a href="<?php echo href('76');?>">6</a> 
											<a href="<?php echo href('77');?>">7</a> 
											<a href="<?php echo href('82');?>">8</a> 
											<a href="<?php echo href('79');?>">9</a> 
											<a href="<?php echo href('80');?>">10</a> 
											<a href="<?php echo href('81');?>">11</a>
										</div>                                    
                                    <?php }else{ ?>
										<div class="SlideNum">                                        
											<a href="<?php echo href('104');?>">1</a>
											<a href="<?php echo href('61');?>">2</a>
											<a href="<?php echo href('62');?>">3</a>
											<a href="<?php echo href('63');?>">4</a> 
											<a href="<?php echo href('64');?>">5</a> 
											<a href="<?php echo href('65');?>">6</a> 
											<a href="<?php echo href('66');?>">7</a> 
											<a href="<?php echo href('71');?>">8</a> 
											<a href="<?php echo href('68');?>">9</a> 
											<a href="<?php echo href('69');?>">10</a> 
											<a href="<?php echo href('70');?>">11</a>
										</div>                                    
                                    <?php } ?>    
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
                                    <?php if($maincatid==7){?>
                                    <select id="SelectOnChangeValue">
                                        <option value="<?php echo href('103');?>">1</option>
                                        <option value="<?php echo href('89');?>">2</option>
                                        <option value="<?php echo href('90');?>">3</option>
                                        <option value="<?php echo href('91');?>">4</option>
                                        <option value="<?php echo href('92');?>">5</option>
                                        <option value="<?php echo href('93');?>">6</option>
                                        <option value="<?php echo href('94');?>">7</option>
                                        <option value="<?php echo href('99');?>">8</option>
                                        <option value="<?php echo href('96');?>">9</option>
                                        <option value="<?php echo href('97');?>">10</option>
                                        <option value="<?php echo href('98');?>">11</option>
                                    </select>                                     
                                    <?php }else if($maincatid==8){ ?>
                                    <select id="SelectOnChangeValue"> 
                                        <option value="<?php echo href('102');?>">1</option>
                                        <option value="<?php echo href('72');?>">2</option>
                                        <option value="<?php echo href('73');?>">3</option>
                                        <option value="<?php echo href('74');?>">4</option>
                                        <option value="<?php echo href('75');?>">5</option>
                                        <option value="<?php echo href('76');?>">6</option>
                                        <option value="<?php echo href('77');?>">7</option>
                                        <option value="<?php echo href('82');?>">8</option>
                                        <option value="<?php echo href('79');?>">9</option>
                                        <option value="<?php echo href('80');?>">10</option>
                                        <option value="<?php echo href('81');?>">11</option> 
                                    </select>                                    
                                    <?php }else{ ?>
                                    <select id="SelectOnChangeValue"> 
                                        <option value="<?php echo href('104');?>">1</option>
                                        <option value="<?php echo href('61');?>">2</option>
                                        <option value="<?php echo href('62');?>">3</option>
                                        <option value="<?php echo href('63');?>">4</option>
                                        <option value="<?php echo href('64');?>">5</option>
                                        <option value="<?php echo href('65');?>">6</option>
                                        <option value="<?php echo href('66');?>">7</option>
                                        <option value="<?php echo href('71');?>">8</option>
                                        <option value="<?php echo href('68');?>">9</option>
                                        <option value="<?php echo href('69');?>">10</option>
                                        <option value="<?php echo href('70');?>">11</option> 
                                    </select>                                   
                                    <?php } ?>                                 
							</div>
						</div>
						<div class="FloorImageDiv row20" id="FloorMapID">
							<div class="LeftTextDiv" data-toggle="tooltip" data-placement="top" title="<?php echo l('mountains');?>"><img src="_website/img/mta.png"/></div>
							<div class="RightTextDiv" data-toggle="tooltip" data-placement="top" title="<?php echo l('sea');?>"><img src="_website/img/zgva.png"/></div>
							<div class="MobileFloorInfo">
								<span><?php echo (int)$title; ?> <?php echo l('floor');?></span>
								<div class="Btn1"><?php echo l('left');?> <?php echo count($items);?> <?php echo l('room');?></div>
							</div>
							<img src="<?php echo $image1 ?>" class="ImgMap" usemap="#features" />
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div> 
</div>
<div class="ScrollTop11"></div>