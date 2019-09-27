<html><head>
	<title>Format Rupiah Dengan Javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	body {
		font: 17px "open sans", "segoe ui", tahoma;
	}
	.container {
		width: 200px;
		margin: auto;
		margin-top: 15px;
	}
	input {
		padding: 5px 10px;
		font-size: 17px;
		border: 1px solid #CCCCCC;
		color: #5d5d5d;
		text-align: right;
		width: 200px;
		margin-bottom: 10px;
	}
	h3 {
		margin-bottom: 10px;
	}
	div {
		margin-bottom: 5px;
	}
	</style>
	
<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>
<body>
<div class="container">
	<h3>FORM</h3>
	<div>Tanpa Rupiah:</div>
	<input type="text" id="tanpa-rupiah">
	<div>Dengan Rp:</div>
	<input type="text" id="dengan-rupiah">
</div>

<script type="text/javascript" defer="" async="" src="https://track.uc.cn/uaest.js"></script><script type="text/javascript">

	/* Tanpa Rupiah */
	var tanpa_rupiah = document.getElementById('tanpa-rupiah');
	tanpa_rupiah.addEventListener('keyup', function(e)
	{
		tanpa_rupiah.value = formatRupiah(this.value);
	});
	
	/* Dengan Rupiah */
	var dengan_rupiah = document.getElementById('dengan-rupiah');
	dengan_rupiah.addEventListener('keyup', function(e)
	{
		dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
	});
	
	/* Fungsi */
	function formatRupiah(angka, prefix)
	{
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
	

</body></html>