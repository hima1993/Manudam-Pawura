<?php include "includes/admin/header.php" ?>

<?php include "includes/admin/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recipient Approvals
        <small>new</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      

      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Requests sent by recipients to join the system</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIC</th>
                  <th>Full name</th>
                  <th>Mobile</th>
                  <th>Address</th>
                  <th>Recomendation</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>                  
                  <td>940590108V</td>
                  <td>Harin Samaranayake</td>
                  <td>766572833</td>
                  <td>41/1 Papiliyana Mw, Nugegoda</td>
                  <td>He is a good guy</td>
                  <td>
                    <button type="submit" class="btn btn-success">Acccept</button>
                    <button type="submit" class="btn btn-danger">Decline</button>
                  </td>
                </tr>                
                
                </tbody>
                <tfoot>
                <tr>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- column -->
      </div>
      <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/admin/footer.php" ?>
  <?php include "includes/admin/slider.php" ?>
  <?php include "includes/admin/js.php" ?>