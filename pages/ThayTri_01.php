	<div class="panel-body">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tabs-home" data-toggle="tab">
                  Đề bài <span class="label label-success">1</span>
                </a>
              </li>
            </ul>

            <div class="tab-content tab-content-bordered">
              <div class="tab-pane fade in active" id="tabs-home">
                <p style="color:white;font-weight:bold;">
                  Hãy xác định tất cả các số tự nhiên có năm chữ số biết chữ số thứ nhất gấp ba lần chữ số thứ năm; các chữ số thứ hai, ba, tư chênh nhau tổng cộng 7 đơn vị. Biết rằng chữ số thứ tư có giá trị lớn nhất và chữ số thứ ba không vượt quá một một nửa giá trị của chữ số thứ hai đồng thời có đúng 3 cặp chữ số có tổng đều bằng 11
                </p>
              </div>
            </div>
          </div>
	
	<button onclick="giai()" class="btn btn-danger btn-lg" style="margin-left:20px;">Giải bài toán</button>
	<div class="form-group" style="margin:20px;">
		<button class="btn btn-warning btn-lg" style="margin-left:20px;">Các số chạy qua:</button>
		<textarea class="form-control" rows="7" id="kqcothe"></textarea>
		<button class="btn btn-info btn-lg" style="margin-left:20px;">Kết quả cuối cùng:</button>
  		<textarea class="form-control" rows="5" id="texttype"></textarea>
	</div>

		
		
		

		<script>
			function giai()
			{
				var a,b,c,d,e;
				var chayqua="";
				var result="";
				for(e=1;e<=3;e++)
				{
					a=e*3;
					for(d=7;d<=9;d++)
					{
						for(b=1;b<d;b++)
						{
							for(c=0;c<=b/2;c++)
							{
								chayqua+=a+""+b+""+c+""+d+""+e+"  ";
								if(check11(a,b,c,d,e)==1)
								{
									result+=a+""+b+""+c+""+d+""+e+"  ";
								}
							}
						}
					}
				}
				document.getElementById("kqcothe").value=chayqua;
				document.getElementById("texttype").value=result;
			}
			function check11(a,b,c,d,e)
			{
				var i=0;
				if(check(a,b)==1) {i++;}
				if(check(a,c)==1) {i++;}
				if(check(a,d)==1) {i++;}
				if(check(a,e)==1) {i++;}
				if(check(b,c)==1) {i++;}
				if(check(b,d)==1) {i++;}
				if(check(b,e)==1) {i++;}
				if(check(c,d)==1) {i++;}
				if(check(c,e)==1) {i++;}
				if(check(d,e)==1) {i++;}
				if(i>=3)
				{
					return 1;
				}
				return 0;
			}
			function check(a,b)
			{
				if(a+b==11)
				{
					return 1;
				}
				return 0;
			}
			
		</script>
