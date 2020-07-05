<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuzDataExportItem;
use Carbon\Carbon;
use DB;

class BuzDataExportItemController extends Controller
{
    /**
     * Retrieve Buz items
     *
     */
    public function retrieveBuzItems(Request $request)
    {
        $orderno = $request->input('orderno');
        $orderlines = DB::table('buz_data_export_items')->select(
            'orderno',
            'datedoc',
            'date_order_accepted',
            'workflow_job_tracking_status',
            'inventory_item',
            'order_history_lastactiondate',
            'customer',
            'contact_emailaddress',
            'contact_mobile',
            'contact_phone',
            'created_at')->where('orderno','=',$orderno)->get();

        if ($orderlines->isEmpty()) {
            return redirect('/')->with('error', 'Order number not found')->withInput();
        }
        else {
            $email = strtolower(str_replace(' ', '', $orderlines[0]->contact_emailaddress));
            $mobile = strtolower(str_replace(' ', '', $orderlines[0]->contact_mobile));
            $phone = strtolower(str_replace(' ', '', $orderlines[0]->contact_phone));
            $contactinfo = strtolower($request->input('contactinfo'));
            if ($contactinfo == '' || ($contactinfo != $email && $contactinfo != $mobile && $contactinfo != $phone)) {
                return redirect('/')->with('error', 'Order and contact info mismatch')->withInput();
            }
            else {
                return view('showstatus')->with('orderlines', $orderlines);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }

    /**

    taken from https://stackoverflow.com/questions/52948387/php-laravel-read-csv

     */
    public function fileUploadPost(Request $request)
    {
        $tz = 'UTC';
        //$tz = 'Australia/Sydney';
        $dateFormat = 'Y-m-d G:i:s';
        $rowNum = 0;
        $file_handle = fopen($request->file('file')->getRealPath(), 'r');
        while (!feof($file_handle)) {
            $row = fgetcsv($file_handle);
            if ($rowNum > 0 && $row != FALSE) {
                $buz_data_export_item = new BuzDataExportItem;

                $colNum = 0;
                $buz_data_export_item->orderno = $row[$colNum++];
                $buz_data_export_item->datedoc = Carbon::createFromFormat($dateFormat,$row[$colNum++], $tz);
                $buz_data_export_item->date_order_accepted = Carbon::createFromFormat($dateFormat,$row[$colNum++], $tz);
                $buz_data_export_item->workflow_job_tracking_status = $row[$colNum++];
                $buz_data_export_item->inventory_item = $row[$colNum++];
                $buz_data_export_item->order_history_lastactiondate = Carbon::createFromFormat($dateFormat,$row[$colNum++],$tz);
                $buz_data_export_item->customer = $row[$colNum++];
                $buz_data_export_item->contact_emailaddress = $row[$colNum++];
                $buz_data_export_item->contact_mobile = $row[$colNum++];
                $buz_data_export_item->contact_phone = $row[$colNum++];

                $buz_data_export_item->save();
                
            }
            $rowNum++;
        }
        fclose($file_handle);

    }

}
