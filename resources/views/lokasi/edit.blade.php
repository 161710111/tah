@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>

<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit Lokasi
          <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('lokasi.update',$lokasis->id) }}" method="post" enctype="multipart/form-data" >
            <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}
          @if (isset($lokasis)&& $lokasis->foto)
              <img src="{{ asset('assets/admin/images/icon/'.$lokasis->foto )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;">
              @endif

            <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
              <label class="control-label">foto</label>
              <input type="file" name="foto" class="form-control" value="{{ $lokasis->foto }}"  required>
              @if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
              <label class="control-label">nama</label> 
              <input type="text" value="{{ $lokasis->nama }}" name="nama" class="form-control"  required>
              @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
              <label class="control-label">harga</label>  
              <input type="text" value="{{ $lokasis->harga }}" name="harga" class="form-control"  required>
              @if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('hotel') ? ' has-error' : '' }}">
              <label class="control-label">hotel</label>  
              <input type="text" value="{{ $lokasis->hotel }}" name="hotel" class="form-control"  required>
              @if ($errors->has('hotel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hotel') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
              <label class="control-label">keterangan</label> 
              <textarea  name="keterangan"  class="form-control" required>{{ $lokasis->keterangan }}</textarea>
              @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('kategoriw_id') ? ' has-error' : '' }}">
              <label class="control-label">Kategori</label> 
              <select name="kategoriw_id" class="form-control">
                @foreach($kategoriws as $data)
                <option value="{{ $data->id }}" {{ $selectedkategoriw = $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kategori }}</option>
                @endforeach
              </select>
              @if ($errors->has('kategoriw_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoriw_id') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection