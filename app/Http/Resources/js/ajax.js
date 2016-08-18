'use strict';

$(function () {
  // ローディングの表示
  var showLoading = function () {
    $('#loader-bg').addClass('show');
  };
  // ローディングの非表示
  var hideLoading = function () {
    $('#loader-bg').removeClass('show');
  };
  // Ajaxの初期設定
  $.ajaxSetup({
    type: 'POST',
    dataType: 'json',
    timeout: 30000,
    headers: {
      'pragma': 'no-cache',
      'Cache-Control': 'no-cache',
      'If-Modified-Since': 'Thu, 01 Jun 1970 00:00:00 GMT',
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  // ajaxの中断処理（別のページへの移動時）
  $('body').on('ajaxSend', function (c, xhr) {
    $(window).on('beforeunload', function () {
      xhr.abort();
    });
  });
  // グローバルのイベントハンドラ
  $(document).ajaxSend(function () {
    // event, jqXHR, ajaxOptions
    // ローディングの表示
    showLoading(); // 適当に関数を作っておく
  }).ajaxComplete(function () {
    // event, jqXHR, ajaxOptions
    // ローディングの非表示
    hideLoading(); // 適当に関数を作っておく
  }).ajaxError(function (event, jqXHR, settings, exception) {
    if (jqXHR.status) {
      switch (jqXHR.status) {
        case 404:
          // ステータスコードが404の時

          break;
        case 500:
          // ステータスコードが500の時

          break;
        default:
          // その他のステータスコードの時

          break;
      }
    } else if (exception === 'parsererror') {
      // JSONのパースに失敗した時の処理

    } else if (exception === 'timeout') {
      // タイムアウトした時の処理
      alert('接続がタイムアウトしました');
    } else if (exception === 'abort') {
      // Ajax通信をキャンセルした時の処理
      return;
    } else {
      // その他のエラー
      throw new Error(jqXHR.status + ' ' + exception);
    }
  });
});
