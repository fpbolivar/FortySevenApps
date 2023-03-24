<div class="col-lg-12">
    @if ($message = Session::get('success'))
        <div class="alert alert-success message-badge">
            {{ $message }}
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger message-badge">
            {{ $message }}
        </div>
    @endif
</div>
