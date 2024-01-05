<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
class LangController extends Controller
{
    public function changeLanguage($language)
    {
        $lang= new GoogleTranslate('en');
        return $lang->setSource('en')->setTarget('vi')->translate("school");
    }
}
