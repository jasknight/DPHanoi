<?php
/**
 * Created by PhpStorm.
 * User: tuando
 * Date: 23/11/2018
 * Time: 10:09
 */

namespace App\Helpers;
use App\Models\UserDisability;
/**
 * Class Data
 * @package App\Helpers
 */
class Data
{
    public static function getUserDisabilityDataByType($id)
    {
        return UserDisability::where('disability_id', $id)->get()->count();
    }
}