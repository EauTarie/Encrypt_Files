<?php

namespace App\Service;

define('FILE_ENCRYPTION_BLOCKS', 10000);
class EncryptFiles
{
    public function;
    /**
     * @param $source   |   Path of the UNENCRYPTED FILE
     * @param $dest     |   Path of the ENCRYPTED FILE to CREATED
     * @param $key      |   Encryption KEY
     */
    public function encryptFile($source, $dest, $key)
    {
        $cipher = 'aes-256-cbc';
        $ivLenght = openssl_ciper_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivLenght);
    }
}