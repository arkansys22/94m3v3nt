<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sampah Layanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/home">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>paneladmin/services">Layanan</a></li>
            <li class="breadcrumb-item active">Sampah Layanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a class="btn btn-success btn-sm" title="Edit Data" href="<?php echo base_url()?>paneladmin/services">Kembali ke Layanan</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){
                  $tgl_posting = $this->mylibrary->tgl_indo($row['services_post_tanggal']);
                  ?>

                <tr>
                  <td><?=$tgl_posting?></td>
                  <?php $kategori= $this->Crud_m->view_where('products_category', array('products_cat_id'=> $row['products_cat_id']))->row(); ?>
                  <td><?=$kategori->products_cat_judul?></td>
                  <td><?=$row['services_judul']?></td>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."paneladmin/services_restore/$row[services_id]'>Restore</a>
                    <a class='btn btn-danger btn-sm' title='Permanently Delete' href='".base_url()."paneladmin/services_delete/$row[services_id]' onclick=\"return confirm('Are you sure want to permanently delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
</div>

<?php $this->load->view('backend/bottom')?>
