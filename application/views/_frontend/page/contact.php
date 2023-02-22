

     
     <section id="breadcrumbs" class="breadcrumbs">
        <div class="container"  style="margin-top:65px">

            <ol>
                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                <li><a href="#">Tracking</a></li>
            </ol>
            <h2>Tracking</h2>

        </div>
    </section>
    <main id="main">
       
    
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
                <div class="col-lg-6">
                    <h3 class="weight-600 main-font color-1" style="font-size:35px">Masukkan <br> Pesan/Aduan/Kritik Anda</h3>
                    <p class="color-5 text-0">Jika memiliki pertanyaan atau sesuatu mengenai Konsultan Indonesia Office, silahkan mengisi form dibawah. Atas perhatianmu kami ucapkan Terimakasih
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                    <?php
                        if($this->session->flashdata('alert')){
                            echo $this->session->flashdata('alert');
                        }

                        
                    ?>
                    <?php echo form_open_multipart("page/create_message")?>
                            <div class="form-row">
                                <div class="col-md-5 form-group">
                                    <?php echo csrf();?>
                                    <input type="text" name="message_name" class="form-control input" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Nama minimal 4 karakter" required/>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control input" name="message_phone" id="email" placeholder="Nomor HP" data-rule="minlen:16" data-msg="Masukkan nomor telpon yang valid" required/>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" class="form-control input" name="message_email" id="email" placeholder="Email" data-rule="email" data-msg="Masukkan email anda yang valid" required/>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input" name="message_subject" id="subject" placeholder="Subjek Pesan" data-rule="minlen:4" data-msg="Subject minimal 4-8 karakter" required/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input" name="message_text" rows="5" data-rule="required" data-msg="Tulis sesuatu dikolom pesan" placeholder="Isi Pesan" required></textarea>
                                <div class="validate"></div>
                            </div>
                            
                            <div class="text-center"><button class="btn btn-model-4" type="submit">Kirim Pesan</button></div>
                        <?php echo form_close(); ?>

                </div>

            </div>
        </div>
    </section>
        
    </main>