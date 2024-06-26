<div class="header-container">
    <header>
        <div class="logo-container">
            <a href="/" class="logo"><img src="/img/hotpng.png" alt="Лого"></a>
        </div>
        <div class="contact-info">
            <div class="phone-info">
                <p class="phone-number">
                    <img src="/img/call.png" width="50" height="50">
                <a href="tel:+73452500045">+7 (3452) 500-045</a>
                </p>
                <p class="working-hours">
                    <img src="/img/time.png" width="50" height="50">
                    09:00 - 20:00
                </p>
            </div>
        </div>
    </header>
    <nav>
        <div class="nav-links">
            <a class="nav-link" href="/">Главная</a>
            <a class="nav-link" href="/about.php">О нас</a>
            <a class="nav-link" href="/aboutdogovor.php">Услуги</a>
            <a class="nav-link" href="/read.php">Договоры</a>
            <a class="nav-link" href="/news.php">Новости</a>
            <a class="nav-link" href="/contacts.php">Контакты</a>
            <?php if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == 3) { ?>
                <a class='nav-link' href='/otchet.php'>Отчет</a>
            <?php } ?>
        </div>
    </nav>
    <h1>Юридическая компания «TopLegalConsulting»</h1>
</div>