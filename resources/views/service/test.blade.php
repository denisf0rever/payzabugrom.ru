@extends('app')
@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', 'article/')

@section('content')

<section class="main__banner banner">
  <div class="banner__wrapper container">
    <div class="banner__top">
      <div class="banner__left">
        <h1 class="banner__title">Оплата зарубежных сервисов и подписок</h1>
        <h3 class="banner__subtitle">Откройте депозит и получайте доход, <br> даже если нет расчетного счета в банке
        </h3>
        <a href="/" class="banner__button">Оформить депозит</a>
      </div>
      <div class="banner__right">
        <img src="/static/main.png" alt="" class="banner__img">
      </div>
    </div>
    <div class="banner__cards banner-cards">
      <ul class="banner-cards__list">
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Онлайн
          </span>
          <span class="banner-cards__subtitle">
            Станьте клиентом дистанционно
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Онлайн
          </span>
          <span class="banner-cards__subtitle">
            Станьте клиентом дистанционно
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Онлайн
          </span>
          <span class="banner-cards__subtitle">
            Станьте клиентом дистанционно
          </span>
          <div class="banner-cards__img-wrapper">
            <img src="/static/telegram.svg" alt="" class="banner-cards__img">
          </div>
        </li>
        <li class="banner-cards__item">
          <span class="banner-cards__title">
            Онлайн
          </span>
          <span class="banner-cards__subtitle">
            Станьте клиентом дистанционно
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
      <h2 class="info__title">Как выиграть призы</h2>
      <ul class="info__list">
        <li class="info__item">
          <span class="info__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
          <span class="info__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatibus
            dolor corporis nam sequi quasi commodi aspernatur vero? Ipsum ut impedit quas laboriosam ipsam illo maxime
            atque corrupti suscipit. Excepturi.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
          <span class="info__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatibus
            dolor corporis nam sequi quasi commodi aspernatur vero? </span>
          <a href="/" class="info__link">Подробнее о лигах</a>
        </li>
        <li class="info__item">
          <span class="info__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
          <span class="info__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatibus
            dolor corporis nam sequi quasi commodi aspernatur vero? Ipsum ut impedit quas laboriosam ipsam illo maxime
            atque corrupti suscipit. Excepturi.</span>
        </li>
        <li class="info__item">
          <span class="info__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
          <span class="info__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptatibus
            dolor corporis nam sequi quasi commodi aspernatur vero? </span>
          <a href="/" class="info__link">Подробнее о лигах</a>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection