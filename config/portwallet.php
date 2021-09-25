<?php
return [
   'key' => env('PORTWALLET_KEY',''),
   'secret' => env('PAYPAL_SECRET',''),
   'settings' => array(
       'mode' => env('PORTWALLET_MODE','sandbox'),
       'http.ConnectionTimeOut' => 30,
       'log.LogEnabled' => true,
       'log.FileName' => storage_path() . '/logs/portwallet.log',
       'log.LogLevel' => 'ERROR'
   ),
];
