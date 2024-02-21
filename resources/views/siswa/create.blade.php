@extends('layouts/app')

@section('konten')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                           
                        
                            @csrf
                           

                        

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>                 
                                <select class="form-control" @error('kelas')is-invalid @enderror name="kelas">
                                    <option value="XII PPLG"> XII PPLG</option>
                                    <option value="XII TJKT"> XII TJKT</option>
                                    <option value="XII DKV"> XII DKV</option>
                                    <option value="XII LISTRIK"> XII LISTRIK</option>
                                    <option value="XII ELEKTRONIKA"> XII ELEKTRONIKA</option>
                                    <option value="XII MEKATRONKA"> XII MEKATRONIKA</option>
                                    <option value="XII BUSANA"> XII BUSANA</option>
                                    <option value="XII BROADCASTING"> XII BROADCASTING</option>
                              </select>
                            
                                <!-- error message untuk title -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
@endsection