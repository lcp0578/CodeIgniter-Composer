# CodeIgniter-Composer
CodeIgniter Composer

- step 1, require package
	
		composer require aliyuncs/oss-sdk-php
- setp 2, composer library, include vendor/autoload.php

		//application/libraries/MY_Composer.php
		defined('BASEPATH') OR exit('No direct script access allowed');
		class MY_Composer
		{
		    function __construct()
		    {
		        if(file_exists('./vendor/autoload.php')) {
		            include("./vendor/autoload.php");
		        }
		    }
		}
- setp 3, enable library

		// application/config/autoload.php
		$autoload['libraries'] = array('MY_Composer');
- set 4 , test

		// application/controllers/Welcome.php
		public function index()
		{
		    $accessKeyId = '**';
		    $accessKeySecret = '**';
		    $endpoint = 'oss-cn-beijing.aliyuncs.com';
		    $ossClient = new OSS\OssClient($accessKeyId, $accessKeySecret, $endpoint);
		    echo '<pre>';
		    print_r($ossClient);
		    die();
			$this->load->view('welcome_message');
		}
	retsult:
	
		OSS\OssClient Object
		(
		    [useSSL:OSS\OssClient:private] => 
		    [maxRetries:OSS\OssClient:private] => 3
		    [redirects:OSS\OssClient:private] => 0
		    [hostType:OSS\OssClient:private] => normal
		    [requestUrl:OSS\OssClient:private] => 
		    [accessKeyId:OSS\OssClient:private] => *****
		    [accessKeySecret:OSS\OssClient:private] => *****
		    [hostname:OSS\OssClient:private] => oss-cn-beijing.aliyuncs.com
		    [securityToken:OSS\OssClient:private] => 
		    [enableStsInUrl:OSS\OssClient:private] => 
		    [timeout:OSS\OssClient:private] => 0
		    [connectTimeout:OSS\OssClient:private] => 0
		)

		