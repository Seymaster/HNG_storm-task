<?php
	$data = [];
	$script_dir = 'scripts';
	 foreach (glob($script_dir. "/*.*") as $myfiles) {
      $files[] = $myfiles;
   }
   foreach ($files as $index => $value) {
   	switch ($value) {
   		case substr($value, -3) == '.js':
   			exec( 'node '.$value, $output, $status );
			   if($output == null){
				  echo $value ." Failed";
   			}else{
   				$data[$index] = $output[0];
   				unset($output);
   			}	
   			break;
   		case substr($value, -4) == '.php':
   			exec( 'php '. $value, $output, $status );
			   if($output == null){
				  echo $value ." Failed";
   			}else{
   				$data[$index] = $output[0];
   				unset($output);
   			}	
   			break;
         case substr($value, -3) == '.py':
            exec( 'python '. $value, $output, $status );
            if($output == null){
              echo $value ." Failed";
            }else{
               $data[$index] = $output[0];
               unset($output);
            }  
            break;
   		
   		default:
   			# code...
   			break;
   	}
   	
   }

   return var_dump($data);
?>