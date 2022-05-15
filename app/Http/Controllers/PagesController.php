<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function visit()
    {
        return view('pages.visit');
    }

    public function howToGetThere()
    {
        return view('pages.how-to-get-there');
    }

    public function importance()
    {
        return view('pages.importance');
    }

    public function landscape()
    {
        return view('pages.landscape');
    }

    public function geology()
    {
        return view('pages.geology');
    }

    public function ageOfTheSite()
    {
        return view('pages.age-of-the-site');
    }

    public function whoLived()
    {
        return view('pages.who-lived');
    }

    public function archaeologicalExcavations()
    {
        return view('pages.archaeological-excavations');
    }

    public function finds()
    {
        return view('pages.finds');
    }

    public function goals()
    {
        return view('pages.goals');
    }

    public function documentation()
    {
        return view('pages.documentation');
    }

    public function neanderthalFireUse()
    {
        return view('pages.neanderthal-fire-use');
    }

    public function neanderthalLithicTechnology()
    {
        return view('pages.neanderthal-lithic-technology');
    }

    public function huntingAndMeatConsumption()
    {
        return view('pages.hunting-and-meat-consumption');
    }

    public function paleoenvironmentalReconstruction()
    {
        return view('pages.paleoenvironmental-reconstruction');
    }

    public function geoarchaeology()
    {
        return view('pages.geoarchaeology');
    }

    public function books()
    {
        return view('pages.books');
    }

    public function journalArticles()
    {
        return view('pages.journal-articles');
    }

    public function village()
    {
        return view('pages.village');
    }

    public function monastery()
    {
        return view('pages.monastery');
    }

    public function scientificTeam()
    {
        return view('pages.scientific-team');
    }

    public function nationalMuseum()
    {
        return view('pages.national-museum');
    }

    public function fundingSources()
    {
        return view('pages.funding-sources');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
