<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function uploadFile(UploadedFile $file, $path) {
        // dd(public_path("uploads/$path/"));
        if(!file_exists($p = public_path("uploads/$path/"))) {
            mkdir($p, 0777, true);
        }

        $file->move($p, $n = $this->getFileName($file));

        return "uploads/$path/$n";
    }

    private function getFileName(UploadedFile $file) {
        return md5($file->getFilename()).".".$file->getClientOriginalExtension();
    }
}
