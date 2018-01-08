
<?php
			$menu = array('beef'=>'Beef','bread'=>'Bread','breakfast'=>'BreakFast','curry'=>'Curry','dinner'=>'Dinner','masala'=>'Masala','mushroom'=>'Mushroom','pizza'=>'Pizza','sea'=>'SeaFood','spagetti'=>'Spagetti');
			foreach($_COOKIE as $key=>$value){
				if(array_key_exists($key, $menu)){
					$arr[$menu[$key]] = $value;	
				}
			}
			if(empty($arr)){
				print "<br>No Pages Visited Yet";
			}
			else{
				arsort($arr);
				//print_r ($arr);
				$i=0;
				foreach($arr as $key=>$value){
					print "<br>";
					print $key.' Food Menu: visited '.$value.' times';
					$i++;
					if($i==5) break;
				}
			}
			
		?>