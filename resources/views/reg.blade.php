@extends('templates.form')

@section('title')Регистрация@endsection

@section('fill')
<div class="main">
  <h1>Регистрация на конференцию</h1>

  @include('templates.thanks')

  <form action="{{ route('submiter') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Имя:</label>
      <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="surname">Фамилия:</label>
      <input type="text" name="surname" placeholder="Введите фамилию" id="surname" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Почта:</label>
      <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="number">Номер:</label>
      <input type="tel" name="number" placeholder="Введите номер" id="number" class="form-control">
    </div>

    <div class="form-group">
      <label for="type">Тематика:</label>
      <select name="type" id="type" class="form-select">
          <option value="Бизнес">Бизнес</option>
          <option value="Технологии">Технологии</option>
          <option value="Реклама и Маркетинг">Реклама и Маркетинг</option>
      </select>
    </div>

    <div class="form-group">
      <label for="pay">Способ оплаты:</label>
      <select name="pay" id="pay" class="form-select">
          <option value="WebMoney">WebMoney</option>
          <option value="Яндекс.Деньги">Яндекс.Деньги</option>
          <option value="PayPal">PayPal</option>
          <option value="Кредитная карта">Кредитная карта</option>
      </select>
    </div>

    <li>
      <button type="submit" class="btn btn-success">Отправить</button>
    </li>
  </form>
</div>
@endsection
