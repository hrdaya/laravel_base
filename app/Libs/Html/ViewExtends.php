<?php
declare(strict_types=1);

namespace App\Libs\Html;

class ViewExtends
{
    public function init()
    {
        /*
         * エスケープ後に改行を<br>に変換する
         */
        \Blade::directive(
            'nl2br',
            function ($value) {
                return '<?＝ nl2br(e('.$value.'), false); ?>';
            }
        );

        /*
         * エラーキーを持っている場合はクラスを追加する
         */
        \Blade::directive(
            'hasError',
            function ($errors, $key) {
                return (empty($errors->first($key))) ? '' : ' has-error';
            }
        );

        /*
         * 引数が正の場合はchekedを出力する
         */
        \Blade::directive(
            'isCheked',
            function ($bool) {
                return ($bool) ? ' checked' : '';
            }
        );

        /*
         * 引数が一致する場合はselectedを出力する
         */
        \Blade::directive(
            'isSelected',
            function ($val1, $val2) {
                return ($val1 == $val2) ? ' selected' : '';
            }
        );
    }
}
