<?php

class cypher
{
    static function passport_key($txt, $encrypt_key)
    {
        $encrypt_key = md5($encrypt_key);
        $ctr = 0;
        $tmp = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
            $tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
        }
        return $tmp;
    }

    public static function passport_encrypt($txt, $key = 'devide@126.com')
    {
        srand((double)microtime() * 1000000);
        $encrypt_key = md5(rand(0, 32000));
        $ctr = 0;
        $tmp = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
            $tmp .= $encrypt_key[$ctr] . ($txt[$i] ^ $encrypt_key[$ctr++]);
        }
        return urlencode(base64_encode(cypher::passport_key($tmp, $key)));
    }

    public static function passport_decrypt($txt, $key = 'devide@126.com')
    {
        $txt = cypher::passport_key(base64_decode(urldecode($txt)), $key);
        $tmp = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $md5 = $txt[$i];
            $tmp .= $txt[++$i] ^ $md5;
        }
        return $tmp;
    }


    public static function encrypt($string, $operation, $key = 'devide@126.com')
    {
        $key = md5($key);
        $key_length = strlen($key);
        $string = $operation == 'D' ? base64_decode($string) : substr(md5($string . $key), 0, 8) . $string;
        $string_length = strlen($string);
        $rndkey = $box = array();
        $result = '';
        for ($i = 0; $i <= 255; $i++) {
            $rndkey[$i] = ord($key[$i % $key_length]);
            $box[$i] = $i;
        }
        for ($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $rndkey[$i]) % 256;
            $tmp = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $tmp;
        }
        for ($a = $j = $i = 0; $i < $string_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;
            $tmp = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $tmp;
            $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
        }
        if ($operation == 'D') {
            if (substr($result, 0, 8) == substr(md5(substr($result, 8) . $key), 0, 8)) {
                return substr($result, 8);
            } else {
                return '';
            }
        } else {
            return str_replace('=', '', base64_encode($result));
        }
    }

    /***
     *$string： 明文 或 密文
     * $operation：true表示加密,false表示解密
     * $key： 密匙
     * $outtime：密文有效期, 单位为秒
     * $entype：加密方式 有md5和sha1两种 加密解密需要统一使用同一种方式才能正确还原明文
     */
    public static function edauth($string, $operation = true, $key = 'devide@126.com', $outtime = 0, $entype = 'md5')
    {
        $key_length = 4;
        if ($entype == 'md5') { //使用md5方式
            $long_len = 32;
            $half_len = 16;
            $entype == 'md5';
        } else { //使用sha1方式
            $long_len = 40;
            $half_len = 20;
            $entype == 'sha1';
        }
        $key = $key != '' ? $key : substr(md5($_SERVER['DOCUMENT_ROOT'] . C('AUTH_KEY') . $_SERVER['REMOTE_ADDR']), 0, 30);
        $fixedKey = hash($entype, $key);
        $egiskeys = md5(substr($fixedKey, $half_len, $half_len));
        $runtoKey = $key_length ? ($operation ? substr(hash($entype, microtime(true)), -$key_length) : substr($string, 0, $key_length)) : '';
        $keys = hash($entype, substr($runtoKey, 0, $half_len) . substr($fixedKey, 0, $half_len) . substr($runtoKey, $half_len) . substr($fixedKey, $half_len));
        $string = $operation ? sprintf('%010d', $outtime ? $outtime + time() : 0) . substr(md5($string . $egiskeys), 0, $half_len) . $string : base64_decode(substr($string, $key_length));
        $i = 0;
        $result = '';
        $string_length = strlen($string);
        for ($i = 0; $i < $string_length; $i++) {
            $result .= chr(ord($string{$i}) ^ ord($keys{$i % $long_len}));
        }
        if ($operation) {
            return $runtoKey . str_replace('=', '', base64_encode($result));
        } else {
            if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, $half_len) == substr(md5(substr($result, $half_len + 10) . $egiskeys), 0, $half_len)) {
                return substr($result, $half_len + 10);
            } else {
                return '';
            }
        }
    }

}
