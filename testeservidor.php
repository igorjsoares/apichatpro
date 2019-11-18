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
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item"><a class="nav-link active" href="#c_libcurl" data-toggle="tab">C (LibCurl)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#curl" data-toggle="tab">cURL</a></li>
                  <li class="nav-item"><a class="nav-link" href="#csharp" data-toggle="tab">C# (RestSharp)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#go" data-toggle="tab">Go</a></li>
                  <li class="nav-item"><a class="nav-link" href="#java_ok" data-toggle="tab">Java (Ok Http)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#java_uni" data-toggle="tab">Java (UniRest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#java_jquery" data-toggle="tab">JavaScript (Jquery AJAX)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#js_xhr" data-toggle="tab">JavaScript (XHR)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_native" data-toggle="tab">NodeJS (Native)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_request" data-toggle="tab">NodeJS (Request)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_uni" data-toggle="tab">NodeJS (UniRest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#objc" data-toggle="tab">Objective-C (NSURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#php_http" data-toggle="tab">PHP (HttpRequest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#php_curl" data-toggle="tab">PHP (cURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#phyton_http" data-toggle="tab">Phyton (Http.client (Phyton 3))</a></li>
                  <li class="nav-item"><a class="nav-link" href="#phyton_request" data-toggle="tab">Phyton (Requests)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ruby_net" data-toggle="tab">Ruby (NET::HTTP)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#shell_wget" data-toggle="tab">Shell (wget)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#shell_httpie" data-toggle="tab">Shell (Httpie)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#shell_curl" data-toggle="tab">Shell (cURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#swift" data-toggle="tab">Swift (NSURL)</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="c_libcurl">
                    <pre>
                        <code class="html">
CURL *hnd = curl_easy_init();

curl_easy_setopt(hnd, CURLOPT_CUSTOMREQUEST, "POST");
curl_easy_setopt(hnd, CURLOPT_URL, "[SeuEndPoint]/api/v1/send_message");

struct curl_slist *headers = NULL;
headers = curl_slist_append(headers, "cache-control: no-cache");
headers = curl_slist_append(headers, "Connection: keep-alive");
headers = curl_slist_append(headers, "Content-Length: 77");
headers = curl_slist_append(headers, "Accept-Encoding: gzip, deflate");
headers = curl_slist_append(headers, "Host: [SeuEndPoint]");
headers = curl_slist_append(headers, "Cache-Control: no-cache");
headers = curl_slist_append(headers, "Accept: */*");
headers = curl_slist_append(headers, "Content-Type: text/plain");
headers = curl_slist_append(headers, "Authorization: [SeuToken]");
curl_easy_setopt(hnd, CURLOPT_HTTPHEADER, headers);

curl_easy_setopt(hnd, CURLOPT_POSTFIELDS, "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}");

CURLcode ret = curl_easy_perform(hnd);
                        </code>
                    </pre>
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
