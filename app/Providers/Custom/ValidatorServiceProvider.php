<?php

namespace App\Providers\Custom;

use App\Libs\CustomValidator;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Translation\TranslatorInterface;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスの初期処理.
     *
     * @return void
     */
    protected function boot()
    {
        /*
         * Create a new Validator instance.
         *
         * @param  \Symfony\Component\Translation\TranslatorInterface $translator
         * @param  array                                              $data
         * @param  array                                              $rules
         * @param  array                                              $messages
         * @param  array                                              $customAttributes
         *
         * @return void
         */
        $this->app['validator']->resolver(
            function (
                TranslatorInterface $translator,
                array $data,
                array $rules,
                array $messages = [],
                array $customAttributes = []
            ) {
                return new CustomValidator($translator, $data, $rules, $messages, $customAttributes);
            }
        );
    }

    /**
     * アプリケーションサービスの登録.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
