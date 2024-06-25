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

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function generateQrCode($id)
    {
        $item = Item::findOrFail($id);
        $url = route('items.show', $item->id); 
        $qrCode = QrCode::size(200)->generate($url);
        return view('items.qrcode', compact('item', 'qrCode'));
    }
}
