//This is used to authenticate and make a single API call for Jira onDemand
//Note that $url.jurl is the actual call which can be inserted from the html
// for example  $jurl = '/rest/api/latest/issue/BUG-333.json'

<?php
//this is a test
$username = 'username';
$password = 'password';

$url = 'https://example.atlassian.net';

$curl = curl_init();
curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
curl_setopt($curl, CURLOPT_URL, $url.$jurl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$issue_list = (curl_exec($curl));

curl_close($curl);
$decoded = json_decode($issue_list);

?>




