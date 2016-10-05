<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\UnitScore;
use App\UnitCategory;
use App\UnitCategoryParent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class UnitScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        /* declare variable */
        $tempNilaiArea1 = 0;
        $tempNilaiArea2 = 0;
        $tempNilaiArea3 = 0;
        $tempNilaiArea4 = 0;
        /* value 1 per rows */
        $nilaiCategori1 = array();
        $nilaiCategori2 = array();
        $nilaiCategori3 = array();
        $nilaiCategori4 = array();
        $nilaiCategori5 = array();
        $nilaiCategori6 = array();
        $nilaiCategori7 = array();
        $nilaiCategori8 = array();
        $nilaiCategori9 = array();
        $nilaiCategori10 = array();
        /* result value per rows */
        $resultCategori1 = array();
        $resultCategori2 = array();
        $resultCategori3 = array();
        $resultCategori4 = array();
        $resultCategori5 = array();
        $resultCategori6 = array();
        $resultCategori7 = array();
        $resultCategori8 = array();
        $resultCategori9 = array();
        $resultCategori10 = array();
        /* WALK IN*/
        $walkInWinnerArea1 = array();
        $walkInWinnerArea2 = array();
        $walkInWinnerArea3 = array();
        $walkInWinnerArea4 = array();
        $walkInWinnerResult = array();
        /* CALL CENTER */
        $callCenterWinnerArea1 = array();
        $callCenterWinnerArea2 = array();
        $callCenterWinnerArea3 = array();
        $callCenterWinnerArea4 = array();
        $callCenterWinnerResult = array();
        /* BEST AREA */
        /*TIER 1*/
        $bestAreaTier1Area1 = array();
        $bestAreaTier1Area2 = array();
        $bestAreaTier1Area3 = array();
        $bestAreaTier1Area4 = array();
        $bestAreaTier1Value = array();
        /*TIER 2*/
        $bestAreaTier2Area1 = array();
        $bestAreaTier2Area2 = array();
        $bestAreaTier2Area3 = array();
        $bestAreaTier2Area4 = array();
        $bestAreaTier2Value = array();
        /*TIER 3*/
        $bestAreaTier3Area1 = array();
        $bestAreaTier3Area2 = array();
        $bestAreaTier3Area3 = array();
        $bestAreaTier3Area4 = array();
        $bestAreaTier3Value = array();
        /*TIER 4*/
        $bestAreaTier4Area1 = array();
        $bestAreaTier4Area2 = array();
        $bestAreaTier4Area3 = array();
        $bestAreaTier4Area4 = array();
        $bestAreaTier4Value = array();
        /*RESULT BEST AREA*/
        $bestAreaResult = array();

        /* all unit */
        $unitScore = UnitScore::orderBy('created_at','desc')->get();

        /* top 3 from each category */
        $q = $request->get('q');
        $topCategory = UnitScore::where('category_id', $q)->orderBy('total_score','desc')->take(3)->get();

        /*category parent 1*/
        $topCategory1 = UnitScore::where('category_id', 1)->orderBy('total_score','desc')->take(1)->first();
        $topCategory2 = UnitScore::where('category_id', 2)->orderBy('total_score','desc')->take(1)->first();
        $topCategory3 = UnitScore::where('category_id', 3)->orderBy('total_score','desc')->take(1)->first();
        $topCategory4 = UnitScore::where('category_id', 4)->orderBy('total_score','desc')->take(1)->first();
        $topCategory5 = UnitScore::where('category_id', 5)->orderBy('total_score','desc')->take(1)->first();
        /*category parent 2*/
        $topCategory6 = UnitScore::where('category_id', 6)->orderBy('total_score','desc')->take(1)->first();
        $topCategory7 = UnitScore::where('category_id', 7)->orderBy('total_score','desc')->take(1)->first();
        $topCategory8 = UnitScore::where('category_id', 8)->orderBy('total_score','desc')->take(1)->first();
        $topCategory9 = UnitScore::where('category_id', 9)->orderBy('total_score','desc')->take(1)->first();
        /*category parent 3*/
        $topCategory10 = UnitScore::where('category_id', 10)->orderBy('total_score','desc')->take(1)->first();        
        /* data from category 1 */
        $cat1Area1 = UnitScore::where('area', 1)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->first();
        $cat1Area2 = UnitScore::where('area', 2)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->first();
        $cat1Area3 = UnitScore::where('area', 3)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->first();
        $cat1Area4 = UnitScore::where('area', 4)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->first();
        try {
            if (isset($cat1Area1)) {
                $tempNilaiArea1Temp = $cat1Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori1[0] = $tempNilaiArea1Temp;
            if (isset($cat1Area2)) {
                $tempNilaiArea2Temp = $cat1Area2->total_score;                
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori1[1] = $tempNilaiArea2Temp;
            if (isset($cat1Area3)) {
                $tempNilaiArea3Temp = $cat1Area3->total_score;
            }else{
                 $tempNilaiArea3Temp = 0;   
            }
            $nilaiCategori1[2] = $tempNilaiArea3Temp;
            if (isset($cat1Area4)) {
                $tempNilaiArea4Temp = $cat1Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori1[3] = $tempNilaiArea4Temp;
            $resultCategori1 = $nilaiCategori1;
            if ($nilaiCategori1[0] == 0 && $nilaiCategori1[1] == 0 && $nilaiCategori1[2] == 0 && $nilaiCategori1[3] == 0) {
                $nilaiCategori1[0] = 0;
                $nilaiCategori1[1] = 0;
                $nilaiCategori1[2] = 0;
                $nilaiCategori1[3] = 0;
            }else{
                if ($nilaiCategori1[0] >= max($nilaiCategori1)) {
                    $nilaiCategori1[0] = 1;
                    $nilaiCategori1[1] = 0;
                    $nilaiCategori1[2] = 0;
                    $nilaiCategori1[3] = 0;
                }elseif ($nilaiCategori1[1] >= max($nilaiCategori1)) {
                    $nilaiCategori1[0] = 0;
                    $nilaiCategori1[1] = 1;
                    $nilaiCategori1[2] = 0;
                    $nilaiCategori1[3] = 0;
                }if ($nilaiCategori1[2] >= max($nilaiCategori1)) {
                    $nilaiCategori1[0] = 0;
                    $nilaiCategori1[1] = 0;
                    $nilaiCategori1[2] = 1;
                    $nilaiCategori1[3] = 0;
                }elseif ($nilaiCategori1[3] >= max($nilaiCategori1)) {
                    $nilaiCategori1[0] = 0;
                    $nilaiCategori1[1] = 0;
                    $nilaiCategori1[2] = 0;
                    $nilaiCategori1[3] = 1;
                }
            }
            
            
            
        } catch (Exception $e) {
            $nilaiCategori1[0] = 0;
            $nilaiCategori1[1] = 0;
            $nilaiCategori1[2] = 0;
            $nilaiCategori1[3] = 0;
        }

        /* data from category 2 */
        $cat2Area1 = UnitScore::where('area', 1)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->first();
        $cat2Area2 = UnitScore::where('area', 2)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->first();
        $cat2Area3 = UnitScore::where('area', 3)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->first();
        $cat2Area4 = UnitScore::where('area', 4)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->first();
        
        try {
            if (isset($cat2Area1)) {
                $tempNilaiArea1Temp = $cat2Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }            
            $nilaiCategori2[0] = $tempNilaiArea1Temp;
        
            if (isset($cat2Area2)) {
                $tempNilaiArea2Temp = $cat2Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori2[1] = $tempNilaiArea2Temp;
        
            if (isset($cat2Area3)) {
                $tempNilaiArea3Temp = $cat2Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori2[2] = $tempNilaiArea3Temp;        
            if (isset($cat2Area4)) {
                $tempNilaiArea4Temp = $cat2Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori2[3] = $tempNilaiArea4Temp;
            $resultCategori2 = $nilaiCategori2;
            if ($nilaiCategori2[0] == 0 && $nilaiCategori2[1] == 0 && $nilaiCategori2[2] == 0 && $nilaiCategori2[3] == 0) {
                $nilaiCategori2[0] = 0;
                $nilaiCategori2[1] = 0;
                $nilaiCategori2[2] = 0;
                $nilaiCategori2[3] = 0;
            }else{
                if ($nilaiCategori2[0] >= max($nilaiCategori2)) {
                    $nilaiCategori2[0] = 1;
                    $nilaiCategori2[1] = 0;
                    $nilaiCategori2[2] = 0;
                    $nilaiCategori2[3] = 0;
                }elseif ($nilaiCategori2[1] >= max($nilaiCategori2)) {
                    $nilaiCategori2[0] = 0;
                    $nilaiCategori2[1] = 1;
                    $nilaiCategori2[2] = 0;
                    $nilaiCategori2[3] = 0;
                }if ($nilaiCategori2[2] >= max($nilaiCategori2)) {
                    $nilaiCategori2[0] = 0;
                    $nilaiCategori2[1] = 0;
                    $nilaiCategori2[2] = 1;
                    $nilaiCategori2[3] = 0;
                }elseif ($nilaiCategori2[3] >= max($nilaiCategori2)) {
                    $nilaiCategori2[0] = 0;
                    $nilaiCategori2[1] = 0;
                    $nilaiCategori2[2] = 0;
                    $nilaiCategori2[3] = 1;
                }
            }
            //return $nilaiCategori2;
            
            
        } catch (Exception $e) {
            $nilaiCategori2[0] = 0;
            $nilaiCategori2[1] = 0;
            $nilaiCategori2[2] = 0;
            $nilaiCategori2[3] = 0;
        }
            
        
        /* data from category 3 */
        $cat3Area1 = UnitScore::where('area', 1)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->first();
        $cat3Area2 = UnitScore::where('area', 2)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->first();
        $cat3Area3 = UnitScore::where('area', 3)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->first();
        $cat3Area4 = UnitScore::where('area', 4)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat3Area1)) {
                $tempNilaiArea1Temp = $cat3Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            
            $nilaiCategori3[0] = $tempNilaiArea1Temp;
        
            if (isset($cat3Area2)) {
                $tempNilaiArea2Temp = $cat3Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori3[1] = $tempNilaiArea2Temp;
        
            if (isset($cat3Area3)) {
                $tempNilaiArea3Temp = $cat3Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori3[2] = $tempNilaiArea3Temp;
        
            if (isset($cat3Area4)) {
                $tempNilaiArea4Temp = $cat3Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori3[3] = $tempNilaiArea4Temp;
            $resultCategori3 = $nilaiCategori3;
            if ($nilaiCategori3[0] == 0 && $nilaiCategori3[1] == 0 && $nilaiCategori3[2] == 0 && $nilaiCategori3[3] == 0) {
                $nilaiCategori3[0] = 0;
                $nilaiCategori3[1] = 0;
                $nilaiCategori3[2] = 0;
                $nilaiCategori3[3] = 0;
            }else{
                if ($nilaiCategori3[0] >= max($nilaiCategori3)) {
                    $nilaiCategori3[0] = 1;
                    $nilaiCategori3[1] = 0;
                    $nilaiCategori3[2] = 0;
                    $nilaiCategori3[3] = 0;
                }elseif ($nilaiCategori3[1] >= max($nilaiCategori3)) {
                    $nilaiCategori3[0] = 0;
                    $nilaiCategori3[1] = 1;
                    $nilaiCategori3[2] = 0;
                    $nilaiCategori3[3] = 0;
                }if ($nilaiCategori3[2] >= max($nilaiCategori3)) {
                    $nilaiCategori3[0] = 0;
                    $nilaiCategori3[1] = 0;
                    $nilaiCategori3[2] = 1;
                    $nilaiCategori3[3] = 0;
                }elseif ($nilaiCategori3[3] >= max($nilaiCategori3)) {
                    $nilaiCategori3[0] = 0;
                    $nilaiCategori3[1] = 0;
                    $nilaiCategori3[2] = 0;
                    $nilaiCategori3[3] = 1;
                }
            }
            
        } catch (Exception $e) {
            $nilaiCategori3[0] = 0;
            $nilaiCategori3[1] = 0;
            $nilaiCategori3[2] = 0;
            $nilaiCategori3[3] = 0;
        }
            
        
        /* data from category 4 */
        $cat4Area1 = UnitScore::where('area', 1)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->first();
        $cat4Area2 = UnitScore::where('area', 2)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->first();
        $cat4Area3 = UnitScore::where('area', 3)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->first();
        $cat4Area4 = UnitScore::where('area', 4)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat4Area1)) {
                $tempNilaiArea1Temp = $cat4Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori4[0] = $tempNilaiArea1Temp;        
            if (isset($cat4Area2)) {
                $tempNilaiArea2Temp = $cat4Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori4[1] = $tempNilaiArea2Temp;        
            if (isset($cat4Area3)) {
                $tempNilaiArea3Temp = $cat4Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori4[2] = $tempNilaiArea3Temp;        
            if (isset($cat4Area4)) {
                $tempNilaiArea4Temp = $cat4Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori4[3] = $tempNilaiArea4Temp;
            $resultCategori4 = $nilaiCategori4;
            if ($nilaiCategori4[0] == 0 && $nilaiCategori4[1] == 0 && $nilaiCategori4[2] == 0 && $nilaiCategori4[3] == 0) {
                $nilaiCategori4[0] = 0;
                $nilaiCategori4[1] = 0;
                $nilaiCategori4[2] = 0;
                $nilaiCategori4[3] = 0;
            }else{
                if ($nilaiCategori4[0] >= max($nilaiCategori4)) {
                    $nilaiCategori4[0] = 1;
                    $nilaiCategori4[1] = 0;
                    $nilaiCategori4[2] = 0;
                    $nilaiCategori4[3] = 0;
                }elseif ($nilaiCategori4[1] >= max($nilaiCategori4)) {
                    $nilaiCategori4[0] = 0;
                    $nilaiCategori4[1] = 1;
                    $nilaiCategori4[2] = 0;
                    $nilaiCategori4[3] = 0;
                }if ($nilaiCategori4[2] >= max($nilaiCategori4)) {
                    $nilaiCategori4[0] = 0;
                    $nilaiCategori4[1] = 0;
                    $nilaiCategori4[2] = 1;
                    $nilaiCategori4[3] = 0;
                }elseif ($nilaiCategori4[3] >= max($nilaiCategori4)) {
                    $nilaiCategori4[0] = 0;
                    $nilaiCategori4[1] = 0;
                    $nilaiCategori4[2] = 0;
                    $nilaiCategori4[3] = 1;
                }
            }
            
        } catch (Exception $e) {
            $nilaiCategori4[0] = 0;
            $nilaiCategori4[1] = 0;
            $nilaiCategori4[2] = 0;
            $nilaiCategori4[3] = 0;
        }
            
        
        /* data from category 5 */
        $cat5Area1 = UnitScore::where('area', 1)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->first();
        $cat5Area2 = UnitScore::where('area', 2)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->first();
        $cat5Area3 = UnitScore::where('area', 3)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->first();
        $cat5Area4 = UnitScore::where('area', 4)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat5Area1)) {
                $tempNilaiArea1Temp = $cat5Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori5[0] = $tempNilaiArea1Temp;
        
            if (isset($cat5Area2)) {
                $tempNilaiArea2Temp = $cat5Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori5[1] = $tempNilaiArea2Temp;
        
            if (isset($cat5Area3)) {
                $tempNilaiArea3Temp = $cat5Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori5[2] = $tempNilaiArea3Temp;
            
            if (isset($cat5Area4)) {
                $tempNilaiArea4Temp = $cat5Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori5[3] = $tempNilaiArea4Temp;
            $resultCategori5 = $nilaiCategori5;
            if ($nilaiCategori5[0] == 0 && $nilaiCategori5[1] == 0 && $nilaiCategori5[2] == 0 && $nilaiCategori5[3] == 0) {
                $nilaiCategori5[0] = 0;
                $nilaiCategori5[1] = 0;
                $nilaiCategori5[2] = 0;
                $nilaiCategori5[3] = 0;
            }else{
                if ($nilaiCategori5[0] >= max($nilaiCategori5)) {
                    $nilaiCategori5[0] = 1;
                    $nilaiCategori5[1] = 0;
                    $nilaiCategori5[2] = 0;
                    $nilaiCategori5[3] = 0;
                }elseif ($nilaiCategori5[1] >= max($nilaiCategori5)) {
                    $nilaiCategori5[0] = 0;
                    $nilaiCategori5[1] = 1;
                    $nilaiCategori5[2] = 0;
                    $nilaiCategori5[3] = 0;
                }if ($nilaiCategori5[2] >= max($nilaiCategori5)) {
                    $nilaiCategori5[0] = 0;
                    $nilaiCategori5[1] = 0;
                    $nilaiCategori5[2] = 1;
                    $nilaiCategori5[3] = 0;
                }elseif ($nilaiCategori5[3] >= max($nilaiCategori5)) {
                    $nilaiCategori5[0] = 0;
                    $nilaiCategori5[1] = 0;
                    $nilaiCategori5[2] = 0;
                    $nilaiCategori5[3] = 1;
                }
            }
        } catch (Exception $e) {
            $nilaiCategori5[0] = 0;
            $nilaiCategori5[1] = 0;
            $nilaiCategori5[2] = 0;
            $nilaiCategori5[3] = 0;
        }
            
        
        /* data from category 6 */
        $cat6Area1 = UnitScore::where('area', 1)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->first();
        $cat6Area2 = UnitScore::where('area', 2)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->first();
        $cat6Area3 = UnitScore::where('area', 3)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->first();
        $cat6Area4 = UnitScore::where('area', 4)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat6Area1)) {
                $tempNilaiArea1Temp = $cat6Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori6[0] = $tempNilaiArea1Temp;
        
            if (isset($cat6Area2)) {
                $tempNilaiArea2Temp = $cat6Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori6[1] = $tempNilaiArea2Temp;
        
            if (isset($cat6Area3)) {
                $tempNilaiArea3Temp = $cat6Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori6[2] = $tempNilaiArea3Temp;
        
            if (isset($cat6Area4)) {
                $tempNilaiArea4Temp = $cat6Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori6[3] = $tempNilaiArea4Temp;
            $resultCategori6 = $nilaiCategori6;
            if ($nilaiCategori6[0] == 0 && $nilaiCategori6[1] == 0 && $nilaiCategori6[2] == 0 && $nilaiCategori6[3] == 0) {
                $nilaiCategori6[0] = 0;
                $nilaiCategori6[1] = 0;
                $nilaiCategori6[2] = 0;
                $nilaiCategori6[3] = 0;
            }else{
                if ($nilaiCategori6[0] >= max($nilaiCategori6)) {
                    $nilaiCategori6[0] = 1;
                    $nilaiCategori6[1] = 0;
                    $nilaiCategori6[2] = 0;
                    $nilaiCategori6[3] = 0;
                }elseif ($nilaiCategori6[1] >= max($nilaiCategori6)) {
                    $nilaiCategori6[0] = 0;
                    $nilaiCategori6[1] = 1;
                    $nilaiCategori6[2] = 0;
                    $nilaiCategori6[3] = 0;
                }if ($nilaiCategori6[2] >= max($nilaiCategori6)) {
                    $nilaiCategori6[0] = 0;
                    $nilaiCategori6[1] = 0;
                    $nilaiCategori6[2] = 1;
                    $nilaiCategori6[3] = 0;
                }elseif ($nilaiCategori6[3] >= max($nilaiCategori6)) {
                    $nilaiCategori6[0] = 0;
                    $nilaiCategori6[1] = 0;
                    $nilaiCategori6[2] = 0;
                    $nilaiCategori6[3] = 1;
                }
            }

        } catch (Exception $e) {
            $nilaiCategori6[0] = 0;
            $nilaiCategori6[1] = 0;
            $nilaiCategori6[2] = 0;
            $nilaiCategori6[3] = 0;
        }
            
        

        /* data from category 7 */
        $cat7Area1 = UnitScore::where('area', 1)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->first();
        $cat7Area2 = UnitScore::where('area', 2)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->first();
        $cat7Area3 = UnitScore::where('area', 3)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->first();
        $cat7Area4 = UnitScore::where('area', 4)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat7Area1)) {
                $tempNilaiArea1Temp = $cat7Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori7[0] = $tempNilaiArea1Temp;
        
            if (isset($cat7Area2)) {
                $tempNilaiArea2Temp = $cat7Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori7[1] = $tempNilaiArea2Temp;
        
            if (isset($cat7Area3)) {
                $tempNilaiArea3Temp = $cat7Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori7[2] = $tempNilaiArea3Temp;        
            if (isset($cat7Area4)) {
                $tempNilaiArea4Temp = $cat7Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori7[3] = $tempNilaiArea4Temp;
            $resultCategori7 = $nilaiCategori7;
            if ($nilaiCategori7[0] == 0 && $nilaiCategori7[1] == 0 && $nilaiCategori7[2] == 0 && $nilaiCategori7[3] == 0) {
                $nilaiCategori7[0] = 0;
                $nilaiCategori7[1] = 0;
                $nilaiCategori7[2] = 0;
                $nilaiCategori7[3] = 0;
            }else{
                if ($nilaiCategori7[0] >= max($nilaiCategori7)) {
                    $nilaiCategori7[0] = 1;
                    $nilaiCategori7[1] = 0;
                    $nilaiCategori7[2] = 0;
                    $nilaiCategori7[3] = 0;
                }elseif ($nilaiCategori7[1] >= max($nilaiCategori7)) {
                    $nilaiCategori7[0] = 0;
                    $nilaiCategori7[1] = 1;
                    $nilaiCategori7[2] = 0;
                    $nilaiCategori7[3] = 0;
                }if ($nilaiCategori7[2] >= max($nilaiCategori7)) {
                    $nilaiCategori7[0] = 0;
                    $nilaiCategori7[1] = 0;
                    $nilaiCategori7[2] = 1;
                    $nilaiCategori7[3] = 0;
                }elseif ($nilaiCategori7[3] >= max($nilaiCategori7)) {
                    $nilaiCategori7[0] = 0;
                    $nilaiCategori7[1] = 0;
                    $nilaiCategori7[2] = 0;
                    $nilaiCategori7[3] = 1;
                }
            }

        } catch (Exception $e) {
            $nilaiCategori7[0] = 0;
            $nilaiCategori7[1] = 0;
            $nilaiCategori7[2] = 0;
            $nilaiCategori7[3] = 0;
        }
            
        
        /* data from category 8 */
        $cat8Area1 = UnitScore::where('area', 1)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->first();
        $cat8Area2 = UnitScore::where('area', 2)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->first();
        $cat8Area3 = UnitScore::where('area', 3)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->first();
        $cat8Area4 = UnitScore::where('area', 4)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat8Area1)) {
                $tempNilaiArea1Temp = $cat8Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori8[0] = $tempNilaiArea1Temp;
        
            if (isset($cat8Area2)) {
                $tempNilaiArea2Temp = $cat8Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori8[1] = $tempNilaiArea2Temp;
        
            if (isset($cat8Area3)) {
                $tempNilaiArea3Temp = $cat8Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori8[2] = $tempNilaiArea3Temp;
        
            if (isset($cat8Area4)) {
                $tempNilaiArea4Temp = $cat8Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori8[3] = $tempNilaiArea4Temp;
            $resultCategori8 = $nilaiCategori8;
            if ($nilaiCategori8[0] == 0 && $nilaiCategori8[1] == 0 && $nilaiCategori8[2] == 0 && $nilaiCategori8[3] == 0) {
                $nilaiCategori8[0] = 0;
                $nilaiCategori8[1] = 0;
                $nilaiCategori8[2] = 0;
                $nilaiCategori8[3] = 0;
            }else{
                if ($nilaiCategori8[0] >= max($nilaiCategori8)) {
                    $nilaiCategori8[0] = 1;
                    $nilaiCategori8[1] = 0;
                    $nilaiCategori8[2] = 0;
                    $nilaiCategori8[3] = 0;
                }elseif ($nilaiCategori8[1] >= max($nilaiCategori8)) {
                    $nilaiCategori8[0] = 0;
                    $nilaiCategori8[1] = 1;
                    $nilaiCategori8[2] = 0;
                    $nilaiCategori8[3] = 0;
                }if ($nilaiCategori8[2] >= max($nilaiCategori8)) {
                    $nilaiCategori8[0] = 0;
                    $nilaiCategori8[1] = 0;
                    $nilaiCategori8[2] = 1;
                    $nilaiCategori8[3] = 0;
                }elseif ($nilaiCategori8[3] >= max($nilaiCategori8)) {
                    $nilaiCategori8[0] = 0;
                    $nilaiCategori8[1] = 0;
                    $nilaiCategori8[2] = 0;
                    $nilaiCategori8[3] = 1;
                }
            }
        } catch (Exception $e) {
            $nilaiCategori8[0] = 0;
            $nilaiCategori8[1] = 0;
            $nilaiCategori8[2] = 0;
            $nilaiCategori8[3] = 0;
        }
            
        
        /* data from category 9 */
        $cat9Area1 = UnitScore::where('area', 1)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->first();
        $cat9Area2 = UnitScore::where('area', 2)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->first();
        $cat9Area3 = UnitScore::where('area', 3)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->first();
        $cat9Area4 = UnitScore::where('area', 4)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->first();        
        try {
            if (isset($cat9Area1)) {
                $tempNilaiArea1Temp = $cat9Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori9[0] = $tempNilaiArea1Temp;
        
            if (isset($cat9Area2)) {
                $tempNilaiArea2Temp = $cat9Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori9[1] = $tempNilaiArea2Temp;
        
            if (isset($cat9Area3)) {
                $tempNilaiArea3Temp = $cat9Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori9[2] = $tempNilaiArea3Temp;
            if (isset($cat9Area4)) {
                $tempNilaiArea4Temp = $cat9Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori9[3] = $tempNilaiArea4Temp;
            $resultCategori9 = $nilaiCategori9;
            if ($nilaiCategori9[0] == 0 && $nilaiCategori9[1] == 0 && $nilaiCategori9[2] == 0 && $nilaiCategori9[3] == 0) {
                $nilaiCategori9[0] = 0;
                $nilaiCategori9[1] = 0;
                $nilaiCategori9[2] = 0;
                $nilaiCategori9[3] = 0;
            }else{
                if ($nilaiCategori9[0] >= max($nilaiCategori9)) {
                    $nilaiCategori9[0] = 1;
                    $nilaiCategori9[1] = 0;
                    $nilaiCategori9[2] = 0;
                    $nilaiCategori9[3] = 0;
                }elseif ($nilaiCategori9[1] >= max($nilaiCategori9)) {
                    $nilaiCategori9[0] = 0;
                    $nilaiCategori9[1] = 1;
                    $nilaiCategori9[2] = 0;
                    $nilaiCategori9[3] = 0;
                }if ($nilaiCategori9[2] >= max($nilaiCategori9)) {
                    $nilaiCategori9[0] = 0;
                    $nilaiCategori9[1] = 0;
                    $nilaiCategori9[2] = 1;
                    $nilaiCategori9[3] = 0;
                }elseif ($nilaiCategori9[3] >= max($nilaiCategori9)) {
                    $nilaiCategori9[0] = 0;
                    $nilaiCategori9[1] = 0;
                    $nilaiCategori9[2] = 0;
                    $nilaiCategori9[3] = 1;
                }
            }
        } catch (Exception $e) {
            $nilaiCategori9[0] = 0;
            $nilaiCategori9[1] = 0;
            $nilaiCategori9[2] = 0;
            $nilaiCategori9[3] = 0;
        }
            
        
        /* data from category 10 */
        $cat10Area1 = UnitScore::where('area', 1)->where('category_id', 10)->orderBy('total_score','desc')->take(1)->first();
        $cat10Area2 = UnitScore::where('area', 2)->where('category_id', 10)->orderBy('total_score','desc')->take(1)->first();
        $cat10Area3 = UnitScore::where('area', 3)->where('category_id', 10)->orderBy('total_score','desc')->take(1)->first();
        $cat10Area4 = UnitScore::where('area', 4)->where('category_id', 10)->orderBy('total_score','desc')->take(1)->first();
        try {
            if (isset($cat10Area1)) {
                $tempNilaiArea1Temp = $cat10Area1->total_score;
            }else{
                $tempNilaiArea1Temp = 0;
            }
            $nilaiCategori10[0] = $tempNilaiArea1Temp;
        
            if (isset($cat10Area2)) {
                $tempNilaiArea2Temp = $cat10Area2->total_score;
            }else{
                $tempNilaiArea2Temp = 0;
            }
            $nilaiCategori10[1] = $tempNilaiArea2Temp;
        
            if (isset($cat10Area3)) {
                $tempNilaiArea3Temp = $cat10Area3->total_score;
            }else{
                $tempNilaiArea3Temp = 0;
            }
            $nilaiCategori10[2] = $tempNilaiArea3Temp;
        
            if (isset($cat10Area4)) {
                $tempNilaiArea4Temp = $cat10Area4->total_score;
            }else{
                $tempNilaiArea4Temp = 0;
            }
            $nilaiCategori10[3] = $tempNilaiArea4Temp;
            $resultCategori10 = $nilaiCategori10;
            if ($nilaiCategori10[0] == 0 && $nilaiCategori10[1] == 0 && $nilaiCategori10[2] == 0 && $nilaiCategori10[3] == 0) {
                $nilaiCategori10[0] = 0;
                $nilaiCategori10[1] = 0;
                $nilaiCategori10[2] = 0;
                $nilaiCategori10[3] = 0;
            }else{
                if ($nilaiCategori10[0] >= max($nilaiCategori10)) {
                    $nilaiCategori10[0] = 1;
                    $nilaiCategori10[1] = 0;
                    $nilaiCategori10[2] = 0;
                    $nilaiCategori10[3] = 0;
                }elseif ($nilaiCategori10[1] >= max($nilaiCategori10)) {
                    $nilaiCategori10[0] = 0;
                    $nilaiCategori10[1] = 1;
                    $nilaiCategori10[2] = 0;
                    $nilaiCategori10[3] = 0;
                }if ($nilaiCategori10[2] >= max($nilaiCategori10)) {
                    $nilaiCategori10[0] = 0;
                    $nilaiCategori10[1] = 0;
                    $nilaiCategori10[2] = 1;
                    $nilaiCategori10[3] = 0;
                }elseif ($nilaiCategori10[3] >= max($nilaiCategori10)) {
                    $nilaiCategori10[0] = 0;
                    $nilaiCategori10[1] = 0;
                    $nilaiCategori10[2] = 0;
                    $nilaiCategori10[3] = 1;
                }
            }
        } catch (Exception $e) {
            $nilaiCategori10[0] = 0;
            $nilaiCategori10[1] = 0;
            $nilaiCategori10[2] = 0;
            $nilaiCategori10[3] = 0;
        }

        /* WALK IN */
        /* AREA 1*/
        if ($nilaiCategori1[0] == 1) {
            $walkInWinnerArea1[0] = isset($resultCategori1[0]) ? $resultCategori1[0] * 40 : 0 ;
        }else{
            $walkInWinnerArea1[0] = 0;
        }
        if ($nilaiCategori3[0] == 1) {
            $walkInWinnerArea1[1] = isset($resultCategori3[0]) ? $resultCategori3[0] * 40 : 0;
        }else{
            $walkInWinnerArea1[1] = 0;
        }
        if ($nilaiCategori4[0] == 1) {
            $walkInWinnerArea1[2] = isset($resultCategori4[0]) ? $resultCategori4[0] * 10 : 0;
        }else{
            $walkInWinnerArea1[2] = 0;
        }
        if ($nilaiCategori5[0] == 1) {
            $walkInWinnerArea1[3] = isset($resultCategori5[0]) ? $resultCategori5[0] * 10 : 0;
        }else{
            $walkInWinnerArea1[3] = 0;
        }
        $walkInWinnerResult[0] = array_sum($walkInWinnerArea1) / 100;
        
        /* AREA 2*/
        if ($nilaiCategori1[1] == 1) {
            $walkInWinnerArea2[0] = isset($resultCategori1[1]) ? $resultCategori1[1] * 40 : 0 ;
        }else{
            $walkInWinnerArea2[0] = 0;
        }
        if ($nilaiCategori3[1] == 1) {
            $walkInWinnerArea2[2] = isset($resultCategori3[1]) ? $resultCategori3[1] * 40 : 0;
        }else{
            $walkInWinnerArea2[2] = 0;
        }
        if ($nilaiCategori4[1] == 1) {
            $walkInWinnerArea2[3] = isset($resultCategori4[1]) ? $resultCategori4[1] * 10 : 0;
        }else{
            $walkInWinnerArea2[3] = 0;
        }
        if ($nilaiCategori5[1] == 1) {
            $walkInWinnerArea2[4] = isset($resultCategori5[1]) ? $resultCategori5[1] * 10 : 0;
        }else{
            $walkInWinnerArea2[4] = 0;
        }
        $walkInWinnerResult[1] = array_sum($walkInWinnerArea2) / 100;

        /* AREA 3*/
        if ($nilaiCategori1[2] == 1) {
            $walkInWinnerArea3[0] = isset($resultCategori1[2]) ? $resultCategori1[2] * 40 : 0 ;
        }else{
            $walkInWinnerArea3[0] = 0;
        }
        if ($nilaiCategori3[2] == 1) {
            $walkInWinnerArea3[2] = isset($resultCategori3[2]) ? $resultCategori3[2] * 40 : 0;
        }else{
            $walkInWinnerArea3[2] = 0;
        }
        if ($nilaiCategori4[2] == 1) {
            $walkInWinnerArea3[3] = isset($resultCategori4[2]) ? $resultCategori4[2] * 10 : 0;
        }else{
            $walkInWinnerArea3[3] = 0;
        }
        if ($nilaiCategori5[2] == 1) {
            $walkInWinnerArea3[4] = isset($resultCategori5[2]) ? $resultCategori5[2] * 10 : 0;
        }else{
            $walkInWinnerArea3[4] = 0;
        }
        $walkInWinnerResult[2] = array_sum($walkInWinnerArea3) / 100;

        /* AREA 4*/
        if ($nilaiCategori1[3] == 1) {
            $walkInWinnerArea4[0] = isset($resultCategori1[3]) ? $resultCategori1[3] * 40 : 0 ;
        }else{
            $walkInWinnerArea4[0] = 0;
        }
        if ($nilaiCategori3[3] == 1) {
            $walkInWinnerArea4[2] = isset($resultCategori3[3]) ? $resultCategori3[3] * 40 : 0;
        }else{
            $walkInWinnerArea4[2] = 0;
        }
        if ($nilaiCategori4[3] == 1) {
            $walkInWinnerArea4[3] = isset($resultCategori4[3]) ? $resultCategori4[3] * 10 : 0;
        }else{
            $walkInWinnerArea4[3] = 0;
        }
        if ($nilaiCategori5[3] == 1) {
            $walkInWinnerArea4[4] = isset($resultCategori5[3]) ? $resultCategori5[3] * 10 : 0;
        }else{
            $walkInWinnerArea4[4] = 0;
        }
        $walkInWinnerResult[3] = array_sum($walkInWinnerArea4) / 100;        
        
        $walkInWinnerResultValue = max($walkInWinnerResult);
        if (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 0) {
            $walkInWinnerName = 1;
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 1) {
            $walkInWinnerName = 2;
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 2) {
            $walkInWinnerName = 3;
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 3) {
            $walkInWinnerName = 4;
        }else{
            $walkInWinnerName = 0;
        }

        /* CALL CENTER */
        /* AREA 1*/
        if (isset($resultCategori6[0])) {
            $callCenterWinnerArea1[0] = isset($resultCategori6[0]) ? $resultCategori6[0] * 30 : 0 ;
        }else{
            $callCenterWinnerArea1[0] = 0;
        }
        if (isset($resultCategori7[0])) {
            $callCenterWinnerArea1[1] = isset($resultCategori7[0]) ? $resultCategori7[0] * 40 : 0;
        }else{
            $callCenterWinnerArea1[1] = 0;
        }
        if (isset($resultCategori8[0])) {
            $callCenterWinnerArea1[2] = isset($resultCategori8[0]) ? $resultCategori8[0] * 15 : 0;
        }else{
            $callCenterWinnerArea1[2] = 0;
        }
        if (isset($resultCategori9[0])) {
            $callCenterWinnerArea1[3] = isset($resultCategori9[0]) ? $resultCategori9[0] * 15 : 0;
        }else{
            $callCenterWinnerArea1[3] = 0;
        }
        $callCenterWinnerResult[0] = array_sum($callCenterWinnerArea1) / 100;

        /* AREA 2*/
        if (isset($resultCategori6[1])) {
            $callCenterWinnerArea2[0] = isset($resultCategori6[1]) ? $resultCategori6[1] * 30 : 0 ;
        }else{
            $callCenterWinnerArea2[0] = 0;
        }
        if (isset($resultCategori7[1])) {
            $callCenterWinnerArea2[1] = isset($resultCategori7[1]) ? $resultCategori7[1] * 40 : 0;
        }else{
            $callCenterWinnerArea2[1] = 0;
        }
        if (isset($resultCategori8[1])) {
            $callCenterWinnerArea2[2] = isset($resultCategori8[1]) ? $resultCategori8[1] * 15 : 0;
        }else{
            $callCenterWinnerArea2[2] = 0;
        }
        if (isset($resultCategori9[1])) {
            $callCenterWinnerArea2[3] = isset($resultCategori9[1]) ? $resultCategori9[1] * 15 : 0;
        }else{
            $callCenterWinnerArea2[3] = 0;
        }
        $callCenterWinnerResult[1] = array_sum($callCenterWinnerArea2) / 100;

        /* AREA 2*/
        if (isset($resultCategori6[2])) {
            $callCenterWinnerArea3[0] = isset($resultCategori6[2]) ? $resultCategori6[2] * 30 : 0 ;
        }else{
            $callCenterWinnerArea3[0] = 0;
        }
        if (isset($resultCategori7[2])) {
            $callCenterWinnerArea3[1] = isset($resultCategori7[2]) ? $resultCategori7[2] * 40 : 0;
        }else{
            $callCenterWinnerArea3[1] = 0;
        }
        if (isset($resultCategori8[2])) {
            $callCenterWinnerArea3[2] = isset($resultCategori8[2]) ? $resultCategori8[2] * 15 : 0;
        }else{
            $callCenterWinnerArea3[2] = 0;
        }
        if (isset($resultCategori9[2])) {
            $callCenterWinnerArea3[3] = isset($resultCategori9[2]) ? $resultCategori9[2] * 15 : 0;
        }else{
            $callCenterWinnerArea3[3] = 0;
        }
        $callCenterWinnerResult[2] = array_sum($callCenterWinnerArea3) / 100;
        /* AREA 2*/
        if (isset($resultCategori6[3])) {
            $callCenterWinnerArea4[0] = isset($resultCategori6[3]) ? $resultCategori6[3] * 30 : 0 ;
        }else{
            $callCenterWinnerArea4[0] = 0;
        }
        if (isset($resultCategori7[3])) {
            $callCenterWinnerArea4[1] = isset($resultCategori7[3]) ? $resultCategori7[3] * 40 : 0;
        }else{
            $callCenterWinnerArea4[1] = 0;
        }
        if (isset($resultCategori8[3])) {
            $callCenterWinnerArea4[2] = isset($resultCategori8[3]) ? $resultCategori8[3] * 15 : 0;
        }else{
            $callCenterWinnerArea4[2] = 0;
        }
        if (isset($resultCategori9[3])) {
            $callCenterWinnerArea4[3] = isset($resultCategori9[3]) ? $resultCategori9[3] * 15 : 0;
        }else{
            $callCenterWinnerArea4[3] = 0;
        }
        $callCenterWinnerResult[3] = array_sum($callCenterWinnerArea4) / 100;
        $callCenterWinnerResultValue = max($callCenterWinnerResult);
        if (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 0) {
            $callCenterWinnerName = 1;
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 1) {
            $callCenterWinnerName = 2;
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 2) {
            $callCenterWinnerName = 3;
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 3) {
            $callCenterWinnerName = 4;
        }else{
            $callCenterWinnerName = 0;
        }

        /*BEST AREA*/
        /*TIER 1*/
        /* AREA 1*/
        if (isset($resultCategori1[0])) {
            $bestAreaTier1Area1[0] = $resultCategori1[0];
        }else{
            $bestAreaTier1Area1[0] = 0;
        }
        if (isset($resultCategori2[0])) {
            $bestAreaTier1Area1[1] = $resultCategori2[0];
        }else{
            $bestAreaTier1Area1[1] = 0;
        }
        if (isset($resultCategori3[0])) {
            $bestAreaTier1Area1[2] = $resultCategori3[0];
        }else{
            $bestAreaTier1Area1[2] = 0;
        }
        if (isset($resultCategori6[0])) {
            $bestAreaTier1Area1[3] = $resultCategori6[0];
        }else{
            $bestAreaTier1Area1[3] = 0;
        }
        if (isset($resultCategori7[0])) {
            $bestAreaTier1Area1[4] = $resultCategori7[0];
        }else{
            $bestAreaTier1Area1[4] = 0;
        }
        $bestAreaTier1Value[0] = (array_sum($bestAreaTier1Area1) * 70 / 100);
        /* AREA 2*/
        if (isset($resultCategori1[1])) {
            $bestAreaTier1Area2[0] = $resultCategori1[1];
        }else{
            $bestAreaTier1Area2[0] = 0;
        }
        if (isset($resultCategori2[1])) {
            $bestAreaTier1Area2[1] = $resultCategori2[1];
        }else{
            $bestAreaTier1Area2[1] = 0;
        }
        if (isset($resultCategori3[1])) {
            $bestAreaTier1Area2[2] = $resultCategori3[1];
        }else{
            $bestAreaTier1Area2[2] = 0;
        }
        if (isset($resultCategori6[1])) {
            $bestAreaTier1Area2[3] = $resultCategori6[1];
        }else{
            $bestAreaTier1Area2[3] = 0;
        }
        if (isset($resultCategori7[1])) {
            $bestAreaTier1Area2[4] = $resultCategori7[1];
        }else{
            $bestAreaTier1Area2[4] = 0;
        }
        $bestAreaTier1Value[1] = (array_sum($bestAreaTier1Area2) * 70 / 100);
        /* AREA 3*/
        if (isset($resultCategori1[2])) {
            $bestAreaTier1Area3[0] = $resultCategori1[2];
        }else{
            $bestAreaTier1Area3[0] = 0;
        }
        if (isset($resultCategori2[2])) {
            $bestAreaTier1Area3[1] = $resultCategori2[2];
        }else{
            $bestAreaTier1Area3[1] = 0;
        }
        if (isset($resultCategori3[2])) {
            $bestAreaTier1Area3[2] = $resultCategori3[2];
        }else{
            $bestAreaTier1Area3[2] = 0;
        }
        if (isset($resultCategori6[2])) {
            $bestAreaTier1Area3[3] = $resultCategori6[2];
        }else{
            $bestAreaTier1Area3[3] = 0;
        }
        if (isset($resultCategori7[2])) {
            $bestAreaTier1Area3[4] = $resultCategori7[2];
        }else{
            $bestAreaTier1Area3[4] = 0;
        }
        $bestAreaTier1Value[2] = (array_sum($bestAreaTier1Area3) * 70 / 100);
        /* AREA 4*/
        if (isset($resultCategori1[3])) {
            $bestAreaTier1Area4[0] = $resultCategori1[3];
        }else{
            $bestAreaTier1Area4[0] = 0;
        }
        if (isset($resultCategori2[3])) {
            $bestAreaTier1Area4[1] = $resultCategori2[3];
        }else{
            $bestAreaTier1Area4[1] = 0;
        }
        if (isset($resultCategori3[3])) {
            $bestAreaTier1Area4[2] = $resultCategori3[3];
        }else{
            $bestAreaTier1Area4[2] = 0;
        }
        if (isset($resultCategori6[3])) {
            $bestAreaTier1Area4[3] = $resultCategori6[3];
        }else{
            $bestAreaTier1Area4[3] = 0;
        }
        if (isset($resultCategori7[3])) {
            $bestAreaTier1Area4[4] = $resultCategori7[3];
        }else{
            $bestAreaTier1Area4[4] = 0;
        }
        $bestAreaTier1Value[3] = (array_sum($bestAreaTier1Area4) * 70 / 100);

        /*TIER 2*/
        /* AREA 1*/
        if (isset($resultCategori4[0])) {
            $bestAreaTier2Area1[0] = $resultCategori4[0];
        }else{
            $bestAreaTier2Area1[0] = 0;
        }
        if (isset($resultCategori8[0])) {
            $bestAreaTier2Area1[1] = $resultCategori8[0];
        }else{
            $bestAreaTier2Area1[1] = 0;
        }
        if (isset($resultCategori9[0])) {
            $bestAreaTier2Area1[2] = $resultCategori9[0];
        }else{
            $bestAreaTier2Area1[2] = 0;
        }
        $bestAreaTier2Value[0] = (array_sum($bestAreaTier2Area1) * 15 / 100);
        /* AREA 2*/
        if (isset($resultCategori4[1])) {
            $bestAreaTier2Area2[0] = $resultCategori4[1];
        }else{
            $bestAreaTier2Area2[0] = 0;
        }
        if (isset($resultCategori8[1])) {
            $bestAreaTier2Area2[1] = $resultCategori8[1];
        }else{
            $bestAreaTier2Area2[1] = 0;
        }
        if (isset($resultCategori9[1])) {
            $bestAreaTier2Area2[2] = $resultCategori9[1];
        }else{
            $bestAreaTier2Area2[2] = 0;
        }
        $bestAreaTier2Value[1] = (array_sum($bestAreaTier2Area2) * 15 / 100);
        /* AREA 3*/
        if (isset($resultCategori4[2])) {
            $bestAreaTier2Area3[0] = $resultCategori4[2];
        }else{
            $bestAreaTier2Area3[0] = 0;
        }
        if (isset($resultCategori8[2])) {
            $bestAreaTier2Area3[1] = $resultCategori8[2];
        }else{
            $bestAreaTier2Area3[1] = 0;
        }
        if (isset($resultCategori9[2])) {
            $bestAreaTier2Area3[2] = $resultCategori9[2];
        }else{
            $bestAreaTier2Area3[2] = 0;
        }
        $bestAreaTier2Value[2] = (array_sum($bestAreaTier2Area3) * 15 / 100);
        /* AREA 4*/
        if (isset($resultCategori4[3])) {
            $bestAreaTier2Area4[0] = $resultCategori4[3];
        }else{
            $bestAreaTier2Area4[0] = 0;
        }
        if (isset($resultCategori8[3])) {
            $bestAreaTier2Area4[1] = $resultCategori8[3];
        }else{
            $bestAreaTier2Area4[1] = 0;
        }
        if (isset($resultCategori9[3])) {
            $bestAreaTier2Area4[2] = $resultCategori9[3];
        }else{
            $bestAreaTier2Area4[2] = 0;
        }
        $bestAreaTier2Value[3] = (array_sum($bestAreaTier2Area4) * 15 / 100) ;

        /* TIER 3*/
        /* AREA 1*/
        if (isset($resultCategori10[0])) {
            $bestAreaTier3Area1[0] = $resultCategori10[0];
        }else{
            $bestAreaTier3Area1[0] = 0;
        }
        $bestAreaTier3Value[0] = (array_sum($bestAreaTier3Area1) * 10 / 100);
        /* AREA 2*/
        if (isset($resultCategori10[1])) {
            $bestAreaTier3Area2[0] = $resultCategori10[1];
        }else{
            $bestAreaTier3Area2[0] = 0;
        }
        $bestAreaTier3Value[1] = (array_sum($bestAreaTier3Area2) * 10 / 100);
        /* AREA 3*/
        if (isset($resultCategori10[2])) {
            $bestAreaTier3Area3[0] = $resultCategori10[2];
        }else{
            $bestAreaTier3Area3[0] = 0;
        }
        $bestAreaTier3Value[2] = (array_sum($bestAreaTier3Area3) * 10 / 100);
        /* AREA 4*/
        if (isset($resultCategori10[3])) {
            $bestAreaTier3Area4[0] = $resultCategori10[3];
        }else{
            $bestAreaTier3Area4[0] = 0;
        }
        $bestAreaTier3Value[3] = (array_sum($bestAreaTier3Area4) * 10 / 100);

        /* TIER 4*/
        /* AREA 1*/
        if (isset($resultCategori5[0])) {
            $bestAreaTier4Area1[0] = $resultCategori5[0];
        }else{
            $bestAreaTier4Area1[0] = 0;
        }
        $bestAreaTier4Value[0] = (array_sum($bestAreaTier4Area1) * 5 / 100);
        /* AREA 2*/
        if (isset($resultCategori5[1])) {
            $bestAreaTier4Area2[0] = $resultCategori5[1];
        }else{
            $bestAreaTier4Area2[0] = 0;
        }
        $bestAreaTier4Value[1] = (array_sum($bestAreaTier4Area2) * 5 / 100);
        /* AREA 3*/
        if (isset($resultCategori5[2])) {
            $bestAreaTier4Area3[0] = $resultCategori5[2];
        }else{
            $bestAreaTier4Area3[0] = 0;
        }
        $bestAreaTier4Value[2] = (array_sum($bestAreaTier4Area3) * 5 / 100);
        /* AREA 4*/
        if (isset($resultCategori5[3])) {
            $bestAreaTier4Area4[0] = $resultCategori5[3];
        }else{
            $bestAreaTier4Area4[0] = 0;
        }
        $bestAreaTier4Value[3] = (array_sum($bestAreaTier4Area4) * 5 / 100);

        $bestAreaResult[0] = 
            $bestAreaTier1Value[0] + 
            $bestAreaTier2Value[0] +
            $bestAreaTier3Value[0] +
            $bestAreaTier4Value[0] 
        ;
        $bestAreaResult[1] = 
            $bestAreaTier1Value[1] + 
            $bestAreaTier2Value[1] +
            $bestAreaTier3Value[1] +
            $bestAreaTier4Value[1] 
        ;
        $bestAreaResult[2] = 
            $bestAreaTier1Value[2] + 
            $bestAreaTier2Value[2] +
            $bestAreaTier3Value[2] +
            $bestAreaTier4Value[2]
        ;
        $bestAreaResult[3] = 
            $bestAreaTier1Value[3] + 
            $bestAreaTier2Value[3] +
            $bestAreaTier3Value[3] +
            $bestAreaTier4Value[3]
        ;

        $bestAreaWinnerResultValue = max($bestAreaResult);
        if (array_search(max($bestAreaResult), $bestAreaResult) == 0) {
            $bestAreaWinnerName = 1;
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 1) {
            $bestAreaWinnerName = 2;
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 2) {
            $bestAreaWinnerName = 3;
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 3) {
            $bestAreaWinnerName = 4;
        }else{
            $bestAreaWinnerName = 0;
        }   

        $data = array(
            /* data per rows */
            'nilaiCategori1' => $nilaiCategori1,
            'nilaiCategori2' => $nilaiCategori2,
            'nilaiCategori3' => $nilaiCategori3,
            'nilaiCategori4' => $nilaiCategori4,
            'nilaiCategori5' => $nilaiCategori5,
            'nilaiCategori6' => $nilaiCategori6,
            'nilaiCategori7' => $nilaiCategori7,
            'nilaiCategori8' => $nilaiCategori8,
            'nilaiCategori9' => $nilaiCategori9,
            'nilaiCategori10' => $nilaiCategori10,
            /* walk in result */
            'walkInWinnerResult' => $walkInWinnerResult,
            'walkInWinnerName' => $walkInWinnerName,
            'walkInWinnerResultValue' => $walkInWinnerResultValue,
            /*call center result */
            'callCenterWinnerResult' => $callCenterWinnerResult,
            'callCenterWinnerName' => $callCenterWinnerName,
            'callCenterWinnerResultValue' => $callCenterWinnerResultValue,
            /* best area result */
            'bestAreaTier1Value' => $bestAreaTier1Value,
            'bestAreaTier2Value' => $bestAreaTier2Value,
            'bestAreaTier3Value' => $bestAreaTier3Value,
            'bestAreaTier4Value' => $bestAreaTier4Value,
            'bestAreaResult' => $bestAreaResult,
            'bestAreaWinnerResultValue' => $bestAreaWinnerResultValue,
            'bestAreaWinnerName' => $bestAreaWinnerName
        );
    
        return view('backend.pages.unit-score.index',
            compact(
                'unitScore',
                'tops',
                'topCategory',
                'nilaiCategori1',
                'nilaiCategori2',
                'nilaiCategori3',
                'nilaiCategori4',
                'nilaiCategori5',
                'nilaiCategori6',
                'nilaiCategori7',
                'nilaiCategori8',
                'nilaiCategori9',
                'nilaiCategori10',
                'resultCategori1',
                'resultCategori2',
                'resultCategori3',
                'resultCategori4',
                'resultCategori5',
                'resultCategori6',
                'resultCategori7',
                'resultCategori8',
                'resultCategori9',
                'resultCategori10',
                'walkInWinnerResult','walkInWinnerName','walkInWinnerResultValue',
                'callCenterWinnerResult','callCenterWinnerName','callCenterWinnerResultValue',
                'bestAreaTier1Value','bestAreaTier2Value','bestAreaTier3Value','bestAreaTier4Value','bestAreaResult','bestAreaWinnerResultValue','bestAreaWinnerName'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.unit-score.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'category_id' => 'required',
            'type' => 'required',
            'area' => 'required',
            'location' => 'required',
            'total_score' => 'required',
        ]);
        $category = $request->input('category_id');
        $area = $request->input('area');
        if (UnitScore::where('area',$area)->where('category_id',$category)->count() > 0 ){
            Session::flash("flash_notification", [
                "level" => "danger",
                "message" => "Cant create new unit"
            ]);   
            return redirect('unit-score');
        }else{
            $unit = new UnitScore();
            $unit->category_id = $request->input('category_id');
            $unit->type = $request->input('type');
            $unit->area = $request->input('area');
            $unit->location = $request->input('location');
            $unit->total_score = $request->input('total_score');
            $unit->save();
            \Flash::success('Unit score with category ID: ' . $request->get('category_id') .  ' Added.');
            
            return redirect('unit-score');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = UnitScore::findOrFail(decrypt($id));
        return view('backend.pages.unit-score.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'type' => 'required',
            'area' => 'required',
            'location' => 'required',
            'total_score' => 'required',
            
        ]);
        $unit = UnitScore::findOrFail($id);
        $unit->category_id = $request->input('category_id');
        $unit->type = $request->input('type');
        $unit->area = $request->input('area');
        $unit->location = $request->input('location');
        $unit->total_score = $request->input('total_score');
        $unit->save();
        \Flash::success('Unit ID: '. $unit->id . ' Edited.');
        return redirect('unit-score');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = UnitScore::find($id);
        UnitScore::find($id)->delete();
        \Flash::success('Unit ID: '. $unit->id .' Deleted.');
        return redirect('unit-score');
    }
}
