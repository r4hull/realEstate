<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class C extends Controller
{
    
    public function pages($type){
    	 if($type=="homesetting"){
    		$data=DB::table('general')
    	         ->where('id',1)
    	         ->get();
    	return view('generalSetting.hompageSetting',['data'=>$data]);
       }
       
    }


    public function addprpt(){ 
       	$amenities=DB::table('amenities')->get();
       	$addfr=DB::table('addfor')->get();
        $addinterr=DB::table('cityname')
                   ->where('type','interior')
                   ->get();
        $city=DB::table('cityname')
                   ->where('type','city')
                   ->get();

       	return view('property.addproperty',['amenities'=>$amenities,'addfr'=>$addfr,'addinterr'=>$addinterr,'city'=>$city]);
       
    }

    public function postform(Request $req){
       if($req->input('type')=="webdetail"){

       	$file = $req->file('c');
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

         $value=array(
         	'websiteLogo'=>url('/employeeUploads')."/".$file->getClientOriginalName(),
         	'websiteContact'=> $req->input('a'),
         	'websiteEmail'=> $req->input('b'),
         	'websiteDetail'=> $req->input('d')
         );

            $destinationPath = base_path().'/public/employeeUploads';
            $file->move($destinationPath,$file->getClientOriginalName());
 
          	DB::table('general')
          	    ->where('id','=',1)
          	    ->update(
                   [
                   	'websiteLogo'=>url('/employeeUploads')."/".$file->getClientOriginalName(),
                    'websiteContact'=> $req->input('a'),
                    'websiteEmail'=> $req->input('b'),
                    'websiteDetail'=> $req->input('d')
                   ] 
          	    );
                Session::flash('message', 'Success'); 
                //Session::flash('alert-class', 'alert-success'); 
          	return redirect::back();    
                     

       }
    }

    public function addAmenities(Request $req){
         $value=array(
         'amenitiesName' => $req->input('amenitiesName'),
         'amenitiesIcon' => $req->input('amenitiesIcon')
     );
         DB::table('amenities')->insert($value);
         return redirect::back();
    }


    public function addProperty(Request $req){

        $chars = 'bcdfghjklmnprstvwxzaeiou0123456789';
            $result = ''; 
            for ($p = 0; $p <6; $p++)
            {
              $result .= ($p%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
            }
        
        $value=$req->input('addAmenities');
        foreach($value as $vlu){
            $value=$vlu;
              DB::insert('insert into propertyamenities (amenitiesValue,qq) values (?,?)', [$value,$result]); 
           }

        $interiorValue=$req->input('addInterior');
        foreach($interiorValue as $introrVlu){
            $valueIntror=$introrVlu;
              DB::insert('insert into prptinterior (addInterior,qq) values (?,?)', [$valueIntror,$result]); 
           }
          
    	 
    	$file = $req->file('propertyImage');
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

        $value=array(
    		'type' => $req->input('type'),
            'title' => $req->input('title'),
            'postBy' => $req->input('postBy'),
            'possessionStartDate' => $req->input('possessionStartDate'),
            'status' => $req->input('status'),
            'totalArea' => $req->input('totalArea'),
            'totalLaunchApartment' => $req->input('totalLaunchApartment'),
            'launchDate' => $req->input('launchDate'),
            'availbility' => $req->input('availbility'),
            'firstBhkFile' => $req->input('firstBhkFile'),
            'firstBhkCarpetArea' => $req->input('firstBhkCarpetArea'),
            'firstBhkAgreementPrice' => $req->input('firstBhkAgreementPrice'),
            'secondBhkFile' => $req->input('secondBhkFile'),
            'secondBhkCarpetArea' => $req->input('secondBhkCarpetArea'),
            'secondBhkAgreementPrice' => $req->input('secondBhkAgreementPrice'),
            'category' => $req->input('category'),
            'propertyImage' => url('/employeeUploads')."/".$file->getClientOriginalName(),
            'propertyDetail' => $req->input('propertyDetail'),
            'postStatus' => $req->input('postStatus'), 
            'latitude' => $req->input('latitude'),
            'longitude' => $req->input('longitude'),
            'bedrooms' => $req->input('bedrooms'),
            'parking' => $req->input('parking'),
            'fullbathrooms' => $req->input('fullbathrooms'),
            'halfbathrooms' => $req->input('halfbathrooms'),
            'othersrooms' => $req->input('othersrooms'),
            'basement' => $req->input('basement'),
            'prptFor' => $req->input('prptFor'),
            'price' => $req->input('price'),
            'qq' => $result,
            'construction' => $req->input('construction'),
            'constructionType' => $req->input('constructionType'),
            'floor' => $req->input('floor'),
            'foundation' => $req->input('foundation'),
            'roof' => $req->input('roof'),
            'houseStyle' => $req->input('houseStyle'),
            'lavelOrStories' => $req->input('lavelOrStories'),
            'exteriorFeature' => $req->input('exteriorFeature'),
            'yard' => $req->input('yard'),
            'state' => $req->input('state'),
            'city' => $req->input('city'),
            'region' => $req->input('region'),
            'area' => $req->input('area'),
            'zoning' => $req->input('zoning'),
            'families' => $req->input('families'),
            'propertySubtype' => $req->input('propertySubtype'),
            'amenitiesDetails' => $req->input('amenitiesDetails')
    	);
    	    $destinationPath = base_path().'/public/employeeUploads';
            $file->move($destinationPath,$file->getClientOriginalName());

            DB::table('property')->insert($value);

            Session::flash('message', 'Success');  
            return redirect::back(); 
        }


        public function addCity(){
        	$city=DB::table('cityname')
        	          ->where('type',"city")
        	          ->get();
        	return view('property.addcity',['cityname'=>$city]);
        }
        public function addGarage(){
        	$city=DB::table('cityname')
        	          ->where('type',"garage")
        	          ->get();
        	return view('property.addGarage',['cityname'=>$city]);
        }


        public function addNewCity(Request $req){
        	$value=array(
        		'type'=>$req->input('type'),
        		'cityName'=>$req->input('cityName')
        	);
        	DB::table('cityname')->insert($value);
        	return redirect::back();
        }

        
        

        public function wlcm(){
        	$data=DB::table('property')->get();
            $general=DB::table('general')->get();
        	return view('welcome',['data'=>$data,'general'=>$general]);
        }

        public function addInterior(){
         
            $Interior=DB::table('cityname')
                      ->where('type',"interior")
                      ->get();
            return view('property.addInterior',['Interior'=>$Interior]);
        }

         

        public function addBuildingConstructor(){
        	return view('property.addBuildingConstructor');
        }

        public function prptDetail($title,$prptFor,$qq){
            $data=DB::table('property') 
                      ->join('propertyamenities', 'property.qq', '=', 'propertyamenities.qq')
                      ->where(['property.qq'=>$qq,'propertyamenities.qq'=>$qq])
                      ->get();
            $addintrriorr=DB::table('prptinterior')
                               ->where('qq',$qq)
                               ->get();
                       
            return view('propertyDetail',['data'=>$data,'addintrriorr'=>$addintrriorr]);
        }

        public function contactAgent(Request $req){

           $value=array(
           'fullName' => $req->input('fullName'),
           'phoneNumber' => $req->input('phoneNumber'),
           'email' => $req->input('email'),
           'msg' => $req->input('message'),
           'type' => "new",
           );

           DB::table('agentcontact')->insert($value);
           Session::flash('message', 'Success');  
            return redirect::back(); 

        }

        public function search(){
            return view('searchdetail');
        }

        public function query(Request $req){
            $searchBox=$req->input('searchBox');
            $cityBox=$req->input('cityBox');
            $searchData=DB::table('property')
                   ->where('title', 'LIKE', "%{$searchBox}%") 
                   ->orWhere('city', 'LIKE', "%{$cityBox}%") 
                   ->get();
            return view('searchdetail',['searchData'=>$searchData]);
        }




}
