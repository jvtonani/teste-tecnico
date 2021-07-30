<?php

namespace App\Http\Controllers;

use App\Models\GithubUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class GithubUserController extends Controller
{
    public function listGithubUser(){

        $githubUsers = GithubUser::orderBy('username')
            ->select(
                'github_users.id AS id',
                'github_users.username AS username')
                ->get();

        return view('githublist', compact('githubUsers'));
    }

    public function newGithubUser(Request $username){

        $response = $this->consumingGithubApi($username->githubUserName);

        if ($response == false){
            return redirect()->route('github.userlist');
        }

        else {
            $user = json_decode($response->getBody(), true);
            $newUser = new GithubUser();
            $newUser->username = $user['login'];
            
            $newUser->save();
            return redirect()->route('github.userlist');
        }

    }

    public function deleteGithubUser(int $id){
        GithubUser::where('id',$id)->delete();
        return redirect()->route('github.userlist');
    }


    public function consumingGithubApi(String $username){

        $client = new Client([
            'base_uri' => 'http://api.github.com/',
            'verify' => false
        ]);
         
        try{
            $response = $client->request('GET',"users/$username");
            return $response;
        } 
        catch(RequestException $e) {
                if($e->hasResponse() == 1 ){
                    return false;
                }
            } 
    }

    public function listUserInfo (String $username){

        $response = $this->consumingGithubApi($username);
        $userinfo = json_decode($response->getBody(), true);
        
        return view('userinfo', compact('userinfo'));
    }
}
