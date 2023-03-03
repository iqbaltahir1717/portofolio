    <link rel="stylesheet" href="<?php echo base_url() ?>assets\core-front\css\main.css">

    <body style="background-color:#272727">
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <h5 class="logo mr-auto">
                    <a href="<?php echo base_url(); ?>" class="scrollto">
                        <?php echo $setting[0]->setting_appname; ?>
                    </a>
                </h5>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                        <?php foreach ($news_category as $nc) { ?>
                            <li><a href="<?php echo site_url('page/index/' . $nc->news_category_id . '/1') ?>"><?php echo $nc->news_category_name; ?></a></li>
                        <?php } ?>
                        <a data-aos="flip-up" href="https://www.youtube.com/channel/UCOcki7TnvuVzkIA16nY1_2g" target="_blank">
                            <li class="btn-portal">Youtube
                            </li>
                        </a>
                    </ul>
                </nav>
            </div>
        </header>