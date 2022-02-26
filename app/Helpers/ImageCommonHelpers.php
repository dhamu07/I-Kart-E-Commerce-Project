<?php

namespace App\Helpers;

class ImageCommonHelpers
{
    protected $_defaultConfig = [
        'jpgQuality' => 100,
        'folderDepth' => 2,
    ];

//    public function initialize(array $config)
//    {
//        parent::initialize($config);
//    }

    public static function imagePath($imageName)
    {
        $directory = substr($imageName, '0', '2');
        $newDirectory = 'uploads/' . $directory;
        return $newDirectory;
    }

    public static function save($file, $path = null, $filename = null)
    {
        if (empty($file['name']) || empty($file['tmp_name'])) {
            return redirect()->back()->with('error','No Source file found');
        }

        //getting upload image name
        $old_image_name = $file['name'];

        //getting upload image extn
        $old_image_extn = pathinfo($file['name'], PATHINFO_EXTENSION);

        //checking whether it a valid image file
        if (!self::_verifyMime($old_image_extn)) {
            return redirect()->back()->with('error','The file must be an jpg, gif or png image');
        }

        //creating new image name and extn
        if (empty($filename)) {
            $filename = $old_image_name;
        }

        $new_image_extn = pathinfo($filename, PATHINFO_EXTENSION);
        if (empty($new_image_extn)) {
            $new_image_extn = $old_image_extn;
            $filename = $filename . "." . $new_image_extn;
        }

        $new_image_name = self::_hyphenize(substr($filename, 0, strrpos($filename, '.'))) . "-" . date('Ymd', time()) . "-" . base_convert(time(), 10, 36);
        //create new image path
        $path_from_file = '';
        $alpha_filename = preg_replace('/[^A-Za-z0-9]/', '', substr($filename, 0, strrpos($filename, '.')));
        $path_from_file = implode('/', str_split(strtolower(substr($alpha_filename, 0, 1)))) . '/';
        $new_image_path = (!empty($path) ? trim($path, '/') . '/' : '') . $path_from_file;

        //new file name to be save with path
        $new_image_file = $new_image_path . $new_image_name . "." . $new_image_extn;
        //create image full path
        if (!self::_createPath(self::assetsRootPath() . $new_image_file)) {
            return redirect()->back()->with('error','Path is not writable');
        }

        //uploaded the file
        if (!move_uploaded_file($file['tmp_name'], self::assetsRootPath() . $new_image_file)) {
            return redirect()->back()->with('error','Image can not be uploaded');
        }

        return $new_image_file;
    }

    public static function _verifyMime($extn)
    {
        $extn = strtolower($extn);
        $mimes = array('jpeg', 'jpg', 'png');
        if (in_array($extn, $mimes)) {
            return true;
        } else {
            return false;
        }
    }

    public static function _hyphenize($string)
    {
        return strtolower(preg_replace(
            ['#[\\s-]+#', '#[^A-Za-z0-9\. -]+#'], ['-', ''], urldecode(trim($string))
        ));
    }

    public static function _createPath($image_file, $chmod = 0777)
    {
        $arr_output_path = explode('/', $image_file);
        unset($arr_output_path[count($arr_output_path) - 1]);
        $dir_path = implode('/', $arr_output_path) . '/';
        if (!file_exists($dir_path)) {
            if (!mkdir($dir_path, $chmod, true)) {
                return false;
            }
        }
        return true;
    }

    public static function assetsRootPath()
    {
        return public_path('uploads/');
    }
}
