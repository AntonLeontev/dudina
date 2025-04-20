@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero__container">
            <div class="hero__inner">
                <div class="hero__info">
                    <h1 class="hero__title">
                        Спишем долги <br> за 9 месяцев под ключ
                    </h1>

                    <ul class="hero__list list list--check">
                        <li class="list__item">
                            по кредитным картам и потребительским кредитам (взятые на ремонт, обучение, лечение, отпуск)
                        </li>

                        <li class="list__item">
                            по займам и распискам
                        </li>

                        <li class="list__item">
                            по ЖКХ
                        </li>

                        <li class="list__item">
                            по ДТП
                        </li>

                        <li class="list__item">
                            по налогам и сборам
                        </li>
                    </ul>

                    <p class="hero__extra">
                        Через процедуру банкротства на основании Федерального закона N 127-ФЗ «О несостоятельности
                        (банкротстве)»
                        от 26.10.2002
                    </p>

                    <button class="hero__btn button" data-target="section-form">
                        Получить консультацию
                    </button>
                </div>

                <div class="hero__image">
                    <img src="{{ Vite::asset('resources/images/pixels/hero.webp') }}" alt="hero">
                </div>
            </div>
        </div>
    </section>

    <section class="bankruptcy-cta">
        <div class="bankruptcy-cta__container">
            <div class="bankruptcy-cta__inner">
                <p class="bankruptcy-cta__text">
                    Банкротство — это законная процедура списания долгов через суд. Вам не придется ходить в суд и
                    участвовать в
                    заседаниях. Все хлопоты мы возьмем на себя.
                </p>

                <button href="#" class="bankruptcy-cta__anchor" data-target="section-video">
                    <svg class="bankruptcy-cta__anchor-icon" width="75" height="74" viewBox="0 0 75 74"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M37.5 6.9375C31.5542 6.9375 25.7419 8.70063 20.7982 12.0039C15.8544 15.3073 12.0012 20.0024 9.72589 25.4956C7.45053 30.9888 6.85519 37.0334 8.01516 42.8649C9.17512 48.6965 12.0383 54.0531 16.2426 58.2574C20.4469 62.4617 25.8036 65.3249 31.6351 66.4849C37.4667 67.6448 43.5112 67.0495 49.0044 64.7741C54.4976 62.4988 59.1928 58.6456 62.4961 53.7018C65.7994 48.7581 67.5625 42.9458 67.5625 37C67.5526 29.03 64.3821 21.3892 58.7464 15.7536C53.1108 10.1179 45.47 6.94744 37.5 6.9375ZM48.0335 38.9252L34.1585 48.1752C33.7779 48.4274 33.3316 48.5621 32.875 48.5625C32.2617 48.5625 31.6735 48.3189 31.2398 47.8852C30.8062 47.4515 30.5625 46.8633 30.5625 46.25V27.75C30.5622 27.3312 30.6757 26.9203 30.8907 26.5609C31.1058 26.2016 31.4144 25.9074 31.7835 25.7098C32.1527 25.5121 32.5686 25.4184 32.9869 25.4387C33.4052 25.459 33.8101 25.5924 34.1585 25.8248L48.0335 35.0748C48.3507 35.2859 48.6108 35.5721 48.7907 35.908C48.9706 36.2439 49.0648 36.619 49.0648 37C49.0648 37.381 48.9706 37.7561 48.7907 38.092C48.6108 38.4279 48.3507 38.7141 48.0335 38.9252Z"
                            fill="#7B8084" />
                    </svg>

                    <span class="bankruptcy-cta__anchor-text">
                        Ошибки в банкротстве
                    </span>
                </button>
            </div>
        </div>
    </section>

    <section class="consequences">
        <div class="consequences__container">
            <div class="consequences__inner">
                <h2 class="consequences__title section-title section-title--g-lg">
                    Сразу после признания вас банкротом
                </h2>

                <div class="consequences__grid">
                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/01.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Приставы перестанут списывать деньги и блокировать счета
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/02.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Перестанут доставать коллекторы
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/03.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Запрет на выезд за границу будет снят
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/04.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Больше не придется искать как еще заработать.
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/05.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Начнете откладывать, а не тратить
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/06.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Наконец-то начнете спать по ночам
                        </p>
                    </div>

                    <div class="consequences__item">
                        <img src="{{ Vite::asset('resources/images/vector/consequences/07.svg') }}" alt="" class="consequences__item-icon">

                        <p class="consequences__item-caption">
                            Почувствуете свободу, расслабленность и уверенность в завтрашнем дне
                        </p>
                    </div>

                    <div class="consequences__item">
                        <p class="consequences__item-appointment">
                            Записаться на консультацию
                        </p>

                        <button class="consequences__item-btn button" data-target="section-form">
                            Получить консультацию
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about__container">
            <div class="about__inner">
                <h2 class="about__title section-title">
                    Надежный финансовый управляющий
                </h2>

                <div class="about__image">
                    <img src="{{ Vite::asset('resources/images/pixels/about/01.webp') }}" alt="about">

                    <div class="about__social">
                        <svg class="about__social-arrow" width="61" height="8" viewBox="0 0 61 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M60.3536 4.35355C60.5488 4.15829 60.5488 3.84171 60.3536 3.64645L57.1716 0.464466C56.9763 0.269204 56.6597 0.269204 56.4645 0.464466C56.2692 0.659728 56.2692 0.976311 56.4645 1.17157L59.2929 4L56.4645 6.82843C56.2692 7.02369 56.2692 7.34027 56.4645 7.53553C56.6597 7.7308 56.9763 7.7308 57.1716 7.53553L60.3536 4.35355ZM0 4.5H60V3.5H0V4.5Z"
                                fill="white" />
                        </svg>

                        <a href="#" class="about__social-link">
                            <svg class="about__social-icon" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.31717 7.18092L7.61121 6.32794C7.56083 6.30288 7.50472 6.29156 7.44856 6.29512C7.3924 6.29867 7.33817 6.31698 7.29135 6.3482L6.45543 6.9053C6.03224 6.68866 5.68795 6.34436 5.47131 5.92118L6.02894 5.08579C6.06016 5.03897 6.07847 4.98474 6.08202 4.92858C6.08558 4.87242 6.07426 4.81631 6.0492 4.76592L5.19622 3.05997C5.1697 3.0066 5.12879 2.9617 5.07812 2.93033C5.02744 2.89896 4.96901 2.88238 4.90941 2.88244C4.37213 2.88244 3.85685 3.09588 3.47694 3.47579C3.09702 3.85571 2.88359 4.37098 2.88359 4.90827C2.885 6.12379 3.36848 7.28912 4.22799 8.14862C5.08749 9.00812 6.25282 9.49161 7.46834 9.49302C8.00562 9.49302 8.5209 9.27959 8.90081 8.89967C9.28073 8.51976 9.49416 8.00448 9.49416 7.4672C9.49418 7.40775 9.47763 7.34946 9.44636 7.2989C9.4151 7.24833 9.37036 7.20747 9.31717 7.18092ZM7.46834 8.85329C6.42245 8.85202 5.41975 8.43597 4.68019 7.69641C3.94063 6.95685 3.52459 5.95416 3.52332 4.90827C3.52335 4.57374 3.64436 4.2505 3.86403 3.99821C4.08371 3.74591 4.38721 3.58157 4.71855 3.53551L5.39347 4.88534L4.83957 5.71593C4.81047 5.75974 4.79261 5.81004 4.78759 5.86239C4.78257 5.91475 4.79054 5.96753 4.81078 6.01607C5.10491 6.71538 5.66122 7.27169 6.36054 7.56582C6.40908 7.58607 6.46186 7.59404 6.51421 7.58901C6.56656 7.58399 6.61687 7.56614 6.66068 7.53704L7.49126 6.98313L8.8411 7.65805C8.79504 7.9894 8.6307 8.2929 8.3784 8.51257C8.1261 8.73224 7.80287 8.85326 7.46834 8.85329ZM6.18887 0.75C5.24622 0.749802 4.31971 0.994659 3.50023 1.46055C2.68075 1.92644 1.99646 2.59736 1.5145 3.40748C1.03253 4.21761 0.769437 5.13911 0.751036 6.08158C0.732635 7.02406 0.959555 7.95513 1.40953 8.78345L0.790059 10.6424C0.746203 10.7739 0.739839 10.915 0.771679 11.05C0.803519 11.1849 0.872305 11.3083 0.970328 11.4063C1.06835 11.5043 1.19174 11.5731 1.32665 11.6049C1.46157 11.6368 1.60269 11.6304 1.7342 11.5865L3.59316 10.9671C4.32084 11.362 5.1291 11.5855 5.95629 11.6206C6.78347 11.6557 7.60775 11.5014 8.36627 11.1696C9.12479 10.8377 9.79752 10.3371 10.3332 9.70574C10.8688 9.07442 11.2532 8.32913 11.4571 7.52669C11.6609 6.72425 11.6789 5.88585 11.5095 5.07543C11.3402 4.265 10.988 3.50395 10.4798 2.8503C9.97169 2.19665 9.321 1.66766 8.57737 1.30368C7.83373 0.939693 7.01681 0.75032 6.18887 0.75ZM6.18887 10.9857C5.34546 10.9859 4.51689 10.7638 3.78668 10.3417C3.738 10.3138 3.68289 10.2989 3.62674 10.2986C3.59232 10.2988 3.55815 10.3043 3.52545 10.3151L1.53215 10.9793C1.51336 10.9856 1.4932 10.9865 1.47393 10.982C1.45465 10.9774 1.43703 10.9676 1.42303 10.9536C1.40902 10.9396 1.3992 10.922 1.39465 10.9027C1.3901 10.8834 1.39101 10.8632 1.39727 10.8445L2.06153 8.85329C2.0759 8.81026 2.08096 8.76467 2.07636 8.71954C2.07177 8.67441 2.05762 8.63077 2.03487 8.59153C1.50563 7.67729 1.2929 6.61395 1.42968 5.56647C1.56646 4.51899 2.04511 3.54593 2.79137 2.79826C3.53763 2.05058 4.50978 1.57008 5.557 1.43131C6.60422 1.29254 7.66796 1.50326 8.5832 2.03076C9.49844 2.55827 10.214 3.37308 10.6189 4.34878C11.0238 5.32449 11.0953 6.40653 10.8225 7.42706C10.5496 8.44758 9.94757 9.34953 9.10978 9.99297C8.27198 10.6364 7.24525 10.9854 6.18887 10.9857Z"
                                    fill="#3B4044" />
                            </svg>
                        </a>

                        <a href="#" class="about__social-link">
                            <svg class="about__social-icon" width="12" height="12" viewBox="0 0 12 12"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7607 0.842038C11.7085 0.796993 11.6451 0.767043 11.5772 0.755421C11.5092 0.743798 11.4394 0.750945 11.3753 0.77609L0.420211 5.0633C0.286963 5.11544 0.174227 5.2094 0.0989337 5.33107C0.0236404 5.45275 -0.0101458 5.59556 0.00264922 5.73808C0.0154442 5.88059 0.0741297 6.0151 0.169892 6.12142C0.265655 6.22773 0.393325 6.30011 0.533729 6.32768L3.45926 6.9023V10.156C3.45932 10.3068 3.50446 10.4542 3.58887 10.5792C3.67329 10.7042 3.79313 10.8011 3.93303 10.8575C4.07292 10.9139 4.22648 10.9273 4.374 10.8958C4.52151 10.8643 4.65626 10.7894 4.76094 10.6808L6.201 9.18726L8.44866 11.1576C8.58589 11.279 8.76275 11.3461 8.94598 11.3463C9.026 11.3461 9.1055 11.3335 9.18167 11.309C9.30653 11.2695 9.41886 11.1979 9.50745 11.1014C9.59604 11.005 9.65779 10.887 9.68655 10.7592L11.8823 1.21341C11.8978 1.1463 11.8946 1.07625 11.8732 1.01081C11.8517 0.945365 11.8128 0.887013 11.7607 0.842038ZM0.651032 5.68927C0.648962 5.68369 0.648962 5.67756 0.651032 5.67198C0.653474 5.67009 0.656215 5.66863 0.65914 5.66765L9.29248 2.28805L3.70846 6.28822L0.65914 5.69144L0.651032 5.68927ZM4.29389 10.23C4.27899 10.2455 4.25983 10.2561 4.23884 10.2607C4.21785 10.2652 4.19599 10.2634 4.17604 10.2554C4.1561 10.2475 4.13897 10.2338 4.12684 10.2161C4.11471 10.1983 4.10813 10.1774 4.10794 10.156V7.35097L5.71287 8.75643L4.29389 10.23ZM9.05464 10.6127C9.05065 10.631 9.04182 10.6479 9.02908 10.6616C9.01634 10.6753 9.00014 10.6853 8.9822 10.6906C8.9639 10.697 8.9442 10.6984 8.92518 10.6946C8.90616 10.6908 8.88851 10.6819 8.87409 10.6689L4.3047 6.66067L11.0812 1.80424L9.05464 10.6127Z"
                                    fill="#3B4044" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="about__content">
                    <p class="about__intro">
                        Меня зовут Евгения Дудина. Я действующий арбитражный управляющий, провожу процедуры банкротства
                        лично и
                        без посредников. Не занимаюсь банкротством на потоке, каждую процедуру веду индивидуально!
                    </p>

                    <div class="about__services">
                        <p class="about__services-caption">
                            Я помогу Вам:
                        </p>

                        <ul class="about__services-list simple-list">
                            <li class="about__services-item simple-list__item">
                                ответить на все вопросы, связанные c процедурой банкротства
                            </li>

                            <li class="about__services-item simple-list__item">
                                разобраться в сложной ситуации и составить план действий
                            </li>

                            <li class="about__services-item simple-list__item">
                                остановить беспредел со стороны коллекторов и приставов
                            </li>

                            <li class="about__services-item simple-list__item">
                                подготовить документы для проведения процедуры через суд
                            </li>
                        </ul>
                    </div>

                    <div class="about__experience">
                        С 2017 по настоящее время состою в СРО Арбитражных управляющих. Это дает мне право проводить
                        процедуры
                        банкротства граждан и юридических лиц.
                    </div>

                    <div class="about__stats">
                        <div class="stat-item">
                            <p class="stat-item__number">9+ лет</p>
                            <span class="stat-item__text">Более 9 лет опыта работы в сфере</span>
                        </div>

                        <div class="stat-item">
                            <p class="stat-item__number">240+</p>
                            <span class="stat-item__text">человек стали свободными от долгов</span>
                        </div>

                        <div class="stat-item">
                            <p class="stat-item__number">133+ млн
							</p>
                                <span class="stat-item__text">Списано более 133&nbsp;568&nbsp;125&nbsp;руб.</span>
                        </div>
                    </div>

                    <div class="about__footer">
                        <p class="about__status-info">
                            Мой статус арбитражного управляющего и мои дела можно проверить в профиле ЕФРСБ
                        </p>

                        <a href="https://old.bankrot.fedresurs.ru/ArbitrManagerCard.aspx?ID=8db45906-0522-4604-9374-54969b8f9113" class="about__btn button" target="_blank">Проверить статус</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="section-form" class="appointment">
        <div class="appointment__container">
            <div class="appointment__inner">
                <h2 class="appointment__title section-title section-title--g-sm">
                    Узнайте как бесплатно списать все долги
                </h2>

                <p class="appointment__descr">
                    Запишитесь на консультацию опытного арбитражного управляющего
                </p>

                <div class="appointment__content">
                    <form action="#" class="appointment-form" id="form">
						@csrf
                        <input type="text" class="appointment-form__input" placeholder="Имя" name="name" required>
                        <input type="tel" class="appointment-form__input" placeholder="+7 (999) 999-99-99" name="phone" required>
                        <button class="appointment-form__submit button button--light" type="submit">Записаться</button>
                    </form>

                    <p class="appointment__disclaimer">
                        Отправляя форму вы соглашаетесь с условиями <a href="/policy.pdf">политики обработки персональных данных</a> 
                    </p>
                </div>

				<script>
					const form = document.getElementById('form');
					const button = form.querySelector('.button');

					form.addEventListener('submit', (e) => {
						e.preventDefault();
						button.disabled = true;
						const formData = new FormData(form);
						fetch('/application', {
							method: 'POST',
							body: formData
						}).then((res) => {
							if (!res.ok) {
								alert('Произошла ошибка');
							}

							button.disabled = false;
							form.reset();
						})
					});
				</script>

            </div>
        </div>
    </section>

	@if ($reviews->isNotEmpty())
		<section id="reviews" class="reviews">
			<div class="reviews__container">
				<div class="reviews__inner">
					<div class="reviews__text">
						<h2 class="reviews__title section-title section-title--g-lg">
							Результаты говорят сами за себя
						</h2>

						<p class="reviews__descr">
							Прочитайте отзывы моих клиентов и убедитесь в эффективности методов по списанию долгов. Реальные истории успеха — доказательство эффективности моей работы.
						</p>

						<button class="reviews__btn button" type="button" data-target="section-form">
							Хочу также
						</button>
					</div>

					<div class="reviews-slider">
						<div class="reviews-slider__content">
							<div class="reviews-slider__swiper swiper">
								<div class="reviews-slider__wrapper swiper-wrapper">
									@foreach ($reviews as $review)
										<div class="reviews-slider__slide swiper-slide">
											<img src="{{ $review->image }}" alt="" class="reviews-slider__img">
										</div>
									@endforeach
								</div>
							</div>
						</div>

						<div class="reviews-slider__btn-prev swiper-button-prev"></div>
						<div class="reviews-slider__btn-next swiper-button-next"></div>
					</div>

				</div>
			</div>
		</section>
	@endif

	@if ($cases->isNotEmpty())
		<section id="practice" class="practice">
			<div class="practice__container">
				<div class="practice__inner">
					<h2 class="practice__title section-title section-title--g-lg">
						Моя практика банкротства физических лиц
					</h2>

					<div class="practice-slider">
						<div class="practice-slider__content">
							<div class="practice-slider__swiper swiper">
								<div class="practice-slider__wrapper swiper-wrapper">
									@foreach ($cases as $case)
										<div class="practice-slider__slide swiper-slide">
											<img src="{{ $case->image }}" alt="" class="practice-slider__img">
										</div>
									@endforeach
								</div>
							</div>
						</div>

						<div class="practice-slider__btn-prev swiper-button-prev"></div>
						<div class="practice-slider__btn-next swiper-button-next"></div>

						<div class="practice-slider__pagination swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>
	@endif

    <section class="stages">
        <div class="stages__container">
            <div class="stages__inner">
                <h2 class="stages__title section-title section-title--g-lg">
                    Этапы процедуры банкротства
                </h2>

                <div class="stages__content">
                    <ul class="stages-list list list--number">
                        <li class="stages-list__item list__item">
                            <div class="stages-list__content">
                                <p class="stages-list__caption">
                                    Бесплатная ознакомительная консультация
                                </p>

                                <p class="stages-list__value">
                                    На консультации определяем подходит ли вам банкротство и как лучше поступить в вашей
                                    ситуации.
                                </p>
                            </div>
                        </li>

                        <li class="stages-list__item list__item">
                            <div class="stages-list__content">
                                <p class="stages-list__caption">
                                    Сбор документов нашей командой
                                </p>

                                <p class="stages-list__value">
                                    Помогаем собрать справки, документы из банков, личные документы для формирования иска в
                                    суд.
                                </p>
                            </div>
                        </li>

                        <li class="stages-list__item list__item">
                            <div class="stages-list__content">
                                <p class="stages-list__caption">
                                    Подготовка и подача заявления в Арбитражный суд
                                </p>

                                <p class="stages-list__value">
                                    Подаем заявление о признании вас банкротом в арбитражный суд по месту регистрации.
                                </p>
                            </div>
                        </li>

                        <li class="stages-list__item list__item">
                            <div class="stages-list__content">
                                <p class="stages-list__caption">
                                    Проведение судебной процедуры банкротства
                                </p>

                                <p class="stages-list__value">
                                    После первого заседания суд признает вас банкротом, коллекторы и банки перестают
                                    тревожить и просить
                                    вернуть долг.
                                </p>
                            </div>
                        </li>

                        <li class="stages-list__item list__item">
                            <div class="stages-list__content">
                                <p class="stages-list__caption">
                                    Процедура списания долгов
                                </p>

                                <p class="stages-list__value">
                                    Мы проводим процедуру списания долгов, при которой ваше участие не требуется.
                                    Результатом процедуры
                                    банкротства является полное освобождение от всех обязательств перед кредиторами,
                                    списание всех
                                    долгов и начало нового этапа в жизни!
                                </p>
                            </div>
                        </li>
                    </ul>

                    <p class="stages__result">
                        Результат: долги списаны!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="after">
        <div class="after__container">
            <div class="after__inner">
                <div class="after__text">
                    <h2 class="after__title section-title section-title--g-lg">
                        Жизнь после списания долгов
                    </h2>

                    <div class="after__block">
                        <p class="after__block-caption">
                            Основные страхи
                        </p>

                        <ul class="after__list simple-list">
                            <li class="after__list-item simple-list__item">
                                нельзя будет поехать за границу
                            </li>

                            <li class="after__list-item simple-list__item">
                                нельзя будет оформить на себя имущество
                            </li>

                            <li class="after__list-item simple-list__item">
                                уволят с работы
                            </li>

                            <li class="after__list-item simple-list__item">
                                не дадут кредиты
                            </li>
                        </ul>
                    </div>

                    <div class="after__block">
                        <p class="after__block-caption">
                            Реальные последствия на самом деле
                        </p>

                        <ul class="after__list simple-list">
                            <li class="after__list-item simple-list__item">
                                Повторное банкротство доступно через 5 лет
                            </li>

                            <li class="after__list-item simple-list__item">
                                Кредитная история будет испорчена, но её можно исправить
                            </li>

                            <li class="after__list-item simple-list__item">
                                Можно оформить самозанятость или ИП (если банкротство прошло не по правилам по ст. 216 ЗоБ)
                            </li>

                            <li class="after__list-item simple-list__item">
                                Официальное трудоустройство не запрещено
                            </li>

                            <li class="after__list-item simple-list__item">
                                Выезд за границу открыт
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="after__reviews">
                    <div class="after-slider">
                        <div class="after-slider__content">
                            <div class="after-slider__swiper swiper">
                                <div class="after-slider__wrapper swiper-wrapper">
                                    <div class="after-slider__slide swiper-slide">
                                        <img src="{{ Vite::asset('resources/images/pixels/after/01.webp') }}" alt="" class="after-slider__img">
                                    </div>

                                    <div class="after-slider__slide swiper-slide">
                                        <img src="{{ Vite::asset('resources/images/pixels/after/02.webp') }}" alt="" class="after-slider__img">
                                    </div>
                                    <div class="after-slider__slide swiper-slide">
                                        <img src="{{ Vite::asset('resources/images/pixels/after/03.webp') }}" alt="" class="after-slider__img">
                                    </div>
                                    <div class="after-slider__slide swiper-slide">
                                        <img src="{{ Vite::asset('resources/images/pixels/after/04.webp') }}" alt="" class="after-slider__img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="after-slider__btn-prev swiper-button-prev"></div>
                        <div class="after-slider__btn-next swiper-button-next"></div>
                    </div>

                    <div class="after__conclusion">
                        Вывод: рассрочки дают, микрозаймы дают, кредитную историю можно исправить.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cost" class="cost">
        <div class="cost__container">
            <div class="cost__inner">
                <h2 class="cost__title section-title section-title--g-lg">
                    Стоимость
                </h2>

                <div class="cost-slider">
                    <div class="cost-slider__content">
                        <div class="cost-slider__swiper swiper">
                            <div class="cost-slider__wrapper swiper-wrapper">
                                <div class="cost-slider__slide swiper-slide">
                                    <div class="cost-card">
                                        <div class="cost-card__head">
                                            <h3 class="cost-card__title">
                                                Тариф «Сбор»
                                            </h3>

                                            <div class="cost-card__price">
                                                От 50 000 руб.
                                            </div>
                                        </div>


                                        <ul class="cost-card__list">
                                            <li class="cost-card__list-item">
                                                Первичная консультация
                                            </li>

                                            <li class="cost-card__list-item">
                                                Изучение ситуации и документов, анализ рисков
                                            </li>

                                            <li class="cost-card__list-item">
                                                Персональный консультант
                                            </li>

                                            <li class="cost-card__list-item">
                                                Сбор документов, не выходя из дома
                                            </li>

                                            <li class="cost-card__list-item">
                                                Формирование иска и приложений для суда
                                            </li>

                                            <li class="cost-card__list-item">
                                                Рассылка заявления в адрес кредиторов
                                            </li>

                                            <li class="cost-card__list-item">
                                                Электронная подача за вас заявления в арбитражный суд
                                            </li>

                                            <li class="cost-card__list-item">
                                                Отслеживание судьбы вашего заявления в суде
                                            </li>

                                            <li class="cost-card__list-item">
                                                Устранение недостатков (при необходимости)
                                            </li>

                                            <li class="cost-card__list-item">
                                                Почтовые расходы ДО признания вас банкротом
                                            </li>
                                        </ul>

                                        <button class="cost-card__btn button" type="button" data-target="section-form">Заказать услугу</button>
                                    </div>
                                </div>

                                <div class="cost-slider__slide swiper-slide">
                                    <div class="cost-card">
                                        <div class="cost-card__head">
                                            <h3 class="cost-card__title">
                                                Тариф «Ведение»
                                            </h3>

                                            <div class="cost-card__price">
                                                25 000 руб./месяц
                                            </div>
                                        </div>


                                        <ul class="cost-card__list">
                                            <li class="cost-card__list-item">
                                                Первичная консультация
                                            </li>

                                            <li class="cost-card__list-item">
                                                Персональный консультант
                                            </li>

                                            <li class="cost-card__list-item">
                                                Обеспечение направления кандидатуры управляющего от СРО в суд
                                            </li>

                                            <li class="cost-card__list-item">
                                                Вступление в процедуру после признания должника банкротом
                                            </li>

                                            <li class="cost-card__list-item">
                                                Ведение процедуры, направление запросов, сбор справок, составление отчетов
                                                фин. управляющего,
                                                анализа, заключения по сделкам
                                            </li>

                                            <li class="cost-card__list-item">
                                                Почтовые расходы, расходы на публикации
                                            </li>

                                            <li class="cost-card__list-item">
                                                Завершение процедуры
                                            </li>

                                            <li class="cost-card__list-item">
                                                Разблокировка банковских карточек
                                            </li>
                                        </ul>

                                        <button class="cost-card__btn button" type="button" data-target="section-form">Заказать услугу</button>
                                    </div>
                                </div>

                                <div class="cost-slider__slide swiper-slide">
                                    <div class="cost-card">
                                        <div class="cost-card__head">
                                            <h3 class="cost-card__title">
                                                Тариф «Под ключ»
                                            </h3>

                                            <div class="cost-card__price">
                                                От 190 000 руб.
                                            </div>
                                        </div>


                                        <ul class="cost-card__list">
                                            <li class="cost-card__list-item">
                                                Все преимущества тарифа «Сбор»:

                                                <ul class="cost-card__simple-list simple-list">
                                                    <li class="cost-card__simple-list-item simple-list__item">
                                                        подготовка документов
                                                    </li>

                                                    <li class="cost-card__simple-list-item simple-list__item">
                                                        написание иска
                                                    </li>

                                                    <li class="cost-card__simple-list-item simple-list__item">
                                                        представление вас в суде
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="cost-card__list-item">
                                                Все преимущества тарифа «Ведение»:

                                                <ul class="cost-card__simple-list simple-list">
                                                    <li class="cost-card__simple-list-item simple-list__item">
                                                        проведение судебной процедуры банкротства, по результатам которой
                                                        долги будут списаны
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="cost-card__list-item">
                                                Обеспечение направления кандидатуры управляющего от СРО в суд
                                            </li>

                                            <li class="cost-card__list-item">
                                                Обеспечение внесения 25 000 руб. на депозит арбитражного суд для
                                                вознаграждения финансового
                                                управляющего
                                            </li>
                                        </ul>

                                        <button class="cost-card__btn button" type="button" data-target="section-form">Заказать услугу</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cost-slider__pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-video" class="bankruptcy-video">
        <div class="bankruptcy-video__container">
            <div class="bankruptcy-video__inner">
                <h2 class="bankruptcy-video__title section-title section-title--g-lg">
                    Подробный разговор о мифах и подводных камнях банкротства
                </h2>

                <iframe class="bankruptcy-video__content"
                    src="https://vk.com/video_ext.php?oid=716842214&id=456239334&hd=2&autoplay=0" width="853"
                    height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection
