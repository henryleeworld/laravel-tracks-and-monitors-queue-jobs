<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('print:today')->withoutOverlapping();
