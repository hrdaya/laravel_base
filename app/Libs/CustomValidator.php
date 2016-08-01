<?php

namespace App\Libs;

use Illuminate\Validation\Validator;

/*
 * ---------------------------------------------------------------------------------------------------------------------
 * 独自バリデータクラス
 * ---------------------------------------------------------------------------------------------------------------------
 *
 * 各バリデータには「validate」プレフィクスを付けることが必要です
 * 例) public function validateCheckDigit($attribute, $value, $parameters) {}
 *
 * 上記のバリデーションを使用する際には「checkDigit」を指定します
 *
 * バリデーションのメッセージは「resources/lang/ja/validation.php」内に記述してください
 */

class CustomValidator extends Validator
{
    /**
     * JANコード・ITFコード等のチェックデジットを確認する.
     *
     * @param string $attribute  フィールド名
     * @param mixed  $value      検証する値
     * @param array  $parameters オプションパラメータ
     *
     * @return bool
     */
    public function validateCheckDigit($attribute, $value, $parameters)
    {
        $arr = str_split($value);
        // 偶数の和
        $even = 0;
        // 奇数の和
        $odd = 0;
        for ($i = 0, $len = count($arr) - 1; $i < $len; $i++) {
            if (($i + 1) % 2 == 0) {
                $even += (int) $arr[$i];
            } else {
                $odd += (int) $arr[$i];
            }
        }
        // 偶数の和を3倍+奇数の総和を加算して、下1桁の数字を10から引く
        $cd = 10 - (int) substr((string) (($even * 3) + $odd), -1);
        // 10なら1の位は0なので、0にする
        $cd = $cd === 10 ? '0' : (string) $cd;

        return substr($value, -1) === $cd;
    }
}
