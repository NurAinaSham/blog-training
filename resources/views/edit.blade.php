@extends('layout.app')

@section('content')
<div class="row justify-content-center">
    <div class="card col-md-8">
        <div class="card-body">
            <div class="col-auto col-md-12">
                <h2>
                    <center>Edit Article</center>
                </h2>
                <hr>
                </br>
                <form action="{{ route('update', $article -> id) }}" method="POST" class="row g-3">
                @method('put')
                @csrf
                    <div class="col-md-6">
                        <label class="form-label">Tajuk</label>
                        <input type="text" class="form-control" id="tajuk" name="tajuk" value="{{ $article-> tajuk}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tarikh Publish</label>
                        <input type="text" class="form-control" id="tarikh_publish" name="tarikh_publish" value="{{ $article-> tarikh_publish}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $article-> penulis}}">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="inputAddress2" name="kategori" value="{{ $article-> kategori}}">
                
                    </div>

                     <div class="col-12">
                        <label for="inputAddress2" class="form-label">About</label>
                        <textarea type="text" class="form-control" id="about" name="about">{{ $article->about}}</textarea>
                        
        
                    </div>

                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Social Media</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Facebook" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="{{ $article ->socialMedia[1]->url }}" required>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Instagram" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="{{ $article ->socialMedia[1]->url }}" required>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Twitter" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="{{ $article ->socialMedia[1]->url }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Content</label>
                        <textarea id="summernote" name="editordata" >{{ $article-> content}}</textarea>
                
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

