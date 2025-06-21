<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Inquiry;
use App\Models\Tarot;
use App\Models\Testomonial;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{

    public function login(Request $req)
    {
        // return $req->input();
        $user = User::where(['username' => $req->username])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('alert-error', 'Username or password is not matched');
            // return "Username or password is not matched";
        } else {
            if ($user->is_active == 1) {
                Auth::loginUsingId($user->id);
                $req->session()->put('user', $user);
                return redirect('/admin/dashboard');
            } else {
                return redirect()->back()->with('alert-error', 'Your account is not activated. Please contact to administrator!!');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $countTesomonials = Testomonial::count();
        $countAlbums = Gallery::count();
        $countTarots = Tarot::count();
        $countFaqs = Faq::count();
        $countContacts = Contact::count();
        $countInquires = Inquiry::count();
        $todayInquiries = Inquiry::whereDate('created_at', Carbon::today())->get();
        $todayConatcts = Contact::whereDate('created_at', Carbon::today())->get();

        return view('admin.index', compact('countTesomonials', 'countAlbums', 'countTarots', 'countFaqs', 'countContacts', 'countInquires', 'todayInquiries', 'todayConatcts'));
    }

    public function profiledit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Session::get('user');
        if (!(Hash::check($request->get('current_password'), $user->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Session::get('user');
        $user->password = bcrypt($request->get('new_password'));
        $user->original_password = $request->get('new_password');
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function siteHomePage()
    {
        $testomonial = Testomonial::where('is_active', 1)->get();
        $faqs = Faq::where('is_active', 1)->get();
        return view('front.index', compact('testomonial', 'faqs'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function services()
    {
        return view('front.services');
    }

    public function album()
    {
        $albums = Gallery::where('is_active', 1)->paginate(9);
        return view('front.albums', compact('albums'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function vastu()
    {
        return view('front.vastu');
    }

    public function gemstone()
    {
        return view('front.gemstone');
    }

    public function matchmaking()
    {
        return view('front.matchmaking');
    }

    public function career()
    {
        return view('front.career');
    }

    public function astrology()
    {
        return view('front.astrology');
    }

    public function storeContact(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            // 'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }

        $input = $request->all();
        Contact::create($input);
        return redirect()->back()->with("success", "Contact request send successfully!");
    }

    public function storeInquiry(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            // 'subject' => 'required',
            // 'message' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }

        $input = $request->all();
        Inquiry::create($input);
        return redirect()->back()->with("success", "Inquiry send successfully!");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {}

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
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}
}
