<?php

namespace App\Http\Controllers;

use Auth;
use View;
use Session;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'user.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request )
    {
        return view( 'user.edit' );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        $user = User::find( $id );
        $this->authorize( 'update', Auth::user(), $user );

        switch ( $request->type )
        {
            case 'username':
                $result = User::updateUsername( $request, $user );
                break;

            case 'email':
                $result = User::updateEmail( $request, $user );
                break;

            case 'password':
                $result = User::updatePassword( $request, $user );
                break;

            case 'clearHistory':
                $result = User::clearHistory( $request, $user );
                break;

            default:
                $result = [ 'error' => 'Method not allowed.' ];
                abort( 405 );
                break;
        }

        if( isset( $result[ 'success' ] ) )
        {
            Session::flash( 'success', $result[ 'success' ] );
            $message = View::make( 'partials/flash-messages' );
            return response()->json(
            [
                'message' => $message->render(),
                'result' => $result[ 'success' ],
            ], 200 );
        }

        Session::flash( 'error', $result[ 'error' ] );
        $message = View::make( 'partials/flash-messages' );
        return response()->json(
        [
            'message' => $message->render(),
            'result' => $result[ 'error' ],
        ], 400 );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request, $id )
    {
        $user = Auth::user();
        $this->authorize( 'delete', Auth::user(), $user );

        $request->validate( [
            'deletePassword' => 'required|string'
        ] );
        $password = $request->deletePassword;

        if( Hash::check( $password, $user->password ) )
        {
            User::clearHistory( $request, $user );
            $user->delete();
            Auth::logout();
            Auth::logoutOtherDevices( $password );

            Session::flash( 'success' );
            $message = View::make( 'partials/flash-messages' );
            return response()->json(
            [
                'message' => $message->render(),
            ], 200 );
        }
    }
}
