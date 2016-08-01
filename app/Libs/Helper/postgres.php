<?php

// PHPの配列からPostgresの配列への変換
if (function_exists('toPgArray')) {
    function toPgArray(string $value)
    {
        return '{'.implode(',', $value).'}';
    }
}

// Postgresの配列をPHPの配列に変換
if (function_exists('fromPgArray')) {
    function fromPgArray(string $value)
    {
        return explode(',', trim($value, '{}'));
    }
}
