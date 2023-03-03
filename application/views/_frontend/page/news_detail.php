<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="<?php echo site_url('home') ?>">Home</a></li>
            <li><a href="#"><?php echo $news_category_name[0]->news_category_name ?></a></li>
        </ol>
    </div>
</section>

<main id="main">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <section id="blog" class="blog" style="padding:0">
                <div data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12 entries-2">
                            <?php foreach ($news as $n) { ?>
                                <article class="entry-3">
                                    <div class="entry-img">
                                        <img src="<?php echo base_url(); ?>upload/news/<?php echo $n->news_cover; ?>" alt="" class="img-fluid img-thumbnail" sty>
                                    </div>
                                    <div class="entry-value">
                                        <h2 class="color-1 text-1 weight-600">
                                            <p href=""><?php echo $n->news_title; ?></p>
                                        </h2>
                                        <p>
                                            <?php echo $n->news_text; ?>
                                        </p>
                                    </div>
                                </article>
                                <div class="entry-content">
                                    <?php if (!$n->news_link == '') { ?>
                                        <div class="read-more">
                                            <a class="button" href="<?php echo $n->news_link ?>" target="_blank"><i class="icofont-link"></i> &nbsp;Visit Project</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>