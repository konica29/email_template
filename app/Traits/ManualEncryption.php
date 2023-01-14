<?php

namespace App\Traits;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

trait ManualEncryption {

    // will change after conversion
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        if (in_array($key, $this->encryptable) && ( ! is_null($value)))
        {
            try {
                // $value = Crypt::decrypt($value);
                $key = config("app.key");
                $salt = "ManualEncryption";
                return openssl_decrypt($value, "AES-256-CBC", $key, 0, $salt);
            }catch (DecryptException $e) {
                $value = $value;
            }
        }
        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable))
        {
            $value = self::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }

    public static function encrypt($value)
    {
        $key = config("app.key");
        $salt = "ManualEncryption"; // a random string for encryption
        return openssl_encrypt($value,"AES-256-CBC",$key, 0, $salt);
    }
}