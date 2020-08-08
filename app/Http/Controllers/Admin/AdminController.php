<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Analytics\AnalyticsFacade;
use Spatie\Analytics\Period;


class AdminController extends Controller
{
    public function index(){
        $topBrowsers = AnalyticsFacade::fetchTopBrowsers(Period:: days(7),$maxResults = 10);
        $userTypes = AnalyticsFacade::fetchUserTypes(Period:: days(7));
        $referres = AnalyticsFacade::fetchTopReferrers(Period:: days(7),$maxResults = 10);
        $topVisitedPages = AnalyticsFacade::fetchMostVisitedPages(Period:: days(7),$maxResults = 10);
        $pageViews = AnalyticsFacade::fetchVisitorsAndPageViews(Period:: days(7));

        return view('admin.index',compact('topBrowsers','userTypes','referres','topVisitedPages','pageViews','referres'));
    }
}
