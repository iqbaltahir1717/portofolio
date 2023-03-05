<div class="container">
    <section class="hero-1">
        <div class="section-2">
            <div class="over">
                <img class="over-1" src="<?php echo base_url() ?>assets\core-images\thumbnail-00.png" rel="stylesheet" data-aos="fade-right" alt="">
            </div>
        </div>
        <div class="section-1">
            <div class="cta-1"> <span style="color:white">Hi, &nbsp;</span> i'm <?php echo $setting[0]->setting_appname; ?></div>
            <p>
                <?php echo $setting[0]->setting_about; ?>
            </p>
            <a href="https://www.figma.com/file/Hjf4UsdIIa03vkVvs4xVu5/curicullum-vitae?node-id=1%3A2" target="_blank"><i class="icofont-download"></i> &nbsp;Download CV</a>
            <form data-aos="fade-up" action="https://app.gumroad.com/follow_from_embed_form" class="form gumroad-follow-form-embed" method="post"> <input name="seller_id" type="hidden" value="261502534013"> <input name="email" placeholder="Your email address" type="email"> <button data-custom-highlight-color="" class="btn btn-model-1" type="submit">Follow</button> </form>
        </div>
    </section>
</div>

<!-- pinned project -->
<section class="bg-1 py-5">
    <section id="blog" class="blog my-5">
        <div class="container" data-aos="fade-up">
            <div class="back-title second-font">PROJECTS</div>
            <h4 class="color-1 text-2 weight-600 second-font mb-5">Pinned <span class="color-2">Development</span></h4>
            <div class="row">
                <?php foreach ($news as $n) { ?>
                    <a href="<?php echo site_url('page/information_detail/' . $n->news_category_id . '/' . $n->field_id . '/' . $n->news_slug); ?>">
                        <div class="col-lg-12">
                            <div class="card-large" data-aos="flip-up">
                                <div class="card-image">
                                    <img width="100%" src="<?php echo base_url(); ?>upload/news/<?php echo $n->news_cover; ?>" alt="image-project">
                                </div>
                                <div class="card-button flex-wrap">
                                    <?php if (!$n->news_link == '') { ?>
                                        <a class="button" href="<?php echo $n->news_link ?>" target="_blank"><i class="icofont-link"></i> &nbsp;Visit Project</a>
                                    <?php } ?>
                                    <?php if (!$n->news_link_2 == '') { ?>
                                        <a class="button" href="<?php echo $n->news_link_2 ?>" target="_blank"><i class="icofont-android-nexus"></i></i> &nbsp;Playstore</a>
                                    <?php } ?>
                                    <a class="button" href="<?php echo site_url('page/information_detail/' . $n->news_category_id . '/' . $n->field_id . '/' . $n->news_slug); ?>"><i class="icofont-book-alt"></i> &nbsp;Study Case</a>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <div class="col-12 box-content">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="message-button">
                            <p class="text-1 text-white">Interested working with me?</p>
                            <a data-aos="fade-in" href="mailto:iqbaltahir1717@gmail.com" class="btn btn-model-3">Contact Me</a>
                        </div>
                        <div class="center-this">
                            <a href="<?php echo site_url('page/index/1/1') ?>" class="my-5">Other Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 card-skill">
                    <h4 class="color-1 text-2 weight-600 second-font mb-5">My <span class="color-2">Tools & Skills</span></h4>
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <img data-aos-duration="1000" data-aos="flip-right" src="https://cdn.worldvectorlogo.com/logos/html-1.svg">
                        <img data-aos-duration="1200" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/800px-CSS3_logo.svg.png">
                        <img data-aos-duration="1400" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1280px-Sass_Logo_Color.svg.png">
                        <img data-aos-duration="1600" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png">
                        <img data-aos-duration="1800" data-aos="flip-right" src="https://seeklogo.com/images/C/c-sharp-c-logo-02F17714BA-seeklogo.com.png">
                        <img data-aos-duration="2000" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png">
                        <img data-aos-duration="2200" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/1200px-Typescript_logo_2020.svg.png">
                        <img data-aos-duration="2400" data-aos="flip-right" src="https://seeklogo.com/images/N/nodejs-logo-FBE122E377-seeklogo.com.png">
                        <img data-aos-duration="2600" data-aos="flip-right" src="https://aety.io/wp-content/uploads/2016/11/mysql-logo.png">
                        <img data-aos-duration="2800" data-aos="flip-right" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg">
                        <img data-aos-duration="3000" data-aos="flip-right" src="https://miro.medium.com/max/320/0*ObJbOfJnx4QIPUq9.png">
                        <img data-aos-duration="3000" data-aos="flip-right" src="https://seeklogo.com/images/U/unity-logo-988A22E703-seeklogo.com.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- blog -->
<section id="blog" class="blog py-5">
    <div class="container py-5" data-aos="fade-up">
        <h4 class="color-1 text-2 weight-600 second-font mb-5">My <span class="color-2">Blog</span></h4>
        <div class="row">
            <?php foreach ($news as $n) { ?>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo site_url('page/information_detail/' . $n->news_category_id . '/' . $n->field_id . '/' . $n->news_slug); ?>">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="<?php echo base_url(); ?>upload/news/<?php echo $n->news_cover; ?>" width=100% alt="">
                            </div>
                            <div class="entry-value">
                                <h2 class="text-0">
                                    <p class="main-font"><?php echo substr($n->news_title, 0, 50) . "..."; ?></p>
                                </h2>
                                <div class="entry-meta" style="color:#777777;font-size:12px;">
                                    <ul>
                                        <li class="d-flex align-items-center"> <?php echo indonesiaDate($n->news_date) ?> &nbsp;&nbsp;<i class="icofont-eye-alt"></i> <b><?php echo $n->news_count_view; ?>x views</b></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            <?php } ?>
            <div class="col-12 mt-5">
                <div class="center-this">
                    <a href="<?php echo site_url('page/index/4/1') ?>" class="btn btn-model-2">Other Articles</a>
                </div>
            </div>
        </div>
    </div>
</section>