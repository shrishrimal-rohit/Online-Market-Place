
	
	<?php
			if(isset($_COOKIE['count_1'])){
				
				$c = $_COOKIE['count_1'];
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