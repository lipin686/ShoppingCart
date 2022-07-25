<?php

namespace App\Services;

/**
 * Class InspiringService
 */
class ShowProfileService
{
    /**
     * @return string
     */
    public function showProfile()
    {
        return view('index');
    }
}