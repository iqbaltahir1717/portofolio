<div class="content-wrapper">
    <section class="content-header">
        <h1 class="fontPoppins">
            <?php echo strtoupper($title); ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
            <?php
            if ($this->uri->segment(3)) {
                echo '<li class="active"><a href="' . site_url('admin/' . $this->uri->segment(2)) . '">' . strtoupper($title) . '</a></li>';
                echo '<li class="active">' . strtoupper($this->uri->segment(3)) . '</li>';
            } else {
                echo '<li class="active">' . strtoupper($title) . '</li>';
            }
            ?>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <?php echo form_open_multipart("admin/news/update") ?>
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div style="padding-top:10px">
                        <a href="<?php echo site_url('admin/news') ?>" class="btn btn-warning btn-flat" title="kembali ke halaman sebelumnya">kembali</a>
                        <button type="submit" class="btn btn-primary btn-flat" title="Update data"> update</button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <?php echo csrf(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for=""><b style="color: black">Kategori Informasi <span style="color:red">*</span></b></label>
                            <select class="form-control select2" name="news_category_id" required style="width:100%">
                                <option value="">-Pilih Kategori Informasi-</option>
                                <?php
                                foreach ($news_category as $nw) {
                                    if ($news[0]->news_category_id == $nw->news_category_id) {
                                        echo '<option value="' . $nw->news_category_id . '" selected>' . $nw->news_category_name . '</option>';
                                    } else {
                                        echo '<option value="' . $nw->news_category_id . '">' . $nw->news_category_name . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><b style="color: black">Judul Informasi <span style="color:red">*</span></b></label>
                            <input type="text" class="form-control" placeholder="Judul Informasi" name="news_title" required="required" value="<?php echo $news[0]->news_title; ?>">
                            <input type="hidden" class="form-control" name="news_id" required="required" value="<?php echo $news[0]->news_id; ?>">
                            <input type="hidden" class="form-control" name="news_cover_old" required="required" value="<?php echo $news[0]->news_cover; ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><b style="color: black">Link URL Website</b></label>
                            <input type="text" class="form-control" placeholder="link Informasi" name="news_link" value="<?php echo $news[0]->news_link; ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><b style="color: black">Link URL Android</b></label>
                            <input type="text" class="form-control" placeholder="link Informasi" name="news_link_2" value="<?php echo $news[0]->news_link_2; ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><b style="color: black">Tanggal</b></label>
                            <input type="date" class="form-control" placeholder="tgl Informasi" name="news_date" value="<?php echo $news[0]->news_date; ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><b style="color: black">Cover/Thumbnail Informasi </b></label><br>
                            <span class="text-red">file sebelumnya: </span><a href="<?php echo base_url(); ?>upload/news/<?php echo $news[0]->news_cover; ?>"><?php echo $news[0]->news_cover; ?></a>
                            <input type="file" class="form-control" placeholder="Judul Informasi" name="news_cover" accept=".png, .jpeg, .jpg">
                        </div>
                        <?php if ($news[0]->news_category_id == 1) { ?>
                            <div class="form-group">
                                <label for=""><b style="color: black">News Pinned</b></label>
                                <select name="news_pinned" class="form-control">
                                    <?php
                                    $choose = ['Unpinned', 'Pinned'];
                                    for ($i = 0; $i < 2; $i++) {
                                        if ($i == $news[0]->news_pinned) {
                                            echo '<option selected value=' . $i . '>' . $choose[$i] . ' </option>';
                                        } else   echo '<option  value=' . $i . '>' . $choose[$i] . ' </option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        <?php } else echo "<input type='hidden'  name='news_pinned' value='0'" ?>
                        <div class="form-group">
                            <label for=""><b style="color: black">Isi Informasi <span style="color:red">*</span></b></label>
                            <textarea cols="80" id="editor" name="news_text" rows="10" style="resize:none;max-width:700px;"><?php echo $news[0]->news_text; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
            </div>
            <?php echo form_close(); ?>
        </div>
    </section>
</div>