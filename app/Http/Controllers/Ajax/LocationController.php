<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\WardRepositoryInterface as WardRepository;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $districtRepository;
    protected $provinceRepository;
    protected $wardRepository;
    public function __construct(
        DistrictRepository $districtRepository,
        ProvinceRepository $provinceRepository,
        WardRepository $wardRepository
    )
    {
       $this->districtRepository = $districtRepository; 
       $this->provinceRepository = $provinceRepository; 
       $this->wardRepository = $wardRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function getLocation(Request $request)
    {
        $get = $request->input();
        $html = '';
        if($get['target'] == 'districts'){
            $province = $this->provinceRepository->findById($get['data']['location_id'],['code','name'],['districts']);
            $html =  $this->renderHtml($province->districts);
        }else if($get['target'] == 'wards'){
            $district = $this->districtRepository->findById($get['data']['location_id'],['code','name'],['wards']);
            $html = $this->renderHtml($district->wards,'[Chọn Phường/Xã]');
        }
        $response = [
            'html' => $html
        ];
        return response()->json($response);
    }
    public function renderHTML($localtions, $root = '[Chọn Quận/Huyện]'){
        $html = '<option value="0">'.$root.'</option>';
        foreach($localtions as $localtion){
            $html .= '<option value="' . $localtion->code.'">' . $localtion->name.'</option>';
        }
        return $html;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
