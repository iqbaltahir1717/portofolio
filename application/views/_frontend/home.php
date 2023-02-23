<div class="container">
    <section class="hero-1">
        <div class="section-2">
            <div class="over">
                <img class="over-1 thumbnail-image-hero" src="<?php echo base_url() ?>assets\core-images\thumbnail-00.png" rel="stylesheet" data-aos="zoom-in" alt="">
            </div>
        </div>
        <div class="section-1">
            <div class="cta-1"> <span style="color:white">Hi, &nbsp;</span> i'm <?php echo $setting[0]->setting_appname; ?></div>
            <p>
                <?php echo $setting[0]->setting_about; ?>

            </p>
            <form action="https://app.gumroad.com/follow_from_embed_form" class="form gumroad-follow-form-embed" method="post"> <input name="seller_id" type="hidden" value="261502534013"> <input name="email" placeholder="Your email address" type="email"> <button data-custom-highlight-color="" class="btn btn-model-1" type="submit">Follow</button> </form>
        </div>
    </section>
</div>

<section class="bg-1">
    <div class="container">
        <h2 class="center-this color-1 weight-600 second-font">Why Hire Me ?</h2>
        <div class="grid-card text-center center-this">
            <div class="card-ach">
                <img width=250 class="mb-4 shadow" style="border-radius:20px" src="<?php echo base_url() ?>assets\core-images\Group 59.png" alt="">

                <h4 class="color-1 text-1 " style="font-weight: 600; margin-top:20px" data-aos="fade">Communicative</h4>

                <p class="text-0 color-4" data-aos="fade-right">I communicate what I struggle to make all crystal clear. I can communicate my ideas as well.</h2p>

            </div>

            <div class="card-ach">

                <img class="mb-4 shadow" style="border-radius:20px" width=250 src="<?php echo base_url() ?>assets\core-images\Group 58.png" alt="">

                <h4 class="color-1 text-1 " style="font-weight: 600; margin-top:20px" data-aos="fade">Collaborative</h4>

                <p class="text-0 color-4 " data-aos="fade-right">Collaborate well with developers because Im frontend myself, and love feedbacks.</p>

            </div>

            <div class="card-ach">

                <img width=250 class="mb-4 shadow" style="border-radius:20px" src="<?php echo base_url() ?>assets\core-images\Group 57.png" alt="">

                <h4 class="color-1 text-1" style="font-weight: 600; margin-top:20px" data-aos="fade">Management Freak</h4>

                <p class="text-0 color-4" data-aos="fade-right">I manage the whole process from acquiring clients, timeline, until product delivery.</p>

            </div>



        </div>

        <br>

    </div>

</section>
<div class="webinar">
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <h4 class="color-1 text-4 weight-600 second-font">My <span class="color-2">Blog</span></h4>
            <br><br><br><br>
            <h1 class="back-title second-font">BLOG</h1>
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

                                            <li class="d-flex align-items-center"> <?php echo indonesiaDate($n->news_date) ?> &nbsp;&nbsp;<i class="icofont-eye-alt"></i> <b><?php echo $n->news_count_view; ?>x dilihat</b></li>

                                        </ul>

                                    </div>



                                </div>

                            </article>

                        </a>

                    </div>

                <?php } ?>
                <div class="col-12">
                    <div class="center-this">
                        <a href="<?php echo site_url('page/information/2/1') ?>" class="btn btn-model-2">Other Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<main id="main">
    <!-- <section id="contact" class="">

        <div class="container contact" data-aos="fade-up">

            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                <div class="col-lg-6">

                    <h3 class="weight-600 main-font color-1 mb-4" style="font-size:35px">Berikan <br> Pesan Anda 😊</h3>

                    <p class="color-4 text-0 ">Jika memiliki pertanyaan atau permintaan ke saya, silahkan mengisi form disamping. Atas perhatianmu kami ucapkan Terimakasih 🥦

                </div>
                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                    <?php echo form_open_multipart("page/create_message") ?>
                    <div class="form-row">
                        <div class="col-md-5 form-group">
                            <?php echo csrf(); ?>
                            <input type="text" name="message_name" class="form-control input" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Nama minimal 4 karakter" required />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control input" name="message_phone" id="email" placeholder="Nomor HP" data-rule="minlen:16" data-msg="Masukkan nomor telpon yang valid" required />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control input" name="message_email" id="email" placeholder="Email" data-rule="email" data-msg="Masukkan email anda yang valid" required />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input" name="message_subject" id="subject" placeholder="Subjek Pesan" data-rule="minlen:4" data-msg="Subject minimal 4-8 karakter" required />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input" name="message_text" rows="5" data-rule="required" data-msg="Tulis sesuatu dikolom pesan" placeholder="Isi Pesan" required></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center"><button class="btn btn-model-1" type="submit">Kirim Pesan</button></div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section> -->
</main>