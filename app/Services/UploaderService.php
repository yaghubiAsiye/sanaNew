<?php


namespace App\Services;

use Carbon\Carbon;

class UploaderService
{
    /**
     * ImageUploader
     *
     * @param  mixed $file
     * @param  mixed $path
     * @return string
     */
    public static function fileUploader($file, $path): string
    {
        $mime = $file->getClientOriginalExtension();
        $filename = 'file_'. Carbon::now()->format('d_M_Y').'.'.$mime;
        $databasename = 'uploads/'.$path;
        $mainpath = public_path($databasename);
        $file->move($mainpath, $filename);
        return $databasename.$filename;
    }
}
