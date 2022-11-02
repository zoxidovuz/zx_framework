<?php


define('DEBUG', 1);

class NotFoundException extends Exception{
    public function __construct($message, $code = 404)
    {
        parent::__construct($message, $code);
    }
}


class ErrorHandler{

    
}


new ErrorHandler();

// try{

//     if(empty($test)){
//         throw new Exception('O no this is wrong!');
//     }
// }catch(Exception $error){
//     var_dump($error);
// }

// throw new NotFoundException('This is page not found');

echo $test;

?>