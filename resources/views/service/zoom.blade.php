@extends('app')
@section('title', 'Оплата Zoom из России, помощь с оплатой')
@section('description', 'Поможем оплатить Zoom онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Zoom, Zoom оплата картой, Zoom оплата из россии')
@section('canonical', 'zoom')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Zoom из России</h1>
        <span class="banner__subtitle">Поможем оплатить Zoom, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Zoom</a>
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
      <h2 class="info__title">Zoom</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Zoom?</span>
          <span class="info__text">Zoom — это популярная видеоконференц-система, которая позволяет людям проводить онлайн-совещания, вебинары и виртуальные встречи. Она поддерживает видеозвонки, обмен сообщениями, совместную работу с документами и экраном. Zoom часто используется для работы, учебы и общения на расстоянии благодаря своей доступности и удобству.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему пользователи выбирают Zoom?</span>
          <span class="info__text">Zoom привлекает пользователей своей стабильностью, удобством и многофункциональностью. Платформа позволяет легко организовывать видеозвонки, вебинары и деловые встречи с участниками в количестве до тысячи человек. Она выделяется интуитивно понятным интерфейсом, высоким качеством связи и возможностью интеграции с другими инструментами, что делает её отличным выбором для удаленной работы и обучения.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему нельзя оплатить Zoom из России?</span>
          <span class="info__text">В настоящее время оплата Zoom из России невозможна из-за санкций и ограничений, введённых международными организациями в ответ на политическую ситуацию. Эти меры привели к блокировке платежных систем и ограничению доступа к международным сервисам. В результате российским пользователям стало сложно оплачивать подписки и использовать платные функции Zoom.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оплатить Zoom из России?</span>
          <span class="info__text">Оплатить Zoom из России поможет наш сервис. Свяжитесь с менеджером и обсудите вопрос стоимости подписки и комиссии. Получите расчет суммы, необходимой для оплаты (стоимость подписки Zoom + комиссия). Переведите необходимую сумму, предоставьте доступ к аккаунту Zoom и через несколько минут получите уведомление с подтверждением оплаты.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@include('parts.contact')
@endsection