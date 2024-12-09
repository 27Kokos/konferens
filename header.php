<?php
$current_page = basename($_SERVER['PHP_SELF']); // Получаем имя текущего файла
?>

<header>
    <div class="logo"><a href="index.php" style="text-decoration: none;">Kokodjam</a></div>
    <nav>
        <ul>
            <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Главная</a></li>
            <li><a href="#">Разделы форума</a></li>
            <li><a href="#">Программисты</a></li>
            <li class="prof">
                <a href="reg.php" class="<?= $current_page == 'reg.php' ? 'active' : '' ?>">
                    <img src="<?= isset($user_avatar) ? $user_avatar : '/img/banner-bg.jpg'; ?>" alt="Avatar"
                        class="avatar">
                    <span>Профиль</span>
                </a>
            </li>
        </ul>
    </nav>
</header>