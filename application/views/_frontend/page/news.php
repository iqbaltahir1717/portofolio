    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?php echo site_url('home') ?>" class="color-4">Home</a></li>
                <li><a href="#"><?php echo $news_category_name[0]->news_category_name; ?></a></li>
            </ol>
            <h2><?php echo $news_category_name[0]->news_category_name; ?></h2>
        </div>
    </section>
    <main id="main">
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="sidebar">
                    <?php echo form_open("page/information_search/" . $this->uri->segment(3) . "/" . $this->uri->segment(4)) ?>
                    <div class="row">
                        <input type="text" name="key" class="input mr-4 form-control col-7" placeholder="type here">
                        <button type="submit" class="btn btn-model-1"><i class="icofont-search"></i></button>
                    </div>
                    <?php echo form_close(); ?>
                </div> <br><br><br>
                <div class="row">
                    <?php
                    if ($news) {
                        foreach ($news as $n) {
                    ?>
                            <div class="col-lg-3">
                                <a href="<?php echo site_url('page/information_detail/' . $n->news_category_id . '/' . $n->field_id . '/' . $n->news_slug); ?>">
                                    <article class="entry">
                                        <div class="entry-img">
                                            <img src="<?php echo base_url(); ?>upload/news/<?php echo $n->news_cover; ?>" alt="" width=100%>
                                        </div>
                                        <div class="entry-value">
                                            <h2 class="text-0">
                                                <p href="<?php echo site_url('page/information_detail/' . $n->news_category_id . '/' . $n->field_id . '/' . $n->news_slug); ?>"><?php echo substr($n->news_title, 0, 50) . "..."; ?></p>

                                            </h2>
                                            <div class="entry-meta" style="color:#777777;font-size:12px;">
                                                <ul>
                                                    <li class="d-flex align-items-center"> <?php echo indonesiaDate($n->news_date) ?> &nbsp;&nbsp;<i class="icofont-eye-alt"></i> <b><?php echo $n->news_count_view; ?>x dilihat</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <div class="read-more" style="text-align-last:center">
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                    <?php     }
                    } else {
                        echo "Tidak Ada " . $news_category_name[0]->news_category_name;
                    }

                    ?>
                </div>
                <div class="blog-pagination"><?php echo $links; ?></div>
            </div>
            <br><br><br>
        </section>
    </main>