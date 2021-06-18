<?php

namespace Modules\Website\Repositories;

use Illuminate\Support\Facades\DB;

class WebsiteRepository
{
    public function show($short_data = true)
    {
        $query = DB::table('website_infos');

        if ($short_data) {
            $query->select('name', 'logo', 'favicon');
        } else {
            $query->select('*');
        }

        return $query->first();
    }
}
