<!--<div class="form-group">
  <textarea class="form-control" rows="5" id="texttype"></textarea>
  <button onclick="test()" type="button" class="btn btn-success btn-lg">Check exist</button>
  <label id="alert" style="color:yellow;font-size:20px"></label>
</div>-->
<?php
// session_start();
// if (!isset($_SESSION['username'])) {
// header('Location: ?page=login');
// }
?>

<!-- <script>
  function test()
  {
    var word = document.getElementById("texttype").value;
    var keydic = "dict.1.1.20170714T193840Z.e04ec88b084a0ef8.cfeb28231d77f882a05877866493953c20fbd5fe";
    var url="https://dictionary.yandex.net/api/v1/dicservice.json/lookup?key=dict.1.1.20170714T193840Z.e04ec88b084a0ef8.cfeb28231d77f882a05877866493953c20fbd5fe&lang=en-en&text=" + word;
     var Httpreq = new XMLHttpRequest(); // a new request
     Httpreq.open("GET",url,false);
     Httpreq.send(null);
     var obj= Httpreq.responseText;          
      var json_obj = JSON.parse(obj);
    var label = document.getElementById('alert');
    if(json_obj.def[0] !=null)
      {
        label.textContent="True";
        label.style.color="green";
      }
    else
      {
          label.textContent="WRONG";
        label.style.color="red";
      }
    
  }
</script> -->