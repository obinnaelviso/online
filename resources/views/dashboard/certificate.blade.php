<!DOCTYPE html>
<html lang="en">
<head>
  <title>Certificate of BIC e-learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="/dashboard/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Euphoria+Script|Kaushan+Script|Montserrat&display=swap" rel="stylesheet">
  <style type="text/css">
	  .certificate-outer {
		border-width: 5px;
		border-style: solid;
		padding: 100px;
		text-align: center;
		margin: 10px;
		background-image: url(/assets/img/confetti.png);
		background-repeat: repeat;
		background-size: 50px;
		filter: grayscale(0.4);
	    background-color: rgba(255,255,255,0.8);
	    background-blend-mode: lighten;
	  }
	  .certificate-inner {
	  	position: relative;
	  	opacity: 1;
	  	z-index: 100;
	  }
	  @media print {
		.btn {
		   display: none;
		}
	  }
	  @page { size: landscape; }
  </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-1">
			<a class="btn btn-light" href="javascript:printDiv('content');"><span class="fa fa-print"></span> Print</a> <a class="btn btn-success" href="javascript:downloadPDF('content');"><span class="fa fa-download"></span> Download</a>
		</div>
		<div id="elementH"></div>
	</div>
</div>
<div class="container-fluid" id="content">
	<div class="certificate-outer">
		<div class="certificate-inner">
			{{-- <h1 style="font-family: 'Lobster Two'; font-size: 80px;  margin-bottom: 20px; color: purple; text-shadow: -1px -1px 0 #000;">Budding Invention Camp</h1> --}}
			<h1 style="font-family: 'Dancing Script'; font-size: 80px;  margin-bottom: 50px; font-weight: 500">Certificate of BIC e-learning</h1>
			<i style="font-size: 18px; font-weight: 900">presented to</i>
			<h2 style="font-family: 'Kaushan Script';font-style: oblique; font-weight: 900; margin-bottom: 30px; font-size: 45px"><u style="border-bottom: 2px solid black; text-decoration: none">&nbsp;&nbsp;{{ $user->first_name.' '.$user->last_name }}&nbsp;&nbsp;</u></h2>
			<i>for</i>
			<h1 style="font-family: Monteserrat; letter-spacing: 2px; margin-bottom: 30px"><u style="border-bottom: 2px solid black; text-decoration: none">&nbsp;{{ $user->theme->name }}&nbsp;</u></h1>
			<div style="font-size: 18px">on the</div>
			<div style="font-family: monospace; letter-spacing: 15px; font-size: 24px;">{{ date_format($user->certificate->created_at, 'd-m-Y') }}</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="/assets/js/html2canvas.min.js"></script>

<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	}	
	function downloadPDF() {
		html2canvas(document.querySelector("#content")).then(function (canvas) {
		    var img = canvas.toDataURL("image/png");
		    var doc = new jsPDF({'orientation': 'landscape'});
		    var ratio = canvas.width/canvas.height;
		    var width = doc.internal.pageSize.getWidth();
			var height = width / ratio;
		    doc.addImage(img, 'PNG', 0, 5, width, height);
		    doc.save('Certificate_of_BIC_e_learning.pdf');        
		});
	}
</script>
</body>
</html>
