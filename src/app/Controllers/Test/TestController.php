<?php
/**
 * Created by PhpStorm.
 * User: matao
 * Date: 2018/5/10
 * Time: 13:17
 */

namespace app\Controllers\Test;


use Server\CoreBase\Controller;

class TestController extends Controller
{
    public function testTcp()
    {
        
//        var_dump($this->client_data->data);
        $num = get_instance()->coroutineCountOnline();
        $this->send($num)->setTimeout(10);
    }
    
}