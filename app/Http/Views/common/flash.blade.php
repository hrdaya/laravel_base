{{-- フラッシュメッセージ表示用テンプレート --}}
{{-- エラーメッセージ --}}
@if (session()->has('flash_notification.danger') and count(session('flash_notification.danger')) > 0)
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    @if(count(session('flash_notification.danger')) === 1)
      <span>{!! nl2br(e(session('flash_notification.danger'))) !!}</span>
    @else
      <ul>
        @foreach (session('flash_notification.danger') as $message)
          <li>{!! nl2br(e($message)) !!}</li>
        @endforeach
      </ul>
    @endif
  </div>
@endif

{{-- ワーニングメッセージ --}}
@if (session()->has('flash_notification.warning') and count(session('flash_notification.warning')) > 0)
  <div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    @if(count(session('flash_notification.warning')) === 1)
      <span>{!! nl2br(e(session('flash_notification.warning'))) !!}</span>
    @else
      <ul>
        @foreach (session('flash_notification.warning') as $message)
          <li>{!! nl2br(e($message)) !!}</li>
        @endforeach
      </ul>
    @endif
  </div>
@endif

{{-- サクセスメッセージ --}}
@if (session()->has('flash_notification.success') and count(session('flash_notification.success')) > 0)
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    @if(count(session('flash_notification.success')) === 1)
      <span>{!! nl2br(e(session('flash_notification.success'))) !!}</span>
    @else
      <ul>
        @foreach (session('flash_notification.success') as $message)
          <li>{!! nl2br(e($message)) !!}</li>
        @endforeach
      </ul>
    @endif
  </div>
@endif


{{-- インフォメーションメッセージ --}}
@if (session()->has('flash_notification.info') and count(session('flash_notification.info')) > 0)
  <div class="alert alert-dismissible alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    @if(count(session('flash_notification.info')) === 1)
      <span>{!! nl2br(e(session('flash_notification.info'))) !!}</span>
    @else
      <ul>
        @foreach (session('flash_notification.info') as $message)
          <li>{!! nl2br(e($message)) !!}</li>
        @endforeach
      </ul>
    @endif
  </div>
@endif

