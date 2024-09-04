<?php

class Converter {

}

interface CanConvert {
    public function convert(float $value);
}

class CryptoConverter extends Converter {

    //Properties


    public function __construct(public string $currencyCode) {
        
    }

    //Methods
    public function convert(float $value = 1): float { // Default value of 1 when using the convert() method for the API
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);

        if ($json != false) { // We do have a file
            $data = json_decode($json);
            $last = $data->last;
            return $value * $last;
        } else { // We don't have a file
            return false;
        }
    }


}