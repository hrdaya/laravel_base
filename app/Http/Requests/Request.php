<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

abstract class Request extends FormRequest
{
    /**
     * ユーザーがこのリクエストの権限を持っているかを判断する
     * アプリケーションの他の場所で認証のロジックを行おうと設計しているのでしたら、シンプルにauthorizeメソッドからtrueを返してください。
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * フォームリクエストのバリデータを拡張.
     *
     * @see    \Illuminate\Foundation\Http\FormRequest::getValidatorInstance()
     *
     * @param  \Illuminate\Contracts\Validation\Factory $factory
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(ValidationFactory $factory)
    {
        // 値検証前の処理(バリデーション前のフィルタリング)
        $this->beforeValidate();

        $validator = $factory->make(
            $this->validationData(),
            $this->container->call([$this, 'rules']),
            $this->messages(),
            $this->attributes()
        );

        // 値検証後の処理(通常のバリデータで処理できないバリデーション処理)
        $validator = $this->afterValidate($validator);

        // 入力値の型変換
        $this->changeType();

        return $validator;
    }

    /**
     * 値検証前の処理
     * 値のフィルタリングを行う
     * ここでは型の変換を行わない(文字列を数字に変換してしまうとバリデーションが正常処理でなくなるため).
     */
    protected function beforeValidate()
    {
        // リクエストパラメータの取得
        $params = $this->all();
        // プレフィルターの取得
        $filters = $this->preFilters();
        // ここでフィルタリング処理
        // リクエストにマージする
        $this->merge($params);
    }

    /**
     * プレフィルター用のデータを取得する.
     *
     * @return array
     */
    protected function preFilters()
    {
        return [];
    }

    /**
     * 値検証後の処理
     * 通常のバリデータでは処理できない検証処理をここで行う.
     *
     * @param  \Illuminate\Contracts\Validation\Validator $validator
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function afterValidate(Validator $validator)
    {
        /*
          $params = $this->all();
          // 何かバリデーション処理
          $validator->errors()->add('field', 'new error');

         */
        return $validator;
    }

    /**
     * リクエストの値の型変換を行う.
     */
    protected function changeType()
    {
        // リクエストパラメータの取得
        $params = $this->all();
        // 型変換用のパラメータの取得
        $types = $this->types();
        // ここで型変換処理
        // リクエストにマージする
        $this->merge($params);
    }

    /**
     * 型変換用のデータを取得する.
     *
     * @return array
     */
    protected function types()
    {
        return [];
    }

    /**
     * Handle a failed validation attempt.
     * ここは5.2までのバグ的なものの修正なので5.3以降は削除すること.
     *
     * @param  \Illuminate\Contracts\Validation\Validator $validator
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, $this->response($this->formatErrors($validator)));
    }
}
