<?php
function show($status,$message='',$data=[])
{
    return [
        'status'=>$status,
        'SMS' =>$message,
        'data'=>$data
    ];

}