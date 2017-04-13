<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use EllipseSynergie\ApiResponse\Contracts\Response;

use App\User;

use App\Transformer\TaskTransformer;


class UserController extends Controller
{
    

  protected $respose;
 

    public function __construct(Response $response)
    {

        $this->response = $response;

    }
 


 public function get_info(Request $request) {

       $name = $request->input('name');
     
       $info = User::where( 'name', '=', $name)->first();


        if (!$info) {
            return $this->response->errorNotFound('Info of User Not Found');
        }
    
        return $this->response->withItem($user, new  UserTransformer());


 }











}
