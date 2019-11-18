<?php

?>

<!DOCTYPE html>
<html>

<?php
include 'head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">

<?php
include 'header.php';

include 'menu.php';
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testes no seu servidor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Testes servidor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       


        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Exemplos de Códigos</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">C (LibCurl)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">cURL</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">C# (RestSharp)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Go</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Java (Ok Http)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Java (UniRest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">JavaScript (Jquery AJAX)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">JavaScript (XHR)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">NodeJS (Native)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">NodeJS (Request)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">NodeJS (UniRest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Objective-C (NSURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">PHP (HttpRequest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">PHP (cURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Phyton (Http.client (Phyton 3))</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Phyton (Requests)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Ruby (NET::HTTP)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Shell (wget)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Shell (Httpie)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Shell (cURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Swift (NSURL)</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      Dropdown <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="#tab_1">Action</a>
                      <a class="dropdown-item" tabindex="-1" href="#tab_2">Another action</a>
                      <a class="dropdown-item" tabindex="-1" href="#tab_3">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    A wonderful é um problema muito grande isso.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and th
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing 
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
   include 'footer.php';
   include 'scripts.php'; 
  ?>

</body>
</html>
