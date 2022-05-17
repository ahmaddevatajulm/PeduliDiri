<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Perjalanan;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class perjalananController extends Controller
{
    public function input(){
        return view ('pages.input');
    }
    public function index(){
        if(is_null(auth()->user())){
            return redirect('/login');
        }
        $data = Perjalanan::where('id_user', auth()->user()->id)
                ->paginate(10);
        return view('pages.table',['data'=>$data]);
    }
    public function simpanData(Request $request){
        $validator = Validator::make($request->all(), [
            'suhu' => 'required|max:37|min:34',
        ]);
        // $request->validate([
        //     'suhu'=>'required|min:34|max:36'

        // ]);
        $data=[
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];
     Perjalanan::create($data);
    // return redirect('table');
    return redirect()->route('input')->with('status', 'Data tersimpan');
    }
    public function cariPerjalanan(Request $request){
        $data = null;

        if(!is_null($request->tanggal)){
            $data = Perjalanan::where('id_user', auth()->user()->id)
                    ->where('perjalanans.tanggal', 'LIKE', '%' . $request->tanggal . '%')
                    ->paginate(10)
                    ->withQueryString();

        } else if(!is_null($request->lokasi)){
            $data = Perjalanan::where('id_user', auth()->user()->id)
                    ->where('perjalanans.lokasi', 'LIKE', '%' . $request->lokasi . '%')
                    ->paginate(10)
                    ->withQueryString();

        } else if(!is_null($request->suhu)){
            $data = Perjalanan::where('id_user', auth()->user()->id)
                    ->where('perjalanans.suhu', 'LIKE', '%' . $request->suhu . '%')
                    ->paginate(10)
                    ->withQueryString();
        }

        return view('pages.table', ['data' => $data]);
    }

    public function sort(Request $request) {
        $sorted = Perjalanan::where('id_user', auth()->user()->id)
                ->orderBy($request->sort_item, $request->sort_type)
                ->paginate(10)
                ->withQueryString();

        return view('pages.table', ['data' => $sorted]);
    }
    public function urutkan(Request $request){
        { 
            $data = perjalanan::all()->where('id_user', '=', auth()->user()->id);
            if($request->input('suhuDesc')){
                $urut = $request->suhu;
                $sorted = $data->SortByDesc('suhu');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            else if($request->input('suhuAsc')){
                $urut = $request->suhu;
                $sorted = $data->SortBy('suhu');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            if($request->input('tanggalDesc')){
                $urut = $request->tanggal;
                $sorted = $data->SortByDesc('tanggal');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            else if($request->input('tanggalAsc')){
                $urut = $request->tanggal;
                $sorted = $data->SortBy('tanggal');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            if($request->input('lokasiDesc')){
                $urut = $request->lokasi;
                $sorted = $data->SortByDesc('lokasi');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            else if($request->input('lokasiAsc')){
                $urut = $request->lokasi;
                $sorted = $data->SortBy('lokasi');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            if($request->input('jamDesc')){
                $urut = $request->jam;
                $sorted = $data->SortByDesc('jam');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }
            else if($request->input('jamAsc')){
                $urut = $request->jam;
                $sorted = $data->SortBy('jam');
                return view('pages.table', ['data'=> $sorted->values()->all()]);
            }

     }
    }
    public function hapusData(Request $request) {
        Perjalanan::find(((int) $request->id))->delete();
        return redirect()->route('table')->with('dataDeleted', "Data telah berhasil dihapus");
    }
}

