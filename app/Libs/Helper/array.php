<?php

declare(strict_types=1);

if (function_exists('array_split')) {
    /**
     * リクエストパラメータをヘッダと明細に変換.
     *
     * @param array $all         変換元の配列
     * @param array $headerParam 取得するヘッダのキーとデフォルト値
     * @param array $detailParam 取得する明細のキーとデフォルト値
     *
     * @return array
     */
    function array_split(array $all, array $headerParam, array $detailParam)
    {
        // ヘッダを分離
        $headers = array_intersect_key($all, array_flip(array_keys($headerParam)));
        // 明細を分離
        $detailTmp = array_intersect_key($all, array_flip(array_keys($detailParam)));
        // ヘッダに抜けているキーにデフォルト値を設定
        $headers += $headerParam;
        // 明細キーの最大行数を取得
        $maxCount = 0;
        foreach ($detailTmp as $values) {
            $count = count($values);
            $maxCount = ($maxCount > $count) ? $maxCount : $count;
        }
        // 明細とするキーを行の配列に変換
        $details = [];
        // 最大行数分ループ
        for ($i = 0; $i < $maxCount; $i++) {
            // 一時保存用配列
            $tmp = [];
            // キーの数分ループ
            foreach ($detailParam as $key => $value) {
                // キーが存在する場合はその値、存在しない場合はデフォルト値を一時配列に保存
                $tmp[$key] = (array_key_exists($key, $detailTmp) and array_key_exists($i, $detailTmp[$key]))
                    ? $detailTmp[$key][$i] : $value;
            }
            // 一時配列を返信用配列に挿入
            $details[] = $tmp;
        }

        // 配列にして返す
        return [$headers, $details];
    }
}

if (function_exists('array_key_exists_or')) {
    /**
     * 配列に指定したキーが無ければデフォルト値を返す.
     *
     * @param string $key     キー
     * @param array  $arr     配列
     * @param        $default デフォルト値
     *
     * @return mixed
     */
    function array_key_exists_or($key, array $arr, $default)
    {
        return array_key_exists($key, $arr) ? $arr[$key] : $default;
    }
}
