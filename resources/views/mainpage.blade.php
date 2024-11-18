@extends('app')
@section('title', 'Оплата зарубежных сервисов и подписок из России круглосуточно')
@section('description', 'Онлайн сервис и телеграм бот оплата зарубежных сервисов из России')
@section('keywords', 'оплата зарубежных сервисов и подписок, оплата зарубежных отелей из россии')
@section('canonical', '')

@section('content')
@section('mainbg.blade.php')
<div class="main__wrapper">
  <section class="main__cards cards" id="services">
    <div class="cards__wrapper">
      <div class="cards__inner container">
        <div class="cards__header">
          <h2 class="cards__title">Оплата за рубежом из России</h2>
          <div class="cards__toggle">
            <div class="cards__toggle-item cards__toggle-item-active" data-tab="tab-1">Отели</div>
            <div class="cards__toggle-item" data-tab="tab-2">Сервисы</div>
          </div>
        </div>

        <ul class="cards__list" id="tab-1">
          <li class="cards__card card">
            <div class="card__wrapper">
              <span class="card__title">Airbnb</span>
              <div class="card__subtitle">Помощь с оплатой Airbnb</div>
              <img src="/static/airbnb.svg" alt="" class="card__img">
            </div>
          </li>
          <li class="cards__card card">
            <div class="card__wrapper">
              <span class="card__title">Booking</span>
              <div class="card__subtitle">Помощь с оплатой booking</div>
              <img src="/static/booking.svg" alt="" class="card__img">
            </div>
          </li>
        </ul>
        <ul class="cards__list cards__hide" id="tab-2">
          <li class="cards__card card">
            <div class="card__wrapper">
              <span class="card__title">Youtube</span>
              <div class="card__subtitle">Оплата подписки Youtube</div>
              <img src="/static/youtube.svg" alt="" class="card__img">
            </div>
          </li>
          <li class="cards__card card">
            <div class="card__wrapper">
              <span class="card__title">Второй таб</span>
              <div class="card__subtitle">Суперкэшбэк до 100%</div>
              <img src="images/placeholder.png" alt="" class="card__img">
            </div>
          </li>
        </ul>

        <div class="cards__enter">
          <a href="tel:88005007659">
            <div class="cards__enter-wrapper">
              <img src="/static/phone.svg" alt="" class="cards__enter-img">
              <div class="cards__enter-title">Обратиться за помощью</div>
              <div class="cards__enter-subtitle">8 800 500-76-59</div>
              <img src="/static/expand-more.svg" alt="" class="cards__enter-arrow">
            </div>
          </a>
        </div>

      </div>
    </div>

  </section>
  <section class="main__calculation calculation" id="comission">
    <div class="calculation__wrapper">
      <div class="calculation__inner container">
        <h3 class="calculation__title">Поможем рассчитать</h3>
        <div class="calculation__super-inner">
          <div class="calculation__left-part">
            <form action="" class="calculation__form calculation-form">
              <span class="calculation-form__status-title" for="status">Текущий статус</span>
              <div class="calculation-form__select-wrapper">
                <img src="/static/expand-more.svg" alt="" class="calculation-form__status-arrow">
                <span class="calculation-form__span">Доллар $ </span>
                <input id="currency" class="calculation-form__status-current" name="currency" type="text" value="dollar"
                  readonly hidden>
                <ul id="status" class="calculation-form__status-select calculation-form__status-hide ">
                  <li class="calculation-form__status-option calculation-form__status-option-active" value="dollar">
                    Доллар $</li>
                  <li class="calculation-form__status-option" value="euro">Евро €</li>
                  <li class="calculation-form__status-option" value="lira">Лира ₺</li>
                </ul>
              </div>
              <span class="calculation-form__status-title" for="status">Валюта</span>
              <div class="calculation-form__select-wrapper">
                <img src="/static/expand-more.svg" alt="" class="calculation-form__status-arrow">
                <span class="calculation-form__span">Первое</span>
                <input id="options" class="calculation-form__status-current" name="options" type="text" value="option1"
                  readonly hidden>
                <ul id="status" class="calculation-form__status-select calculation-form__status-hide ">
                  <li class="calculation-form__status-option calculation-form__status-option-active" value="option1">
                    Первое</li>
                  <li class="calculation-form__status-option" value="option2">Второе</li>
                  <li class="calculation-form__status-option" value="option3">Третье</li>
                </ul>
              </div>
              <span class="calculation-form__status-title" for="form-value">Сумма</span>
              <div class="calculation-form__value-wrapper">
                <input id="form-value" type="number" class="calculation-form__value" placeholder="0">
              </div>
            </form>
          </div>
          <div class="calculation__right-part">
            <div class="calculation__right-display calculation-display">
              <form action="#" class="calculation-display__wrapper">
                <input type="number" value="0" hidden class="calculation-display__price-input">
                <div class="calculation-display__price">0 ₽</div>
                <div class="calculation-display__tax">
                  <div class="calculation-display__tax-title">Ваша ставка</div>
                  <div class="calculation-display__tax-value">10%</div>
                </div>
                <div class="calculation-display__submit">Оформить онлайн</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main__question questions">
    <div class="questions__wrapper">
      <div class="questions__inner container">
        <h2 class="questions__title">Частые вопросы</h2>
        <ul class="questions__list">
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Сколько по времени занимает оплата зарубежного сервиса?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">От нескольких минут до нескольких часов.</span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Что делать, если не удастся оплатить сервис?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">В этом случае не нужно переживать, если платеж не прошел, мы вернём
                  вам денежные средства в полном объеме.</span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Какие страны и валюты поддерживает платформа?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text"> </span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Есть ли бонусы или скидки для постоянных пользователей сервиса?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text"> </span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Какие способы оплаты доступны на вашем сайте для международных
                  транзакций?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">Вы можете оплатить любым удобным способом, а мы оплатим нужный вам
                  зарубежный сервис или отель самостоятельно.</span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Какая комиссия и по какому курсу работает Плати за бугром?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">Наша комиссия составляет 10%</span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Легальна ли оплата зарубежных сервисов с помощью сайта Плати за
                  бугром?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">Наша помощь абсолютно законна, мы не используем серые схемы,
                  работаем легально с учётом международных санкций и законов России и других стран, где проводится
                  оплата.</span>
              </div>
            </div>
          </li>
          <li class="questions__item question">
            <div class="question__wrapper">
              <div class="question__inner">
                <span class="question__title">Какие факторы учитывает наш сервис для соблюдения законности и
                  безопасности сделок?</span>
                <div class="question__button">
                  <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="Accordion__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="question__ansver-wrapper">
                <span class="question__ansver-text">1. Соответствие местному законодательству: в некоторых странах могут
                  быть ограничения на определённые виды услуг или товаров, например, доступ к онлайн-казино, азартным
                  играм или контенту с возрастными ограничениями. 2. Санкции и международные ограничения: некоторые
                  государства могут ограничивать или запрещать оплату услуг в странах, против которых наложены санкции.
                  Это может касаться, например, России, Ирана, Северной Кореи и других стран, попавших под международные
                  экономические санкции. 3. Налоги и пошлины: важно учитывать возможные налоговые обязательства при
                  оплате зарубежных сервисов, например, при покупке товаров или подписок. В некоторых странах существуют
                  правила, требующие уплаты НДС на цифровые услуги.
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="main__small-block small-block" id="contact">
    <div class="small-block__wrapper container">
      <div class="small-block__text-part">
        <h3 class="small-block__title">Мы на связи</h3>
        <span class="small-block__subtitle">Обращайтесь удобным способом</span>
        <div class="small-block__buttons">
          <div class="small-block__button">Telegram</div>
          <div class="small-block__button">WhatsApp</div>
        </div>
      </div>
      <div class="small-block__img-part">
        <div class="small-block__img-wrapper">
          <img src="/static/contact.svg" alt="" class="small-block__img">
        </div>
      </div>
    </div>
  </section>
</div>
@endsection