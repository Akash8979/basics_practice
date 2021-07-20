<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        echo "carbon methods and helpers";
        echo "<hr>";
        echo Carbon::now() . ' (now)';
        echo "<br>";
        echo Carbon::today() . ' (today)';
        echo "<br>";
        echo Carbon::tomorrow() . ' (tomorrow)';
        echo "<br>";
        echo Carbon::yesterday() . ' (yesterday)';
        echo "<hr>";
        //------------------------------------------------

        echo "Laravel methods and helpers";
        echo "<hr>";
        echo now() . ' (now)';
        echo '<br>';
        echo today() . ' (today)';
        echo "<hr>";
        //----------------------------------------------------

        echo "Create With Time zones";
        echo "<hr>";
        echo now() . ' (now)';
        echo '<br>';
        echo now(tz: 'Europe/London');
        echo '<br>';
        echo now(tz: 'GMT+5:30');
        echo '<br>';
        echo now(tz: '+5:30');
        //--------------------------------------------------------

        echo carbon::createFromFormat(
            'Y-m-d  H:i:s',
            '2021-07-20 12:23:12',
            'Europe/London',
        );
        echo "<br>";
    }
}
