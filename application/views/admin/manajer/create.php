<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Manajer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('admin/manajer') ?>">Manajer</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('admin/tambah-manajer') ?>">Tambah</a></li>
              <li class="breadcrumb-item active">Here</li>
            </ol>
          </div>
        </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <strong>Tambah Data Manajer</strong>
            </div>
            <?= form_open('admin/store-manajer') ?>
            <div class="card-body">
              <?php
                $inputs = $this->session->flashdata('inputs');
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <b>Warning!</b> Something it's wrong:
                            <ul>
                            <?php foreach($errors as $key => $error) { ?>
                                <li><?= $error ?></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="form-group">
                    <label for="">Username</label>
                    <?= form_input('username', $inputs['username'], ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) ?>
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <?= form_input('fullname', $inputs['fullname'], ['class' => 'form-control', 'placeholder' => 'Fullname', 'required' => 'required']) ?>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <?= form_input('email', $inputs['email'], ['class' => 'form-control', 'placeholder' => 'Email']) ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <?= form_input('password', $inputs['pass_show'], ['class' => 'form-control', 'placeholder' => 'Password']) ?>
                </div>
                
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> RESET</button>
                <button type="submit" class="btn btn-success float-right"><i class="fa fa-check-circle"></i> SIMPAN</button>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
