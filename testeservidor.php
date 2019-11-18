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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Testes no servidor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Testes servidor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
   
           <div class="col-md-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    Linguagem <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#tab_1-1">C (LibCurl)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#tab_2-2">cURL</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#tab_3-2">C# (RestSharp)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Go</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Java (Ok Http)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Java (UniRest)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript (Jquery AJAX)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript (XHR)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NodeJS (Native)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NodeJS (Request)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NodeJS (UniRest)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Objective-C (NSURL)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PHP (HttpRequest)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PHP (cURL)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Phyton (Http.client (Phyton 3))</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Phyton (Requests)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ruby (NET::HTTP)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shell (wget)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shell (Httpie)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shell (cURL)</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Swift (NSURL)</a></li>
                    </ul>
                </li>
                <li class="pull-left header"><i class="fa fa-th"></i> Exemplo de códigos</li>
                </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1-1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2-2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  
  <?php
   include 'footer.php';
   include 'scripts.php'; 
  ?>

</body>
</html>
