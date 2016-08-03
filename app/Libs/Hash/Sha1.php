<?php

declare(strict_types=1);

namespace App\Libs\Hash;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class Sha1 implements HasherContract
{
    /**
     * Hash the given value.
     *
     * @param  string $value
     * @param  array  $options
     *
     * @return string  40文字
     */
    public function make($value, array $options = [])
    {
        return hash_hmac('sha1', $value, config('app.salt'));
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
        return $this->make($value) === $hashedValue;
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
