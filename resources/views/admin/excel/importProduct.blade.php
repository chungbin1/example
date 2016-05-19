<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product Info</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{!! route('postImport') !!}" method="post" enctype="multipart/form-data">
        <input type="hidden" value="{!! csrf_token() !!}" name="_token" >
		<input type="file" name="products"></input>
		<input type="submit" value="Import"></input>
	</form>
</body>
</html>