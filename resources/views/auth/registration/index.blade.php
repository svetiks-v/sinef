@extends('layouts.default')

@section('style')
<link rel="stylesheet" href="/css/QapTcha.jquery.css">
<link rel="stylesheet" href="/css/style_registration.css">
@endsection

@section('content')
<div class="container registration">
    <h2>Регистрация</h2>

    <form action="" id="registrationForm" onsubmit="return false">

        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Полное наименование организации</label>
            <div class="col-sm-8">
                <textarea name="full_name" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Сокращенное наименование</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

        
        
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">ИНН</label>
            <div class="col-sm-8">
                <input type="text" name="inn" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">КПП</label>
            <div class="col-sm-8">
                <input type="text" name="kpp" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">ОГРН</label>
            <div class="col-sm-8">
                <input type="text" name="ogrn" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">ИКУ</label>
            <div class="col-sm-8">
                <input type="text" name="iku" id="iku" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">ОКАТО</label>
            <div class="col-sm-8">
                <input type="text" name="okato" class="form-control">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Страна</label>
            <div class="col-sm-8">
                <select name="country_id" class="form-control">
                    <option value="">Не выбрано</option>
                    <option value="156">Россия</option>
                    @foreach ($countries as $country_id => $country_name)
                    <option value="{{$country_id}}">{{$country_name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Юридический адрес</label>
            <div class="col-sm-8">
                <textarea name="legal_address" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Фактический адрес</label>
            <div class="col-sm-8">
                <textarea name="fact_address" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Телефон</label>
            <div class="col-sm-8">
                <input type="text" name="phone" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Факс</label>
            <div class="col-sm-8">
                <input type="text" name="fax" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Электронная почта</label>
            <div class="col-sm-8">
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Сайт</label>
            <div class="col-sm-8">
                <input type="text" name="site" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Контактное лицо</label>
            <div class="col-sm-8">
                <input type="text" name="contact_person" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Номер расчетного счета</label>
            <div class="col-sm-8">
                <input type="text" name="account_number" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Полное название банка</label>
            <div class="col-sm-8">
                <textarea name="bank_name" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">БИК</label>
            <div class="col-sm-8">
                <input type="text" name="bik" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Корреспондентский счет банка</label>
            <div class="col-sm-8">
                <input type="text" name="cor_account_number" class="form-control number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-8">
                <input type="checkbox" value="1" name="subordinate_organization"> <label class="labbig">Организация является подведомственной Минобрнауки России</label>
            </div>
        </div>
        
        <div class="form-group row" id='block_type_organization'>
            <label class="col-sm-3 col-form-label">Вид организации</label>
            <div class="col-sm-8">
                <label style="width:55px; margin-left: 0"><input type="radio" value="smp" name="type_organization" style="width:20px">СМП</label>
                <label style="width:85px; margin-left: 0"><input type="radio" value="sonko" name="type_organization"  style="width:20px">СОНКО</label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-8">
                <div id="QapTcha"></div>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary" id='BtnFormRegistration'/>Зарегистрироваться</button>
            </div>
        </div>


    </form>

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
