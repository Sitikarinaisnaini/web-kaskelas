<?php

namespace App\Http\Controllers;


use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class SiswaController extends Controller
{

    /**
     * index
     *
     * @return void
     */

    public function index()
    {
        //get posts
      $siswa = siswa::latest()->paginate(5);

        //render view with posts
        return view('siswa.index', compact('siswa'));
    }

     /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'   => 'required'
        ]);

      
        siswa::create([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas
        ]);
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit (siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

       public function update (Request $request, Siswa $siswa) 
       {

        $this->validate($request,[
            'nama'=> 'required',
            'kelas'=> 'required',
        ]);

        $siswa->update([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas
         ]);
         return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);

        
    }
    
   
     public function destroy(Siswa $siswa){
        
         //delete post
         $siswa->delete();

         //redirect to index
         return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
     }

}




