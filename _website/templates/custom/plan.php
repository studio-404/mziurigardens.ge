<?php defined('DIR') OR exit; ?>
<div class="ProjectContentDiv WithBackground BackgroundBlue MobileWidth100">
	<div class="container Padding0"> 
		
		<div class="SelectsDiv"> 
			<div class="Item Item1">  
				<select id="SelectOnChangeValue"> 
					<optgroup label="<?php echo menu_title('8');?>">
						<option value="<?php echo href('81');?>">11</option>
						<option value="<?php echo href('80');?>">10</option>
						<option value="<?php echo href('79');?>">9</option>
						<option value="<?php echo href('82');?>">8</option>
						<option value="<?php echo href('77');?>">7</option>
						<option value="<?php echo href('76');?>">6</option>
						<option value="<?php echo href('75');?>">5</option>
						<option value="<?php echo href('74');?>">4</option>
						<option value="<?php echo href('73');?>">3</option>
						<option value="<?php echo href('72');?>">2</option>
						<option value="<?php echo href('102');?>">1</option> 
					</optgroup>
				</select> 
			</div>
			<div class="Item Item2"> 
				<select id="SelectOnChangeValue2">
					<optgroup label="<?php echo menu_title('7');?>">
						<option value="<?php echo href('98');?>">11</option>
						<option value="<?php echo href('97');?>">10</option>
						<option value="<?php echo href('96');?>">9</option>
						<option value="<?php echo href('95');?>">8</option>
						<option value="<?php echo href('94');?>">7</option>
