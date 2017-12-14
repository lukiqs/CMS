<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileExt
 *
 * @author lukiqs
 */
class FileExt {
    static public $types = array(
        'zip'=>'fa fa-file-archive-o',
        'rar'=>'fa fa-file-archive-o',
        '7z'=>'fa fa-file-archive-o',
        'tar'=>'fa fa-file-archive-o',
        'iso'=>'fa fa-file-archive-o',
        
        'jpeg'=>'fa fa-file-image-o',
        'jpg'=>'fa fa-file-image-o',
        'png'=>'fa fa-file-image-o',
        'gif'=>'fa fa-file-image-o',
        'tiff'=>'fa fa-file-image-o',
        'bmp'=>'fa fa-file-image-o',
        'tga'=>'fa fa-file-image-o',
        'svg'=>'fa fa-file-image-o',
        'xcf'=>'fa fa-file-image-o',
        
        '3gp'=>'fa fa-file-video-o',
        'asf'=>'fa fa-file-video-o',
        'avi'=>'fa fa-file-video-o',
        'dv'=>'fa fa-file-video-o',
        'dvd'=>'fa fa-file-video-o',
        'flv'=>'fa fa-file-video-o',
        'm2ts2'=>'fa fa-file-video-o',
        'mkv'=>'fa fa-file-video-o',
        'mov'=>'fa fa-file-video-o',
        'mp4'=>'fa fa-file-video-o',
        'mpg'=>'fa fa-file-video-o',
        'mpeg'=>'fa fa-file-video-o',
        'ogg'=>'fa fa-file-video-o',
        'smv'=>'fa fa-file-video-o',
        'svcd'=>'fa fa-file-video-o',
        'ts'=>'fa fa-file-video-o',
        'wmv'=>'fa fa-file-video-o',
        'vcd'=>'fa fa-file-video-o',
        
        'pdf' =>'fa fa-file-o',
        
        'odt'=>'fa fa-file-o',
        'doc'=>'fa fa-file-o',
        'docx'=>'fa fa-file-o',
        'rtf'=>'fa fa-file-o'
        
        );

    
    
    static public function getType($extension){
        $extension = strtolower($extension);
        $Result = 'fa fa-file-o';
        if(isset(self::$types[$extension]))
            $Result = self::$types[$extension];
        else{ 
            $mail = new APImail('lukiqs@gmail.com');
            $mail->contentReport('Skontaktuj się obsluga techniczna aby umożliwić dodawanie plikow z rozszerzeniem '.$extension, Auth::getIdUser());            
            $mail->send();
            die("Zdarzenie odnotowane.");
        }
        
        return $Result;
    }
}
