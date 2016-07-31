<?php

namespace App\Http\Middleware\Custom;

use Closure;

class ResponseHeader
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $nextコールバックに渡して以降の処理を実施
        $response = $next($request);

        // 常につけるヘッダをセットする
        // セキュリティヘッダ ============================================================================================
        // XSS攻撃を検知させる（検知したら実行させない）
        $response->header('X-XSS-Protection', '1; mode=block');

        // IEにコンテンツの内容を解析させない（ファイルの内容からファイルの種類を決定させない）
        $response->header('X-Content-Type-Options', 'nosniff');

        // ダウンロード時に開くボタンを表示させない
        $response->header('X-Download-Options', 'noopen');

        // iframe 内のページ表示を同一オリジンのみ許可
        $response->header('X-Frame-Options', 'SAMEORIGIN');

        // Content Security Policyの適用
        if (!config('app.debug')) {
            $policy = [
                "default-src 'self'",
                "object-src 'none'",
            ];
            $implodePolicy = implode(';', $policy);
            $response->header('Content-Security-Policy', $implodePolicy);
            $response->header('X-Content-Security-Policy', $implodePolicy);
            $response->header('X-Webkit-CSP', $implodePolicy);
        }

        // SSLを強制する
        if (\App::environment('production')) {
            $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        // キャッシュヘッダ ==============================================================================================
        $response->header('Expires', 'Thu, 01 Jan 1970 00:00:00 GMT');
        $response->header('Last-Modified', gmdate('D, d M Y H:i:s').' GMT');

        // HTTP/1.1
        $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

        // HTTP/1.0
        $response->header('Pragma', 'no-cache');

        return $response;
    }

}
