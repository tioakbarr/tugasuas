@extends('template.beranda')
@section('content')
      <section class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                @include('utils.notif')
                <div class="card">
                  <div class="card-header">
                    Tambah Data User
                  </div>
                  <div class="card-body" >
                   <form action="{{url('admin/user')}}" method="post">
                      @csrf
                        <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" class="form-control" name="nama"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Jenis Kelamin</label>
                          <input type="text" class="form-control" name="jk"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Username</label>
                          <input type="text" class="form-control" name="username"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">Email</label>
                          <input type="email" class="form-control" name="email"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Password</label>
                          <input type="password" class="form-control" name="password"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">No Hp</label>
                          <input type="text" class="form-control" name="no_handphone"></input>
                        </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
        </section>
@endsection