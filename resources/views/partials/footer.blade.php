
<?php  
    $linkDcComics = ["Characters","Comics","Movies","TV","Games","Videos","News",];
    $linkShop = ["Shop DC","Shop DC Collectibles"];
    $linkDc = ["Terms Of Use","Privacy policy(New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent Workshops","CPSC Cerificates","Ratings","Shop Help","Contact Us"];
    $linkSites=["DC","MAD Magazine","DC Kids","DC Universe","DC Power Visa"];
?>


<footer class="footer-b">
    <div class="dc-back">
        <div class="container">
            <section class="links">
                <div class="list">
                    <div>
                        <h3>DC COMICS</h3>
                        <ul>
                            <ul>
                                <?php foreach ($linkDcComics as $title) { ?>
                                    <li>
                                        <a href=""><?php echo $title ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <?php foreach ($linkShop as $title) { ?>
                                <li>
                                    <a href=""><?php echo $title ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div>
                        <h3>DC</h3>
                        <ul>
                            <?php foreach ($linkDc as $title) { ?>
                                <li>
                                    <a href=""><?php echo $title ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div>
                        <h3>SITES</h3>
                        <ul>
                            <?php foreach ($linkSites as $title) { ?>
                                <li>
                                    <a href=""><?php echo $title ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="banner">
            </div>
        </div>
    <div class="social">
        <div class="container">
            <div class="sign">
                <button>
                    <a href="">SIGN-UP NOW!</a>
                </button>
            </div>
            <div class="socialLink">
                <h3>FOLLOW US</h3>
                <ul>
                    <li>
                        <a href="">
                            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </footer>
