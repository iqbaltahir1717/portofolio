<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="<?php echo site_url('home') ?>">Home</a></li>
            <li><a href="#"><?php echo $news_category_name[0]->news_category_name ?></a></li>
        </ol>
    </div>
</section>

<main id="main">
    <section id="services" class="services" style="padding:20px 0">
        <div class="container" data-aos="fade-up">
            <section id="blog" class="blog" style="padding:0">
                <div>
                    <div class="row">
                        <div class="col-lg-12 entries-2">
                            <a href="<?php echo site_url('page/index/1/1') ?>"><i class="icofont-arrow-left"></i> See All Projects</a>
                            <?php foreach ($news as $n) { ?>
                                <h2 class="color-1 text-1 weight-600 my-5">
                                    <p href=""><?php echo $n->news_title; ?></p>
                                </h2>
                                <div class="entry-content">
                                    <div class="read-more">
                                        <?php if (!$n->news_link == '') { ?>
                                            <a class="button" href="<?php echo $n->news_link ?>" target="_blank"><i class="icofont-link"></i> &nbsp;Visit Project</a>
                                        <?php } ?>
                                        <?php if (!$n->news_link_2 == '') { ?>
                                            <a class="button" href="<?php echo $n->news_link_2 ?>" target="_blank"><i class="icofont-android-nexus"></i></i> &nbsp;Playstore</a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <article class="entry-3">
                                    <div class="entry-img">
                                        <img src="<?php echo base_url(); ?>upload/news/<?php echo $n->news_cover; ?>" alt="" class="img-fluid glightbox img-thumbnail" sty>
                                    </div>
                                    <div class="entry-value">
                                        <p>
                                            <?php echo $n->news_text; ?>
                                        </p>
                                    </div>
                                </article>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>