<?php

namespace App\Http\Controllers;

use Integracion\Foundation\Bus\DispatchesJobs;
use Integracion\Routing\Controller as BaseController;
use Integracion\Foundation\Validation\ValidatesRequests;
use Integracion\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
