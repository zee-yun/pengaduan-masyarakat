<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TanggapanController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $pengaduan = Pengaduan::where('id', $request->pengaduan_id)->first();
        $tanggapan = Tanggapan::where('pengaduan_id', $request->pengaduan_id)->first();

        if ($tanggapan) {
            $pengaduan->update(['status' => $request->status]);

            $tanggapan->update([
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('admin.pengaduan.index');
        } else {
            $pengaduan->update(['status' => $request->status]);

            $tanggapan = Tanggapan::create([
                'pengaduan_id' => $request->pengaduan_id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('admin.pengaduan.index');
        }
    }
}
