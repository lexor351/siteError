@extends('layout')

@section('title') Главная @endsection

@section('main')

@if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<div class="form-container">
    <form method="POST" action="/main/check" class="form">
        @csrf
        <div class="input-wrapper">
            <div class="input-container"> <textarea name="message" id="message" class=form-control placeholder="Введите сообщение"></textarea> </div>
            <div class="additional-fields">
                <div class="select-container">
                <h4>Клиент</h4>
                    <select name="client" id="client">
                        <option value="skip">Пропустить</option>
                        <option value="gavs">ГАВС</option>
                        <option value="asvs">АСВС</option>
                        <option value="ugms">УГМС</option>
                        <option value="young">Юные Якутяне</option>
                        <option value="fkpas">ФКП АС</option>
                        <option value="rusgidro">РусГидро</option>
                        <option value="profavia">ПрофАвиа</option>
                </select>
                </div>
                <div class="select-container">
                    <h4>Тип услуги</h4>
                    <select name="type" id="type">
                        <option value="inet">Интернет</option>
                        <option value="mach">Оборудование</option>
                        <option value="sirena">Сирена</option>
                        <option value="regina">Регина</option>
                        <option value="endm">E&M канал</option>
                        <option value="tele">Телефония</option>
                        <option value="mail">Почта</option>
                        <option value="website">Веб-сайты</option>
                        <option value="vc">ВЦ</option>
                        <option value="sat">Спутниковая связь</option>
                        <option value="wifi">Беспроводная связь</option>
                        <option value="vpn">ВПН</option>
                    </select>
                </div>
                <div class="select-container"> 
                    <h4>Выбрать ответственного</h4>
                    <select name="spec" id="spec">
                        <option value="skip">Пропустить</option>
                        <option value="BadLV">Бадюков</option>
                        <option value="Semenov">Семенов</option>
                        <option value="Teterin">Тетерин</option>
                    </select>
                </div>
            </div>
         </div>
     <button type="submit" class="button">Отправить</button>
    </form>
</div>

@endsection