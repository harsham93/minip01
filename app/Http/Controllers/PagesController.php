<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    function index() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function contact() {
        return view('pages.contact');
    }
    function bootstrapcard() {
        return view('pages.bootstrapcard');
    }
    function login() {
        return view('pages.login');
    }
    function register() {
        return view('pages.register');
    }
    function store(Request $request) {
        $name = $request->name;
        return redirect()->route('thanks',['name' => $name ]);
    }
    function thanks($name, Request $request) {
        return view('pages.thanks')->with(compact('name'));
    }
}
