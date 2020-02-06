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

    public  function confirm($invitationId, $confirmStatus){
        try {
            $invitation = Invitation::findOrFail($invitationId);
            if ($invitation != null){
                if ($confirmStatus == "si"){
                    $invitation->attend = 1;
                    $invitation->save();
                    return response()->json([
                        'status' => true,
                        'message' => 'Hemos confirmado tu decisión, esperamos verte pronto!'
                    ],200);
                }else{
                    $invitation->attend = 0;
                    $invitation->save();
                    return response()->json([
                        'status' => true,
                        'message' => 'Hemos confirmado tu decisión, muchas gracias igualmente!'
                    ],200);
                }
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Lo sentimos, no pudimos encontrar tu invitacion'
                ],500);
            }
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ],500);
        }
    }
}
