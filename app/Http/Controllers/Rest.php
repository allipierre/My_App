<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RestFilable;

class Rest extends Controller {





    protected function insert(Request $request)
    {
      //extract data from the post
//set POST variables
$url = 'https://apex.oracle.com/pls/apex/pierrealli/hr/employees/';
$fields = array(
	'ename' => urlencode($_POST['ename']),
	'mgr' => urlencode($_POST['mgr']),
	'sal' => urlencode($_POST['sal']),
	'deptno' => urlencode($_POST['deptno'])
);

//url-ify the data for the POST
$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }



//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
    }
}
