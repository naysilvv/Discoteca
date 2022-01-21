<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Market;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MarketController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $items = Market::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $items = Market::simplePaginate(9);
            //$items = Market::all();
        }

        return view('/marketplace', ['items' => $items, 'search' => $search]);
    }

    public function create()
    {
        return view('/cadastrodisco');
    }

    public function store(Request $request)
    {
        $market = new Market;

        $market->name = $request->name;
        $market->artist = $request->artist;
        $market->year = $request->year;
        $market->price = $request->price;
        $market->description = $request->description;

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/img/discos'), $imageName);

            $market->img = $imageName;
        }

        $user = auth()->user();
        $market->user_id = $user->id;
        $market->save();

        return redirect('/market');
    }

    public function show($id)
    {
        $market = Market::findOrFail($id);

        // $marketOwner = User::where('id', $market->user_id)->first()->toArray();
        $marketOwner = User::where('id', $market->user_id)->first();

        return view('/detail-disco', ['market' => $market, 'marketOwner' => $marketOwner]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $role = Auth::user()->role;

        if ($role == "1") {
            $markets = Market::all();

            return view('admin.market-board', ['markets' => $markets]);
        } else {

            $markets = $user->markets;

            return view('/dashboard', ['markets' => $markets]);
        }
    }

    public function destroy($id)
    {
        Market::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Disco excluído com sucesso');
    }

    public function update(Request $request)
    {
        $market = Market::findOrFail($request->id);

        $data = $request->all();

        // $market->name = $request->name;
        // $market->artist = $request->artist;
        // $market->year = $request->year;
        // $market->price = $request->price;
        // $market->description = $request->description;

        // dd($data);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $destination = public_path('/img/discos/' . $market->img);

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/img/discos'), $imageName);

            $data['img'] = $imageName;
        }

        $market->update($data);

        return redirect('/dashboard');
    }
}
