<?php
			$products = array('compact'=>'Compact Cars','concept'=>'Concept Cars','convertible'=>'Convertible Cars','crossover'=>'Crossover Cars','hatchback'=>'Hatchback Cars','new'=>'New Cars','old'=>'Old Cars','sedan'=>'Sedan Cars','sports'=>'Sports Car','supercar'=>'Supercars');
			foreach($_COOKIE as $key=>$value){
				if(array_key_exists($key, $products)){
					$arr1[$products[$key]] = $value;
				}
			}
			if(empty($arr1)){
				print "<br>No Pages Visited Yet";
			}
			else{
				arsort($arr1);
				//print_r ($arr);
				$i=0;
				foreach($arr1 as $key=>$value){
					print "<br>";
					print $key.' Product page: visited '.$value.' times';
					$i++;
					if($i==5) break;
				}
			}

		?>
