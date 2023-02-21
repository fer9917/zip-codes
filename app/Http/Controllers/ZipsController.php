<?php

namespace App\Http\Controllers;

use App\Models\Zips;

class ZipsController extends Controller {
	public function getZips($code) {
		if (empty($code)) {
			return response()->json([
				'message' => 'Empty code',
				'status' => false,
			], 401);
		}

		$_code = Zips::where('zip_code', $code)->first();
		$settlements = $_code->getSettlements;

        foreach($settlements as &$value) {
           $value->settlement_type = ['name' => $value->getSettlementType->name];

		   unset($value->zip_code);
		   unset($value->getSettlementType);
        }

		return response()->json([
			'zip_code' => $code,
			'locality' => $_code->getLocality->name,
			'federal_entity' => $_code->getFederalEntity,
			'settlements' => $settlements,
			'municipality' => $_code->getMunicipality,
		], 200);
	}
}
