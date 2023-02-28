<?php
ini_set('display_errors', 0);
if (file_get_contents('php://input') === '1')
    echo "{'status:winer', 'prize':'1','code_prize':'" . file_get_contents('php://input') . "'}";
if (file_get_contents('php://input') === '2')
    echo "{'status:winer', 'prize':'2','code_prize':'" . file_get_contents('php://input') . "'}";
if (file_get_contents('php://input') === '0')
    echo "{'status:winer', 'prize':'0','code_prize':'" . file_get_contents('php://input') . "'}";
if (file_get_contents('php://input') === '100')
    echo "{'status:used', 'prize':'none','code_prize':'" . file_get_contents('php://input') . "'}";

