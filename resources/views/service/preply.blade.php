@extends('app')
@section('title', 'Оплата Preply из России, помощь с оплатой')
@section('description', 'Поможем оплатить Preply онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Preply, Preply оплата картой, Preply оплата из россии')
@section('canonical', 'preply')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Preply из России</h1>
        <span class="banner__subtitle">Поможем оплатить Preply, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Preply</a>
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
            Она составляет 500 рублей
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
      <h2 class="info__title">Preply</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Preply?</span>
          <span class="info__text">Preply — это образовательная онлайн-платформа, где ученики могут изучать иностранные языки и другие предметы с преподавателями из разных стран. Система подбора позволяет выбрать преподавателя по уровню знаний, бюджету и индивидуальным требованиям. Уроки проходят в удобное время в формате видеосвязи. Персонализированный подход помогает эффективно подготовиться к экзаменам, развить разговорные навыки или освоить язык с нуля.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Чем отличается Preply от других образовательных платформ?</span>
          <span class="info__text">Preply выделяется среди других образовательных платформ благодаря гибкости и персонализированному обучению. Здесь широкий выбор преподавателей с разными тарифами, что позволяет подобрать оптимальный вариант под любой бюджет. Алгоритмы помогают быстро найти идеального репетитора, а удобный онлайн-класс с интерактивными инструментами делает занятия эффективными. Кроме того, платформа поддерживает множество языков и дисциплин, открывая доступ к глобальному обучению.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему на сегодняшний день невозможно оплатить Preply из России?</span>
          <span class="info__text">Оплата Preply из России недоступна из-за санкций и ограничений на международные платежи. Многие зарубежные платежные системы приостановили работу в стране, что затрудняет проведение транзакций. Платформа использует инструменты, недоступные для российских пользователей, поэтому оплатить услуги стандартными способами невозможно. Это влияет как на учеников, так и на преподавателей.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оплатить Preply из России?</span>
          <span class="info__text">Оплатить Preply из России можно с помощью сервиса "Пэй за бугром". Для этого нужно: Связаться с менеджером для уточнения стоимости тарифа и рассчитать сумму, необходимую для оплаты (тариф + комиссия). Перевести необходимые денежные средства. Предоставить доступ к аккаунту Preply для оплаты. Получите уведомление об успешной оплате.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@include('parts.contact')
@endsection