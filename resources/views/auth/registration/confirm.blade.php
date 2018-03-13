@extends('layouts.default')


@section('content')
<div class="container">
    
{!! $message !!}

</div>

<script src="/js/auth/registration.js"></script>
<script src="/js/jquery/QapTcha.jquery.js"></script>
<script>
        $(function () {
            $('#QapTcha').QapTcha({
                txtLock: 'Переместите ползунок вправо для разблокировки',
                txtUnlock: 'Форма разблокирована',
                disabledSubmit: true,
            });
        })
</script>
@endsection
