<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function show($code)
    {
        $item = Item::where('code', $code)->firstOrFail();
        return view('items.show', compact('item'));
    }

    public function generateQrCode($code)
    {
        $item = Item::where('code', $code)->firstOrFail();
        $url = route('items.show', $item->code); 
        $qrCode = QrCode::size(200)->generate($url);
        return view('items.qrcode', compact('item', 'qrCode'));
    }
}
