<?php
namespace Qcloud_cos;

class Conf
{
    const PKG_VERSION = '1.0.0'; 

    const API_IMAGE_END_POINT = 'http://web.image.myqcloud.com/photos/v1/';
    const API_VIDEO_END_POINT = 'http://web.video.myqcloud.com/videos/v1/';
    const API_COSAPI_END_POINT = 'http://web.file.myqcloud.com/files/v1/';
    //请到http://console.qcloud.com/cos去获取你的appid、sid、skey
    static $app_id = 'your appid';
    static $secret_id = 'your secretId';
    static $secret_key = 'your secretKey';

    public static function setAppId($app_id) {
        Conf::$app_id = $app_id;
    }

    public static function setSecretId($secret_id) {
        Conf::$secret_id = $secret_id;
    }

    public static function setSecretKey($secret_key) {
        Conf::$secret_key = $secret_key;
    }

    public static function getUA() {
        return 'QcloudPHP/'.self::PKG_VERSION.' ('.php_uname().')';
    }
}


//end of script
