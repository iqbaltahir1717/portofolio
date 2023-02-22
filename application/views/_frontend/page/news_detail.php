

     
     <section id="breadcrumbs" class="breadcrumbs">
        <div class="container" style="margin-top:65px">
            <ol>
                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#"><?php echo $news_category_name[0]->news_category_name?></a></li>
            </ol>
            <h2><?php echo $news[0]->news_title;?></h2>

        </div>
    </section>
    <main id="main">
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <section id="blog" class="blog">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-12 entries-2">
                                <?php foreach($news as $n){ ?>
                                <article class="entry-3">
                                    <div class="entry-img">
                                        <img src="<?php echo base_url();?>upload/news/<?php echo $n->news_cover;?>" alt="" class="img-fluid img-thumbnail">
                                    </div>
                                    <br>
                                    <div class="entry-value">
                                        <h2 class="color-1 text-1 weight-600">
                                            <p href=""><?php echo $n->news_title;?></p>
                                        </h2>
                                        <p>
                                            <?php echo $n->news_text;?>
                                        </p>
                                    </div>

                                    <div class="entry-content">
                                        <?php if($n->news_category_id==2){ ?>
                                        <div class="read-more" style="text-align-last:center">
                                            <a href="<?php echo $n->link;?>">Download</a>
                                        </div>
                                        <?php } ?>
                                        
                                    </div>
                                </article>
                                <?php } ?>
                            </div>

                            <!--<div class="col-lg-4">-->

                            <!--<div class="sidebar">-->
                            <!--        <h3 class="color-1 text-2">Pencarian <?php echo $news_category_name[0]->news_category_name;?></h3>-->
                            <!--        <hr style="border: 0.9px dashed #d2d6de">-->
                            <!--        <div class="sidebar-item search-form">-->
                            <!--            <?php echo form_open("page/information_search/".$this->uri->segment(3)."/".$this->uri->segment(4))?>-->
                            <!--                <input type="text" name="key" placeholder="Cari Judul">-->
                            <!--                <button type="submit" style="background-color:#FFCE31; color:#4d4d4d">Cari</button>-->
                            <!--            <?php echo form_close();?>-->
                            <!--        </div>-->

                            <!--        <h3 class="color-1 text-2">Kategori</h3>-->
                            <!--        <hr style="border: 0.9px dashed #d2d6de">-->
                            <!--        <div class="sidebar-item categories">-->
                            <!--            <ul>-->
                            <!--                <?php foreach($news_category as $nc){?>-->
                            <!--                    <li><a href="<?php echo site_url('page/information/'.$nc->news_category_id.'/'.$this->uri->segment(4));?>"><?php echo $nc->news_category_name;?></a></li>-->
                            <!--                <?php } ?>-->
                            <!--            </ul>-->
                            <!--        </div>-->
                                    
                                    
                            <!--        <h3 class="color-1 text-2">Artikel Terbaru</h3>-->
                            <!--        <hr style="border: 0.9px dashed #d2d6de">-->
                            <!--        <div class="sidebar-item recent-posts">-->
                            <!--            <?php foreach($recent as $r){ ?>-->
                            <!--            <div class="post-item clearfix">-->
                            <!--                <img src="<?php echo base_url();?>upload/news/<?php echo $r->news_cover?>" alt="">-->
                            <!--                <h4><a href="<?php echo site_url('page/information_detail/'.$r->news_category_id.'/'.$r->field_id.'/'.$r->news_slug);?>"><?php echo $r->news_title;?></a></h4>-->
                            <!--                <time style="color:gray"><i class="icofont-eye-alt"></i> <b><?php echo $r->news_count_view;?>x dilihat</b> &nbsp;&nbsp;<b class="badge badge-success"><?php echo $r->field_name;?></b></time>-->
                            <!--            </div>-->
                            <!--            <?php } ?>-->
                            <!--        </div>-->
                            <!--    </div>-->

                            <!--</div>-->

                        </div>

                    </div>
                </section>
            </div>
        </section>
    </main>