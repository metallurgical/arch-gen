<?php

namespace Fathur\Laragendb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LaragenDBController extends Controller
{
    //get list of DB with column name

    public function index()
    {
        $db_name = Config::get('database.connections.' . Config::get('database.default') . '.database');
        $db_table_name = 'Tables_in_' . $db_name;

        $db_structure = [];
        $tables = DB::select('SHOW TABLES');

        foreach ($tables as $table) {
            $table_name = $table->$db_table_name;

            //get all table column

            $table_info_columns = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table_name));

            foreach ($table_info_columns as $column) {
                $db_structure[$table_name][] = $column;
            }
        }

        return response()->json($db_structure);
    }
}
