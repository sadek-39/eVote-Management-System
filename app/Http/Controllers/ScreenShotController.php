<?php

namespace App\Http\Controllers ;

use Laravel\Dusk\Browser; 
use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;
use Screen\Capture;
use Spatie\Browsershot\Browsershot;

class ScreenShotController extends Controller
{
    public function Capture()
    {
        // $url='www.google.com';
        // $screenCapture=new Capture($url);
        // //$screenCapture->setImageType('png');
        // $fileLocation = '/public/images/ballot/ss';
        // $screenCapture->save($fileLocation);
        // echo $screenCapture->getImageLocation();
    }
}
