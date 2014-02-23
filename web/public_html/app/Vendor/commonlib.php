<?php

class CommonLib {
    
    public static function EncryptPassword($pwd) {
        if (empty($pwd)) {
            return null;
        }
        return md5(md5($pwd));
    }
}
