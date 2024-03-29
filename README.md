<h1 style="text-align:center;">HTMLSourceProtector V1.4.1</h1>
<p align="center">
  <img src="assets/logo.png?raw=true" width="350" title="HTMLSourceProtector">
</p>

## What is it?
HTML encrypter protect web pages source code, its hard for people to decrypt the source code but it displays perfectly in a browser. No AdBlocker can read it. It encrypt on the fly and only the web browser can read it. 
The size of the first block of code depends on the size of web page, it contains original HTML. The second block of code always stays the same length, it contains the decode function. When opened in a web browser, the original page appears to be unchanged, but the code underneath has been transformed.

## Features
 - Protect HTML code against fast cribbing copying
 - Encode local HTML to prevent in-file searching
 - Protect unfinished websites from Google
 - Confuse user who click the “View Source” button :D
 - Become part of the invisible web, hide from search engines and data miners ;)
 - Very lightweight and working on-the-fly
 
## How to install
 - composer require omegalolbro/htmlsourceprotector
## Usage
 - To encrypt the whole page
 ```php
<?php

if(file_exists('vendor/autoload.php')){
  require_once 'vendor/autoload.php';
}

if(file_exists('src/protector.php')){
  require_once 'src/protector.php';
}

if(file_exists('protector.php')){
  require_once 'protector.php';
}

$crypt = new ArnchON\HTMLSourceProtector\Crypt;
$crypt->Start();

?>
```
- To encrypt a part in a page
```php
<-- Code written above the [$html = new ArnchON\HTMLSourceProtector\Crypt;] line of code will not be encrypted-->
<-- You can put code like AdSense verification code here so the crawlers can read it -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-0000000000000000" crossorigin="anonymous"></script>

<-- Code written under here cannot be read by crawlers -->
<?php

if(file_exists('vendor/autoload.php')){
  require_once 'vendor/autoload.php';
}

if(file_exists('src/protector.php')){
  require_once 'src/protector.php';
}

if(file_exists('protector.php')){
  require_once 'protector.php';
}

$crypt = new ArnchON\HTMLSourceProtector\Crypt;

?>

<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>
<h2>Table Caption</h2>
<p>To add a caption to a table, use the caption tag.</p>

<?php $crypt->Start(); ?>

<table style="width:100%">
  <caption>Monthly savings</caption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
  </tr>
</table>
<?php $crypt->End(); ?>
</body>
</html>
```

## Known Issues:
* May throw issues when using ```include()``` or ```require()``` please use ```echo(file_get_contents('filename.php'));``` when using templates.

If you come across any issues please report them [here](https://github.com/Arnch7/HTMLSourceProtector/issues)

## License
```
MIT License

Copyright (c) 2023 ArnchON, AI32767, HTMLSourceProtector

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```
