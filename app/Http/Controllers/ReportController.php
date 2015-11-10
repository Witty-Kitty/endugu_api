<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 30/09/2015
 * Time: 14:52
 */

namespace App\Http\Controllers;


use App\Report;

class ReportController extends Controller{

    public function allReports(){

        return Report::all();

    }

    public function byPhoneNumber($phone_number){

        return Report::where('phone_number', $phone_number)->get();

    }

    public function byCategory($category){

        return Report::where('category', $category)->get();

    }

    public function byMobileNetwork($mobile_network){

        return Report::where('mobile_network', $mobile_network)->get();

    }

    public function createReport(){
        $validator = \Validator::make(\Input::all(),
            array(
                'phone_number' => 'required',
                'message' => 'required',
                'category' => 'required',
                'mobile_network' => 'required',
            ));

        if($validator->fails()){
            return \Response::json([
                'data' => $validator->messages()
            ], 403);
        } else {

            $report = Report::create(\Input::all());
            return Report::find($report->id);
        }

    }
} 