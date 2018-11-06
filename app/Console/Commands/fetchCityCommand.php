<?php
/**
 *
 * PHP version >= 7.0
 *
 * @category Console_Command
 * @package  App\Console\Commands
 */

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;

use App\Http\Controllers\OngkirController;
use App\Models\City;



/**
 * Class deletePostsCommand
 *
 * @category Console_Command
 * @package  App\Console\Commands
 */
class FetchCityCommand extends Command
{
    protected $signature = "fetch:city";

    protected $description = "Fetch Data from RajaOngkir";

    public function handle() {
        $ongkir = new OngkirController();
        $respProvince = $ongkir->fetchCity();
    }
}