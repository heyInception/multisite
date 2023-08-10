<?php
function wz_faq_title($atts)
{
  $current_language = get_locale();
  if ($current_language == 'ru_RU') {
    $attributes  = shortcode_atts(array(
      'title' => 'Что у нас часто спрашивают',
    ), $atts);
  }

  if ($current_language == 'en_US') {
    $attributes  = shortcode_atts(array(
      'title' => 'People often ask us',
    ), $atts);
  }
  return '' . $attributes['title'] . '' ?? '';
}
add_shortcode('wz-faq-title', 'wz_faq_title');



function wz_faq($atts)
{
  $current_language = get_locale();
  $atts = shortcode_atts(
    array(
      'answer' => '',
      'question' => '',
    ),
    $atts
  );
  if ($current_language == 'ru_RU') {
    $answer = array(
      '1' => 'Подключаете официальный WhatsApp?',
      '2' => 'А рассылки делать можно?',
      '3' => 'Вы поддерживаете групповые чаты?',
      '4' => 'А какие еще мессенджеры подключаете?',
      '5' => 'У меня не Битрикс и не amoCRM. Вы делаете интеграции с другими CRM?',
      '6' => 'У каждого моего менеджера свой номер, подойдет ли мне сервис?',
      '7' => 'Можно ли использовать Wazzup, если у меня много менеджеров?',
      '8' => 'У меня несколько филиалов с разными номерами. Сервис подойдет для такого кейса?',
      '9' => 'Сквозную аналитику можете подключить?',

    );
    $question = array(
      '1' => '<p>Да, через нас можно подключить WhatsApp Business API. А еще можно подать заявку на верификацию, согласовать шаблоны и получить зеленую галку. За подробностями и помощью приходите в <a href="https://wazzup24.com/contact/">нашу поддержку</a>.</p>',
      '2' => 'Можно, для этого отлично подходит WhatsApp Business API. Вы сможете <br class="wz24-paragraph-mobile">без ограничений отправлять рассылки, <br class="wz24-paragraph-mobile">а также вставлять в сообщения кнопки, <br class="wz24-paragraph-mobile">чтобы поднять конверсию.',
      '3' => 'Да. Причем, если вы пользуетесь одним номером на всех менеджеров, то менеджеры будут видеть групповые чаты только со своими клиентами и не будут видеть чужие.',
      '4' => 'WhastApp Web, WhatsApp Business API, Instagram, Telegram, Vk, Avito. Можем подключить хоть все сразу. Даже если их будет несколько, отвечать клиентам из разных мессенджеров сможете из одного окна.',
      '5' => '<p>Да, делаем. С&nbsp;Мегапланом, Planfix, EnvyCRM и&nbsp;еще 30+. Узнать точно,<br class="wz24-paragraph-mobile"> есть&nbsp;ли интеграция с&nbsp;нами,<br class="wz24-paragraph-mobile"> можно в&nbsp;маркетплейсе своей CRM.</p><p>Если у&nbsp;вас кастомная CRM, вы&nbsp;можете<br class="wz24-paragraph-mobile"> подключить <a href="https://wazzup24.com/whatsapp-business-api/">Wazzup по&nbsp;API</a>. Крупным<br class="wz24-paragraph-mobile"> компаниям, где сервисом будет<br class="wz24-paragraph-mobile"> пользоваться<br class="wz24-paragraph-desktop"> более 50&nbsp;человек, мы&nbsp;сами<br class="wz24-paragraph-mobile"> делаем интеграцию по&nbsp;API. Просто<br class="wz24-paragraph-mobile"> оставьте заявку&nbsp;— и&nbsp;мы&nbsp;поможем.</p>',
      '6' => 'Да, все продавцы будут переписываться из CRM или нашего мобильного приложения, но переписки друг друга видеть не будут.',
      '7' => '<p>Да, без проблем. Можно пересадить всех продавцов на один канал, а можно каждому сделать отдельный.</p><p>Если у вас крупная компания, оставьте заявку, и&nbsp;мы&nbsp;расскажем, чем можем помочь.</p><a class="wz24-main-faq-btn" href="https://wazzup24.com/contact/">Оставить заявку</a>',
      '8' => 'Да, у нас есть компании, которые так работают. Например, DNS. У каждого отделения — свой телефон, но менеджеры одного филиала пользуются единым номером. Причем, когда на этот телефон приходят новые обращения, они распределяются именно по менеджерам филиала.',
      '9' => 'Да, можем подключить Roistat, CoMagic и любую другую аналитику, которая работает на google id и yandex id.',
      
    );
  }

  if ($current_language == 'en_US') {
    $answer = array(
      '1' => 'Do you connect the WhatsApp Business API?',
      '2' => 'Is bulk messaging possible?',
      '3' => 'Do you support group chats?',
      '4' => 'What other messengers do you serve?',
      '5' => 'I don’t have any of the CRMs on the list. Do you integrate with other CRMs?',
      '6' => 'All my sales reps have their own numbers, is the service for me?',
      '7' => 'Can I use Wazzup if I have many sales reps?',
      '8' => 'I have several branches with different numbers. Is the service suitable in this case?',
      '9' => 'Can you hook up end-to-end analytics?',

    );
    $question = array(
      '1' => 'Yes, we do. You can integrate WhatsApp Business API with CRM. Do it yourself or contact our support team for assistance. We can help you to apply for verification, agree the templates, get a green tick.',
      '2' => 'It’s possible, WhatsApp Business API is great for this. You can send out unlimited bulk messages and add buttons to messages to boost the conversion rate.',
      '3' => 'Yes. Moreover, if you use one number for all sales reps, they will see group chats only with their clients, not with anyone else.',
      '4' => 'We can integrate WhatsApp Business API, Telegram, and Instagram, any of them or all at once. Even if there are several messengers, you can respond to clients from one window.',
      '5' => 'If your CRM isn’t on the list, you can use Wazzup via API.',
      '6' => 'Yes, all sales reps will text using CRM or our mobile app but will not see each other’s messages.',
      '7' => 'Yes, no problem. It’s possible to move all sales reps to one channel or create a separate one for each.',
      '8' => 'Yes, we have companies that operate this way. Each branch has its own phone number, which is used by all sales reps at that branch. When new inquiries are made to this number, they are distributed among the sales reps of this branch.',
      '9' => 'Yes, we can set up integration with Roistat, CoMagic, and any other analytics system that works with Google ID.',
    );
  }
  if (isset($answer[$atts['answer']])) {
    return $answer[$atts['answer']] ?? '' . $atts['answer'] . '';
  }
  if (isset($question[$atts['question']])) {
    return $question[$atts['question']] ?? '' . $atts['question'] . '';
  }
}
add_shortcode('wz-faq', 'wz_faq');
