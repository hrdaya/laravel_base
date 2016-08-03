<?php

namespace App\Libs;

/**
 * フラッシュメッセージ管理クラス
 *
 * メッセージレベル(引数の$messageはstringもしくは配列を使用できます)
 *   Flash::info($message);    インフォメーション
 *   Flash::success($message); 成功メッセージ
 *   Flash::warning($message); 注意メッセージ
 *   Flash::error($message);   エラーメッセージ
 *
 * モーダルメッセージ(引数の$message, $title[省略可]共に文字列のみ使用可能です)
 *   Flash::error($message, $title);
 *
 * @package App\Libs
 */
class Flash
{

    /**
     * インフォメーション
     *
     * @param string|array $message
     *
     * @return $this
     */
    public function info($message)
    {
        if (!empty($message)) {
            $this->message($message, 'info');
        }

        return $this;
    }

    /**
     * 成功メッセージ
     *
     * @param  string|array $message
     *
     * @return $this
     */
    public function success($message)
    {
        if (!empty($message)) {
            $this->message($message, 'success');
        }

        return $this;
    }

    /**
     * 注意メッセージ
     *
     * @param  string|array $message
     *
     * @return $this
     */
    public function warning($message)
    {
        if (!empty($message)) {
            $this->message($message, 'warning');
        }

        return $this;
    }

    /**
     * エラーメッセージ
     *
     * @param  string|array $message
     *
     * @return $this
     */
    public function error($message)
    {
        if (!empty($message)) {
            $this->message($message, 'danger');
        }

        return $this;
    }

    /**
     * Flash an modal.
     *
     * @param  string $message
     * @param  string $title
     *
     * @return $this
     */
    public function modal(string $message, string $title = '')
    {
        \Session::flash('flash_notification.modal', $message);
        if (!empty($title)) {
            \Session::flash('flash_notification.title', $title);
        }

        return $this;
    }

    /**
     * Flash a general message.
     *
     * @param  string|array $message
     * @param  string       $level
     *
     * @return $this
     */
    protected function message($message, $level = 'info')
    {
        // 配列の場合は再帰処理
        if (is_array($message)) {
            foreach ($message as $val) {
                $this->message($val, $level);
            }
        }
        // セッションに保存
        if (session()->has('flash_notification.'.$level)) {
            // すでに登録されている場合は現在のメッセージに追記
            $flash = session('flash_notification.'.$level);
            $flash[] = $message;
            \Session::flash('flash_notification.'.$level, $flash);
        } else {
            // まだ登録されていない場合は配列にして保存
            \Session::flash('flash_notification.'.$level, (array)$message);
        }

        return $this;
    }

}
