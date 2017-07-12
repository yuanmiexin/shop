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
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
    //应用ID
    'app_id'=>'2017071107712436',
    //商户私钥
    'app_private_key'=>'MIIEpgIBAAKCAQEA2hne8ubVJTwmwrzNofkoGN5bxYdSf+aenkNGB3DKjC0o6C9SR5FUmJdQEABFERPekZgnBoBNjn5Ox1/fE71wrnptFN00VU2qb6XWQkxwpJvHivSE/xmboEVtG7hx4thxy9JMmL1fM804RgyDRUC9Xh7U81mR9lZKv3gvJIrQzsxNQLbksKT381d9+QlqOGnoWteUPHmxSHzfhY42zmm9gBPsj9zGCcUEyEAkEH4lr0D1kGkPA+nuVG/J0SYa8YycbBykt/0BVrYGkN3p88zNEHKgNEQoA9/bTfA4TEy2b00X6BnaSZI0c1BxsXVchs6AtzgYjAbqiKThOI6xrzN0UQIDAQABAoIBAQCna5ydUVzlDFukuVIQuDZzgJ1p8AsAa4PvcSzcoVSabkAsm8bJcWJDEERBRDPAfEQp92ZdszfV3leS7KFNgepxxUDe9z8pDEl9Ewx6MDt34K04maNOP9YbHbA3y0qBHC2ejHyH8zaViT9dZlWOX7f9/CTz+Rn2wx72A8gMgRLw6q/Rm0qQdhZLKU09zQKjfDqIcW5YKK3wuBqN2I+7DRkfE/gBqxoFxlNSeL9Smy/c1Pz2XpIdqw51ix2s+F3bXMj4hb7JlIGJ3iWoJM1DNfXGAfk9OAU+f60kKF+KRWfKhWzBPK/Y4GPXL+GtY1NuJnl06ci99Og/m3ZP3HbpAOORAoGBAP5QYuDIlfzcAb3qlUaDAqE89+QoQYKgK5gjRXYr1ouwqreMsMa0xl0BVmRcu1KpZJLvbXPYHuWvemKcjYqEFzV5s6nMT/SCfvOvNpsZJt2DVHAGrJphFkrW5CwBVR6Gp2w6nhBbIMSgQFecEgo1aXcFXGW8MsEulrVKzCvcEdv3AoGBANuMBnFlLM6CGNOpmv6EqO54C39CsasUANyIWhD00uIe+LttCm8n4xwpH63vl0C78u3WWuI1HAtjofQEq7lND5tk5BagbbYGWaNobeaeOCNQLXAI3amR6KCWM8gh01897ULwi2+cKyYPvc3Eg5RXP0L/AYy1lVDL4T07zkDV4U/3AoGBANMi1hSdM7kMxv1vpqM13ZcT0RLBQTI73DWhAuhLGQI8mF9vFMzEBPPuSlVkj7jfHbrHwO0ufuheOZNpOjHH3KTu93R/RdpQBSo3S3SU+ylpAU9Im0BIXoOfySunp42Cabl3KQeXQKs+CG00C94h3f+Mmdt01gaAsWquQLghK0qdAoGBALNUoT6mwf68zcK221/ixIpljB6bP7zaTgnVZpxLHqaNXebanpdFIYGzJalR915tJ3WWjg4QC6RR8cv8tLhbddAcjSLeUD9K2JVdi8fAnWJa74J/+2+zOy1RA2MKHjnBv7fZ/EtiaOxiF0uopUHaMlZrLbzd5eVlY8o8u7DCA5TpAoGBAKEKOnWJC2ltMdVbX0+x9TpSqr76fdYWKr9QEK2BKUPpnOT9/KnTNVRx9r7lRQomj8kH3w6UsqbwhEgv7CsDQ7LVmKl+n1+jaJl5hg5yVellaXMpeYRcwe9+XX50k+XTj0O9+ks1dfBooSO+gx7kI3H+2WVfHH8pv7bx3f/au1le',
    'format'=>'json',
    //编码格式
    'charset' => "UTF-8",
    //支付宝公钥
    'app_public_key'=>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2hne8ubVJTwmwrzNofkoGN5bxYdSf+aenkNGB3DKjC0o6C9SR5FUmJdQEABFERPekZgnBoBNjn5Ox1/fE71wrnptFN00VU2qb6XWQkxwpJvHivSE/xmboEVtG7hx4thxy9JMmL1fM804RgyDRUC9Xh7U81mR9lZKv3gvJIrQzsxNQLbksKT381d9+QlqOGnoWteUPHmxSHzfhY42zmm9gBPsj9zGCcUEyEAkEH4lr0D1kGkPA+nuVG/J0SYa8YycbBykt/0BVrYGkN3p88zNEHKgNEQoA9/bTfA4TEy2b00X6BnaSZI0c1BxsXVchs6AtzgYjAbqiKThOI6xrzN0UQIDAQAB',
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



