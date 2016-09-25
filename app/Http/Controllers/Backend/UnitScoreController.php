<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\UnitScore;
use App\UnitCategory;
use App\UnitCategoryParent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
            if ($cat1Area1->total_score >= $topCategory1->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat1Area1->total_score < $topCategory1->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori1[0] = $tempNilaiArea1;


            if ($cat1Area2->total_score >= $topCategory1->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat1Area2->total_score < $topCategory1->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori1[1] = $tempNilaiArea2;


            if ($cat1Area3->total_score >= $topCategory1->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat1Area3->total_score < $topCategory1->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori1[2] = $tempNilaiArea3;

        
            if ($cat1Area4->total_score >= $topCategory1->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat1Area4->total_score < $topCategory1->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori1[3] = $tempNilaiArea4;
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
            if ($cat2Area1->total_score >= $topCategory2->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat2Area1->total_score < $topCategory2->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori2[0] = $tempNilaiArea1;
        
        
            if ($cat2Area2->total_score >= $topCategory2->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat2Area2->total_score < $topCategory2->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori2[1] = $tempNilaiArea2;
        
        
            if ($cat2Area3->total_score >= $topCategory2->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat2Area3->total_score < $topCategory2->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori2[2] = $tempNilaiArea3;        
        
            if ($cat2Area4->total_score >= $topCategory2->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat2Area4->total_score < $topCategory2->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori2[3] = $tempNilaiArea4;
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
            if ($cat3Area1->total_score >= $topCategory3->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat3Area1->total_score < $topCategory3->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori3[0] = $tempNilaiArea1;
        
        
            if ($cat3Area2->total_score >= $topCategory3->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat3Area2->total_score < $topCategory3->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori3[1] = $tempNilaiArea2;
        
        
            if ($cat3Area3->total_score >= $topCategory3->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat3Area3->total_score < $topCategory3->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori3[2] = $tempNilaiArea3;
        
        
            if ($cat3Area4->total_score >= $topCategory3->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat3Area4->total_score < $topCategory3->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori3[3] = $tempNilaiArea4;
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
            if ($cat4Area1->total_score >= $topCategory4->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat4Area1->total_score < $topCategory4->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori4[0] = $tempNilaiArea1;        
        
            if ($cat4Area2->total_score >= $topCategory4->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat4Area2->total_score < $topCategory4->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori4[1] = $tempNilaiArea2;        
        
            if ($cat4Area3->total_score >= $topCategory4->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat4Area3->total_score < $topCategory4->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori4[2] = $tempNilaiArea3;        
        
            if ($cat4Area4->total_score >= $topCategory4->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat4Area4->total_score < $topCategory4->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori4[3] = $tempNilaiArea4;
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
            if ($cat5Area1->total_score >= $topCategory5->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat5Area1->total_score < $topCategory5->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori5[0] = $tempNilaiArea1;
        
        
            if ($cat5Area2->total_score >= $topCategory5->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat5Area2->total_score < $topCategory5->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori5[1] = $tempNilaiArea2;
        
        
            if ($cat5Area3->total_score >= $topCategory5->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat5Area3->total_score < $topCategory5->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori5[2] = $tempNilaiArea3;
        
        
            if ($cat5Area4->total_score >= $topCategory5->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat5Area4->total_score < $topCategory5->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori5[3] = $tempNilaiArea4;
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
            if ($cat6Area1->total_score >= $topCategory6->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat6Area1->total_score < $topCategory6->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori6[0] = $tempNilaiArea1;
        
        
            if ($cat6Area2->total_score >= $topCategory6->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat6Area2->total_score < $topCategory6->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori6[1] = $tempNilaiArea2;
        
        
            if ($cat6Area3->total_score >= $topCategory6->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat6Area3->total_score < $topCategory6->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori6[2] = $tempNilaiArea3;
        
        
            if ($cat6Area4->total_score >= $topCategory6->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat6Area4->total_score < $topCategory6->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori6[3] = $tempNilaiArea4;
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
            if ($cat7Area1->total_score >= $topCategory7->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat7Area1->total_score < $topCategory7->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori7[0] = $tempNilaiArea1;
        
        
            if ($cat7Area2->total_score >= $topCategory7->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat7Area2->total_score < $topCategory7->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori7[1] = $tempNilaiArea2;
        
        
            if ($cat7Area3->total_score >= $topCategory7->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat7Area3->total_score < $topCategory7->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori7[2] = $tempNilaiArea3;
        
        
            if ($cat7Area4->total_score >= $topCategory7->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat7Area4->total_score < $topCategory7->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori7[3] = $tempNilaiArea4;
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
            if ($cat8Area1->total_score >= $topCategory8->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat8Area1->total_score < $topCategory8->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori8[0] = $tempNilaiArea1;
        
        
            if ($cat8Area2->total_score >= $topCategory8->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat8Area2->total_score < $topCategory8->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori8[1] = $tempNilaiArea2;
        
        
            if ($cat8Area3->total_score >= $topCategory8->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat8Area3->total_score < $topCategory8->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori8[2] = $tempNilaiArea3;
        
        
            if ($cat8Area4->total_score >= $topCategory8->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat8Area4->total_score < $topCategory8->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori8[3] = $tempNilaiArea4;
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
            if ($cat9Area1->total_score <= $topCategory9->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat9Area1->total_score < $topCategory9->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori9[0] = $tempNilaiArea1;
        
        
            if ($cat9Area2->total_score >= $topCategory9->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat9Area2->total_score < $topCategory9->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori9[1] = $tempNilaiArea2;
        
        
            if ($cat9Area3->total_score >= $topCategory9->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat9Area3->total_score < $topCategory9->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori9[2] = $tempNilaiArea3;
        
        
            if ($cat9Area4->total_score >= $topCategory9->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat9Area4->total_score < $topCategory9->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori9[3] = $tempNilaiArea4;
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

            if ($cat10Area1->total_score <= $topCategory10->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($cat10Area1->total_score < $topCategory10->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori10[0] = $tempNilaiArea1;
        
        
            if ($cat10Area2->total_score >= $topCategory10->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($cat10Area2->total_score < $topCategory10->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori10[1] = $tempNilaiArea2;
        
        
            if ($cat10Area3->total_score >= $topCategory10->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($cat10Area3->total_score < $topCategory10->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori10[2] = $tempNilaiArea3;
        
        
            if ($cat10Area4->total_score >= $topCategory10->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($cat10Area4->total_score < $topCategory10->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori10[3] = $tempNilaiArea4;
        } catch (Exception $e) {
            $nilaiCategori10[0] = 0;
            $nilaiCategori10[1] = 0;
            $nilaiCategori10[2] = 0;
            $nilaiCategori10[3] = 0;
        }

        /* WALK IN */
        /* AREA 1*/
        if ($nilaiCategori1[0] == 1) {
            $walkInWinnerArea1[0] = $cat1Area1->unitCategory->coeficient;
        }else{
            $walkInWinnerArea1[0] = 0;
        }
        if ($nilaiCategori2[0] == 1) {
            $walkInWinnerArea1[1] = $cat2Area1->unitCategory->coeficient;
        }else{
            $walkInWinnerArea1[1] = 0;
        }
        if ($nilaiCategori3[0] == 1) {
            $walkInWinnerArea1[2] = $cat3Area1->unitCategory->coeficient;
        }else{
            $walkInWinnerArea1[2] = 0;
        }
        if ($nilaiCategori4[0] == 1) {
            $walkInWinnerArea1[3] = $cat4Area1->unitCategory->coeficient;
        }else{
            $walkInWinnerArea1[3] = 0;
        }
        if ($nilaiCategori5[0] == 1) {
            $walkInWinnerArea1[4] = $cat5Area1->unitCategory->coeficient;
        }else{
            $walkInWinnerArea1[4] = 0;
        }
        $walkInWinnerResult[0] = array_sum($walkInWinnerArea1);

        /* AREA 2*/
        if ($nilaiCategori1[1] == 1) {
            $walkInWinnerArea2[0] = $cat1Area2->unitCategory->coeficient;
        }else{
            $walkInWinnerArea2[0] = 0;
        }
        if ($nilaiCategori2[1] == 1) {
            $walkInWinnerArea2[1] = $cat2Area2->unitCategory->coeficient;
        }else{
            $walkInWinnerArea2[1] = 0;
        }
        if ($nilaiCategori3[1] == 1) {
            $walkInWinnerArea2[2] = $cat3Area2->unitCategory->coeficient;
        }else{
            $walkInWinnerArea2[2] = 0;
        }
        if ($nilaiCategori4[1] == 1) {
            $walkInWinnerArea2[3] = $cat4Area2->unitCategory->coeficient;
        }else{
            $walkInWinnerArea2[3] = 0;
        }
        if ($nilaiCategori5[1] == 1) {
            $walkInWinnerArea2[4] = $cat5Area2->unitCategory->coeficient;
        }else{
            $walkInWinnerArea2[4] = 0;
        }
        $walkInWinnerResult[1] = array_sum($walkInWinnerArea2);

        /* AREA 3*/
        if ($nilaiCategori1[2] == 1) {
            $walkInWinnerArea3[0] = $cat1Area3->unitCategory->coeficient;
        }else{
            $walkInWinnerArea3[0] = 0;
        }
        if ($nilaiCategori2[2] == 1) {
            $walkInWinnerArea3[1] = $cat2Area3->unitCategory->coeficient;
        }else{
            $walkInWinnerArea3[1] = 0;
        }
        if ($nilaiCategori3[2] == 1) {
            $walkInWinnerArea3[2] = $cat3Area3->unitCategory->coeficient;
        }else{
            $walkInWinnerArea3[2] = 0;
        }
        if ($nilaiCategori4[2] == 1) {
            $walkInWinnerArea3[3] = $cat4Area3->unitCategory->coeficient;
        }else{
            $walkInWinnerArea3[3] = 0;
        }
        if ($nilaiCategori5[2] == 1) {
            $walkInWinnerArea3[4] = $cat5Area3->unitCategory->coeficient;
        }else{
            $walkInWinnerArea3[4] = 0;
        }
        $walkInWinnerResult[2] = array_sum($walkInWinnerArea3);

        /* AREA 3*/
        if ($nilaiCategori1[3] == 1) {
            $walkInWinnerArea4[0] = $cat1Area4->unitCategory->coeficient;
        }else{
            $walkInWinnerArea4[0] = 0;
        }
        if ($nilaiCategori2[3] == 1) {
            $walkInWinnerArea4[1] = $cat2Area4->unitCategory->coeficient;
        }else{
            $walkInWinnerArea4[1] = 0;
        }
        if ($nilaiCategori3[3] == 1) {
            $walkInWinnerArea4[2] = $cat3Area4->unitCategory->coeficient;
        }else{
            $walkInWinnerArea4[2] = 0;
        }
        if ($nilaiCategori4[3] == 1) {
            $walkInWinnerArea4[3] = $cat4Area4->unitCategory->coeficient;
        }else{
            $walkInWinnerArea4[3] = 0;
        }
        if ($nilaiCategori5[3] == 1) {
            $walkInWinnerArea4[4] = $cat5Area4->unitCategory->coeficient;
        }else{
            $walkInWinnerArea4[4] = 0;
        }
        $walkInWinnerResult[3] = array_sum($walkInWinnerArea4);        
        //return $walkInWinnerResult;
        $walkInWinnerResultValue = max($walkInWinnerResult);
        if (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 0) {
            $walkInWinnerName = "AREA 1";
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 1) {
            $walkInWinnerName = "AREA 2";
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 2) {
            $walkInWinnerName = "AREA 3";
        }elseif (array_search(max($walkInWinnerResult), $walkInWinnerResult) == 3) {
            $walkInWinnerName = "AREA 4";
        }

        /* CALL CENTER */
        /* AREA 1*/
        if ($nilaiCategori6[0] == 1) {
            $callCenterWinnerArea1[0] = $cat6Area1->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea1[0] = 0;
        }
        if ($nilaiCategori7[0] == 1) {
            $callCenterWinnerArea1[1] = $cat7Area1->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea1[1] = 0;
        }
        if ($nilaiCategori8[0] == 1) {
            $callCenterWinnerArea1[2] = $cat8Area1->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea1[2] = 0;
        }
        if ($nilaiCategori9[0] == 1) {
            $callCenterWinnerArea1[3] = $cat9Area1->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea1[3] = 0;
        }
        $callCenterWinnerResult[0] = array_sum($callCenterWinnerArea1);
        /* AREA 2*/
        if ($nilaiCategori6[1] == 1) {
            $callCenterWinnerArea2[0] = $cat6Area2->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea2[0] = 0;
        }
        if ($nilaiCategori7[1] == 1) {
            $callCenterWinnerArea2[1] = $cat7Area2->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea2[1] = 0;
        }
        if ($nilaiCategori8[1] == 1) {
            $callCenterWinnerArea2[2] = $cat8Area2->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea2[2] = 0;
        }
        if ($nilaiCategori9[1] == 1) {
            $callCenterWinnerArea2[3] = $cat9Area2->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea2[3] = 0;
        }
        $callCenterWinnerResult[1] = array_sum($callCenterWinnerArea2);
        /* AREA 2*/
        if ($nilaiCategori6[2] == 1) {
            $callCenterWinnerArea3[0] = $cat6Area3->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea3[0] = 0;
        }
        if ($nilaiCategori7[2] == 1) {
            $callCenterWinnerArea3[1] = $cat7Area3->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea3[1] = 0;
        }
        if ($nilaiCategori8[2] == 1) {
            $callCenterWinnerArea3[2] = $cat8Area3->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea3[2] = 0;
        }
        if ($nilaiCategori9[2] == 1) {
            $callCenterWinnerArea3[3] = $cat9Area3->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea3[3] = 0;
        }
        $callCenterWinnerResult[2] = array_sum($callCenterWinnerArea3);
        /* AREA 2*/
        if ($nilaiCategori6[3] == 1) {
            $callCenterWinnerArea4[0] = $cat6Area4->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea4[0] = 0;
        }
        if ($nilaiCategori7[3] == 1) {
            $callCenterWinnerArea4[1] = $cat7Area4->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea4[1] = 0;
        }
        if ($nilaiCategori8[3] == 1) {
            $callCenterWinnerArea4[2] = $cat8Area4->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea4[2] = 0;
        }
        if ($nilaiCategori9[3] == 1) {
            $callCenterWinnerArea4[3] = $cat9Area4->unitCategory->coeficient;
        }else{
            $callCenterWinnerArea4[3] = 0;
        }
        $callCenterWinnerResult[3] = array_sum($callCenterWinnerArea4);
        $callCenterWinnerResultValue = max($callCenterWinnerResult);
        if (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 0) {
            $callCenterWinnerName = "AREA 1";
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 1) {
            $callCenterWinnerName = "AREA 2";
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 2) {
            $callCenterWinnerName = "AREA 3";
        }elseif (array_search(max($callCenterWinnerResult), $callCenterWinnerResult) == 3) {
            $callCenterWinnerName = "AREA 4";
        }

        /*BEST AREA*/
        /*TIER 1*/
        /* AREA 1*/
        if ($nilaiCategori1[0] == 1) {
            $bestAreaTier1Area1[0] = 1;
        }else{
            $bestAreaTier1Area1[0] = 0;
        }
        if ($nilaiCategori2[0] == 1) {
            $bestAreaTier1Area1[1] = 1;
        }else{
            $bestAreaTier1Area1[1] = 0;
        }
        if ($nilaiCategori3[0] == 1) {
            $bestAreaTier1Area1[2] = 1;
        }else{
            $bestAreaTier1Area1[2] = 0;
        }
        if ($nilaiCategori6[0] == 1) {
            $bestAreaTier1Area1[3] = 1;
        }else{
            $bestAreaTier1Area1[3] = 0;
        }
        if ($nilaiCategori7[0] == 1) {
            $bestAreaTier1Area1[4] = 1;
        }else{
            $bestAreaTier1Area1[4] = 0;
        }
        $bestAreaTier1Value[0] = (array_sum($bestAreaTier1Area1) * 70) / 100;
        /* AREA 2*/
        if ($nilaiCategori1[1] == 1) {
            $bestAreaTier1Area2[0] = 1;
        }else{
            $bestAreaTier1Area2[0] = 0;
        }
        if ($nilaiCategori2[1] == 1) {
            $bestAreaTier1Area2[1] = 1;
        }else{
            $bestAreaTier1Area2[1] = 0;
        }
        if ($nilaiCategori3[1] == 1) {
            $bestAreaTier1Area2[2] = 1;
        }else{
            $bestAreaTier1Area2[2] = 0;
        }
        if ($nilaiCategori6[1] == 1) {
            $bestAreaTier1Area2[3] = 1;
        }else{
            $bestAreaTier1Area2[3] = 0;
        }
        if ($nilaiCategori7[1] == 1) {
            $bestAreaTier1Area2[4] = 1;
        }else{
            $bestAreaTier1Area2[4] = 0;
        }
        $bestAreaTier1Value[1] = (array_sum($bestAreaTier1Area2) * 70) / 100;
        /* AREA 3*/
        if ($nilaiCategori1[2] == 1) {
            $bestAreaTier1Area3[0] = 1;
        }else{
            $bestAreaTier1Area3[0] = 0;
        }
        if ($nilaiCategori2[2] == 1) {
            $bestAreaTier1Area3[1] = 1;
        }else{
            $bestAreaTier1Area3[1] = 0;
        }
        if ($nilaiCategori3[2] == 1) {
            $bestAreaTier1Area3[2] = 1;
        }else{
            $bestAreaTier1Area3[2] = 0;
        }
        if ($nilaiCategori6[2] == 1) {
            $bestAreaTier1Area3[3] = 1;
        }else{
            $bestAreaTier1Area3[3] = 0;
        }
        if ($nilaiCategori7[2] == 1) {
            $bestAreaTier1Area3[4] = 1;
        }else{
            $bestAreaTier1Area3[4] = 0;
        }
        $bestAreaTier1Value[2] = (array_sum($bestAreaTier1Area3) * 70) / 100;
        /* AREA 4*/
        if ($nilaiCategori1[3] == 1) {
            $bestAreaTier1Area4[0] = 1;
        }else{
            $bestAreaTier1Area4[0] = 0;
        }
        if ($nilaiCategori2[3] == 1) {
            $bestAreaTier1Area4[1] = 1;
        }else{
            $bestAreaTier1Area4[1] = 0;
        }
        if ($nilaiCategori3[3] == 1) {
            $bestAreaTier1Area4[2] = 1;
        }else{
            $bestAreaTier1Area4[2] = 0;
        }
        if ($nilaiCategori6[3] == 1) {
            $bestAreaTier1Area4[3] = 1;
        }else{
            $bestAreaTier1Area4[3] = 0;
        }
        if ($nilaiCategori7[3] == 1) {
            $bestAreaTier1Area4[4] = 1;
        }else{
            $bestAreaTier1Area4[4] = 0;
        }
        $bestAreaTier1Value[3] = (array_sum($bestAreaTier1Area4) * 70) / 100;
        /*TIER 2*/
        /* AREA 1*/
        if ($nilaiCategori4[0] == 1) {
            $bestAreaTier2Area1[0] = 1;
        }else{
            $bestAreaTier2Area1[0] = 0;
        }
        if ($nilaiCategori8[0] == 1) {
            $bestAreaTier2Area1[1] = 1;
        }else{
            $bestAreaTier2Area1[1] = 0;
        }
        if ($nilaiCategori9[0] == 1) {
            $bestAreaTier2Area1[2] = 1;
        }else{
            $bestAreaTier2Area1[2] = 0;
        }
        $bestAreaTier2Value[0] = (array_sum($bestAreaTier2Area1) * 15) / 100;
        /* AREA 2*/
        if ($nilaiCategori4[1] == 1) {
            $bestAreaTier2Area2[0] = 1;
        }else{
            $bestAreaTier2Area2[0] = 0;
        }
        if ($nilaiCategori8[1] == 1) {
            $bestAreaTier2Area2[1] = 1;
        }else{
            $bestAreaTier2Area2[1] = 0;
        }
        if ($nilaiCategori9[1] == 1) {
            $bestAreaTier2Area2[2] = 1;
        }else{
            $bestAreaTier2Area2[2] = 0;
        }
        $bestAreaTier2Value[1] = (array_sum($bestAreaTier2Area2) * 15) / 100;
        /* AREA 3*/
        if ($nilaiCategori4[2] == 1) {
            $bestAreaTier2Area3[0] = 1;
        }else{
            $bestAreaTier2Area3[0] = 0;
        }
        if ($nilaiCategori8[2] == 1) {
            $bestAreaTier2Area3[1] = 1;
        }else{
            $bestAreaTier2Area3[1] = 0;
        }
        if ($nilaiCategori9[2] == 1) {
            $bestAreaTier2Area3[2] = 1;
        }else{
            $bestAreaTier2Area3[2] = 0;
        }
        $bestAreaTier2Value[2] = (array_sum($bestAreaTier2Area3) * 15) / 100;
        /* AREA 4*/
        if ($nilaiCategori4[3] == 1) {
            $bestAreaTier2Area4[0] = 1;
        }else{
            $bestAreaTier2Area4[0] = 0;
        }
        if ($nilaiCategori8[3] == 1) {
            $bestAreaTier2Area4[1] = 1;
        }else{
            $bestAreaTier2Area4[1] = 0;
        }
        if ($nilaiCategori9[3] == 1) {
            $bestAreaTier2Area4[2] = 1;
        }else{
            $bestAreaTier2Area4[2] = 0;
        }
        $bestAreaTier2Value[3] = (array_sum($bestAreaTier2Area4) * 15) / 100;
        /* TIER 3*/
        /* AREA 1*/
        if ($nilaiCategori10[0] == 1) {
            $bestAreaTier3Area1[0] = 1;
        }else{
            $bestAreaTier3Area1[0] = 0;
        }
        $bestAreaTier3Value[0] = (array_sum($bestAreaTier3Area1) * 10) / 100;
        /* AREA 2*/
        if ($nilaiCategori10[1] == 1) {
            $bestAreaTier3Area2[0] = 1;
        }else{
            $bestAreaTier3Area2[0] = 0;
        }
        $bestAreaTier3Value[1] = (array_sum($bestAreaTier3Area2) * 10) / 100;
        /* AREA 3*/
        if ($nilaiCategori10[2] == 1) {
            $bestAreaTier3Area3[0] = 1;
        }else{
            $bestAreaTier3Area3[0] = 0;
        }
        $bestAreaTier3Value[2] = (array_sum($bestAreaTier3Area3) * 10) / 100;
        /* AREA 4*/
        if ($nilaiCategori10[3] == 1) {
            $bestAreaTier3Area4[0] = 1;
        }else{
            $bestAreaTier3Area4[0] = 0;
        }
        $bestAreaTier3Value[3] = (array_sum($bestAreaTier3Area4) * 10) / 100;
        /* TIER 4*/
        /* AREA 1*/
        if ($nilaiCategori5[0] == 1) {
            $bestAreaTier4Area1[0] = 1;
        }else{
            $bestAreaTier4Area1[0] = 0;
        }
        $bestAreaTier4Value[0] = (array_sum($bestAreaTier4Area1) * 5) / 100;
        /* AREA 2*/
        if ($nilaiCategori5[1] == 1) {
            $bestAreaTier4Area2[0] = 1;
        }else{
            $bestAreaTier4Area2[0] = 0;
        }
        $bestAreaTier4Value[1] = (array_sum($bestAreaTier4Area2) * 5) / 100;
        /* AREA 3*/
        if ($nilaiCategori5[2] == 1) {
            $bestAreaTier4Area3[0] = 1;
        }else{
            $bestAreaTier4Area3[0] = 0;
        }
        $bestAreaTier4Value[2] = (array_sum($bestAreaTier4Area3) * 5) / 100;
        /* AREA 4*/
        if ($nilaiCategori5[3] == 1) {
            $bestAreaTier4Area4[0] = 1;
        }else{
            $bestAreaTier4Area4[0] = 0;
        }
        $bestAreaTier4Value[3] = (array_sum($bestAreaTier4Area4) * 5) / 100;

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
            $bestAreaWinnerName = "AREA 1";
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 1) {
            $bestAreaWinnerName = "AREA 2";
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 2) {
            $bestAreaWinnerName = "AREA 3";
        }elseif (array_search(max($bestAreaResult), $bestAreaResult) == 3) {
            $bestAreaWinnerName = "AREA 4";
        }

        echo "WALK IN ";
        echo "<br>";
        print_r($nilaiCategori1);
        echo "<br>";
        print_r($nilaiCategori2);
        echo "<br>";
        print_r($nilaiCategori3);
        echo "<br>";
        print_r($nilaiCategori4);
        echo "<br>";
        print_r($nilaiCategori5);
        echo "<br>";
        print_r($walkInWinnerResult);
        echo "<br>";
        echo $walkInWinnerName . " IS THE WINNER - ". $walkInWinnerResultValue . "% COEFFICIENT";
        echo "<br>";

        echo "CALL CENTER ";
        echo "<br>";
        print_r($nilaiCategori6);
        echo "<br>";
        print_r($nilaiCategori7);
        echo "<br>";
        print_r($nilaiCategori8);
        echo "<br>";
        print_r($nilaiCategori9);
        echo "<br>";
        print_r($callCenterWinnerResult);
        echo "<br>";
        echo $callCenterWinnerName . " IS THE WINNER - ". $callCenterWinnerResultValue . "% COEFFICIENT";
        echo "<br>";

        echo "AREA TIER 1 ";
        echo "<br>";
        print_r($nilaiCategori1);
        echo "<br>";
        print_r($nilaiCategori2);
        echo "<br>";
        print_r($nilaiCategori3);
        echo "<br>";
        print_r($nilaiCategori6);
        echo "<br>";
        print_r($nilaiCategori7);
        echo "<br>";
        print_r($bestAreaTier1Value);
        echo "<br>";

        echo "AREA TIER 2 ";
        echo "<br>";
        print_r($nilaiCategori4);
        echo "<br>";
        print_r($nilaiCategori8);
        echo "<br>";
        print_r($nilaiCategori9);
        echo "<br>";
        print_r($bestAreaTier2Value);
        echo "<br>";

        echo "AREA TIER 3 ";
        echo "<br>";
        print_r($nilaiCategori10);
        echo "<br>";
        print_r($bestAreaTier3Value);
        echo "<br>";

        echo "AREA TIER 4 ";
        echo "<br>";
        print_r($nilaiCategori5);
        echo "<br>";
        print_r($bestAreaTier4Value);
        echo "<br>";
        echo "<br>";
        print_r($bestAreaResult);
        echo "<br>";
        echo $bestAreaWinnerName . " IS THE WINNER - ". $bestAreaWinnerResultValue . "% VALUE";
        echo "<br>";      
        

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
            'bestAreaWinnerName' => $bestAreaWinnerName,
        );
        //return view('backend.pages.unit-score.index',compact('unitScore','tops','topCategory', 'data'));
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


        ]);
        UnitScore::create($request->all());
        \Flash::success('Unit score with category ID: ' . $request->get('category_id') .  ' Added.');
        return redirect('unit-score');
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

        ]);
        $unit = UnitScore::findOrFail($id);
        $unit->update($request->all());
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
