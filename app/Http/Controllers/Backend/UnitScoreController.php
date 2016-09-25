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
        $walkInWinner = array();
        $callCenterWinner = array();

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
        
        /* data from category 1 */
        $cat1Area1 = UnitScore::where('area', 1)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->get();
        $cat1Area2 = UnitScore::where('area', 2)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->get();
        $cat1Area3 = UnitScore::where('area', 3)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->get();
        $cat1Area4 = UnitScore::where('area', 4)->where('category_id', 1)->orderBy('total_score','desc')->take(1)->get(); 

        foreach ($cat1Area1 as $dataCat1Area1) {
            if ($dataCat1Area1->total_score >= $topCategory1->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat1Area1->total_score < $topCategory1->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori1[0] = $tempNilaiArea1;
        }
        foreach ($cat1Area2 as $dataCat1Area2) {
            if ($dataCat1Area2->total_score >= $topCategory1->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat1Area2->total_score < $topCategory1->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori1[1] = $tempNilaiArea2;
        }
        foreach ($cat1Area3 as $dataCat1Area3) {
            if ($dataCat1Area3->total_score >= $topCategory1->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat1Area3->total_score < $topCategory1->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori1[2] = $tempNilaiArea3;
        }
        foreach ($cat1Area4 as $dataCat1Area4) {
            if ($dataCat1Area4->total_score >= $topCategory1->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat1Area4->total_score < $topCategory1->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori1[3] = $tempNilaiArea4;
        }

        /* data from category 2 */
        $cat2Area1 = UnitScore::where('area', 1)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->get();
        $cat2Area2 = UnitScore::where('area', 2)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->get();
        $cat2Area3 = UnitScore::where('area', 3)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->get();
        $cat2Area4 = UnitScore::where('area', 4)->where('category_id', 2)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat2Area1 as $dataCat2Area1) {
            if ($dataCat2Area1->total_score >= $topCategory2->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat2Area1->total_score < $topCategory2->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori2[0] = $tempNilaiArea1;
        }
        foreach ($cat2Area2 as $dataCat2Area2) {
            if ($dataCat2Area2->total_score >= $topCategory2->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat2Area2->total_score < $topCategory2->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori2[1] = $tempNilaiArea2;
        }
        foreach ($cat2Area3 as $dataCat2Area3) {
            if ($dataCat2Area3->total_score >= $topCategory2->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat2Area3->total_score < $topCategory2->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori2[2] = $tempNilaiArea3;
        }
        foreach ($cat2Area4 as $dataCat2Area4) {
            if ($dataCat2Area4->total_score >= $topCategory2->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat2Area4->total_score < $topCategory2->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori2[3] = $tempNilaiArea4;
        }
        /* data from category 3 */
        $cat3Area1 = UnitScore::where('area', 1)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->get();
        $cat3Area2 = UnitScore::where('area', 2)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->get();
        $cat3Area3 = UnitScore::where('area', 3)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->get();
        $cat3Area4 = UnitScore::where('area', 4)->where('category_id', 3)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat3Area1 as $dataCat3Area1) {
            if ($dataCat3Area1->total_score >= $topCategory3->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat3Area1->total_score < $topCategory3->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori3[0] = $tempNilaiArea1;
        }
        foreach ($cat3Area2 as $dataCat3Area2) {
            if ($dataCat3Area2->total_score >= $topCategory3->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat3Area2->total_score < $topCategory3->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori3[1] = $tempNilaiArea2;
        }
        foreach ($cat3Area3 as $dataCat3Area3) {
            if ($dataCat3Area3->total_score >= $topCategory3->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat3Area3->total_score < $topCategory3->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori3[2] = $tempNilaiArea3;
        }
        foreach ($cat3Area4 as $dataCat3Area4) {
            if ($dataCat3Area4->total_score >= $topCategory3->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat3Area4->total_score < $topCategory3->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori3[3] = $tempNilaiArea4;
        }
        /* data from category 4 */
        $cat4Area1 = UnitScore::where('area', 1)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->get();
        $cat4Area2 = UnitScore::where('area', 2)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->get();
        $cat4Area3 = UnitScore::where('area', 3)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->get();
        $cat4Area4 = UnitScore::where('area', 4)->where('category_id', 4)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat4Area1 as $dataCat4Area1) {
            if ($dataCat4Area1->total_score >= $topCategory4->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat4Area1->total_score < $topCategory4->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori4[0] = $tempNilaiArea1;
        }
        foreach ($cat4Area2 as $dataCat4Area2) {
            if ($dataCat4Area2->total_score >= $topCategory4->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat4Area2->total_score < $topCategory4->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori4[1] = $tempNilaiArea2;
        }
        foreach ($cat4Area3 as $dataCat4Area3) {
            if ($dataCat4Area3->total_score >= $topCategory4->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat4Area3->total_score < $topCategory4->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori4[2] = $tempNilaiArea3;
        }
        foreach ($cat4Area4 as $dataCat4Area4) {
            if ($dataCat4Area4->total_score >= $topCategory4->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat4Area4->total_score < $topCategory4->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori4[3] = $tempNilaiArea4;
        }
        /* data from category 5 */
        $cat5Area1 = UnitScore::where('area', 1)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->get();
        $cat5Area2 = UnitScore::where('area', 2)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->get();
        $cat5Area3 = UnitScore::where('area', 3)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->get();
        $cat5Area4 = UnitScore::where('area', 4)->where('category_id', 5)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat5Area1 as $dataCat5Area1) {
            if ($dataCat5Area1->total_score >= $topCategory5->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat5Area1->total_score < $topCategory5->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori5[0] = $tempNilaiArea1;
        }
        foreach ($cat5Area2 as $dataCat5Area2) {
            if ($dataCat5Area2->total_score >= $topCategory5->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat5Area2->total_score < $topCategory5->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori5[1] = $tempNilaiArea2;
        }
        foreach ($cat5Area3 as $dataCat5Area3) {
            if ($dataCat5Area3->total_score >= $topCategory5->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat5Area3->total_score < $topCategory5->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori5[2] = $tempNilaiArea3;
        }
        foreach ($cat5Area4 as $dataCat5Area4) {
            if ($dataCat5Area4->total_score >= $topCategory5->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat5Area4->total_score < $topCategory5->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori5[3] = $tempNilaiArea4;
        }
        /* data from category 6 */
        $cat6Area1 = UnitScore::where('area', 1)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->get();
        $cat6Area2 = UnitScore::where('area', 2)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->get();
        $cat6Area3 = UnitScore::where('area', 3)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->get();
        $cat6Area4 = UnitScore::where('area', 4)->where('category_id', 6)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat6Area1 as $dataCat6Area1) {
            if ($dataCat6Area1->total_score >= $topCategory6->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat6Area1->total_score < $topCategory6->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori6[0] = $tempNilaiArea1;
        }
        foreach ($cat6Area2 as $dataCat6Area2) {
            if ($dataCat6Area2->total_score >= $topCategory6->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat6Area2->total_score < $topCategory6->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori6[1] = $tempNilaiArea2;
        }
        foreach ($cat6Area3 as $dataCat6Area3) {
            if ($dataCat6Area3->total_score >= $topCategory6->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat6Area3->total_score < $topCategory6->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori6[2] = $tempNilaiArea3;
        }
        foreach ($cat6Area4 as $dataCat6Area4) {
            if ($dataCat6Area4->total_score >= $topCategory6->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat6Area4->total_score < $topCategory6->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori6[3] = $tempNilaiArea4;
        }

        /* data from category 7 */
        $cat7Area1 = UnitScore::where('area', 1)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->get();
        $cat7Area2 = UnitScore::where('area', 2)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->get();
        $cat7Area3 = UnitScore::where('area', 3)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->get();
        $cat7Area4 = UnitScore::where('area', 4)->where('category_id', 7)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat7Area1 as $dataCat7Area1) {
            if ($dataCat7Area1->total_score >= $topCategory7->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat7Area1->total_score < $topCategory7->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori7[0] = $tempNilaiArea1;
        }
        foreach ($cat7Area2 as $dataCat7Area2) {
            if ($dataCat7Area2->total_score >= $topCategory7->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat7Area2->total_score < $topCategory7->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori7[1] = $tempNilaiArea2;
        }
        foreach ($cat7Area3 as $dataCat7Area3) {
            if ($dataCat7Area3->total_score >= $topCategory7->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat7Area3->total_score < $topCategory7->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori7[2] = $tempNilaiArea3;
        }
        foreach ($cat7Area4 as $dataCat7Area4) {
            if ($dataCat7Area4->total_score >= $topCategory7->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat7Area4->total_score < $topCategory7->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori7[3] = $tempNilaiArea4;
        }
        /* data from category 8 */
        $cat8Area1 = UnitScore::where('area', 1)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->get();
        $cat8Area2 = UnitScore::where('area', 2)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->get();
        $cat8Area3 = UnitScore::where('area', 3)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->get();
        $cat8Area4 = UnitScore::where('area', 4)->where('category_id', 8)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat8Area1 as $dataCat8Area1) {
            if ($dataCat8Area1->total_score >= $topCategory8->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat8Area1->total_score < $topCategory8->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori8[0] = $tempNilaiArea1;
        }
        foreach ($cat8Area2 as $dataCat8Area2) {
            if ($dataCat8Area2->total_score >= $topCategory8->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat8Area2->total_score < $topCategory8->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori8[1] = $tempNilaiArea2;
        }
        foreach ($cat8Area3 as $dataCat8Area3) {
            if ($dataCat8Area3->total_score >= $topCategory8->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat8Area3->total_score < $topCategory8->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori8[2] = $tempNilaiArea3;
        }
        foreach ($cat8Area4 as $dataCat8Area4) {
            if ($dataCat8Area4->total_score >= $topCategory8->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat8Area4->total_score < $topCategory8->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori8[3] = $tempNilaiArea4;
        }
        /* data from category 9 */
        $cat9Area1 = UnitScore::where('area', 1)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->get();
        $cat9Area2 = UnitScore::where('area', 2)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->get();
        $cat9Area3 = UnitScore::where('area', 3)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->get();
        $cat9Area4 = UnitScore::where('area', 4)->where('category_id', 9)->orderBy('total_score','desc')->take(1)->get();        
        foreach ($cat9Area1 as $dataCat9Area1) {
            if ($dataCat9Area1->total_score <= $topCategory9->total_score) {
                $tempNilaiArea1 = 1;
            }elseif ($dataCat9Area1->total_score < $topCategory9->total_score) {
                $tempNilaiArea1 = 0;
            }
            $nilaiCategori9[0] = $tempNilaiArea1;
        }
        foreach ($cat9Area2 as $dataCat9Area2) {
            if ($dataCat9Area2->total_score >= $topCategory9->total_score) {
                $tempNilaiArea2 = 1;
            }elseif ($dataCat9Area2->total_score < $topCategory9->total_score) {
                $tempNilaiArea2 = 0;
            }
            $nilaiCategori9[1] = $tempNilaiArea2;
        }
        foreach ($cat9Area3 as $dataCat9Area3) {
            if ($dataCat9Area3->total_score >= $topCategory9->total_score) {
                $tempNilaiArea3 = 1;
            }elseif ($dataCat9Area3->total_score < $topCategory9->total_score) {
                $tempNilaiArea3 = 0;
            }
            $nilaiCategori9[2] = $tempNilaiArea3;
        }
        foreach ($cat9Area4 as $dataCat9Area4) {
            if ($dataCat9Area4->total_score >= $topCategory9->total_score) {
                $tempNilaiArea4 = 1;
            }elseif ($dataCat9Area4->total_score < $topCategory9->total_score) {
                $tempNilaiArea4 = 0;
            }
            $nilaiCategori9[3] = $tempNilaiArea4;
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

        echo "CALL CENTER ";
        echo "<br>";
        print_r($nilaiCategori6);
        echo "<br>";
        print_r($nilaiCategori7);
        echo "<br>";
        print_r($nilaiCategori8);
        echo "<br>";
        print_r($nilaiCategori9);
        

        $winnerValuesWalkIn = array(
            'nilaiCategori1' => $nilaiCategori1,
            'nilaiCategori2' => $nilaiCategori2,
            'nilaiCategori3' => $nilaiCategori3,
            'nilaiCategori4' => $nilaiCategori4,
            'nilaiCategori5' => $nilaiCategori5,
        );
        $winnerValuesCallCenter = array(
            'nilaiCategori6' => $nilaiCategori6,
            'nilaiCategori7' => $nilaiCategori7,
            'nilaiCategori8' => $nilaiCategori8,
            'nilaiCategori9' => $nilaiCategori9,
        );
        //return view('backend.pages.unit-score.index',compact('unitScore','tops','topCategory', 'winnerValuesWalkIn', 'winnerValuesCallCenter'));
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