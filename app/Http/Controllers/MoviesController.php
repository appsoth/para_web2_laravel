<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // include for AUTH


use App\Models\User;
use App\Models\Movies;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;


class MoviesController extends Controller
{

/* Enabled to protect by middleware */

/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/


    public function index(){

        return view('home');
    }

    public function showmovie(){

        // SQL
        $movie_db = DB::select("select * from tbl_movies");
        //$movie_db = DB::table('tbl_movies')->get();

        // Query

        // Retrieve the currently authenticated user...
        if (Auth::check()) {

            $user = Auth::user(); // Blade : {{Auth::user()->name}}
            $id = Auth::id();
            $id = Auth::name();
            //die();
            //dd(Auth::user());

        }

        // Past Array into view
        return view('showmovies', ["v_movies" => $movie_db] );


    }

    public function addmovie(){

        return view('formmovies');
    }


        // Save the Order information
        public function savemovie(Request $request)
        {

            $post = new Movies();  // Model

            // field in Database to match the information from form.
            $post->m_title = $request->m_title;  // field and form
            $post->m_date = $request->m_date;  // field and form
            $post->m_time = $request->m_time;  // field and form
            $post->m_cate_id = $request->m_cate_id;  // field and form
            $post->m_image_path = $request->m_image_path;  // field and form

            //$profile_userid =  Auth::id();

            $post->save();

            //send information
            return redirect('addmovie')->with('status', 'Post Form Data Has Been inserted');


        }


}
