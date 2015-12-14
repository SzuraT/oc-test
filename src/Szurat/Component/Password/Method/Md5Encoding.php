<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */
namespace Szurat\Component\Password\Method;
use Szurat\Component\Password\EncodingMethod;
class Md5Encoding implements EncodingMethod
{
    public function encode($plainText)
    {
        return md5($plainText);
    }
}