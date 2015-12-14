<?php

namespace Szurat\Component\Password\Method;


use Szurat\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

public function encode($plainText){
$sha1 = sha1($plainText);

return $sha1;

}


}