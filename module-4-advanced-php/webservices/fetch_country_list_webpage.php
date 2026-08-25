<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="shadow p-5 w-50 mx-auto">
<h2>Get all list of country via URL</h2>
<form>
<select name="country" class="form-control">
<option value="">-select country-</option>
<?php 
$url="http://localhost/tops_php_12am/module-4-advanced-php/webservices/country_json_list.json";
$data=file_get_contents($url,true);
// get decoded data of url
$countrylist=json_decode($data,true);
foreach($countrylist as $row)
{ 
?>
<option value="<?php echo $row;?>"><?php echo $row;?></option>    
<?php 
}
?>
</select>
</form>
</div>
</body>
</html>