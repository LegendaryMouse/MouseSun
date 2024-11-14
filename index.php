<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mouse Sun - лучший ванильный сервер Minecraft Purpur 1.21. Чистое выживание, без привата и доната, с дружелюбным сообществом и стабильным хостингом. Присоединяйся!">
    <meta name="keywords" content="Minecraft, ванильный сервер, чистое выживание, без доната, сервер Minecraft 1.21, Mouse Sun, бесплатная игра">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/webp" href="https://mousesun.ru/images/favicon.webp" />
    <meta property="og:title" content="Mouse Sun - Ванильный Minecraft Сервер">
    <meta property="og:description" content="Топовый сервер Minecraft с чистым выживанием, без доната и с стабильным хостингом. Присоединяйся к Mouse Sun!">
    <meta property="og:image" content="https://mousesun.ru/images/favicon.webp">
    <meta property="og:url" content="https://mousesun.ru">
    <meta name="twitter:card" content="summary_large_image">
    <title>☀️ Mouse Sun - Ванильный Minecraft Сервер 1.21</title>
    
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(98913601, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/98913601" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <style>
    #typingBox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #333;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            max-width: 300px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background: linear-gradient(to bottom, #ffecd2, #fcb69f);
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        header {
            text-align: center;
            padding: 0;
        }
        header h1 {
            font-size: 3em;
            color: #d4842c;
        }
        header p {
            font-size: 1.2em;
            color: #666;
        }
        .section {
            margin: 40px 0;
        }
        .section h2 {
            color: #d4842c;
            border-bottom: 2px solid #d4842c;
            display: inline-block;
            padding-bottom: 5px;
            font-size: 2em;
        }
        .section p {
            font-size: 1.1em;
            line-height: 1.6;
            margin: 15px 0;
        }
        footer {
            text-align: center;
            padding: 30px;
            font-size: 0.9em;
            color: #555;
        }
        .highlight {
            font-weight: bold;
            color: #d4842c;
        }
    </style>
    
        <!-- JSON-LD микроразметка -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Mouse Sun",
      "url": "https://unimice.ru/mouse-sun",
      "logo": "https://unimice.ru/images/mouse-sun-logo.png",
      "description": "Лучший ванильный сервер Minecraft Purpur 1.21 с чистым выживанием, без привата и доната.",
      "sameAs": [
        "https://www.facebook.com/MouseSunMC",
        "https://twitter.com/MouseSunMC",
        "https://vk.com/MouseSunMC"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+7-123-456-7890",
        "contactType": "Customer Support",
        "areaServed": "RU",
        "availableLanguage": "Russian"
      }
    }
    </script>
    
</head>
<body>

<div class="container">
    <header>
        <h1>☀️ Mouse Sun - Топовый Ванильный Сервер Minecraft</h1>
        <p>Присоединяйтесь к сообществу, где каждое приключение уникально! Откройте для себя мир чистого выживания и свободного строительства без привата и доната.</p>
    </header>

    <main>
        <div id="typingBox"></div>
        <script>
    // JavaScript to create the typing effect
    const typingBox = document.getElementById("typingBox");

    // Function to get current date and time
    function getCurrentDateTime() {
        const now = new Date();
        const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
        const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };

        const currentDate = now.toLocaleDateString('ru-RU', dateOptions);
        const currentTime = now.toLocaleTimeString('ru-RU', timeOptions);

        return `Привет, сегодня ${currentDate}, а сейчас ${currentTime}. Не пора ли тебе спать?`;
    }

    // Typing effect function
    function typeEffect(text, element, speed = 50) {
        let i = 0;
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        type();
    }

    // Update the typingBox content
    function updateTypingBox() {
        const message = getCurrentDateTime();
        typingBox.innerHTML = "";  // Clear previous text
        typeEffect(message, typingBox);
    }

    // Initial call
    updateTypingBox();

    // Update the message every minute
    // setInterval(updateTypingBox, 60000);
</script>

        <section class="section" id="about">
            <h2>🌞 Чистое Выживание</h2>
            <p>Mouse Sun - это мир, где можно погрузиться в чистый и оригинальный геймплей Minecraft. Никаких модификаций и ограничений, только вы и мир Minecraft, где каждое утро приносит новые вызовы. Этот сервер создан для настоящих ценителей ванильного опыта и тех, кто хочет насладиться игрой во всей её первозданной красоте.</p>
            <p>На Mouse Sun вы не столкнётесь с донатом и платными преимуществами. Мы верим в честный геймплей, где успех зависит только от ваших усилий и мастерства. Присоединяйтесь и постройте свою историю в мире, где нет границ для вашего воображения!</p>
        </section>

        <section class="section" id="features">
            <h2>🛡️ Основные Преимущества</h2>
            <p><span class="highlight">Без Привата:</span> Создавайте, исследуйте и взаимодействуйте с миром и другими игроками без ограничений приватизации. Мы поддерживаем динамичное игровое пространство, где каждый может внести вклад в развитие общих территорий.</p>
            <p><span class="highlight">Без Доната:</span> Здесь вы не найдете платных услуг или привилегий. Mouse Sun – это равные условия для всех игроков. Все возможности и достижения доступны каждому без дополнительных трат.</p>
            <p><span class="highlight">Бесплатная Игра:</span> Мы стремимся поддерживать честное сообщество и обеспечивать всем игрокам доступ к игре без скрытых платежей. Игра на Mouse Sun – полностью бесплатна, открыта и доступна для всех.</p>
        </section>

        <section class="section" id="community">
            <h2>👥 Наше Сообщество</h2>
            <p>Mouse Sun гордится дружелюбной атмосферой, где игроки помогают друг другу и всегда рады новым друзьям. Здесь вы найдете единомышленников, готовых к совместным проектам, интересным челленджам и весёлым приключениям. Присоединяйтесь к активному сообществу, которое создаёт уникальные постройки, участвует в массовых эвентах и всегда открыто для общения.</p>
        </section>

        <section class="section" id="technical">
            <h2>🚀 Технические Преимущества</h2>
            <p>Наш сервер поддерживается мощной технической инфраструктурой. Мы используем серверы с <span class="highlight">20 ГБ оперативной памяти</span>, что позволяет обеспечивать плавную и стабильную работу даже при высоких нагрузках.</p>
            <p>Система защиты от <span class="highlight">DDoS-атак</span> гарантирует безопасность и защиту от внешних угроз. Вы можете наслаждаться игрой без опасений за стабильность сервера.</p>
        </section>

        <section class="section" id="worlds">
            <h2>🌍 Уникальная Система Миров</h2>
            <p>Mouse Sun использует инновационную систему миров. Основной мир, где размещены ваши постройки, никогда не очищается, сохраняя всё ваше творчество. Для добычи ресурсов доступны дополнительные миры, которые регулярно обновляются, чтобы всегда было достаточно материалов для выживания.</p>
        </section>
    </main>

    <footer>
        <p>Mouse Sun &copy; 2024 - Ванильный сервер Minecraft 1.21 без доната. Присоединяйтесь и начните своё солнечное приключение уже сегодня!</p>
    </footer>
</div>

</body>
</html>
