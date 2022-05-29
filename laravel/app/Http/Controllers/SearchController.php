<?php

namespace App\Http\Controllers;

use App\Mentor;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index()
    {

        return view('search.index');
    }

    public function result(Request $request)
    {
        // $app_id = env('TAX_AGENCY_APPLICATION_ID');
        // $company = urlencode($request->company);
        // $api_url = 'https://api.houjin-bangou.nta.go.jp/4/name'.
        //     '?id='. $app_id . // アプリケーションID
        //     '&name='. $company . // URLエンコードした会社名（検索）
        //     '&change=1'. // 過去の情報も含める
        //     '&type=02'; // Unicode
        // // $response = Http::get($api_url);
        // $client = new Client();
        // $response = $client->request('GET', $api_url);
        // $body = $response->getBody();
        // $data = json_decode($body, true);
        // $data['current_user_url'];
        // $csv_data = $response->body();
        // $mentors = User::orderBy('created_at', 'asc')->where(function ($query) {

        // 検索機能
        //     if ($search = request('search')) {
        //         $query->where('company', 'LIKE', "%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%")
        //         ;
        //     }

        // $data = [];
        // $loop = 0;
        // $fp = tmpfile();
        // fwrite($fp, $csv_data);
        // fseek($fp, 0);

        // while($company_data = fgetcsv($fp)) {

        //     if($loop > 0) {

        //         $data[] = [
        //             'id' => $company_data[1], // 法人番号
        //             'name' => $company_data[6], // 法人名,
        //             'post_code' => $company_data[15], // 所在地（郵便番号）,
        //             'prefecture' => $company_data[9], // 所在地（都道府県）,
        //             'city' => $company_data[10], // 所在地（市区町村）,
        //             'street' => $company_data[11], // 所在地（丁目番地等）,
        //             'address' => $company_data[9] . $company_data[10] . $company_data[11]
        //         ];

        //     }

        //     $loop++;

        // }

        // return $data;

        $company = $request->company;
        $department = $request->department;

        // $mentors = Mentor::where("company", "LIKE", "%{$company}%")
        //     ->where("department", "LIKE", "%{$department}%")
        //     ->with(["threads" => function ($query) {
        //         $query->where("mentee_user_id", Auth::id());
        //     }])
        //     ->get();
        $mentors = Mentor::where("company", "LIKE", "%{$company}%")
            ->where("department", "LIKE", "%{$department}%")
            ->get();

        return view("search.index", compact("mentors"));
    }
}
