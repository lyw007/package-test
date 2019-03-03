<?php
/**
 * Created by PhpStorm.
 * User: lyw
 * Date: 2019-03-03
 * Time: 21:53
 */

namespace Finlab\Packages;


class MD5Hasher
{

    public function make($plainValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $plainValue . $salt);

    }

    public function check($plainValue, $hashValue, array $options = [])
    {

        return $this->make($plainValue, $options) === $hashValue;
    }
}