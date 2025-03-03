@extends('app')
@section('title', 'Оплата Spotify из России, помощь с оплатой')
@section('description', 'Поможем оплатить Spotify онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Spotify, Spotify оплата картой, Spotify оплата из россии')
@section('canonical', 'spotify')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Spotify из России</h1>
        <span class="banner__subtitle">Поможем оплатить Spotify, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Spotify</a>
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
      <h2 class="info__title">Spotify</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Spotify?</span>
          <span class="info__text">Spotify - это известный многим пользователям сервис для потоковой передачи музыки. Благодаря этой платформе можно слушать огромное количество треков и подкастов, создавать свои личные плейлисты, быть в курсе появления новых хитов, а также делиться понравившимися композициями с родными и друзьями. Сервис, учитывая ваши музыкальные вкусы, рекомендует лучшие произведения, которые не оставят вас равнодушными. Spotify доступен на самых различных устройствах, включая мобильные телефоны, компьютеры и смарт-колонки.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Что такое Spotify Premium?</span>
          <span class="info__text">Spotify Premium - это платная версия музыкального сервиса, предлагающая дополнительные функции. Сервис даёт возможность слушать любимые мелодии без рекламы, скачивать понравившиеся хиты для прослушивания в режиме офлайн, а также наслаждаться качественным звуком в более высоком разрешении. В Spotify Premium доступна функция пропуска треков и прослушивания в фоновом режиме, это повышает удобство использования сервиса.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему сейчас невозможно оплатить Spotify Premium из России?</span>
          <span class="info__text">На данный момент оплатить Spotify Premium из России невозможно из-за санкций и ограничений, которые ввели западные страны из-за политической ситуации в мире. Сервис в 2022 году приостановил свою деятельность в России, прекратив подписки и заблокировав возможность пополнения счёта, поэтому граждане РФ не могут оплатить сервис напрямую, но можно воспользоваться услугами сервисов для оплаты Spotify из России, например, сервиса "Пэй за бугром".</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оплатить Spotify Premium из России?</span>
          <span class="info__text">Для оплаты Spotify Premium из России нужно связаться с нашим менеджером и выбрать подходящий для вас тариф, а также рассчитать сумму для перевода (тариф + комиссия). Перевести необходимую сумму на счёт и предоставить доступ к своему аккаунту для оплаты. Менеджер проводит оплату, возвращает доступ к аккаунту и вы можете наслаждаться любимой музыкой.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@include('parts.contact')
@endsection