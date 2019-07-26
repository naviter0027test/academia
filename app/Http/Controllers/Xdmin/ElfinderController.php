<?php
namespace App\Http\Controllers\Xdmin;

use Illuminate\Routing\Controller as BaseController;
use Session;
require dirname(__FILE__).'/../../../elfinder/autoload.php';
use elFinder;
use elFinderConnector;
use Illuminate\Http\Request;

class ElfinderController extends BaseController
{
    protected $opts;
    public function __construct()
    {
    }
    public static function access($attr, $path, $data, $volume) {
        return strpos(basename($path), '.') === 0       // if file/folder begins with '.' (dot)
            ? !($attr == 'read' || $attr == 'write')    // set read+write to false, other (locked+hidden) set to true
            :  null;                                    // else elFinder decide it itself
    }
    public function connector() {
        $basePath = dirname(__FILE__).'/../../../../public/elfinder/files';
        if(!file_exists($basePath)) {
            mkdir($basePath, 0700);
        }
        elFinder::$netDrivers['ftp'] = 'FTP';
        $this->opts = array(
            'debug' => true,
            'roots' => array(
                array(
                    'driver'        => 'LocalFileSystem',           // driver for accessing file system (REQUIRED)
                    'path'          => $basePath,                 // path to files (REQUIRED)
                    'URL'           => '/elfinder/files/', // URL to files (REQUIRED)
//                    'uploadDeny'    => array('all'),                // All Mimetypes not allowed to upload
                    'uploadAllow'   => array('image', 'text/plain'),// Mimetype `image` and `text/plain` allowed to upload
//                    'uploadOrder'   => array('deny', 'allow'),      // allowed Mimetype `image` and `text/plain` only
                    'accessControl' => __NAMESPACE__ .'\ElfinderController::access'                  // disable and hide dot starting files (OPTIONAL)
                )
            )
        );
        $connector = new elFinderConnector(new elFinder($this->opts));
        $connector->run();
    }
    public function getIndex(Request $request) {
        return view('elfinder.index');
    }
    public function getIopen(Request $request,$func) {
        return view('elfinder.iopen',['func'=>$func]);
    }
    public function getTinyMce(Request $request) {
        return view('elfinder.tiny_mce');
    }
}