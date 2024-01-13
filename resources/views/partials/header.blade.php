
<?php 

    $navItems = ["CHARACTERS","COMICS","MOVIES","TV","GAMES", "COLLECTIBLES","VIDEOS","FANS","NEWS","SHOP"]

?>



<header class="header-b">
    <div class="container logo-item">
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC">
        </div>
        <nav>
            <ul>
                <?php foreach ($navItems as $item) { ?>
                    <li>
                         <a href=""><?php echo $item ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>