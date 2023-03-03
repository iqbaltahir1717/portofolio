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
            <div class="box-header with-border">
                <div class="box-tools pull-left">
                    <div class="form-inline">
                        <select class="form-control" id="rowpage">
                            <?php
                            $rowpage = array(5, 10, 25, 50, 100);
                            for ($r = 0; $r < count($rowpage); $r++) {
                                if ($rowpage[$r] == $this->session->userdata('sess_rowpage')) {
                                    echo '<option value="' . $rowpage[$r] . '" selected>' . $rowpage[$r] . '</option>';
                                } else {
                                    echo '<option value="' . $rowpage[$r] . '">' . $rowpage[$r] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <div class="input-group margin">
                            <?php echo form_open("admin/shortcut/search") ?>
                            <input type="text" class="form-control" name="key" placeholder="Masukkan kata kunci pencarian">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-danger btn-flat">cari</button>
                            </span>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <div class="box-tools pull-right">
                    <div style="padding-top:10px">
                        <a href="<?php echo site_url('admin/shortcut') ?>" class="btn btn-success btn-flat" title="Refresh halaman">refresh</a>
                        <button type="submit" class="btn btn-primary btn-flat" title="Tambah data" data-toggle="modal" data-target="#modalCreate"> tambah</button>
                    </div>

                    <!-- Modal-->
                    <div class="modal fade" id="modalCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <?php echo form_open_multipart("admin/shortcut/create") ?>
                                <div class="modal-body">
                                    <?php echo csrf(); ?>
                                    <div class="form-group">
                                        <label for=""><b style="color: black">Shortcut Title <span style="color:red">*</span></b></label>
                                        <input type="text" class="form-control" placeholder="Shortcut Title" name="shortcut_title" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b style="color: black">Shortcut Link <span style="color:red">*</span></b></label>
                                        <input type="text" class="form-control" placeholder="Shortcut Link" name="shortcut_link" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b style="color: black">Shortcut Icon Link</b></label>
                                        <input type="text" class="form-control" placeholder="Shortcut Icon Link" name="shortcut_icon_link">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b style="color: black">Shortcut Description</b></label>
                                        <input type="text" class="form-control" placeholder="Shortcut Description" name="shortcut_description">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                                    <?php echo form_close(); ?>
                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <?php
                if ($this->session->flashdata('alert')) {
                    echo $this->session->flashdata('alert');
                    unset($_SESSION['alert']);
                }
                if ($this->uri->segment(3) == "search") {
                    echo "Kata Kunci Pencarian : <span class='label label-danger label-inline font-weight-lighter mr-2'>" . $search . "</span><hr style='border: 0.5px dashed #d2d6de'>";
                }
                ?>
                <table class="table table-bordered">
                    <tr style="background-color: gray;color:white">
                        <th style="width: 60px">No</th>
                        <th style="width: 20%">#Action</th>
                        <th>Shortcut Title</th>
                        <th>Shortcut Link</th>
                        <th>Shortcut Picture</th>
                        <th>Shortcut Active</th>
                    </tr>
                    <?php
                    if ($shortcut) {
                        $nox = 1;
                        $no = 1;
                        foreach ($shortcut as $key) {
                    ?>
                            <tr>
                                <td><?php echo $no + $numbers; ?></td>
                                <td>
                                    <button class="btn btn-xs btn-flat btn-info" data-toggle="modal" data-target="#modalDetail<?php echo $key->shortcut_id; ?>">View</button>
                                    <button class="btn btn-xs btn-flat btn-warning" data-toggle="modal" data-target="#modalUpdate<?php echo $key->shortcut_id; ?>">Update</button>
                                    <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modalDelete<?php echo $key->shortcut_id ?>">Delete</button>
                                </td>
                                <td><?php echo $key->shortcut_title; ?></td>
                                <td><?php echo $key->shortcut_link; ?></td>
                                <td><img src="<?php echo $key->shortcut_icon_link ?>" width="20" alt="icon"></td>
                                <td><?php if ($key->shortcut_active == 1) echo '<span class="label label-success">Active</span>';
                                    else echo '<span class="label label-danger">Unactive</span>'  ?></td>
                            </tr>

                            <!-- Modal Update-->
                            <div class="modal fade" id="modalUpdate<?php echo $key->shortcut_id ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <?php echo form_open("admin/shortcut/update") ?>
                                        <div class="modal-body">
                                            <?php echo csrf(); ?>
                                            <div class="form-group">
                                                <label for=""><b style="color: black">Shortcut Title <span style="color:red">*</span></b></label>
                                                <input type="text" class="form-control" placeholder="Shortcut Title" name="shortcut_title" required="required" value="<?php echo $key->shortcut_title; ?>">
                                                <input type="hidden" name="shortcut_id" value="<?php echo $key->shortcut_id; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b style="color: black">Shortcut Link <span style="color:red">*</span></b></label>
                                                <input type="text" class="form-control" placeholder="Shortcut Link" name="shortcut_link" required="required" value="<?php echo $key->shortcut_link; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b style="color: black">Shortcut Icon Link</b></label>
                                                <input type="text" class="form-control" placeholder="Shortcut Icon Link" name="shortcut_icon_link" required="required" value="<?php echo $key->shortcut_icon_link; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b style="color: black">Shortcut Description</b></label>
                                                <input type="text" class="form-control" placeholder="Shortcut Description" name="shortcut_description" value="<?php echo $key->shortcut_description; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b style="color: black">Shortcut Active</b></label>
                                                <select name="shortcut_active" class="form-control">
                                                    <?php
                                                    $choose = ['Unactive', 'Active'];
                                                    for ($i = 0; $i < 2; $i++) {
                                                        if ($i == $key->shortcut_active) {
                                                            echo '<option selected value=' . $i . '>' . $choose[$i] . ' </option>';
                                                        } else   echo '<option  value=' . $i . '>' . $choose[$i] . ' </option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning font-weight-bold">Update</button>
                                            <?php echo form_close(); ?>
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete-->
                            <div class="modal fade" id="modalDelete<?php echo $key->shortcut_id ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>

                                        <?php echo form_open("admin/shortcut/delete") ?>
                                        <div class="modal-body">
                                            Are you sure to delete shortcut : <?php echo $key->shortcut_title; ?> ?
                                            <?php echo csrf(); ?>
                                            <input type="hidden" name="shortcut_title" value="<?php echo $key->shortcut_title; ?>">
                                            <input type="hidden" name="shortcut_id" value="<?php echo $key->shortcut_id; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger font-weight-bold">Delete</button>
                                            <?php echo form_close(); ?>
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Detail-->
                            <div class="modal fade" id="modalDetail<?php echo $key->shortcut_id ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <b>Shortcut Title :</b><br><?php echo $key->shortcut_title; ?><br><br>
                                            <b>Shortcut Description :</b><br><?php if ($key->shortcut_description) echo $key->shortcut_description;
                                                                                else echo '-'; ?><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $no++;
                        }
                    } else {
                        echo '
                            <tr>
                                <td colspan="3">Tidak ada ditemukan</td>
                            </tr>
                            ';
                    }
                    ?>
                </table>
            </div>

            <div class="box-footer">

                <!-- PAGINATION -->
                <div class="float-right"><?php echo $links; ?></div>

                <!-- COUNT DATA -->
                <?php if ($shortcut) { ?>
                    <div class="float-left">Tampil <?php echo ($nox + $numbers) . " - " . (count($shortcut) + $numbers) . " dari " . $total_data; ?> Data</div>
                <?php } else { ?>
                    <div class="float-left">Tampil 0 <?php echo " dari " . $total_data; ?> Data</div>
                <?php } ?>
                <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
            </div>
        </div>
    </section>
</div>