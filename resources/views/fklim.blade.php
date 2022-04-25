<!DOCTYPE html>
<html>
@extends('layout.nav')
@section('container')
<!-- partial -->
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Fklim</h4>
            <form class="form-sample" action="{{url('fklim')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date From  : </label>
                    <div class="col-sm-9">
                      <input type="date" name="startdate" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date To    : </label>
                    <div class="col-sm-9">
                      <input type="date" name="enddate" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="viewData" value="ViewData"/>
              <input type="submit" class="btn btn-primary" name="exportCsv" value="ExportCsv"/>
            </form>
          </div>
        </div>
      </div>
      
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Fklim</h4>
        <div class="table-responsive">
          <p>
            <a href="createfklim" button type="button" class="btn btn-warning">Tambah Data</button></a>
          <p>
          <table class="table">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Tahun.</th>
                <th>Bulan</th>
                <th>Tanggal</th>
                <th>T07</th>
                <th>T13</th>
                <th>T18</th>
                <th>Trata-rata</th>
                <th>Tmax</th>
                <th>Tmin</th>
                <th>CH</th>
                <th>LPM</th>
                <th>Cuaca Khusus</th>
                <th>QFE</th>
                <th>RH07</th>
                <th>RH13</th>
                <th>RH18</th>
                <th>Rhrata-rata</th>
                <th>ffrata-rata</th>
                <th>Arah Terbanyak</th>
                <th>dd</th>
                <th>ffmax</th>
                <th>Arah</th>
                <th>ddmax</th>
              </tr>
            </thead>
            @foreach($fklim as $data)
            <tbody>
              <tr>
                <td>{{ $data->Tanggal }}</td>
                <td>{{ $data->Tahun }}</td>
                <td class="align-middle text-center text-sm">{{ $data->Bulan }}</td>
                <td class="align-middle text-center">{{ $data->Tanggal_1 }}</td>
                <td class="align-middle">{{ $data->T07 }} </td>
                <td>{{ $data->T13 }}</td>
                <td>{{ $data->T18 }}</td>
                <td class="align-middle text-center text-sm">{{ $data->Trata_rata }}</td>
                <td class="align-middle text-center">{{ $data->Tmax }}</td>
                <td class="align-middle">{{ $data->Tmin }} </td>
                <td class="align-middle">{{ $data->CH }} </td>
                <td class="align-middle">{{ $data->LPM }} </td>
                <td class="align-middle text-center">{{ $data->Cuaca_Khusus }} </td>
                <td class="align-middle">{{ $data->QFE }} </td>
                <td class="align-middle">{{ $data->RH07 }} </td>
                <td class="align-middle">{{ $data->RH13 }} </td>
                <td class="align-middle">{{ $data->RH18 }} </td>
                <td class="align-middle">{{ $data->Rhrata_rata }} </td>
                <td class="align-middle">{{ $data->ffrata_rata }} </td>
                <td class="align-middle">{{ $data->arah_terbanyak }} </td>
                <td class="align-middle">{{ $data->dd }} </td>
                <td class="align-middle">{{ $data->ffmax }} </td>
                <td class="align-middle">{{ $data->arah }} </td>
                <td class="align-middle">{{ $data->ddmax }} </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pull-right">
            {{ $fklim->links() }}
      </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyrights © BMKG Juanda 1 Juanda. All Rights Reserved.  </span>
 
    </div>
  </footer>
  <!-- partial -->
</div>

@endsection
