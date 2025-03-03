@extends('app')
@section('title', 'Оплата Youtube Premium из России, помощь с оплатой')
@section('description', 'Поможем оплатить Youtube Premium онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Youtube Premium, Youtube Premium оплата картой, Youtube Premium оплата из россии')
@section('canonical', 'youtube')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Youtube Premium из России</h1>
        <span class="banner__subtitle">Поможем оплатить Youtube Premium, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Youtube Premium</a>
      </div>
      <div class="banner__right">
        <img src="/static/main.png" alt="" class="banner__img">
      </div>
    </div>
    <div class="banner__cards banner-cards">
      <ul class="banner-cards__list">
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Самая низкая комиссия
          </span>
          <span class="banner-cards__subtitle">
            Она составляет 10%
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Оперативно
          </span>
          <span class="banner-cards__subtitle">
            После обращения, оплата займет не более суток
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Круглосуточно
          </span>
          <span class="banner-cards__subtitle">
            Быстро и круглосуточно реагируем на обращение
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Найдежно
          </span>
          <span class="banner-cards__subtitle">
            Множество положительных отзывов
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="main__info info">
  <div class="info__wrapper">
    <div class="container">
      <h2 class="info__title">Youtube Premium</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Youtube Premium?</span>
          <span class="info__text">YouTube Premium это платная подписка, которая открывает доступ к дополнительным функциям на платформе. С этой подпиской можно смотреть видео без рекламы, получить доступ к YouTube Music. Помимо этого, YouTube Premium позволяет скачивать видео для просмотра в формате оффлайн, без подключения к интернету, а также включать фоновое воспроизведение на мобильных устройствах, что даёт возможность одновременно использовать и другие приложения. Эти дополнительные функции делают использование YouTube более удобным и качественным.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему на данный момент нельзя оплатить YouTube Premium из России?</span>
          <span class="info__text">Из-за экономических санкций и изменений в политической обстановке оплата YouTube Premium из России стала невозможной. В 2022 году Google в ответ на введение международных санкций приостановил работу большинства своих платных сервисов в России, это коснулось и YouTube Premium, было нарушено функционирование ряда платёжных систем, которые использовались для оплаты подписок. В результате жители России оказались ограничены в возможности оплачивать такие сервисы напрямую, что создало трудности для пользователей, привыкших к сервисам Google.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему пользователи выбирают наш сервис для оплаты YouTube Premium?</span>
          <span class="info__text">В России на сегодняшний день прямой доступ к оплате YouTube Premium ограничен. Чтобы оформить подписку, воспользуйтесь услугами нашего сервиса. Мы предлагаем быстрый, удобный и безопасный способ оплаты, обеспечиваем защиту ваших персональных данных, а также предлагаем низкие комиссии, что позволит сэкономить. Пользователь всегда может отследить свой платеж и получить уведомление об успешной оплате подписки.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оформить оплату YouTube Premium через наш сервис?</span>
          <span class="info__text">Чтобы оплатить YouTube Premium, нужно связаться с нашим менеджером, обсудить условия перевода, тарифы и размер комиссии. Менеджер рассчитает необходимую сумму перевода (стоимость тарифа с комиссией). Далее нужно предоставить необходимые данные для входа в аккаунт и в ближайшее время получить подтверждение об успешной активации подписки. Этот способ оплаты позволяет легко и быстро оформить подписку, несмотря на существующие ограничения.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@include('parts.contact')
@endsection