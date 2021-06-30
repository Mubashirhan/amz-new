<?php

namespace App\Http\Controllers\Amzapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ServiceController extends Controller
{   
    public $dir;
    public $module;


    // constructor function
    public function __construct(){

        $this->dir = Config::get('constants.dir');
        $this->module = 'services';

    }

    // photography function
    public function photography(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);
    }

    // optimization function
    public function optimization(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // ppc function
    public function ppc(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // ebc function
    public function ebc(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // videography function
    public function videography(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }
   
    // account management function
    public function account_management(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // package_design function
    public function package_design(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // rendering function
    public function rendering(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

    // ranking function
    public function ranking(){
        return view($this->dir.'.'.$this->module.'.'.__FUNCTION__);

    }

}
