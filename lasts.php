<?php
			if(isset($_COOKIE['counter'])){
				
				$c = $_COOKIE['counter'];
				for($i=5;$i>0;$i--){
					
					if(isset($_COOKIE[$c])){
						print '<br>'.$_COOKIE[$c];
					}
					$c = ($c==1)? 5 : ($c-1);
				}
			}
			else{
				print "<br>No Pages Visited Yet";
			}
			
		?>