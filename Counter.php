<?php
$Result['loc'] = 0;
$Result['size_byte'] = 0;
$Result['count_files'] = 0;
    if ($dir = @opendir("application/views")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' && $file != 'default' && $file != 'errors') {
                $Result['loc']+= count(file('application/views/'.$file));
                $Result['size_byte'] += filesize('application/views/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/styles")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' && $file != 'cms_menu.css' && $file != 'menu.css') {
                $Result['loc']+= count(file('application/styles/'.$file));
                $Result['size_byte'] += filesize('application/styles/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/scripts")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' && $file != 'cms_menu.js' && $file != 'menu.js') {
                $Result['loc']+= count(file('application/scripts/'.$file));
                $Result['size_byte'] += filesize('application/scripts/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/models")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' ) {
                $Result['loc']+= count(file('application/models/'.$file));
                $Result['size_byte'] += filesize('application/models/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/controllers")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..'  && $file != '.htaccess') {
                $Result['loc']+= count(file('application/controllers/'.$file));
                $Result['size_byte'] += filesize('application/controllers/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/libraries")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..'  && $file != '.htaccess') {
                $Result['loc']+= count(file('application/libraries/'.$file));
                $Result['size_byte'] += filesize('application/libraries/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }

$Result['size_KB'] = round($Result['size_byte']/1024,2);
$Result['size_MB'] = round($Result['size_byte']/1024/1024,2);
$Result['procent'] = round(($Result['size_byte']*100)/4341226,2);
var_dump($Result);
//echo "<pre>";
//   print_r($Result);
//echo "</pre>";

$Result['loc'] = 0;
$Result['size_byte'] = 0;
$Result['count_files'] = 0;
    if ($dir = @opendir("application/views")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' && $file != 'errors') {
                $Result['loc']+= count(file('application/views/'.$file));
                $Result['size_byte'] += filesize('application/views/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/styles")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' ) {
                $Result['loc']+= count(file('application/styles/'.$file));
                $Result['size_byte'] += filesize('application/styles/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/scripts")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' ) {
                $Result['loc']+= count(file('application/scripts/'.$file));
                $Result['size_byte'] += filesize('application/scripts/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/models")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' ) {
                $Result['loc']+= count(file('application/models/'.$file));
                $Result['size_byte'] += filesize('application/models/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }
        
    if ($dir = @opendir("application/controllers")) {
        while($file = readdir($dir)) {
            if($file != '.' && $file != '..'  && $file != '.htaccess') {
                $Result['loc']+= count(file('application/controllers/'.$file));
                $Result['size_byte'] += filesize('application/controllers/'.$file);
                $Result['count_files'] +=1;
                }
            }  
        closedir($dir);
        }

$Result['size_KB'] = round($Result['size_byte']/1024,2);
$Result['size_MB'] = round($Result['size_byte']/1024/1024,2);
$Result['procent'] = round(($Result['size_byte']*100)/4341226,2);
//var_dump($Result);
