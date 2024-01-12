
<?php  
    $linkDcComics = ["Characters","Comics","Movies","TV","Games","Videos","News",];
    $linkShop = ["Shop DC","Shop DC Collectibles"];
    $linkDc = ["Terms Of Use","Privacy policy(New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent Workshops","CPSC Cerificates","Ratings","Shop Help","Contact Us"];
    $linkSites=["DC","MAD Magazine","DC Kids","DC Universe","DC Power Visa"];

?>

<ul>
    <?php foreach ($linkDcComics as $title) { ?>
        <li>
            <?php echo $title ?>
        </li>
    <?php } ?>
</ul>

<ul>
    <?php foreach ($linkShop as $title) { ?>
        <li>
            <?php echo $title ?>
        </li>
    <?php } ?>
</ul>


<ul>
    <?php foreach ($linkDc as $title) { ?>
        <li>
            <?php echo $title ?>
        </li>
    <?php } ?>
</ul>


<ul>
    <?php foreach ($linkSites as $title) { ?>
        <li>
            <?php echo $title ?>
        </li>
    <?php } ?>
</ul>