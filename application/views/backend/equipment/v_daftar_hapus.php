<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Equipment Storage Bin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>equipment">List equipment</a></li>
            <li class="breadcrumb-item active">Equipment Storage Bin</li>
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
              <h3 class="card-title"><a class="btn btn-success btn-sm" href="<?php echo base_url()?>paneladmin/equipment">Back List equipment</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){
                  $tgl_posting = $this->mylibrary->tgl_indo($row['equipment_post_tanggal']);
                  ?>

                <tr>
                  <td><?=$tgl_posting?></td>
                  <td><?=$row['equipment_judul']?></td>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' href='".base_url()."paneladmin/equipment_restore/$row[equipment_id]'>Restore</a>
                    <a class='btn btn-danger btn-sm' href='".base_url()."paneladmin/equipment_delete/$row[equipment_id]' onclick=\"return confirm('Are you sure want to permanently delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
</div>

<?php $this->load->view('backend/bottom')?>
