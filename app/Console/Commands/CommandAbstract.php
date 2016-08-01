<?php

namespace App\Console;

use Illuminate\Console\Command;
use App\Libs\LogFormat;

abstract class CommandAbstract extends Command
{
    /**
     * コマンド名、引数、オプションを文字列で指定します
     * protected $signature = 'command:name {argument} {--option}'.
     *
     * 引数（必須）
     * 'command:name {argument}'
     *
     * 引数（任意）
     * 'command:name {argument?}'
     *
     * 引数（初期値）
     * 'command:name {argument=default}'
     *
     * オプション（true）
     * 'command:name {--option}'
     *
     * オプション（値を受け取る）
     * 'command:name {--option=}'
     *
     * オプション（値を受け取る or 初期値）
     * 'command:name {--option=default}'
     *
     * @var string
     */
    protected $signature = 'index:base';

    /**
     * コンソールコマンドの説明(必須で入力)
     * バッチ名を入力すること
     * 例) 【バッチ番号: バッチ名】.
     *
     * @var string
     */
    protected $description = '';

    /**
     * メール送信用等のメッセージを保存しておくための配列.
     *
     * @var array
     */
    protected $messages = [];

    /**
     * エラーメッセージを保存しておくための配列.
     *
     * @var array
     */
    protected $errors = [];

    /**
     * コンソールコマンドの実行.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $this->initLogger();
            $this->preProcess();
            $this->process();
            $this->postProcess();
        } catch (\Exception $e) {
            // エラーメッセージとトレースを本文にセットする
            $body = $e->getMessage()."\n".$e->getTraceAsString();
            // エラーの配列がある場合は本文に追加
            if (! empty($this->errors)) {
                $body .= "\n\n【エラー一覧】\n".implode("\n", $this->errors);
            }
            // メッセージの配列がある場合は本文に追加
            if (! empty($this->messages)) {
                $body .= "\n\n【メッセージ一覧】\n".implode("\n", $this->messages);
            }
            // コンソールに出力
            $this->error($body);
            // ログに記述
            \Log::error($body);
            // メールの送信
            \Mail::raw(
                $body,
                function ($message) {
                    $message->subject($this->description.' エラーが発生しました');
                }
            );
        }
    }

    /**
     * ログの初期化.
     */
    protected function initLogger()
    {
        $module = explode(':', $this->name);
        $monolog = \Log::getMonolog();
        (new LogFormat())->init($monolog, $module[1] ?: 'unknownCommand');
    }

    /**
     * 実行するバッチ
     * 下記は例
     * extendして利用すること.
     */
    protected function process()
    {
        try {
            // ここに処理
            // 出力用文字列
            $str = $this->description.' 正常終了';
            // コンソールに出力
            $this->comment($str);
            // ログに記述
            \Log::info($str);
        } catch (\Exception $e) {
            // 出力用文字列
            $str = $this->description.' エラー終了';
            // コンソールに出力
            $this->warn($str);
            // ログに記述
            \Log::warning($str);
            // handle()のエラー処理にスローする(エラーメール送信処理)
            throw $e;
        }
    }

    /**
     * 事前処理.
     */
    protected function preProcess()
    {
        \Log::info($this->description.' 処理開始');
    }

    /**
     * 事後処理.
     */
    protected function postProcess()
    {
    }

    /**
     * メッセージを追加する.
     *
     * @param any $message
     */
    protected function addMessage($message)
    {
        $this->messages[] = '['.(new \DateTime())->format('Y/m/d H:i:s').'] '.var_export($message, true);
    }

    /**
     * エラーを追加する.
     *
     * @param any $message
     */
    protected function addError($message)
    {
        $this->errors[] = '['.(new \DateTime())->format('Y/m/d H:i:s').'] '.var_export($message, true);
    }
}
