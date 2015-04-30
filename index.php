<html>
<head>
<title>Dynamic Drop Down</title>
</head>
<body>

<table border="0" width="300">
<tr>
<td width="40%">JENIS</td>
<td>
<select name="jenis" id="jenis">
	<option value=''>- PILIH -</option>
	<option value="BUAH">BUAH</option>
	<option value="SAYUR">SAYUR</option>
</select>
</td>
</tr>
<td>
NAMA
</td>
<td>
<select name="nama" id="nama">
<option value=''>- PILIH -</option>
</select>
</td>
</tr>
</table>

		
<script src="js/jquery.min.js"></script>
<script>
		$("#jenis").change(function() {
			$("#nama").load(encodeURI("helper.php?jenis=" + $("#jenis").val()));
		});
</script>
</body>
</html>
