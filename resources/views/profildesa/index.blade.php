@extends('layouts.app')
@section('title','Profil Desa')
    
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>                  
              <tr>
                <th width="5%">No</th>
                <th width="30%">Sejarah</th>
                <th width="30%">Visi</th>
                <th width="20%">Misi</th>
                <th width="15%"><center>Aksi</center></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Teknologi</td>
                <td>Teknologi Terkini</td>
                <td>24-02-2021</td>
                <td align="center">
                  <a href="editblog.php" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                  <a href="detailblog.php" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                  <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                </td>
              </tr>
              
            </tbody>
          </table>
    </div>
</div>
    
@endsection