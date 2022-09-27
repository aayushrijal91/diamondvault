<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <nav class="navbar navbar-expand-xl d-xl-none py-4">
        <div class="container justify-content-center">
            <a href="./" class="pb-4">
                <?= renderImg("logo.png", "logo") ?>
            </a>
            <div class="d-flex justify-content-between w-100 align-items-center pt-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="23" height="3" fill="#D9D9D9" />
                        <rect y="7" width="23" height="3" fill="#D9D9D9" />
                        <rect y="14" width="23" height="3" fill="#D9D9D9" />
                    </svg> <span class="ps-2 text-white">Menu</span>
                </button>
                <div class="row justify-content-center justify-content-lg-end align-items-center gx-xxl-5">
                    <div class="col-auto">
                        <a href="<?= $facebook ?>"><?= renderImg('facebook.png', 'icons') ?></a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $instagram ?>">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8303 5.27158C7.75987 5.27158 5.31313 7.76629 5.31313 10.7887C5.31313 13.8592 7.75987 16.3059 10.8303 16.3059C13.8527 16.3059 16.3474 13.8592 16.3474 10.7887C16.3474 7.76629 13.8527 5.27158 10.8303 5.27158ZM10.8303 14.3869C8.8633 14.3869 7.23214 12.8037 7.23214 10.7887C7.23214 8.82175 8.81532 7.23857 10.8303 7.23857C12.7973 7.23857 14.3805 8.82175 14.3805 10.7887C14.3805 12.8037 12.7973 14.3869 10.8303 14.3869ZM17.8347 5.07968C17.8347 4.36005 17.259 3.78434 16.5394 3.78434C15.8197 3.78434 15.244 4.36005 15.244 5.07968C15.244 5.79931 15.8197 6.37501 16.5394 6.37501C17.259 6.37501 17.8347 5.79931 17.8347 5.07968ZM21.4808 6.37501C21.3849 4.6479 21.0011 3.11269 19.7537 1.86533C18.5063 0.617972 16.9711 0.23417 15.244 0.138219C13.4689 0.0422683 8.14367 0.0422683 6.36858 0.138219C4.64147 0.23417 3.15424 0.617972 1.8589 1.86533C0.611545 3.11269 0.227742 4.6479 0.131792 6.37501C0.0358412 8.1501 0.0358412 13.4754 0.131792 15.2504C0.227742 16.9776 0.611545 18.4648 1.8589 19.7601C3.15424 21.0075 4.64147 21.3913 6.36858 21.4872C8.14367 21.5832 13.4689 21.5832 15.244 21.4872C16.9711 21.3913 18.5063 21.0075 19.7537 19.7601C21.0011 18.4648 21.3849 16.9776 21.4808 15.2504C21.5768 13.4754 21.5768 8.1501 21.4808 6.37501ZM19.178 17.1215C18.8422 18.081 18.0746 18.8006 17.163 19.1844C15.7238 19.7601 12.3655 19.6162 10.8303 19.6162C9.2471 19.6162 5.88883 19.7601 4.49755 19.1844C3.53804 18.8006 2.81841 18.081 2.43461 17.1215C1.8589 15.7302 2.00283 12.3719 2.00283 10.7887C2.00283 9.25353 1.8589 5.89526 2.43461 4.456C2.81841 3.54447 3.53804 2.82484 4.49755 2.44103C5.88883 1.86533 9.2471 2.00926 10.8303 2.00926C12.3655 2.00926 15.7238 1.86533 17.163 2.44103C18.0746 2.77686 18.7942 3.54447 19.178 4.456C19.7537 5.89526 19.6098 9.25353 19.6098 10.7887C19.6098 12.3719 19.7537 15.7302 19.178 17.1215Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="mailto: <?= $admin_email ?>"><?= renderImg('email.png', 'icons') ?></a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $whatsapp ?>"><?= renderImg('whatsapp.png', 'icons') ?></a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ring Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enquire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-top-bar d-none d-xl-block">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col">
                    <div class="row gx-xl-5">
                        <div class="col-auto">
                            <a href="#" class="header-btn">Our Products</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="header-btn">Ring Quote</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="header-btn">Enquire</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="header-btn">FAQs</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-xxl-5">
                        <div class="col-auto">
                            <a href="<?= $facebook ?>"><?= renderImg('facebook.png', 'icons') ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="<?= $instagram ?>">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8303 5.27158C7.75987 5.27158 5.31313 7.76629 5.31313 10.7887C5.31313 13.8592 7.75987 16.3059 10.8303 16.3059C13.8527 16.3059 16.3474 13.8592 16.3474 10.7887C16.3474 7.76629 13.8527 5.27158 10.8303 5.27158ZM10.8303 14.3869C8.8633 14.3869 7.23214 12.8037 7.23214 10.7887C7.23214 8.82175 8.81532 7.23857 10.8303 7.23857C12.7973 7.23857 14.3805 8.82175 14.3805 10.7887C14.3805 12.8037 12.7973 14.3869 10.8303 14.3869ZM17.8347 5.07968C17.8347 4.36005 17.259 3.78434 16.5394 3.78434C15.8197 3.78434 15.244 4.36005 15.244 5.07968C15.244 5.79931 15.8197 6.37501 16.5394 6.37501C17.259 6.37501 17.8347 5.79931 17.8347 5.07968ZM21.4808 6.37501C21.3849 4.6479 21.0011 3.11269 19.7537 1.86533C18.5063 0.617972 16.9711 0.23417 15.244 0.138219C13.4689 0.0422683 8.14367 0.0422683 6.36858 0.138219C4.64147 0.23417 3.15424 0.617972 1.8589 1.86533C0.611545 3.11269 0.227742 4.6479 0.131792 6.37501C0.0358412 8.1501 0.0358412 13.4754 0.131792 15.2504C0.227742 16.9776 0.611545 18.4648 1.8589 19.7601C3.15424 21.0075 4.64147 21.3913 6.36858 21.4872C8.14367 21.5832 13.4689 21.5832 15.244 21.4872C16.9711 21.3913 18.5063 21.0075 19.7537 19.7601C21.0011 18.4648 21.3849 16.9776 21.4808 15.2504C21.5768 13.4754 21.5768 8.1501 21.4808 6.37501ZM19.178 17.1215C18.8422 18.081 18.0746 18.8006 17.163 19.1844C15.7238 19.7601 12.3655 19.6162 10.8303 19.6162C9.2471 19.6162 5.88883 19.7601 4.49755 19.1844C3.53804 18.8006 2.81841 18.081 2.43461 17.1215C1.8589 15.7302 2.00283 12.3719 2.00283 10.7887C2.00283 9.25353 1.8589 5.89526 2.43461 4.456C2.81841 3.54447 3.53804 2.82484 4.49755 2.44103C5.88883 1.86533 9.2471 2.00926 10.8303 2.00926C12.3655 2.00926 15.7238 1.86533 17.163 2.44103C18.0746 2.77686 18.7942 3.54447 19.178 4.456C19.7537 5.89526 19.6098 9.25353 19.6098 10.7887C19.6098 12.3719 19.7537 15.7302 19.178 17.1215Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="mailto:<?= $admin_email ?>"><?= renderImg('email.png', 'icons') ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="<?= $whatsapp ?>"><?= renderImg('whatsapp.png', 'icons') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-lg-6 px-xl-5 text-center">
                            <div class="heading fs-1 fw-600 text-uppercase font-maiah text-primary letter-spacing-n04 line-height-12">Custom<br> One of a Kind Jewelry</div>
                            <div class="description text-white fs-9">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua commodo.
                            </div>
                            <a href="#" class="btn btn-primary">
                                <span class="pe-3">See All</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                                    <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row justify-content-lg-center justify-content-xl-start align-items-end">
                        <div class="col-lg-8 col-xl-6"><?= renderImg("watch-ring.png", "lib", "w-100") ?></div>
                        <div class="col-xl-5 text-center py-6 px-4 px-md-5">
                            <?= renderImg('about-diamond.png', 'logo') ?>
                            <div class="heading fs-4 fw-600 text-uppercase font-maiah text-primary letter-spacing-02 line-height-12 py-5">Celebrate your love without sacrificing mother earth</div>
                            <div class="description">
                                <p>For <span class="fw-800">custom bracelets</span> & chains just need to know cm size for anything custom.</p>
                                <p>For <span class="fw-800">gold Cuban chains & bracelets</span> need too know cm size and thickness in width also different designs e.g Miami Cuban, diamond cut sand blast finish</p>
                                <p>For <span class="fw-800">wedding rings</span>, you need colour of gold, gold purity, carat size, stone shape, lab or natural stone, colour of diamond, clarity of the diamond</p>
                            </div>
                            <a href="#" class="btn btn-primary">
                                <span class="pe-3 text-uppercase fw-600">lets pick a ring</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                                    <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="products">
    <div class="container">
        <div class="text-center text-uppercase letter-spacing-02 font-maiah fs-4 fw-600 pb-6">See Our Products</div>
        <div class="product-slider" id="product-slider">
            <div class="product-slider-content">
                <div class="product-card">
                    <?= renderImg('love-bracelet.png', 'lib') ?>
                </div>
                <div class="caption">Cartier Love Bracelet</div>
            </div>
            <div class="product-slider-content">
                <div class="product-card">
                    <?= renderImg('diamond-engagement-ring.png', 'lib') ?>
                </div>
                <div class="caption">Cartier Love Bracelet</div>
            </div>
            <div class="product-slider-content">
                <div class="product-card">
                    <?= renderImg('cartier-watch.png', 'lib') ?>
                </div>
                <div class="caption">Cartier Love Bracelet</div>
            </div>
            <div class="product-slider-content">
                <div class="product-card">
                    <?= renderImg('juste-un-clou.png', 'lib') ?>
                </div>
                <div class="caption">Cartier Love Bracelet</div>
            </div>
            <div class="product-slider-content">
                <div class="product-card">
                    <?= renderImg('juste-un-clou.png', 'lib') ?>
                </div>
                <div class="caption">Cartier Love Bracelet</div>
            </div>
        </div>
    </div>
