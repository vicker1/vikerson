<?php

Route::apiResource('/question','Questioncontroller');  

Route::apiResource('/category','Categorycontroller');  

Route::apiResource('/question/{question}/reply','Replycontroller'); 