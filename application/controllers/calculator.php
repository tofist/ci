<?php
class calculator extends CI_Controller
{
    public function plus($bn1 = "25", $bn2 ="41")
    {
        echo "ค่าที่1=" .$bn1;
        echo "ค่าที่2=" .$bn2;
        echo "ค่าที่ผลรวม=" .($bn1+$bn2);
    }
}