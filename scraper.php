<?php
echo '
<style> 

body {
  font-size:100%; 
  line-height:1.5;
  font-family: \'Merriweather\', Georgia, \'Times New Roman\', Times, serif;
}
.title
{
font-size: 1.2em;
}

.logo
{
	height:50px;
}

td {
    background: #FFFFFF;
    padding: 20px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 18px;
    text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
    border-right: 1px solid #C1C3D1;
}
td, th {
    display: table-cell;
    vertical-align: inherit;
}

tr {
    border-top: 1px solid #C1C3D1;
    border-bottom-: 1px solid #C1C3D1;
    color: #666B85;
    font-size: 16px;
    font-weight: normal;
    text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
.table-fill {
    background: white;
    border-radius: 3px;
    border-collapse: collapse;
    height: 320px;
    margin: auto;
    max-width: 600px;
    padding: 5px;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    animation: float 5s infinite;
}

</style>';

$logo_url="cdac.png";
$url="http://cdac.in/index.aspx?id=current_jobs";

require '../../libraries/simple_html_dom.php';
$html=file_get_html($url);

$title=$html->find('div.custom-para p a strong');

$link=$html->find('div.custom-para p a');

//print_r($title);


$counter=count($title);
echo '<table class="table-fill"><tbody>';
for ($x = 0; $x<= $counter; $x++) 
	
{
	if (isset($title[$x]))
	{
	
	
	
    echo '<tr>';
	echo '<td><img class="logo" src="'.$logo_url.'"/></td>';
	echo ('<td><div class="title">'.$title[$x]->plaintext.'</a></div>');
	//echo '<br>';
	echo '<div class="link"><a target="_blank" href="http://cdac.in/'.($link[$x]->href).'">Link to Original Advertisement</a></div></td>';
	echo '</tr>';
	
	}
		
	
	
} 
echo '<tbody><table>';






?>
