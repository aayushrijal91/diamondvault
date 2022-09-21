<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col">
                    <div class="row gx-xxl-5">
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
                            <a href="" class=""><?= renderImg('facebook.png', 'icons') ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8303 5.27158C7.75987 5.27158 5.31313 7.76629 5.31313 10.7887C5.31313 13.8592 7.75987 16.3059 10.8303 16.3059C13.8527 16.3059 16.3474 13.8592 16.3474 10.7887C16.3474 7.76629 13.8527 5.27158 10.8303 5.27158ZM10.8303 14.3869C8.8633 14.3869 7.23214 12.8037 7.23214 10.7887C7.23214 8.82175 8.81532 7.23857 10.8303 7.23857C12.7973 7.23857 14.3805 8.82175 14.3805 10.7887C14.3805 12.8037 12.7973 14.3869 10.8303 14.3869ZM17.8347 5.07968C17.8347 4.36005 17.259 3.78434 16.5394 3.78434C15.8197 3.78434 15.244 4.36005 15.244 5.07968C15.244 5.79931 15.8197 6.37501 16.5394 6.37501C17.259 6.37501 17.8347 5.79931 17.8347 5.07968ZM21.4808 6.37501C21.3849 4.6479 21.0011 3.11269 19.7537 1.86533C18.5063 0.617972 16.9711 0.23417 15.244 0.138219C13.4689 0.0422683 8.14367 0.0422683 6.36858 0.138219C4.64147 0.23417 3.15424 0.617972 1.8589 1.86533C0.611545 3.11269 0.227742 4.6479 0.131792 6.37501C0.0358412 8.1501 0.0358412 13.4754 0.131792 15.2504C0.227742 16.9776 0.611545 18.4648 1.8589 19.7601C3.15424 21.0075 4.64147 21.3913 6.36858 21.4872C8.14367 21.5832 13.4689 21.5832 15.244 21.4872C16.9711 21.3913 18.5063 21.0075 19.7537 19.7601C21.0011 18.4648 21.3849 16.9776 21.4808 15.2504C21.5768 13.4754 21.5768 8.1501 21.4808 6.37501ZM19.178 17.1215C18.8422 18.081 18.0746 18.8006 17.163 19.1844C15.7238 19.7601 12.3655 19.6162 10.8303 19.6162C9.2471 19.6162 5.88883 19.7601 4.49755 19.1844C3.53804 18.8006 2.81841 18.081 2.43461 17.1215C1.8589 15.7302 2.00283 12.3719 2.00283 10.7887C2.00283 9.25353 1.8589 5.89526 2.43461 4.456C2.81841 3.54447 3.53804 2.82484 4.49755 2.44103C5.88883 1.86533 9.2471 2.00926 10.8303 2.00926C12.3655 2.00926 15.7238 1.86533 17.163 2.44103C18.0746 2.77686 18.7942 3.54447 19.178 4.456C19.7537 5.89526 19.6098 9.25353 19.6098 10.7887C19.6098 12.3719 19.7537 15.7302 19.178 17.1215Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class=""><?= renderImg('email.png', 'icons') ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="" class=""><?= renderImg('whatsapp.png', 'icons') ?></a>
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
                        <div class="col-lg-5 text-center">
                            <div class="fs-1 fw-600 text-uppercase font-maiah text-primary letter-spacing-n04 line-height-12">Custom<br> One of a Kind Jewelry</div>
                            <div class="text-white fs-9 py-5">
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
                <div class="col-lg-11 col-xxl-10">
                    <div class="row align-items-end">
                        <div class="col-lg-6"><?= renderImg("watch-ring.png", "lib", "w-100") ?></div>
                        <div class="col-lg-6 text-center py-7 px-5">
                            <?= renderImg('about-diamond.png', 'logo') ?>
                            <div class="fs-4 fw-600 text-uppercase font-maiah text-primary letter-spacing-02 line-height-12 py-5">Celebrate your love without sacrificing mother earth</div>
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

<?php include __DIR__ . '/footer.php'; ?>