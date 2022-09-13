@extends('user.layouts.main')

@section('content')

    <div class="container text-center mt-5">
        <p class="fs-1">Ваш аккаунт еще не активирован, подождите!</p>
        <button type="button" id="back" class="btn btn-primary" style="margin-left: -466px">Вернуться назад</button>
    </div>

    <script>
        const back = document.querySelector('#back');

        back.addEventListener('click', () => {
            window.history.back();
        })
    </script>
@endsection