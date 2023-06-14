@extends('layouts.app')
@section('title','Profil Desa')
    
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>                  
              <tr>
                <th width="40%"><center>Visi</center></th>
                <th width="40%"><center>Misi</center></th>
                <th width="10%"><center>Aksi</center></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Teknologi Terkini</td>
                <td>24-02-2021</td>
                <td align="center">
                  <a href="editblog.php" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                       
                </td>
              </tr>
              
            </tbody>
          </table>
    </div>
</div>
    
@endsection