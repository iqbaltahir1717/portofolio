    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container"  style="margin-top:65px">
            <ol>
                <li><a href="<?php echo site_url('home')?>" class="color-4" >Home</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#"><?php echo $news_category_name[0]->news_category_name;?></a></li>
            </ol>
            <h2><?php echo $news_category_name[0]->news_category_name;?></h2>

        </div>
    </section>
    <br><br>
    <main id="main">
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <?php 
                        if($news){
                            foreach($news as $n){ 
                    ?>
                    <div class="col-lg-3">
                        <a href="<?php echo site_url('page/information_detail/'.$n->news_category_id.'/'.$n->field_id.'/'.$n->news_slug);?>">
                        
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="<?php echo base_url();?>upload/news/<?php echo $n->news_cover;?>" alt="" width=100%>
                                </div>
                                <div class="entry-value">
                                    <h2 class="text-0">
                                        <p href="<?php echo site_url('page/information_detail/'.$n->news_category_id.'/'.$n->field_id.'/'.$n->news_slug);?>"><?php echo substr($n->news_title,0,50)."...";?></p>
                                    </h2>
                                    <div class="entry-meta" style="color:#777777;font-size:12px;">
                                        <ul>
                                            <li class="d-flex align-items-center"> <i class="icofont-calendar"></i> <?php echo indonesiaDate($n->news_date)?> &nbsp;&nbsp;<i class="icofont-eye-alt"></i> <b><?php echo $n->news_count_view;?>x dilihat</b></li>
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
                            }else{ echo "Tidak Ada ".$news_category_name[0]->news_category_name; }
                        ?>
                        
                </div>
                <div class="blog-pagination"><?php echo $links;?></div>
            </div>
                <br><br><br>
                <div class="container sidebar">
                    <h3 class="color-1 text-1 mb-3">Search <?php echo $news_category_name[0]->news_category_name;?></h3>
                    
                    <?php echo form_open("page/information_search/".$this->uri->segment(3)."/".$this->uri->segment(4))?>
                        <div class="row">
                        <input type="text" name="key" class="input mr-4 form-control col-10" placeholder="type here">
                        <button type="submit" class="btn btn-model-1">Cari</button>
                        </div>
                    <?php echo form_close();?>

                    <br>
                    <h3 class="color-1 text-1 mb-3">List Project</h3>
                    <div class="sidebar-item categories ">
                        <ul>
                            <?php foreach($field as $f){?>
                                <li><a href="<?php echo site_url('page/information/'.$this->uri->segment(3).'/'.$f->field_id);?>"><?php echo $f->field_name;?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <h3 class="color-1 text-1">Menu</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <?php foreach($news_category as $nc){?>
                                <li><a  href="<?php echo site_url('page/information/'.$nc->news_category_id.'/'.$this->uri->segment(4));?>"><?php echo $nc->news_category_name;?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>   <br><br><br>
        </section>
    </main>
 