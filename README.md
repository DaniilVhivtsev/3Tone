<b>Название проекта:</b> Создание образовательной платформы по обучению и улучшению своих навыков в 3D моделировании.

<b>Название команды:</b> ППA1.ИРИТ-РТФ.O3D П, АТ-01, "3Tone".

<b>Формат системы:</b> web-сервис.

<b>Цель:</b> К 16 Июня 2021 года реализовать образовательную платформу по обучению и улучшению своих навыков в 3D моделировании и добавить на платформу один тематический курс.

<b>Описание:</b> 3Tone – это образовательная платформа по обучению и улучшению своих навыков в 3D моделировании. Наш сервис предлагает интерактивные курсы, долгосрочные образовательные программы, обширную мультимедийную библиотеку и возможность выполнения домашних заданий на платформе с моментальной проверкой успешности их реализации. На площадке можно учиться в любое удобное время.

<b>Целевая аудитория:</b> Студенты и школьники, которые заинтересованы в обучении 3D моделирования.

<b>Основное преимущество:</b> Возможность выполнения домашних заданий на платформе с моментальной проверкой успешности реализации.

<b>Стек технологий:</b> 
  1.	Microsoft Word
  2.	Microsoft PowerPoint
  3.	Figma
  4.	Photoshop
  5.	Beget.com
  6.	MAMP
  7.	Atom
  8.	Visual Studio Code
  9.	HTML
  10.	CSS
  11.	PHP
  12.	JavaScript
  13.	WebGl

<b>Работа пользователя с системой:</b>
Пользователь проходит по ссылке: http://digitaxs.beget.tech/ -> Нажимает на кнопу в шапке страницы (Войти) -> Авторизовывается либо регистрируется на сайте -> Нажимает на кнопу в шапке страницы (Курсы) -> На станице "Курсы" пользователь выбирает нужный ему курс по 3D Моделированию и наживает у выбранного им курса кнопу "Начать"  -> На странице выбранного курса пользователь нажимает кнопку "Начать" -> На странице "Материалы курса" пользователь просматривает весь учебный материал, выполняет все задания во встроенном 3D конструкторе.
// Если у пользоваетля есть вопросы, он может их задать перейдя по кнопке "Форум".

<b>Основные требования к ПО для использования:</b> Для работы с данной платформой необходимо наличие любого из следующих браузеров: 
  1. Mozilla Firefox (версия 4.0 и выше)
  2. Google Chrome (версия 9 и выше)
  3. Safari (версия 8.0 и выше)
  4. Opera (версия 12.0 и выше)
  5. Internet Explorer (версия 11 и выше)

<b>Порядок установки:</b> Необходимо установить <a href="https://docs.docker.com/get-docker/">Docker</a>. И запустить <code># docker-compose up</code> из папки <b>/docker</b>. Сайт будет доступен по адресу: http://localhost:8080

<b>Готовая реализация:</b> Необходимо перейти по следующей ссылке: http://digitaxs.beget.tech/

<b>Структура приложения:</b> 
Главная страница (http://digitaxs.beget.tech/). С главной страницы можно перейти на 4 страницы: Вход / регистрация, Курсы, Форум, Практики.
Курсы - страница с 3 курсами, с каждого курса есть переход на старницу "Главная страница курса", после страницы "Главная страница курса" есть переход на страницу "Матералы курса."
Материалы курса - страница с материалами курса, с домашними заданиями и встроенным 3D конструктором для выполнения и проверки домашних заданий.