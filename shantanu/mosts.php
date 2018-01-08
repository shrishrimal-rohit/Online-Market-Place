<?php
			$products = array('compact'=>'Compact Cars','concept'=>'Concept Cars','convertible'=>'Convertible Cars','crossover'=>'Crossover Cars','hatchback'=>'Hatchback Cars','new'=>'New Cars','old'=>'Old Cars','sedan'=>'Sedan Cars','sports'=>'Sports Car','supercar'=>'Supercars');
			foreach($_COOKIE as $key=>$value){
				if(array_key_exists($key, $products)){
					$arr[$products[$key]] = $value;	
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
					print $key.' Product page: visited '.$value.' times';
					$i++;
					if($i==5) break;
				}
			}
			
		?>		