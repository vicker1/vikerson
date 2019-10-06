<?php

Route::apiResource('/question','Questioncontroller');  

Route::apiResource('/category','Categorycontroller');  

Route::apiResource('/question/{question}/reply','Replycontroller'); 

Route::post('/like/{reply}','Likecontroller@likeit');
Route::delete('/like/{reply}','Likecontroller@unlikeit');