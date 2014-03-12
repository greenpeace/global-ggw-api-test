<h1>Volunteers Index</h1>
<?php
include('../../lib/ggw_socket.php');

// Config
$data = array(
	"domain" => "netherlands",
	"must_have_default_avatar" => "0",
	"limit" => 1
);
$url = 'https://greenwire.greenpeace.org/api/public/volunteers.json?';

$s = new ggw_socket();
$result = $s->get($url,$data);

echo '<p> GET ' . $s->uri . '</p>';

// Results
if($result === false){
	echo 'Curl error: ' . $s->error;
} else {
	$json_string = json_decode($result);
	echo '<pre>';
	print_r($json_string);
	echo '</pre>';
}
?>