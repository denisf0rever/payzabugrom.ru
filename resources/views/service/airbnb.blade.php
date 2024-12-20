@extends('app')
@section('title', 'Оплата Airbnb сервис бронирования из России')
@section('description', 'Поможем оплатить бронирование на Airbnb онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Airbnb, Airbnb оплата картой, Airbnb оплата из россии')
@section('canonical', 'airbnb')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Airbnb из России</h1>
        <span class="banner__subtitle">Поможем оплатить бронирование на Booking, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Airbnb</a>
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
            После обращения, оплата Airbnb займет не более часа
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
      <h2 class="info__title">Немного о Airbnb</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Airbnb?</span>
          <span class="info__text">Airbnb — это онлайн-платформа, которая позволяет арендовать жилье на короткий срок в любой точке мира. Чем отличается Airbnb от Booking? На Booking можно забронировать только отель и ориентирован сервис на рынок Европы, Airbnb позволяет арендовать частное жилье в любой стране мира, в том числе и на короткий срок. Как правило, стоимость аренды на Airbnb ниже, но при этом качество жилья и удобства могут быть хуже, поэтому нужно внимательно отнестись к выбору жилья.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как правильно выбрать жилье на Airbnb?</span>
          <span class="info__text">Выбор жилья начинается с определения удобного расположения и соответствующей цены, которую стоит сравнить с другими предложениями. Если местоположение соответствует вашим планам, а цена приемлема, стоит обратить внимание на отзывы других пользователей, чтобы оценить уровень качества жилья и работы хозяев. Не забудьте внимательно изучить фотографии, описание объекта, перечень доступных удобств, а также условия отмены бронирования.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему на сегодняшний день бронирование и оплата на Airbnb из России невозможна?</span>
          <span class="info__text">Airbnb в 2022 году приостановил свою работу в России и Беларуси, поэтому жители этих стран не могут бронировать жилье на данной платформе. Оплата с российских карт невозможна из-за международных санкций и ограничений, введённых против России. Международные платежные системы, такие как Visa и MasterCard, прекратили обслуживание карт российских банков. Наш сервис поможет вам решить эту проблему.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как забронировать и оплатить жилье на Airbnb из России?</span>
          <span class="info__text">1. Зарегистрироваться на платформе Airbnb, создать аккаунт. Мы поможем сделать это правильно, с учётом того, что платформа не работает в России. 2. Выбрать подходящее жилье. 3. Связаться с нашим менеджером и сообщить необходимые данные для бронирования жилья и расчета стоимости (сумма бронирования + комиссия). 4. Оплатить стоимость бронирования и комиссию, предоставить менеджеру доступ к аккаунту для бронирования и оплаты аренды. 5. После успешной оплаты бронирование будет подтверждено. Мы пришлем вам уведомление с деталями вашего проживания и инструкциями по заезду.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection