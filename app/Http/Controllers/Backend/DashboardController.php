<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $config = $this->config();
        $template = "backend.dashboard.home.index";
        return view('backend.dashboard.layout',compact('template','config'));
    }
    public function employer()
    {
        $config = $this->config();
        $sidebar = "frontend.dashboard.layouts.sidebaremp";
        $template = "frontend.dashboard.home.index";
        return view('frontend.dashboard.index',compact('template','config','sidebar'));
    }
    private function config(){
        return [
            'js' => [
                'js/option_two/plugins/flot/jquery.flot.js',
                'js/option_two/plugins/flot/jquery.flot.tooltip.min.js',
                'js/option_two/plugins/flot/jquery.flot.spline.js',
                'js/option_two/plugins/flot/jquery.flot.resize.js',
                'js/option_two/plugins/flot/jquery.flot.pie.js',
                'js/option_two/plugins/flot/jquery.flot.symbol.js',
                'js/option_two/plugins/flot/jquery.flot.time.js',
                'js/option_two/plugins/peity/jquery.peity.min.js',
                'js/option_two/demo/peity-demo.js',
                'js/option_two/inspinia.js',
                'js/option_two/plugins/pace/pace.min.js',
                'js/option_two/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'js/option_two/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                'js/option_two/plugins/easypiechart/jquery.easypiechart.js',
                'js/option_two/plugins/sparkline/jquery.sparkline.min.js',
                'js/option_two/demo/sparkline-demo.js'

            ]
        ];
    }
  
}
