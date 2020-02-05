<?php

namespace App\Http\Controllers;

use App\Invitation;

class InvitationController extends Controller
{
    public function detail($slug){
        try {
            $invitation = Invitation::where('slug','=',$slug)->first();
            if ($invitation != null){
                return view('welcome')->with('invitation',$invitation);
            }else{
                return response()->view('errors.404');
            }
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }
}
