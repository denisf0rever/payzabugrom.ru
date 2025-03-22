@extends('app')
@section('title', 'Оплата Figma из России, помощь с оплатой')
@section('description', 'Поможем оплатить Figma онлайн из России, если не проходит оплата в рублях')
@section('keywords', 'оплата Figma, Figma оплата картой, Figma оплата из россии')
@section('canonical', 'figma')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата Figma из России</h1>
        <span class="banner__subtitle">Поможем оплатить Figma, если не проходит оплата или возникли трудности из-за ограничений</span>
        <a href="/" class="banner__button">Оплатить Figma</a>
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
      <h2 class="info__title">Figma</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Что такое Figma?</span>
          <span class="info__text">Figma — это веб-платформа для проектирования интерфейсов и коллективной работы над макетами. В отличие от классических графических редакторов, она функционирует в браузере без необходимости установки. Сервис поддерживает одновременное редактирование, что позволяет командам эффективно сотрудничать в реальном времени. Figma особенно полезна для UX/UI-дизайнеров, разработчиков и менеджеров, ускоряя процесс создания и согласования цифровых продуктов.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">В чем преимущество платной подписки Figma?</span>
          <span class="info__text">Платная подписка Figma открывает дополнительные возможности для команд и профессионалов. Она включает расширенное хранилище версий, командные библиотеки компонентов, улучшенные права доступа и аналитические инструменты. Pго-тариф позволяет создавать приватные файлы, а корпоративный - настраивать безопасность и управление пользователями. Это упрощает работу больших команд, ускоряет разработку и повышает эффективность совместного дизайна.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Почему на сегодняшний день невозможно оплатить подписку Figma из России?</span>
          <span class="info__text">Оплата подписки Figma из России на сегодняшний день невозможна из-за санкций и политики компании. В 2022 году сервис приостановил работу с российскими пользователями, запретив платежи и доступ к платным функциям. Это связано с международными санкциями, которые ограничивают банковские операции, и пользователи из России не могут напрямую оформить подписку, оплачивать тарифы и пользоваться командными инструментами на коммерческой основе.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Как оплатить Figma из России?</span>
          <span class="info__text">Оплатить подписку Figma из России можно с помощью нашего сервиса. Для этого нужно связаться с менеджером сервиса "Пэй за бугром" для определения стоимости тарифа и расчета суммы, которую необходимо оплатить (тариф + комиссия). Далее нужно перевести необходимые денежные средства и предоставить доступ к аккаунту Figma для оплаты. После этого вам останется только дождаться уведомления об успешной оплате подписки. Наш сервис гарантирует безопасность переводов и сохранность ваших персональных данных.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@include('parts.contact')
@endsection