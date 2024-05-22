<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use App\Services\OcrService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function indexCase(Request $request)
    {
        try {
            $data = [];
            $claimNo = $request->input('claim_no');
            $companyName = $request->input('company');
            $companyType = $request->input('document_type');
            $bills = (new OcrService)->ocrQuery();
            $dataExist = false;
            if (! empty($request->input('provider_id'))) {
                $bills = $bills->Where('ovada_cases.provider_id', $request->input('provider_id'));
            } else {
                $provider_assigned = User::getUserProviders();
                if (count($provider_assigned) > 0) {
                    $bills = $bills->WhereIn('ovada_cases.provider_id', $provider_assigned);
                }
            }
            if ($claimNo && $companyName && $companyType) {
                $claimNo = (new OcrService)->getClaimNo($claimNo, $companyName, $companyType);
                $data = $bills->where('case_insurances.claim_no', 'like', '%'.$claimNo.'%');
                if ($billId = $request->input('bill_id')) {
                    $billId = preg_replace('/[^0-9]/', '', $billId);
                    $data = $data->OrWhere('bills.id', $billId);
                }
                $data = $data->simplePaginate(20);
            }
            if (count($data) > 0) {
                $params['claim_no'] = $claimNo;

                return response()->json(['status' => true, 'message' => 'Bill List', 'result' => $data, 'params' => $params]);
            }
            $params = $request->except(['pagination', 'page', 'per_page', 'token', 'claim_no']);
            if (! empty($request->input('patient_name'))) {
                $searchWordCount = explode(' ', $request->input('patient_name'));

                //$bills = $bills->where('patient_name', 'like', '%' . $request->input('patient_name') . '%');
                foreach ($searchWordCount as $value) {
                    if (Str::length($value) > 1) {
                        $bills->Where('patients.first_name', $value);
                        $bills->OrWhere('patients.middle_name', $value);
                        $bills->OrWhere('patients.last_name', $value);
                    }
                }
            }
            $bills = $bills->simplePaginate(20);

            return response()->json(['status' => true, 'message' => 'Bill List', 'result' => $bills, 'params' => $params]);
        } catch (\Exception $exception) {
            return response()->json(['status' => false, 'message' => $exception->getMessage(), 'result' => []]);
        }
    }
}
