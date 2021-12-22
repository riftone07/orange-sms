<?php

use Riftone07\OrangeSms\SmsApiController;

Route::get('send-orange-sms', function(){
    echo 'Hello from the calculator package!';
});

Route::get('send-orange-sms/{telephone}/{message}', [SmsApiController::class,'sendMessage']);
