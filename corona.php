<?php
$data=file_get_contents('https://api.covid19api.com/summary');
$coronadata=json_decode($data);//json enable humans to read the data from unreadable form
//inshort it decodes those dATA into human readable form

 ?>
