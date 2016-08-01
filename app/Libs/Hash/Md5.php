<?php

namespace App\Libs\Hash;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class Md5 implements HasherContract
{

    /**
     * Hash the given value.
     *
     * @param  string $value
     * @param  array  $options
     *
     * @return string  32文字
     */
    public function make($value, array $options = [])
    {
        return md5($value);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string $value
     * @param  string $hashedValue
     * @param  array  $options
     *
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        return ($this->make($value) === $hashedValue);
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string $hashedValue
     * @param  array  $options
     *
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }

}
