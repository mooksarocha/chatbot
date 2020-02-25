<?php 
  $access_token = 'H0uJwBHbgextqxMkLtjaxbYjo+OQ1HcHuri028I8uBqMNCrLEN3rEvaN82fX3+o2s2YUVwE1cdejwIHpzzoS11kZB076V35X89TTaYsFjmJ6EZebRKObFA7nhsvZ9tGlyKYW0AJG7fb37N+S7ARplAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
  
