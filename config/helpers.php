<?php

if (! function_exists('boolean')) {
    function boolean($value) 
    {
        return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
}

if (! function_exists('gen_uuid')) {
    function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
    
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
    
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }
}

if(! function_exists('array_keys_exists')){
    function array_keys_exists(array $keys, $arr) {
        return !array_diff_key(array_flip($keys), (array) $arr);
    }
}

if(! function_exists('setParamURL')){
    function setParamAPI($data = []){
        $param = [];
        $index = 0;
        $len = count($data);

        foreach ($data as $key => $value) {
            $value = preg_replace('/\s+/', '+', $value);

            if ($index == 0) {
                $param[] = sprintf('?%s=%s', $key, $value);
            }else{
                $param[] = sprintf('&%s=%s', $key, $value);
            }

            $index++;
        }

        return implode('', $param);
    }
}

if(! function_exists('has_sub_array')){
    function has_sub_array($array) {
        $filter = array_filter((array) $array, function($item){
            return (is_array($item) || is_object($item));
        });

        if(sizeof($filter) > 0) return true;

        return false;
    }
}

if(! function_exists('amount_format')){
    function amount_format($value, $decimal = 0){
        return number_format((float) $value, $decimal, ',', '.');
    }
}

if(! function_exists('get_email_domain')){
    function get_email_domain($email){
        $parts  = explode("@", $email);
        $domain = $parts[1];

        return $domain;
    }
}