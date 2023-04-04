function cl_upload2s3($filename = null, $del_localfile = "N")
{
global $cl;

if ($cl['config']['as3_storage'] == 'off') {
return false;
} else {
if (empty($cl['config']['as3_api_key'])) {
return false;
} else if (empty($cl['config']['as3_api_secret_key'])) {
return false;
} else if (empty($cl['config']['as3_bucket_region'])) {
return false;
} else if (empty($cl['config']['as3_bucket_name'])) {
return false;
} else {
try {

include_once(cl_full_path("core/libs/s3/vendor/autoload.php"));

$amazon_s3 = new \Aws\S3\S3Client([
'version' => 'latest',
'region' => 'us-east-1',
'endpoint' => 'https://' . $cl['config']['as3_bucket_region'] . '.digitaloceanspaces.com',
'credentials' => [
'key' => $cl['config']['as3_api_key'],
'secret' => $cl['config']['as3_api_secret_key']
]
]);

$up_aws_object = $amazon_s3->putObject([
'Bucket' => $cl['config']['as3_bucket_name'],
'Key' => $filename,
'Body' => fopen($filename, 'r+'),
'ACL' => 'public-read',
]);

if ($del_localfile == "Y") {
if ($amazon_s3->doesObjectExist($cl['config']['as3_bucket_name'], $filename)) {
cl_delete_loc_media($filename);
}
}

return true;
} catch (Exception $e) {
return false;
}
}
}
}