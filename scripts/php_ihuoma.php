<?php

$personalData = [ 
                  'first_name'=> 'Alozie',
                  'last_name'=> 'Ihuoma',
                  'hng_id'=> 'HNG-01252',
                  'language'=> 'PHP',
                  'email'=> 'alozie.ihuomao@gmail.com'
                ];

                $message = 'Hello World, this is [Alozie] [Ihuoma] with HNGi7 ID [HNG-01252] using [PHP] for stage 2 task. alozie.ihuomao@gmail.com';
                $Data = json_encode($message);
                echo($Data);

?>
