<!-- page content -->
<div role="main">
<div class="page-title">
  <div class="title_left">
    <h3>Tambah <small>Bagian</small></h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 pull-right text-right">
      <a href="<?php echo base_url();?>admin/user/bagian/" class="btn btn-defailt" role="button">Kembali</a>
    </div>
  </div>
</div>
<br>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tambah Bagian</h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form role="form" action="<?php echo base_url();?>admin/user/bagian/tambah" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-bagian">Nama Bagian <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control col-md-7 col-xs-12"/>
            
            <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
                <?php echo form_error('nama'); ?>
              </div>
            <?php endif ; ?>

          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

       
