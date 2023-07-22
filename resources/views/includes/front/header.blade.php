<header>
    <div class="tp-it-header">
        <div class="tp-it-header__top d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="tp-it-header__top-left">
                            <span>Connect Now:</span>
                            <span> <a href="https://www.linkedin.com/company/ideacastit/" target="_blank"><i class="fab fa-linkedin"></i></a></span>
                            <span> <a href="https://www.facebook.com/ideacastit" target="_blank"><i class="fab fa-facebook-f"></i></a></span>
                            <span> <a href="https://twitter.com/ideaCastIT" target="_blank"><i class="fab fa-twitter"></i></a></span>
                            <span> <a href="https://www.pinterest.com/ideacastit/" target="_blank"><i class="fab fa-pinterest"></i></a></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="tp-it-header__top-right text-end">
                            <div class="tp-it-header__top-right-menu">
                                <ul>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a> </li>
                                    <li><a href="{{ route('faq') }}">FAQ</a> </li>
                                    <li><a href="{{ route('contact') }}">Contact</a> </li>
                                </ul>
                            </div>
                            <div class="tp-it-header__top-right-lang">
                                <li>
                                    <a href="tel:+8801841887828"><i class="fas fa-headset text-danger"></i> +880 1841-887828</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="header-sticky" class="tp-it-header__main p-relative">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <div class="logo" style="max-width: 177px !important;">
                            <a href="{{ url('/home') }}"><img
                                    src="{{ asset('frontend/assets/img/logo/logo-orange.png') }}" alt="logo"
                                    style="max-width: 100%;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 d-none d-xl-block">
                        <div class="main-menu it-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <?php foreach ($mainmenus as $data): ?>
                                    <?php $has_submenu = false; ?>
                                    <li class="menu_<?php echo $data->id; ?> ">
                                        <a href="{{ route($data->route) }}"><?php echo $data->name; ?></a>
                                        <ul class="menu2_<?php echo $data->id; ?> ">
                                            <?php foreach ($submenus  as $sub_menu):
                                                if($sub_menu->menu_id == $data->id):?>
                                            <li><a href="{{ route($sub_menu->route) }}"><?php echo $sub_menu->name; ?></a></li>
                                            <?php $has_submenu = true; ?>
                                            <?php endif ?>
                                            <?php endforeach;  ?>
                                        </ul>
                                        <?php if($has_submenu == true): ?>
                                        <script>
                                            document.querySelector('.menu_<?php echo $data->id; ?>').classList.add('has-dropdown')
                                            document.querySelector('.menu2_<?php echo $data->id; ?>').classList.add('submenu')
                                        </script>
                                        <?php endif; ?>
                                        <?php endforeach;  ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-6 d-xl-none">
                        <div class="tp-header-search-nav d-flex justify-content-end">
                            <div class="tp-header-search p-relative">
                                <form action="#">
                                    <input type="text" placeholder="Keyword...">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tp-header-nav">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
