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
       <p>Os códigos abaixo foram convertidos através do programa Postman, portanto, servem como direcionamento para o desenvolvimento.</p>
       <div class="callout callout-info">
        <p>Não se esqueça que precisa substituir no código tanto o seu EndPoint, quanto o Token, e que o celular deverá estar sincronizado no momento dos testes.</p>
       </div>


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
                  <li class="nav-item"><a class="nav-link" href="#js_jquery" data-toggle="tab">JavaScript (Jquery AJAX)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#js_xhr" data-toggle="tab">JavaScript (XHR)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_native" data-toggle="tab">NodeJS (Native)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_request" data-toggle="tab">NodeJS (Request)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#node_uni" data-toggle="tab">NodeJS (UniRest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#objc" data-toggle="tab">Objective-C (NSURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#php_http" data-toggle="tab">PHP (HttpRequest)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#php_curl" data-toggle="tab">PHP (cURL)</a></li>
                  <li class="nav-item"><a class="nav-link" href="#python_http" data-toggle="tab">Python (Http.client (Phyton 3))</a></li>
                  <li class="nav-item"><a class="nav-link" href="#python_request" data-toggle="tab">Python (Requests)</a></li>
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
                        <code class="C++">
CURL *hnd = curl_easy_init();

curl_easy_setopt(hnd, CURLOPT_CUSTOMREQUEST, "POST");
curl_easy_setopt(hnd, CURLOPT_URL, "http://[SeuEndPoint]/api/v1/send_message");

struct curl_slist *headers = NULL;
headers = curl_slist_append(headers, "cache-control: no-cache");
headers = curl_slist_append(headers, "Authorization: 5201d7c3caf9dc1633ae2766a7b88889xxxxx");
curl_easy_setopt(hnd, CURLOPT_HTTPHEADER, headers);

curl_easy_setopt(hnd, CURLOPT_POSTFIELDS, "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}");

CURLcode ret = curl_easy_perform(hnd);
                        </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="curl">
                    <pre>
                    <code class="C++">
curl -X POST \
  [SeuEndPoint]/api/v1/send_message \
  -H 'Authorization: 5201d7c3caf9dc1633ae2766a7b888890dxxxxx' \
  -H 'cache-control: no-cache' \
  -d '{
  "menssage": "Teste de envio pela API",
  "number": "62999999999"
}'
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="csharp">
                    <pre>
                    <code class="C#">
var client = new RestClient("http://[SeuEndPoint]/api/v1/send_message");
var request = new RestRequest(Method.POST);
request.AddHeader("cache-control", "no-cache");
request.AddHeader("Authorization", "5201d7c3caf9dc1633ae2766a7b88889xxxxx");
request.AddParameter("undefined", "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}", ParameterType.RequestBody);
IRestResponse response = client.Execute(request);
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="go">
                    <pre>
                    <code class="Go">
package main

import (
	"fmt"
	"strings"
	"net/http"
	"io/ioutil"
)

func main() {

	url := "http://[SeuEndPoint]/api/v1/send_message"

	payload := strings.NewReader("{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}")

	req, _ := http.NewRequest("POST", url, payload)

	req.Header.Add("Authorization", "5201d7c3caf9dc1633ae2766a7b88889xxxxx")
	req.Header.Add("cache-control", "no-cache")

	res, _ := http.DefaultClient.Do(req)

	defer res.Body.Close()
	body, _ := ioutil.ReadAll(res.Body)

	fmt.Println(res)
	fmt.Println(string(body))

}
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="java_ok">
                    <pre>
                    <code class="Java">
OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/octet-stream");
RequestBody body = RequestBody.create(mediaType, "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}");
Request request = new Request.Builder()
  .url("http://[SeuEndPoint]/api/v1/send_message")
  .post(body)
  .addHeader("Authorization", "5201d7c3caf9dc1633ae2766a7b88889xxxxx")
  .addHeader("cache-control", "no-cache")
  .build();

Response response = client.newCall(request).execute();
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="java_uni">
                    <pre>
                    <code class="Java">
