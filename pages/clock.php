
	<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date("10/19/2017, 1:28:54 PM");
		var d1 = new Date("10/19/2017, 1:29:55 PM");
// 		alert(d.toLocaleString('en-US', { hour: 'numeric',minute:'numeric', hour12: false }));
	var time=d1.getTime()-d.getTime();
	// 1s = 1000 ; 1m = 60 000
	document.getElementById("clock").innerHTML=time/60000;
}
</script>

	<textarea id="clock"></textarea>



