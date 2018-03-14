<?php
namespace App\Admin;

use Framework\Upload;

class ImageUserUpload extends Upload
{
    protected $path = 'public/uploads/user';

    protected $formats = [
    'thumb' =>[320,180]
    ];
}