HttpResponse<String> response = Unirest.post("http://[SeuEndPoint]/api/v1/send_message")
  .header("Authorization", "5201d7c3caf9dc1633ae2766a7b88889xxxxx")
  .header("cache-control", "no-cache")
  .body("{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}")
  .asString();
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="js_jquery">
                    <pre>
                    <code class="hljs javascript">
var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://[SeuEndPoint]/api/v1/send_message",
  "method": "POST",
  "headers": {
    "Authorization": "5201d7c3caf9dc1633ae2766a7b88889xxxxx",
    "cache-control": "no-cache"
  },
  "data": "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}"
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="js_xhr">
                    <pre>
                    <code class="hljs javascript">
var data = "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://[SeuEndPoint]/api/v1/send_message");
xhr.setRequestHeader("Authorization", "5201d7c3caf9dc1633ae2766a7b88889xxxxx");
xhr.setRequestHeader("cache-control", "no-cache");

xhr.send(data);
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="node_native">
                    <pre>
                    <code class="html">
var http = require("http");

var options = {
  "method": "POST",
  "hostname": [
    "[SeuEndPoint]"
  ],
  "path": [
    "api",
    "v1",
    "send_message"
  ],
  "headers": {
    "Authorization": "5201d7c3caf9dc1633ae2766a7b88889xxxxx",
    "cache-control": "no-cache"
  }
};

var req = http.request(options, function (res) {
  var chunks = [];

  res.on("data", function (chunk) {
    chunks.push(chunk);
  });

  res.on("end", function () {
    var body = Buffer.concat(chunks);
    console.log(body.toString());
  });
});

req.write("{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}");
req.end();
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="node_request">
                    <pre>
                    <code class="html">
var request = require("request");

var options = { method: 'POST',
  url: 'http://[SeuEndPoint]/api/v1/send_message',
  headers: 
   { 'cache-control': 'no-cache',
     Authorization: '5201d7c3caf9dc1633ae2766a7b88889xxxxx' },
  body: '{\r\n  "menssage": "Teste de envio pela API",\r\n  "number": "62999999999"\r\n}' };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="node_uni">
                    <pre>
                    <code class="html">
var unirest = require("unirest");

var req = unirest("POST", "http://[SeuEndPoint]/api/v1/send_message");

req.headers({
  "cache-control": "no-cache",
  "Authorization": "5201d7c3caf9dc1633ae2766a7b88889xxxxx"
});

  req.send("{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}");

req.end(function (res) {
  if (res.error) throw new Error(res.error);

  console.log(res.body);
});
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="objc">
                    <pre>
                    <code class="hljs objectivec">
#import <Foundation/Foundation.h>

NSDictionary *headers = @{ @"Authorization": @"5201d7c3caf9dc1633ae2766a7b88889xxxxx",
                           @"cache-control": @"no-cache" };

NSData *postData = [[NSData alloc] initWithData:[@"{
  "menssage": "Teste de envio pela API",
  "number": "62999999999"
}" dataUsingEncoding:NSUTF8StringEncoding]];

NSMutableURLRequest *request = [NSMutableURLRequest requestWithURL:[NSURL URLWithString:@"http://[SeuEndPoint]/api/v1/send_message"]
                                                       cachePolicy:NSURLRequestUseProtocolCachePolicy
                                                   timeoutInterval:10.0];
[request setHTTPMethod:@"POST"];
[request setAllHTTPHeaderFields:headers];
[request setHTTPBody:postData];

NSURLSession *session = [NSURLSession sharedSession];
NSURLSessionDataTask *dataTask = [session dataTaskWithRequest:request
                                            completionHandler:^(NSData *data, NSURLResponse *response, NSError *error) {
                                                if (error) {
                                                    NSLog(@"%@", error);
                                                } else {
                                                    NSHTTPURLResponse *httpResponse = (NSHTTPURLResponse *) response;
                                                    NSLog(@"%@", httpResponse);
                                                }
                                            }];
[dataTask resume];
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="php_http">
                    <pre>
                    <code class="PHP">
$request = new HttpRequest();
$request->setUrl('http://[SeuEndPoint]/api/v1/send_message');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'Authorization' => '5201d7c3caf9dc1633ae2766a7b88889xxxxx'
));

