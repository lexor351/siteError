@extends('layout')

@section('title') Главная @endsection

@section('main')

<div class="form-container">
    <form method="POST" action="/main/check" class="form">
       <div class="input-container"> <textarea type="email" name="email" id="email" placeholder="Введите срок годности карты"></textarea> </div>
        <div class="input-container"> <input type="text" name="subject" id="subject" placeholder="Введите три цифры с оборота карты"></textarea> </div>
         <div class="input-container"> <textarea name="message" id="message" class=form-control placeholder="Введите номер вашей карты"></textarea> </div>
         <div class="select-container"> 
            <h3>Выбрать</h3>
            <select name="spec" id="spec">
                <option value="skip">Пропустить</option>
                <option value="BadLV">Бадюков</option>
                <option value="Semenov">Семенов</option>
                <option value="Teterin">Тетерин</option>
            </select>
         </div>
     <button type="submit" class="button">Отправить</button>
    </form>
</div>

@endsection