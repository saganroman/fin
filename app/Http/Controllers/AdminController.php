<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Storage;
use App\UsdEur;

class AdminController extends Controller
{
    public function showFileUploadForm()
    {
        return view('layouts.fileLoad');
    }
    /*//CSV to file
        public function fileHandler(Request $request)
        {
            $hourArr = [];
            $dayArr = [];
            if ($request->file('fileCSV')->isValid()) {

                $path = $request->file('fileCSV')->path();
                //check kind of CSV file
                $handle = fopen($path, "r");
                $data1 = fgetcsv($handle);
                $time1 = Carbon::parse($data1[0]);
                $data2 = fgetcsv($handle);
                $time2 = Carbon::parse($data2[0]);
                $diff = $time2->diffInHours($time1);
                fclose($handle);

                if ($diff == 1) {
                    $handle = fopen($path, "r");
                    while (($data = fgetcsv($handle)) !== FALSE) {
                        $date = Carbon::parse($data[0])->format('Y-m-d');
                        $time = Carbon::parse($data[0])->format('G');
                        $hourArr[$date][$time]['Open'] = $data[1];
                        $hourArr[$date][$time]['High'] = $data[2];
                        $hourArr[$date][$time]['Low'] = $data[3];
                        $hourArr[$date][$time]['Close'] = $data[4];
                        $hourArr[$date][$time]['Volume'] = $data[5];

                    }
                    fclose($handle);
                    File::delete($request->file('fileCSV')->path());
                    $contents = json_encode($hourArr);
                    File::put('storage/hourly.txt', $contents);
                    // Storage::put('hourly.txt', $contents);
                    return redirect('/getData');

                } elseif ($diff == 24) {
                    $handle = fopen($path, "r");
                    while (($data = fgetcsv($handle)) !== FALSE) {
                        $date = Carbon::parse($data[0])->format('Y-m-d');
                        //   $time = Carbon::parse($data[0])->format('G');
                        $dayArr[$date]['Open'] = $data[1];
                        $dayArr[$date]['High'] = $data[2];
                        $dayArr[$date]['Low'] = $data[3];
                        $dayArr[$date]['Close'] = $data[4];
                        $dayArr[$date]['Volume'] = $data[5];
                        // $date = Carbon::createFromFormat('d.m.Y-', $data[0])->toDateString();
                    }
                    fclose($handle);
                    File::delete($request->file('fileCSV')->path());
                    // $lastDate = end(array_keys($arrayV));
                    $contents = json_encode($dayArr);
                    File::put('storage/daily.txt', $contents);
                    return redirect('/getData');
                } else {
                    $request->session()->flash('wrongFormat', 'File has wrong format!!!  Supported only hoyrly and daily data');
                    return back();
                }
            }

        } */

//CSV to DB
    public function fileHandler(Request $request)
    {
        $hourArr = [];
        $dayArr = [];
        if ($request->file('fileCSV')->isValid()) {

            $path = $request->file('fileCSV')->path();
            //check kind of CSV file
            $handle = fopen($path, "r");
            $data1 = fgetcsv($handle);
            $time1 = Carbon::parse($data1[0]);
            $data2 = fgetcsv($handle);
            $time2 = Carbon::parse($data2[0]);
            $diff = $time2->diffInHours($time1);
            fclose($handle);

            if ($diff == 1) {
                $handle = fopen($path, "r");
                while (($data = fgetcsv($handle)) !== FALSE) {
                    $pair = new UsdEur();
                    $pair->date = Carbon::parse($data[0])->format('Y-m-d');
                    // $time = Carbon::parse($data[0])->format('G');
                    $pair->Open = $data[1];
                    $pair->High = $data[2];
                    $pair->Low = $data[3];
                    $pair->Close = $data[4];
                    $pair->Volume = $data[5];
                    $pair->save();
                }
                fclose($handle);
                File::delete($request->file('fileCSV')->path());
                $contents = json_encode($hourArr);
              //  File::put('storage/hourly.txt', $contents);
                // Storage::put('hourly.txt', $contents);
                return redirect('/getData');

            } elseif ($diff == 24) {
                $handle = fopen($path, "r");
                while (($data = fgetcsv($handle)) !== FALSE) {
                    $pair = new UsdEur();
                    $pair->date = Carbon::parse($data[0])->format('Y-m-d');
                    //   $time = Carbon::parse($data[0])->format('G');
                    $pair->Open = $data[1];
                    $pair->High  = $data[2];
                    $pair->Low = $data[3];
                    $pair->Close = $data[4];
                    $pair->Volume = $data[5];
                    // $date = Carbon::createFromFormat('d.m.Y-', $data[0])->toDateString();
                    $pair->save();
                }
                fclose($handle);
                File::delete($request->file('fileCSV')->path());
                // $lastDate = end(array_keys($arrayV));
                $contents = json_encode($dayArr);
              //  File::put('storage/daily.txt', $contents);
                return redirect('/getData');
            } else {
                $request->session()->flash('wrongFormat', 'File has wrong format!!!  Supported only hoyrly and daily data');
                return back();
            }
        }

    }

/*//file handler
    public function getData(Request $request)
    {
        $startData = $request['startData'];
        $endData = $request['endData'];
        if ($startData and $endData) {
            $filteredArray = [];
            $file = File::get('storage/daily.txt');
            $arrayDaily = json_decode($file);

            foreach ($arrayDaily as $key => $value) {

                if ((Carbon::createFromFormat('Y-m-d', $startData) <= Carbon::createFromFormat('Y-m-d', $key)) and (Carbon::createFromFormat('Y-m-d', $key) <= Carbon::createFromFormat('Y-m-d', $endData))) {

                    $filteredArray[$key] = $value;
                    //dd($key,$value,$filteredArray);
                }
            }
            //dd($filteredArray);

            return view('layouts.getData')->withList($filteredArray);
        } else {
            return view('layouts.getData');
        }
    } */

//DB handler
    public function getData(Request $request)
    {
        $startData = $request['startData'];
        $endData = $request['endData'];
        if ($startData and $endData) {
            $filteredArray = [];
          /*  $file = File::get('storage/daily.txt');
            $arrayDaily = json_decode($file);*/

            $filteredArray= UsdEur::where('Date','>=', $startData)->where('Date','<=', $endData)->get();


            return view('layouts.getData')->withList($filteredArray)->withStart($startData)->withEnd($endData);
        } else {$r = file_get_contents('https://www.ukr.net/');
            return view('layouts.getData')->withR($r);
        }
    }
}
