<?php

namespace App\Http\Controllers;
use App\Models\project;
use Illuminate\Http\Request;

/**
* @OA\Info(
* description="Contoh API doc menggunakan OpenAPI/Swagger",
* version="0.0.1",
* title="Contoh API documentation",
* termsOfService="http://swagger.io/terms/",
* @OA\Contact(
* email="choirudin.emchagmail.com"
* ),
* @OA\License(
* name="Apache 2.0",
* url="http://www.apache.org/licenses/LICENSE-2.0.html"
* )
* )
*/
class GreetController extends Controller
{
    /**
* @OA\Get(
* path="/api/greet",
* tags={"greeting"},
* summary="Returns a Sample API response",
* description="A sample greeting to test out the API",
* operationId="greet",
* @OA\Parameter(
* name="firstname",
* description="nama depan",
* required=true,
* in="query",
* @OA\Schema(
* type="string"
* )
* ),

* @OA\Parameter(
* name="lastname",
* description="nama belakang",
* required=true,
* in="query",
* @OA\Schema(
* type="string"
* )
* ),
* @OA\Response(
* response="default",
* description="successful operation"
* )
* )
*/
    public function greet(Request $request)
{
 $userData = $request->only([
 'firstname',
 'lastname',
 ]);
 if (empty($userData['firstname']) && empty($userData['lastname'])) {
 return new \Exception('Missing data', 404);
 }
 return 'Halo ' . $userData['firstname'] . ' ' . $userData['lastname'];
}

/**
* @OA\Get(
* path="/api/gallery",
* tags={"gallery"},
* summary="Returns a sample images response",
* description="A sample gallery",
* operationId="index",

* @OA\Response(
* response="200",
* description="successful operation"
* )
* )
*/

public function index(Request $request){
    $data = array(
        'id' => "projects",
        'menu' => 'Gallery',
        'galleries' => project::where('picture', '!=',
        '')->whereNotNull('picture')->orderBy('title',
        'desc')->paginate(20)
        );
        return view('gallery.index-api');
        }

        public function gallery(Request $request) {
            return view ('gallery.index-api');
        }
}
