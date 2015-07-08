<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08.07.2015
 * Time: 09:48
 */

namespace App\Http\Controllers;


class ATestController extends Controller {

  public function getIndex()
  {
    return view('a_test.index');
  }

  public function getTwoColumns()
  {
    return view('a_test.twocolumns');
  }

} 