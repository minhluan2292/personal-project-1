<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
  <style>
    
  </style>
</head>
<body onload="javascript:start()">
 
  <div style="background-color:white;color:black;">
<!--     <button onclick="alerttime()">
      Alert
    </button> -->
    Time now:
<label id="utmatning"></label>
  <br>
Alert 1: <select id="selechH1" style="font-weight:bold;">
          <option>--</option>
         </select>
    :
    <select  id="selechM1" style="font-weight:bold;">
          <option>--</option>
    </select>
    :
    <select id="selectSession" style="font-weight:bold;">
                <option>--</option>
                <option>AM</option>
                <option>PM</option>
              </select>
     (HH:MM:AM/PM)
    
  
  
 
 <hr>
  This is testing of Luan Legend :D 
    
  </div>
  
  

<script>
function gettime()
{
	    setInterval(function(){ 
        var a;
        a=new Date().toLocaleTimeString();
        document.getElementById("utmatning").textContent = a;
        
    var h1 = document.getElementById("selechH1").value;
    var m1 = parseInt(document.getElementById("selechM1").value);
    var ss1 = document.getElementById("selectSession").value;
    if(ss1==="PM")
      {
        h1 = parseInt(h1)+12;
      }
    
    if(ss1 !== "--")
      {
        var d = new Date();
        var ahnow =d.getHours();
        var amnow = d.getMinutes();
        var asnow = d.getSeconds();
        var ampmnow = (ahnow >= 12) ? "PM" : "AM";        
        if(h1==ahnow && m1==amnow && asnow=="0" && ss1==ampmnow)
          {
            alert("Time out !!!");
            document.getElementById("selechH1").value="--";
            document.getElementById("selechM1").value="--";
            document.getElementById("selectSession").value="--";
          }
      }
        
        }, 1000);

}
function initDropdownList( id, min, max ) {
    var select, i, option;

    select = document.getElementById( id );
    for ( i = min; i <= max; i += 1 ) {
        option = document.createElement( 'option' );
        option.value = option.text = i;
        select.add( option );
    }
}
function start()
  {
    gettime();
    initDropdownList('selechH1',0,12);
    initDropdownList('selechM1',0,59);
  }
// function alerttime()
//   {
//     var h1 = document.getElementById("selechH1").value;
//     var m1 = parseInt(document.getElementById("selechM1").value);
//     var ss1 = document.getElementById("selectSession").value;
//     if(ss1==="PM")
//       {
//         h1 = parseInt(h1)+12;
//       }
    
//     if(ss1 !== "--")
//       {
//         var d = new Date();
//         var ahnow =d.getHours();
//         var amnow = d.getMinutes();
//         var asnow = d.getSeconds();
//         var ampmnow = (ahnow >= 12) ? "PM" : "AM";        
//         if(h1==ahnow && m1==amnow && asnow=="0" && ss1==ampmnow)
//           {
//             alert("Time out !!!");
//           }
//       }
//   }
</script>
  
 
</body>
</html>
