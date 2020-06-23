<?php
//can make using artisan in terminal 'php artisan make:controller pagescontroller'
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index()
    {
        //pass var into view 2 ways

        $title='Welcome to Food and Stuff';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $title="About us";
        return view('pages.about')->with('title',$title);
    }
    public function services()
    {
        $title="Services";
        $data=array(
            'title'=>'services',
            'services'=>['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($data);
    }


}
