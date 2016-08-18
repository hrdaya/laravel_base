{{-- フラッシュメッセージのモーダル表示 --}}
@if (session()->has('flash_notification.modal'))
  <div id="flash-modal" class="modal fade flash-modal">
    @if(session()->has('flash_notification.modal_size'))
      <div class="modal-dialog modal-{{ session('flash_notification.modal_size') }}">
        @else
          <div class="modal-dialog">
            @endif
            <div class="modal-content">
              @if(session()->has('flash_notification.title'))
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">{{ session('flash_notification.title') }}</h4>
                </div>
              @endif

              <div class="modal-body">
                <p>{!! nl2br(e(session('flash_notification.modal'))) !!}</p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
              </div>
            </div>
          </div>
      </div>
@endif