<!--						<option value="<?php echo href('93');?>">6</option>
						<option value="<?php echo href('92');?>">5</option>
						<option value="<?php echo href('91');?>">4</option>
						<option value="<?php echo href('90');?>">3</option>
						<option value="<?php echo href('89');?>">2</option>
						<option value="<?php echo href('103');?>">1</option>-->
					</optgroup>
				</select> 
			</div>
			<div class="Item Item3">  
				<select id="SelectOnChangeValue3">
					<optgroup label="<?php echo menu_title('6');?> ">
						<option value="<?php echo href('70');?>">11</option>
						<option value="<?php echo href('69');?>">10</option>
						<option value="<?php echo href('68');?>">9</option>
						<option value="<?php echo href('67');?>">8</option>
						<option value="<?php echo href('66');?>">7</option>
						<option value="<?php echo href('65');?>">6</option>
						<option value="<?php echo href('64');?>">5</option>
						<option value="<?php echo href('63');?>">4</option>
						<option value="<?php echo href('62');?>">3</option>
						<option value="<?php echo href('61');?>">2</option>
						<option value="<?php echo href('104');?>">1</option>
					</optgroup>
				</select> 
			</div> 
		</div>
		
		
		<div class="row">
			<div class="col-sm-12"> 
				<div class="MapAreaDiv">
					<div class="PlanTitle">
						<?php echo l('choose');?>
					</div>
					<?php 
					$oleandra = g_select_building(8);					
					$ole = [];
					foreach ($oleandra as $v) {
						$ole[(int)$v["menutitle"]] = $v;
					}

					$gardens = g_select_building(7);
					$gar = [];
					foreach ($gardens as $v) {
						$gar[(int)$v["menutitle"]] = $v;
					}

					$hortenzia = g_select_building(6);
					$hor = [];
					foreach ($hortenzia as $v) {
						$hor[(int)$v["menutitle"]] = $v;
					}
					?>

					<img src="_website/img/project_image_1.jpg" class="map" id="sadasdada" usemap="#features" alt=""/>
					<map name="features">                        
                        <area size="<div class='FloorToolTip Color1'><span>11 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="168, 251, 484, 248, 656, 319, 656, 276, 484, 193, 168, 197" href="<?php echo href('81');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>10 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="165, 298, 483, 297, 654, 356, 655, 319, 488, 247, 166, 249" href="<?php echo href('80');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>9 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[9]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="165, 352, 485, 351, 655, 395, 655, 355, 485, 293, 166, 297" href="<?php echo href('79');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>8 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[8]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 399, 486, 399, 655, 435, 655, 397, 484, 346, 166, 348" href="<?php echo href('82');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>7 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[7]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 452, 486, 453, 654, 475, 655, 435, 485, 397, 166, 398" href="<?php echo href('77');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>6 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[6]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 501, 486, 503, 655, 511, 655, 467, 485, 447, 166, 448" href="<?php echo href('76');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>5 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[5]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 554, 486, 554, 655, 551, 656, 508, 485, 498, 166, 499" href="<?php echo href('75');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>4 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[4]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 603, 486, 605, 661, 594, 661, 552, 486, 551, 166, 550" href="<?php echo href('74');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>3 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[3]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 655, 488, 656, 665, 634, 664, 590, 486, 601, 167, 601" href="<?php echo href('73');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>2 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[2]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="166, 701, 488, 705, 663, 674, 663, 633, 487, 651, 166, 650" href="<?php echo href('72');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span>1 - <?php echo menu_title('8');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$ole[1]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="165, 754, 484, 756, 659, 702, 659, 663, 487, 702, 166, 700" href="<?php echo href('102');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        
                        <area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('109');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" shape="poly" coords="205, 813, 479, 817, 655, 755, 656, 709, 483, 757, 206, 757" href="<?php echo href('109');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                       						
						<area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('108');?></span><label> </label></div>" class="FloorHover fancybox"  data-fancybox="parking1" shape="poly" coords="206, 831, 424, 832, 455, 829, 484, 817, 839, 819, 850, 825, 1088, 824, 1099, 820, 1440, 819, 1459, 823, 1500, 829, 1535, 830, 1737, 829, 1737, 883, 1514, 886, 1476, 881, 1444, 878, 1109, 878, 1089, 885, 1064, 886, 879, 886, 842, 882, 831, 879, 491, 875, 469, 885, 424, 888, 207, 884" href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
                        <area size="<div class='FloorToolTip Color1'><span><?php echo menu_title('107');?></span><label> </label></div>" class="FloorHover fancybox"  data-fancybox="parking2" shape="poly" coords="205, 935, 204, 882, 410, 884, 469, 878, 488, 872, 831, 872, 838, 878, 880, 882, 1054, 883, 1077, 881, 1108, 877, 1443, 874, 1472, 878, 1514, 882, 1733, 879, 1732, 933, 1534, 936, 1515, 938, 1507, 939, 1500, 938, 1474, 934, 1456, 933, 1441, 929, 1107, 932, 1078, 938, 1055, 938, 873, 937, 856, 938, 831, 934, 823, 930, 487, 932, 470, 934, 457, 938, 424, 939" href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-maphilight= '{"alwaysOn":false,"strokeColor":"15b99b","strokeWidth":3,"fillColor":"15b99b","fillOpacity":0.8}'/> 
					 
					 
					 
					 
						<area size="<div class='FloorToolTip Color2'><span>11 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="809, 250, 1133, 250, 1133, 196, 809, 196" href="<?php echo href('98');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>10 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="809, 301, 1133, 301, 1133, 250, 810, 250" href="<?php echo href('97');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color2'><span>9 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[9]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="809, 353, 1133, 353, 1133, 299, 810, 299" href="<?php echo href('96');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color2'><span>8 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[8]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="809, 401, 1134, 401, 1135, 348, 810, 350" href="<?php echo href('99');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color2'><span>7 - <?php echo menu_title('7');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$gar[7]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="809, 453, 1134, 453, 1135, 400, 810, 401" href="<?php echo href('94');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
 						
 						<area size="<div class='FloorToolTip Color2'><span><?php echo menu_title('112');?><div class='PlanIcon'></div></span><label><?php echo menu_title('7');?></label></div>" class="FloorHover" shape="poly" coords="810, 454, 811, 756, 1131, 756, 1133, 453" href="<?php echo href('112');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						<area size="<div class='FloorToolTip Color2'><span><?php echo menu_title('110');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" shape="poly" coords="834, 757, 833, 824, 1131, 821, 1131, 755" href="<?php echo href('110');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"fec20e","strokeWidth":3,"fillColor":"fec20e","fillOpacity":0.8}'/> 
						
						<!-- hortenzia -->
						<area size="<div class='FloorToolTip Color3'><span>11 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[11]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1271, 318, 1459, 249, 1773, 252, 1773, 199, 1453, 196, 1272, 276" href="<?php echo href('70');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>10 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[10]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1271, 360, 1453, 300, 1773, 299, 1773, 251, 1453, 249, 1272, 318" href="<?php echo href('69');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 

						<area size="<div class='FloorToolTip Color3'><span>9 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[9]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1270, 400, 1455, 352, 1773, 352, 1773, 300, 1451, 299, 1271, 357" href="<?php echo href('68');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>8 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[8]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1270, 436, 1455, 398, 1772, 399, 1772, 348, 1451, 346, 1271, 394" href="<?php echo href('71');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>7 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[7]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1269, 477, 1453, 452, 1772, 452, 1772, 400, 1451, 399, 1271, 433" href="<?php echo href('66');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>6 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[6]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1270, 515, 1447, 503, 1772, 502, 1772, 451, 1450, 450, 1271, 469" href="<?php echo href('65');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>5 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[5]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1265, 554, 1447, 554, 1772, 553, 1772, 499, 1450, 500, 1265, 511" href="<?php echo href('64');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>4 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[4]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1255, 594, 1444, 604, 1774, 600, 1774, 550, 1452, 551, 1256, 550" href="<?php echo href('63');?>" data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}' /> 
						
						<area size="<div class='FloorToolTip Color3'><span>3 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[3]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1255, 633, 1444, 655, 1773, 653, 1774, 601, 1452, 602, 1254, 590" href="<?php echo href('62');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>2 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[2]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1254, 675, 1444, 705, 1774, 705, 1774, 652, 1452, 653, 1251, 630" href="<?php echo href('61');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						
						<area size="<div class='FloorToolTip Color3'><span>1 - <?php echo menu_title('6');?><div class='PlanIcon'></div></span><label><?php echo l('left')?> <?=$hor[1]["avaliable"]?> <?php echo l('room')?></label></div>" class="FloorHover" shape="poly" coords="1252, 719, 1448, 755, 1774, 755, 1774, 702, 1452, 703, 1248, 670" href="<?php echo href('104');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
						<area size="<div class='FloorToolTip Color3'><span><?php echo menu_title('111');?><div class='PlanIcon'></div></span><label> </label></div>" class="FloorHover" shape="poly" coords="1265, 761, 1447, 810, 1734, 811, 1735, 756, 1464, 755, 1259, 713" href="<?php echo href('111');?>"  data-maphilight= '{"alwaysOn":false,"strokeColor":"54baea","strokeWidth":3,"fillColor":"54baea","fillOpacity":0.8}'/> 
					</map>
				</div>
			</div> 
		</div>
		
		
		<div class="ParkingImagesDiv">
			<div class="Parking111">
				<a href="https://mziurigardens.ge/files/flats/parking/garage_1.jpg" data-fancybox="parking1" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_1.jpg"/>
				<a>
				<a href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-fancybox="parking1" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_2.jpg"/>
				<a>
			</div>
			<div class="Parking222">
				<a href="https://mziurigardens.ge/files/flats/parking/garage_1.jpg" data-fancybox="parking2" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_1.jpg"/>
				<a>
				<a href="https://mziurigardens.ge/files/flats/parking/garage_2.jpg" data-fancybox="parking2" class="fancybox">
					<img src="https://mziurigardens.ge/files/flats/parking/garage_2.jpg"/>
				<a>
			</div>
		</div>
		
		
		<div class="SmallSelectMobile">
			<div class="Item Color111">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('8');?></div> 
				</div>
			</div>
			<div class="Item Color222">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('7');?></div> 
				</div>
			</div>
			<div class="Item Color333">
				<div class="MobileFloorChange">
					<div class="FloorNumber1"><?php echo menu_title('6');?></div> 
				</div>
			</div>
		</div>
		
		
		
 
	</div>
</div>