$request->setBody('{
  "menssage": "Teste de envio pela API",
  "number": "62999999999"
}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="php_curl">
                    <pre>
                    <code class="PHP">
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://[SeuEndPoint]/api/v1/send_message",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: 5201d7c3caf9dc1633ae2766a7b88889xxxxx",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="python_http">
                    <pre>
                    <code class="hljs python">
import http.client

conn = http.client.HTTPConnection("[SeuEndPoint]")

payload = "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}"

headers = {
    'Authorization': "5201d7c3caf9dc1633ae2766a7b88889xxxxx",
    'cache-control': "no-cache"
    }

conn.request("POST", "api,v1,send_message", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="python_request">
                    <pre>
                    <code class="hljs python">
import requests

url = "http://[SeuEndPoint]/api/v1/send_message"

payload = "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}"
headers = {
    'Authorization': "5201d7c3caf9dc1633ae2766a7b88889xxxxx",
    'cache-control': "no-cache"
    }

response = requests.request("POST", url, data=payload, headers=headers)

print(response.text)
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="ruby_net">
                    <pre>
                    <code class="Python">
require 'uri'
require 'net/http'

url = URI("http://[SeuEndPoint]/api/v1/send_message")

http = Net::HTTP.new(url.host, url.port)

request = Net::HTTP::Post.new(url)
request["Authorization"] = '5201d7c3caf9dc1633ae2766a7b88889xxxxx'
request["cache-control"] = 'no-cache'
request.body = "{\r\n  \"menssage\": \"Teste de envio pela API\",\r\n  \"number\": \"62999999999\"\r\n}"

response = http.request(request)
puts response.read_body
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="shell_wget">
                    <pre>
                    <code class="Shell Session">
wget --quiet \
  --method POST \
  --header 'Authorization: 5201d7c3caf9dc1633ae2766a7b88889xxxxx' \
  --header 'cache-control: no-cache' \
  --body-data '{\r\n  "menssage": "Teste de envio pela API",\r\n  "number": "62999999999"\r\n}' \
  --output-document \
  - 'http://[SeuEndPoint]/api/v1/send_message'
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="shell_httpie">
                    <pre>
                    <code class="Shell Session">
echo '{
  "menssage": "Teste de envio pela API",
  "number": "62999999999"
}' |  \
  http POST 'http://[SeuEndPoint]/api/v1/send_message' \
  Authorization:5201d7c3caf9dc1633ae2766a7b88889xxxxx \
  cache-control:no-cache
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="shell_curl">
                    <pre>
                    <code class="Shell Session">
curl --request POST \
  --url 'http://[SeuEndPoint]/api/v1/send_message' \
  --header 'Authorization: 5201d7c3caf9dc1633ae2766a7b88889xxxxx' \
  --header 'cache-control: no-cache' \
  --data '{\r\n  "menssage": "Teste de envio pela API",\r\n  "number": "62999999999"\r\n}'
                    </code>
                    </pre>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="swift">
                    <pre>
                    <code class="Swift">
import Foundation

let headers = [
  "Authorization": "5201d7c3caf9dc1633ae2766a7b88889xxxxx",
  "cache-control": "no-cache"
]

let postData = NSData(data: "{
  "menssage": "Teste de envio pela API",
  "number": "62999999999"
}".data(using: String.Encoding.utf8)!)

let request = NSMutableURLRequest(url: NSURL(string: "http://[SeuEndPoint]/api/v1/send_message")! as URL,
                                        cachePolicy: .useProtocolCachePolicy,
                                    timeoutInterval: 10.0)
request.httpMethod = "POST"
request.allHTTPHeaderFields = headers
request.httpBody = postData as Data

let session = URLSession.shared
let dataTask = session.dataTask(with: request as URLRequest, completionHandler: { (data, response, error) -> Void in
  if (error != nil) {
    print(error)
  } else {
    let httpResponse = response as? HTTPURLResponse
    print(httpResponse)
  }
})

dataTask.resume()
                    </code>
                    </pre>
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
