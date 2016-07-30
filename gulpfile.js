var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// リソースのファイルのパスを変更
elixir.config.assetsPath = 'app/Http/Resources';
// ベンダープレフィクスの設定を変更
elixir.config.css.autoprefix.options.browsers = ['> 5%', 'last 1 version', 'Firefox ESR'];

elixir(function(mix) {
    mix
    /*
     |==============================================================================================================
     | scss
     |==============================================================================================================
     */
    // scssのビルド
        .sass('common.scss')
        /*
         |==============================================================================================================
         | js
         |==============================================================================================================
         */
        .scripts('ajax.js')
        /*
         |==============================================================================================================
         | font
         |==============================================================================================================
         */
        // フォントのコピー
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/')
        /*
         |==============================================================================================================
         | javascript
         |==============================================================================================================
         */
        // jquery.jsのコピー
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.js')
        // bootstrap.jsのコピー
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/bootstrap.js')
        // vue.jsのコピー
        .copy('node_modules/vue/dist/vue.min.js', 'public/js/vue.js')
        /*
         |==============================================================================================================
         | バージョニングファイルの作成
         |==============================================================================================================
         */
        .version([
            'css/**/*.css',
            'js/**/*.js',
            'img'
        ]);
});
