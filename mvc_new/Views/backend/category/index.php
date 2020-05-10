<?php 
require_once "Views/backend/includes/header.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Quản lý danh mục</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <?php
            if (isset($_COOKIE["msg"])) {
             ?>
             <div class="alert alert-success" role="alert">
              <strong>Success !!!</strong>
              <?php
              echo $_COOKIE["msg"];
              ?>
            </div>
            <?php 
          }
          ?>
          <a href="/mvc_new/index.php?mod=category&act=create" class="btn btn-secondary" style="margin-bottom: 15px;">Add New Category</a>
          <table id="myTable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="5%">ID</th>
                <th width="25%">Name</th>
                <th width="20%">Slug</th>
                <th width="25%">Description</th>
                <th width="25%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $category): ?>
                <tr>
                  <td><?php echo $category['id'] ?></td>
                  <td><?php echo $category['name'] ?></td>
                  <td><?php echo $category['slug'] ?></td>
                  <td><?php echo $category['description'] ?></td>
                  <td>
                    <a href="/mvc_new/index.php?mod=category&act=detail&id=<?php echo $category['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="/mvc_new/index.php?mod=category&act=edit&act=edit&id=<?php echo $category['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="/mvc_new/index.php?mod=category&act=destroy&id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  require_once "Views/backend/includes/footer.php";
  ?>
