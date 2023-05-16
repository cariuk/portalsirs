<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $client = new Client();
        try {
            $getResponse = $client->request(
                'POST',
                url(ENV("SIRSPRO") . "/api/token/login"), [
                    'headers' => [
                        'Accept' => 'application/json',
                    ], RequestOptions::JSON => [
                        "username" => $request->username,
                        "password" => $request->password
                    ]
                ]
            );

            $getResponse = json_decode($getResponse->getBody());
            if ($getResponse == null) {
                return response()->json([
                    "status" => 422,
                    "message" => "",
                ]);
            }

            $response = $getResponse->response;
            $sirsproUser = $response->user;

            $user = User::where('username', $request->username)->first();
            if ($user == null) {
                $new = new User();
                    $new->id = $sirsproUser->id;
                    $new->username = $sirsproUser->username;
                    $new->token = $response->accessToken;
                    $new->nama = $sirsproUser->nama_lengkap;
                $new->save();
                $user = User::where('username', $request->username)->first();
            } else {
                User::where('username', $sirsproUser->username)->update([
                    "token" => $response->accessToken,
                    "nama" => $sirsproUser->nama_lengkap
                ]);
            }

            Auth::login($user);

            return response()->json([
                "status" => 200,
                "message" => "Berhasil Login",
                "callback" => [
                    "html" => [],
                    "action" => [
                        "location.reload()"
                    ]
                ]
            ]);
        }catch (ClientException $exception) {
            $response =  json_decode($exception->getResponse()->getBody()->getContents());
            return response()->json([
                "status" => $response->diagnostic->status,
                "message" => $response->diagnostic->description,
            ], $response->diagnostic->status);
        } catch (\Exception $exception) {
            return response()->json([
                "status" => $exception->getCode(),
                "message" => $exception->getMessage(),
            ], $exception->getCode());
        }
    }

    public function refreshToken(){
        try{
            $client = new Client();
            $getResponse = $client->request(
                "POST",
                url(ENV("SIMPEG_BRIDGING")."/api/digital-arsip/refresh-token"), [
                    'headers' => [
                        'Accept' => 'application/json',
                        'PROVIDER' => 'usersiap',
                    ],RequestOptions::JSON => [
                        "refresh_token" => Auth::user()->refresh_token
                    ]
                ]
            );
            $getResponse = json_decode($getResponse->getBody());

            return $getResponse;
        }catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response->getStatusCode()==401){

            }
        }
        catch (\Exception $exception) {
            return response()->json([
                "status" => 501,
                "message" => $exception->getMessage()
            ], 501);
        }
    }

    public function username(){
        return 'username';
    }
}
