@extends('app')
@section('title', 'Оплата Booking сервис бронирования из России')
@section('description', 'Поможем оплатить бронирование на Booking онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата booking, booking оплата картой, booking оплата из России')
@section('canonical', 'booking')
@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Booking из России</h1>
        <span class="banner__subtitle">Поможем оплатить бронирование на Booking, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Booking</a>
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
            После обращения, оплата Booking займет не более часа
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
      <h2 class="info__title">Немного о Booking</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Букинг?</span>
          <span class="info__text">Букинг (или Booking) — это популярный онлайн-сервис, с помощью которого можно забронировать жилье, авиабилеты, арендовать автомобиль и оплатить различные туристические услуги (экскурсии, туры и другие услуги, связанные с путешествиями). Платформа отличается удобным интерфейсом и широким выбором опций. К сожалению, из-за санкций против РФ в настоящее время невозможно произвести оплату через российские карты на Booking. Как оплатить Букинг из России? Мы поможем вам это сделать.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как правильно выбрать жилье на Booking?</span>
          <span class="info__text">При выборе жилья на Букинге нужно обратить внимание на несколько важных факторов: рейтинг и отзывы, расположение, удобства и фотографии. Оцените мнение других гостей, чтобы узнать о реальном уровне сервиса. Также уточните близость к достопримечательностям, транспорту и магазинами. Проверьте условия отмены бронирования и дополнительные сборы, чтобы избежать неожиданных расходов.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оплатить жилье, которое вы выбрали на букинге, с помощью нашего сервиса?</span>
          <span class="info__text">1. Связаться с нашим менеджером для расчета стоимости (сумма бронирования + комиссия). Необходимо предоставить данные об отеле, датах, дополнительных услугах. 2. Оплатить стоимость бронирования и комиссию. Внести денежные средства, выбрать способ оплаты, предоставить менеджеру доступ к аккаунту Букинга для бронирования жилья. 3. Получить подтверждение о бронировании. Менеджер пришлет скриншот о бронировании жилья и других услуг. Бронирование завершено.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">В чем преимущества оплаты букинга с нашей помощью?</span>
          <span class="info__text">Оплата на Букинге через наш сервис - это удобно, безопасно и выгодно. Мы обеспечиваем быстрые транзакции с низкой комиссией и поддержкой различных способов оплаты. Ваши данные защищены с использованием передовых технологий безопасности, а процесс оформления становится максимально простым. Вы также можете отслеживать платежи и получать уведомления, что делает процесс бронирования ещё более удобным.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection