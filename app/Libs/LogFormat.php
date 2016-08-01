<?php

namespace App\Libs;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Processor\IntrospectionProcessor;

class LogFormat
{
    /**
     * ログの設定を初期化します.
     *
     * @param Logger $monolog
     * @param string $name
     */
    public function init(Logger $monolog, string $name = 'all')
    {
        $log_path = storage_path().DIRECTORY_SEPARATOR
            .'logs'.DIRECTORY_SEPARATOR
            .(new \DateTime())->format('Y-m-d_')
            .$name.'.log';
        $log_stream_handler = new StreamHandler($log_path, Logger::DEBUG);

        // ログのフォーマットを設定する
        $log_format = '[%datetime%] %channel%.%level_name%: %extra.class%::%extra.function% [Line: %extra.line%]'.PHP_EOL
            .'%message% %context%'.PHP_EOL.PHP_EOL;
        $formatter = new LineFormatter($log_format, null, true, true);

        // ハンドラーにログのフォーマットを設定する
        $log_stream_handler->setFormatter($formatter);

        // monologにハンドラーをセットする
        $monolog->pushHandler($log_stream_handler);

        // extraフィールドにログを出力したファイルのデータを出力する設定を行う
        $monolog->pushProcessor(
            new IntrospectionProcessor(
                Logger::DEBUG,
                [
                    'Monolog\\',
                    'Illuminate\\',
                ]
            )
        );
    }
}