</section>

<section class="custom-diamond">
    <div class="custom-diamond-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 text-center">
                    <?= renderImg('custom-diamond.png', 'lib') ?>
                    <div class="heading fs-5 fw-600 text-uppercase font-maiah text-primary letter-spacing-n04 line-height-12 py-5">custom one of a kind jewelry</div>
                    <div class="description text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam.
                    </div>
                    <a href="#" class="btn btn-primary">
                        <span class="pe-3 text-capitalize fw-600">See All</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                            <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="diamond-collection">
    <div class="container">
        <div class="heading text-center text-uppercase letter-spacing-02 font-maiah fs-4 fw-600 pb-5 pb-md-6">Our Collection</div>
        <div class="diamond-choices-wrapper">
            <ul class="nav nav-tabs diamond-choices-nav-tabs" id="diamond-choices" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="diamond-cuts-tab" data-bs-toggle="tab" data-bs-target="#diamond-cuts" type="button" role="tab" aria-controls="diamond-cuts" aria-selected="true">Diamond Cuts</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rings-tab" data-bs-toggle="tab" data-bs-target="#rings" type="button" role="tab" aria-controls="rings" aria-selected="false">Rings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="necklaces-tab" data-bs-toggle="tab" data-bs-target="#necklaces" type="button" role="tab" aria-controls="necklaces" aria-selected="false">Necklaces</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pendants-tab" data-bs-toggle="tab" data-bs-target="#pendants" type="button" role="tab" aria-controls="pendants" aria-selected="false">Pendants</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bracelets-tab" data-bs-toggle="tab" data-bs-target="#bracelets" type="button" role="tab" aria-controls="bracelets" aria-selected="false">Bracelets</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="diamond-cuts" role="tabpanel" aria-labelledby="diamond-cuts-tab">
                    <div class="diamond-choice">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav flex-column nav-pills" id="v-diamond-cuts-nav" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-diamond-cuts-cushion-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-cushion" type="button" role="tab" aria-controls="v-diamond-cuts-cushion" aria-selected="true">Cushion</button>
                                    <button class="nav-link" id="v-diamond-cuts-radient-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-radient" type="button" role="tab" aria-controls="v-diamond-cuts-radient" aria-selected="false">Radient</button>
                                    <button class="nav-link" id="v-diamond-cuts-princess-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-princess" type="button" role="tab" aria-controls="v-diamond-cuts-princess" aria-selected="false">Princess</button>
                                    <button class="nav-link" id="v-diamond-cuts-round-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-round" type="button" role="tab" aria-controls="v-diamond-cuts-round" aria-selected="false">Round</button>
                                    <button class="nav-link" id="v-diamond-cuts-oval-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-oval" type="button" role="tab" aria-controls="v-diamond-cuts-oval" aria-selected="false">Oval</button>
                                    <button class="nav-link" id="v-diamond-cuts-pear-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-pear" type="button" role="tab" aria-controls="v-diamond-cuts-pear" aria-selected="false">Pear</button>
                                    <button class="nav-link" id="v-diamond-cuts-emerald-tab" data-bs-toggle="pill" data-bs-target="#v-diamond-cuts-emerald" type="button" role="tab" aria-controls="v-diamond-cuts-emerald" aria-selected="false">Emerald</button>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="tab-content" id="v-diamond-cuts-tabContent">
                                    <div class="tab-pane fade show active" id="v-diamond-cuts-cushion" role="tabpanel" aria-labelledby="v-diamond-cuts-cushion-tab">
                                        <?= renderImg('cushion.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-radient" role="tabpanel" aria-labelledby="v-diamond-cuts-radient-tab">
                                        <?= renderImg('radiant.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-princess" role="tabpanel" aria-labelledby="v-diamond-cuts-princess-tab">
                                        <?= renderImg('princess.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-round" role="tabpanel" aria-labelledby="v-diamond-cuts-round-tab">
                                        <?= renderImg('round.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-oval" role="tabpanel" aria-labelledby="v-diamond-cuts-oval-tab">
                                        <?= renderImg('oval.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-pear" role="tabpanel" aria-labelledby="v-diamond-cuts-pear-tab">
                                        <?= renderImg('pear.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-diamond-cuts-emerald" role="tabpanel" aria-labelledby="v-diamond-cuts-emerald-tab">
                                        <?= renderImg('emerald.png', 'lib', "w-100") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rings" role="tabpanel" aria-labelledby="rings-tab">
                    <div class="diamond-choice">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav flex-column nav-pills" id="v-rings-nav" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-rings-engagement-tab" data-bs-toggle="pill" data-bs-target="#v-rings-engagement" type="button" role="tab" aria-controls="v-rings-engagement" aria-selected="true">Engagement Ring</button>
                                    <button class="nav-link" id="v-rings-diamond-tab" data-bs-toggle="pill" data-bs-target="#v-rings-diamond" type="button" role="tab" aria-controls="v-rings-diamond" aria-selected="false">Diamond Rings</button>
                                    <button class="nav-link" id="v-rings-wedding-tab" data-bs-toggle="pill" data-bs-target="#v-rings-wedding" type="button" role="tab" aria-controls="v-rings-wedding" aria-selected="false">Wedding Bands</button>
                                    <button class="nav-link" id="v-rings-custom-tab" data-bs-toggle="pill" data-bs-target="#v-rings-custom" type="button" role="tab" aria-controls="v-rings-custom" aria-selected="false">Custom Rings</button>
                                    <button class="nav-link" id="v-rings-cartier-nail-tab" data-bs-toggle="pill" data-bs-target="#v-rings-cartier-nail" type="button" role="tab" aria-controls="v-rings-cartier-nail" aria-selected="false">Cartier Nail Rings</button>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="tab-content" id="v-rings-tabContent">
                                    <div class="tab-pane fade show active" id="v-rings-engagement" role="tabpanel" aria-labelledby="v-rings-engagement-tab">
                                        <?= renderImg('engagement-rings.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-rings-diamond" role="tabpanel" aria-labelledby="v-rings-diamond-tab">
                                        <?= renderImg('diamond-rings.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-rings-wedding" role="tabpanel" aria-labelledby="v-rings-wedding-tab">
                                        <?= renderImg('wedding-bands.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-rings-custom" role="tabpanel" aria-labelledby="v-rings-custom-tab">
                                        <?= renderImg('custom-rings.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-rings-cartier-nail" role="tabpanel" aria-labelledby="v-rings-cartier-nail-tab">
                                        <?= renderImg('cartier-nail-ring.png', 'lib', "w-100") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="necklaces" role="tabpanel" aria-labelledby="necklaces-tab">
                    <div class="diamond-choice">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav flex-column nav-pills" id="v-necklaces-nav" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-necklaces-cubanPlain-tab" data-bs-toggle="pill" data-bs-target="#v-necklaces-cubanPlain" type="button" role="tab" aria-controls="v-necklaces-cubanPlain" aria-selected="true">Cuban (Plain)</button>
                                    <button class="nav-link" id="v-necklaces-cubanDiamond-tab" data-bs-toggle="pill" data-bs-target="#v-necklaces-cubanDiamond" type="button" role="tab" aria-controls="v-necklaces-cubanDiamond" aria-selected="false">Cuban (Diamond)</button>
                                    <button class="nav-link" id="v-necklaces-plainGold-tab" data-bs-toggle="pill" data-bs-target="#v-necklaces-plainGold" type="button" role="tab" aria-controls="v-necklaces-plainGold" aria-selected="false">Plain Gold Chains</button>
                                    <button class="nav-link" id="v-necklaces-diamond-tab" data-bs-toggle="pill" data-bs-target="#v-necklaces-diamond" type="button" role="tab" aria-controls="v-necklaces-diamond" aria-selected="false">Diamond Chains</button>
                                    <button class="nav-link" id="v-necklaces-rope-tab" data-bs-toggle="pill" data-bs-target="#v-necklaces-rope" type="button" role="tab" aria-controls="v-necklaces-rope" aria-selected="false">Rope Chains</button>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="tab-content" id="v-necklaces-tabContent">
                                    <div class="tab-pane fade show active" id="v-necklaces-cubanPlain" role="tabpanel" aria-labelledby="v-necklaces-cubanPlain-tab">
                                        <?= renderImg('cubanPlain-necklaces.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-necklaces-cubanDiamond" role="tabpanel" aria-labelledby="v-necklaces-cubanDiamond-tab">
                                        <?= renderImg('cubanDiamond-necklaces.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-necklaces-plainGold" role="tabpanel" aria-labelledby="v-necklaces-plainGold-tab">
                                        <?= renderImg('plainGold-chains.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-necklaces-diamond" role="tabpanel" aria-labelledby="v-necklaces-diamond-tab">
                                        <?= renderImg('diamond-chain-necklaces.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-necklaces-rope" role="tabpanel" aria-labelledby="v-necklaces-rope-tab">
                                        <?= renderImg('rope-chains.png', 'lib', "w-100") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pendants" role="tabpanel" aria-labelledby="pendants-tab">
                    <div class="diamond-choice">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav flex-column nav-pills" id="v-pendants-nav" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pendants-custom-tab" data-bs-toggle="pill" data-bs-target="#v-pendants-custom" type="button" role="tab" aria-controls="v-pendants-custom" aria-selected="true">Custom</button>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="tab-content" id="v-pendants-tabContent">
                                    <div class="tab-pane fade show active" id="v-pendants-custom" role="tabpanel" aria-labelledby="v-pendants-custom-tab">
                                        <?= renderImg('custom-pendants.png', 'lib', "w-100") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bracelets" role="tabpanel" aria-labelledby="bracelets-tab">
                    <div class="diamond-choice">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav flex-column nav-pills" id="v-bracelets-nav" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-bracelets-tennisChains-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-tennisChains" type="button" role="tab" aria-controls="v-bracelets-tennisChains" aria-selected="true">Tennis Chains</button>
                                    <button class="nav-link" id="v-bracelets-tennis-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-tennis" type="button" role="tab" aria-controls="v-bracelets-tennis" aria-selected="false">Tennis Bracelets</button>
                                    <button class="nav-link" id="v-bracelets-cuban-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-cuban" type="button" role="tab" aria-controls="v-bracelets-cuban" aria-selected="false">Cuban</button>
                                    <button class="nav-link" id="v-bracelets-bangles-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-bangles" type="button" role="tab" aria-controls="v-bracelets-bangles" aria-selected="false">Bangles</button>
                                    <button class="nav-link" id="v-bracelets-diamond-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-diamond" type="button" role="tab" aria-controls="v-bracelets-diamond" aria-selected="false">Diamond Bangles</button>
                                    <button class="nav-link" id="v-bracelets-cartier-love-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-cartier-love" type="button" role="tab" aria-controls="v-bracelets-cartier-love" aria-selected="false">Cartier Love Bracelet</button>
                                    <button class="nav-link" id="v-bracelets-cartier-nail-tab" data-bs-toggle="pill" data-bs-target="#v-bracelets-cartier-nail" type="button" role="tab" aria-controls="v-bracelets-cartier-nail" aria-selected="false">Cartier Nail</button>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="tab-content" id="v-bracelets-tabContent">
                                    <div class="tab-pane fade show active" id="v-bracelets-tennisChains" role="tabpanel" aria-labelledby="v-bracelets-tennisChains-tab">
                                        <?= renderImg('tennis-chain-bracelets.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-tennis" role="tabpanel" aria-labelledby="v-bracelets-tennis-tab">
                                        <?= renderImg('tennis-bracelets.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-cuban" role="tabpanel" aria-labelledby="v-bracelets-cuban-tab">
                                        <?= renderImg('cuban-bracelets.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-bangles" role="tabpanel" aria-labelledby="v-bracelets-bangles-tab">
                                        <?= renderImg('bangles.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-diamond" role="tabpanel" aria-labelledby="v-bracelets-diamond-tab">
                                        <?= renderImg('diamond-bangles.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-cartier-love" role="tabpanel" aria-labelledby="v-bracelets-cartier-love-tab">
                                        <?= renderImg('cartier-love-bracelets.png', 'lib', "w-100") ?>
                                    </div>
                                    <div class="tab-pane fade" id="v-bracelets-cartier-nail" role="tabpanel" aria-labelledby="v-bracelets-cartier-nail-tab">
                                        <?= renderImg('cartier-nail-bracelets.png', 'lib', "w-100") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="diamond-variety">
    <div class="container-fluid px-lg-0">
        <div class="row justify-content-center gx-lg-0">
            <div class="col-md-6 col-xl-4 h-inherit px-0">
                <div class="variety-card">
                    <?= renderImg('watches.jpg', 'lib', "w-100 h-100") ?>
                    <div class="button">
                        <a href="#" class="btn btn-primary px-xl-5">
                            <span class="pe-3 text-capitalize fw-600">Enquire about Watches</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                                <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 h-inherit px-0">
                <div class="variety-card">
                    <?= renderImg('bracelets.jpg', 'lib', "w-100") ?>
                    <div class="button">
                        <a href="#" class="btn btn-primary px-xl-5">
                            <span class="pe-3 text-capitalize fw-600">See Our Bracelets</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                                <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 h-inherit px-0">
                <div class="variety-card">
                    <?= renderImg('rings.jpg', 'lib', "w-100 h-100") ?>
                    <div class="button">
                        <a href="#" class="btn btn-primary px-xl-5">
                            <span class="pe-3 text-capitalize fw-600">Engagement Rings</span> <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4393 20.5607C17.0251 21.1464 17.9749 21.1464 18.5607 20.5607L27.5607 11.5607C28.1464 10.9749 28.1464 10.0251 27.5607 9.43934L18.5607 0.43934C17.9749 -0.146447 17.0251 -0.146447 16.4393 0.43934C15.8536 1.02513 15.8536 1.97487 16.4393 2.56066L24.3787 10.5L16.4393 18.4393C15.8536 19.0251 15.8536 19.9749 16.4393 20.5607Z" fill="white" />
                                <path d="M0 10.5C0 9.67157 0.671573 9 1.5 9H24.5C25.3284 9 26 9.67157 26 10.5C26 11.3284 25.3284 12 24.5 12H1.5C0.671572 12 0 11.3284 0 10.5Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="watch-collection">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg h-inherit d-none d-md-block"><?= renderImg("slider-hero-watch.png", 'lib') ?></div>
            <div class="col-lg-6 col-xl-5 h-inherit">
                <div class="row align-items-center gx-2 gx-xl-5">
                    <div class="col-11">
                        <div class="watches-slider" id="watches-slider">
                            <div class="watch-slider-content">
                                <div class="heading font-maiah text-center letter-spacing-n04 fs-4 fw-600">Our Watches</div>
                                <div class="watch-platform">
                                    <?= renderImg("rolex-watch.png", "lib") ?>
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="fs-12 fw-600">Submariner</div>
                                        <div class="fs-14 text-grey text-uppercase">Rolex</div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="p-0 text-primary text-decoration-none fs-12 fw-600">Enquire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="watch-slider-content">
                                <div class="font-maiah text-center letter-spacing-n04 fs-4 fw-600">Our Watches</div>
                                <div class="watch-platform">
                                    <?= renderImg("rolex-watch.png", "lib") ?>
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="fs-12 fw-600">Submariner</div>
                                        <div class="fs-14 text-grey text-uppercase">Rolex</div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="p-0 text-primary text-decoration-none fs-12 fw-600">Enquire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 text-center">
                        <div class="watch-arrows">
                            <div id="arrow-top" class="pb-5">
                                <svg width="14" height="37" viewBox="0 0 14 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.7">
                                        <path d="M1 7L7 1L13 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="8" y="37" width="2" height="36" rx="1" transform="rotate(-180 8 37)" fill="white" />
                                    </g>
                                </svg>
                            </div>
                            <div id="arrow-bottom" class="pt-5">
                                <svg width="14" height="37" viewBox="0 0 14 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 30L7 36L1 30" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <rect x="6" width="2" height="36" rx="1" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg h-inherit d-md-none"><?= renderImg("slider-hero-watch-sm.png", 'lib') ?></div>
        </div>
    </div>
</section>

<section class="faq" id="faqs">
    <?php
    $faqs = [
        "01" => [
            "question" => "What Type of Jewellery do you make?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "02" => [
            "question" => "Can I talk to a consultant personally?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "03" => [
            "question" => "Can I customise a piece that is not available on your website?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "04" => [
            "question" => "Can I customise a piece that is not available on your website?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "05" => [
            "question" => "What materials do you use?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "06" => [
            "question" => "Does your jewellery come with a warranty?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
        "07" => [
            "question" => "How do I find my Ring sizing?",
            "answer" => "<p>The Diamond Vault specialises in a range of Custom Made Jewellery.  This includes Wedding and Engagement Rings, Custom Rings, Bracelets, Pendants, Cuban Necklaces & Bracelets, Custom Diamond Watches. Diamond Bracelets, Tennis Bracelets & Rope Chains. We also are available to create any piece you have in mind.</p><p>All our items are custom and made to order. If you would like to know any more information please contact us."
        ],
    ];

    $index = 1;
    ?>
    <div class="container">
        <div class="accordion-container">
            <?php foreach ($faqs as $key => $faq) : ?>
                <div class="accordion-card">
                    <div class="accordion-head<?= $index == 1 ? ' active' : '' ?>">
                        <div class="row justify-content-between w-100 m-0">
                            <div class="col">
                                <div class="main-question">
                                    <div class="row gx-md-5 align-items-center">
                                        <div class="col-auto text-primary fs-4 line-height-1">
                                            <?= $key ?>
                                        </div>
                                        <div class="col">
                                            <?= $faq['question'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="plusminus">
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-body" style=<?= $index == 1 ? 'display: block;' : '' ?>>
                        <?= $faq['answer'] ?>
                    </div>
                </div>
            <?php
                $index++;
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="form" id="form">
    <form action="./src/form" method="POST">
        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
        <div class="section_1">
            <div class="container">
                <div class="heading text-primary fw-700 fs-2">Contact Us</div>
                <div class="fw-600 fs-11 text-white">Simply complete our form below &amp; we'll get back to you as soon as possible</div>
                <div class="pt-5 pt-md-6 pb-4 pb-md-5 fw-700 fs-6 text-primary font-raleway">Let us know what you are looking for?</div>
                <div class="row gy-4 g-xl-5">
                    <div class="col-md-6">
                        <label>What Custom jewellery are you interested in?*</label>
                        <input type="text" placeholder="Bracelet" class="form-control" name="jewelleryType" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Choose Your Preferred Colour:*</label>
                        <div class="select-wrapper">
                            <select class="form-control" name="preferredColour" required>
                                <option selected>Two-Tone Rose &amp; White Gold</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">Do you give Diamond Vault permission on featuring your finished design on our Social Media Platforms?*</label>
                        <div class="select-wrapper">
                            <select class="form-control" name="permission" required>
                                <option selected>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_2">
            <div class="container">
                <div class="heading font-raleway text-white fw-700 fs-6 pb-5">High-End Custom Work &amp; Exclusive Piece Details</div>
                <div class="row gy-4 g-md-5">
                    <div class="col-md-6">
                        <label>What type of Clarity</label>
                        <div class="select-wrapper">
                            <select class="form-control" name="clarity">
                                <option disabled selected>Select Clarity</option>
                                <option>Clarity 1</option>
                                <option>Clarity 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>What type of Alloys</label>
                        <div class="select-wrapper">
                            <select class="form-control" name="alloy">
                                <option disabled selected>Select Alloys</option>
                                <option>Alloys 1</option>
                                <option>Alloys 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Tell us your preferred Colour</label>
                        <div class="select-wrapper">
                            <select class="form-select form-control" name="colour">
                                <option disabled selected>Preferred Colour</option>
                                <option>Colour 1</option>
                                <option>Colour 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="heading font-raleway text-white fw-700 fs-6 pb-5">Your Contact Information</div>
                <div class="row gy-4 g-md-5">
                    <div class="col-md-6">
                        <label>Full Name</label>
                        <input type="text" placeholder="John Citizen" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Contact number</label>
                        <input type="tel" placeholder="0400 000 000" class="form-control" name="phoneNumber" required>
                    </div>
                    <div class="col-12">
                        <label>Your Email</label>
                        <input type="email" placeholder="name@example.com.au" class="form-control" name="email" required>
                    </div>
                    <div class="col-12">
                        <button type="submit">Submit Enquiry Form</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<?php include __DIR__ . '/footer.php'; ?>