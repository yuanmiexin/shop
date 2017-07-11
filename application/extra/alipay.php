<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/11
 * Time: 13:56
 */
date_default_timezone_set("PRC");
return [
    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
    //应用ID
    'app_id'=>'2016080500170646',
    //商户私钥
    'app_private_key'=>'MIIEpAIBAAKCAQEAt/YG1z4J4rtvi2GCW0Xrw8YU+UIak8O1kAVJNBWNkOHOUDQ5QXv7k14ftqFcM4lThc+GJxW8eig3sPW4jMQmXWNA68IPJrAPw5yOFTCJmqiKlw5HZhpo0qlpQJHXfLoVfJIX/dCmtU0Nnnkk1BbC+ND2h+jvyOl8rPaB1ldqy+AUPXmY+GQrGje8AdJJo3WM4TbJQZys/Uc/+vzO11b3a3WPdOZ4HkPqJPDW3R3rFdl4PU8Pb2wcpnMq4bhTRpX5KlrRnWfojYpdTjQgkqJBhWAOnBzHPNL5dnN/Zri2ialXs6SrvnSxwWg/ro2yo05b54RSLzqNWugdl13pfpA3FwIDAQABAoIBAQC2v5jiIMZPUGaqLy8Bnz9smA3j5JBkdIqczTOAo1ykLj33nTm33QP5zQpyMnBW3jhz+MnLcCNxsxxIFoLEjGOUaHJpArpsc4DlkVPwpuw8EOzEzTGOs/OoOxXNSFSqmm2X98YPpkTGXQqHgM9eRlJgPa57K6NxksoBRU2McgEtD/h1Wz+Uv1lX1JWorsnrxw/Ew5icKwzbOez1H2IiDoMWYNO4f15K0xGFus1h6rl3wmjrBaJf80TRoUTQxTxXdxkM48MJ3/0WlgMp2dvdwUSD77TL4mFci/Cq3a/hv5+5Nq0hzkI5RFNHUJWEuVvN2jZStNbg7CMJcOjhZyiouNopAoGBAOp6Lk7fU6krPlXbKEGY3nvvNQDBOHnDpf0py9KaZVQcKAogLih3EiS3tr9vu56ft6upzLPJOM0oBkyDZyPRcEHb84C9k2rjFjYyANMRWcXZauJQKN9OdBzpqaA1Y+RCKoxXYuoDOKXRqJTB7KL+3vA7UBrvIWdP+s0r1M9FXrAFAoGBAMjYzMovt7dau+UdJpEayFhdbENliFIDL9GkmpPBmVR9tr5ic1a977LXIxORKm8F1dwMH99xgPJu2Y7pgXijp5NsAFWRF+cyjS+BeMfCfyRs3bsYx5MMiVjdRwcoLehKt9IF/iHZiIIfFX+YX1RzEUoEn+r98sN1X5R5zRSb3CFrAoGAafpBNergkER4TyvX3RYv8MokJawvT3Grc2pRsmWQSNzVCAaVdjqjG69hTNM+dKpxxIfhep0HLErb1fdKRbkiyNGWFGka2SO8ZVBiaQOdlLv5AEMExjFab7r4rO2UsZVqT7YrgeNk1iWV0W54+w7BSsk0IohUi7JthBA8hlYvPtUCgYAD5F+jk2UmAnYdrIDw0uoK/FR6wd7wZ+tnTp9IObo07vK5ocLGbYvVlWGyoV+HIz/PsdR0SgjLqeZBZLkDk3hN3QvsnJEwA8TEpOeoR1abaBir5YEIknee5zrXIqoxFDGXulIAaezBSMTr4hIG2uv82TYYIa+wpfeiMvIMcjDD3QKBgQCAaEpzoiMLfT9nVv2ZqDi1+LZOZV6QQk02MtUvcm7D4n6w/3Bi+hcZsI4nDE6OB/I6WpSYBTI4Fw8UxMSSHYsWwUsvYyrZj8D5p5quwXRgFdpufXYM54vCy4f8haxVV+7OtP62bdtD2tVDFHtroisdvf+UmxQcV8DmRfKwUg5DNA==',
    'format'=>'json',
    //编码格式
    'charset' => "UTF-8",
    //支付宝公钥
    'app_public_key'=>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt/YG1z4J4rtvi2GCW0Xrw8YU+UIak8O1kAVJNBWNkOHOUDQ5QXv7k14ftqFcM4lThc+GJxW8eig3sPW4jMQmXWNA68IPJrAPw5yOFTCJmqiKlw5HZhpo0qlpQJHXfLoVfJIX/dCmtU0Nnnkk1BbC+ND2h+jvyOl8rPaB1ldqy+AUPXmY+GQrGje8AdJJo3WM4TbJQZys/Uc/+vzO11b3a3WPdOZ4HkPqJPDW3R3rFdl4PU8Pb2wcpnMq4bhTRpX5KlrRnWfojYpdTjQgkqJBhWAOnBzHPNL5dnN/Zri2ialXs6SrvnSxwWg/ro2yo05b54RSLzqNWugdl13pfpA3FwIDAQAB',
    //签名方式,默认为RSA2(RSA2048)
    'sign_type'=>'RSA2',
    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "http://www.baidu.com",
    //最大查询重试次数
    'MaxQueryRetry' => "10",
    //查询间隔
    'QueryDuration' => "3",
    //日志文件
    'log_file' => RUNTIME_PATH.'/log/'.date('Ym').'/'.date('d').'.log',
];



