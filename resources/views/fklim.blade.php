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
            <form class="form-sample" action="" method="post">
              @csrf
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Variable  : </label>
                      <select name="fklim" class="form-control">
                        <option value="">-pilih-</option>
                        <option value="T07">T07</option>
                        <option value="T13">T13</option>
                        <option value="T18">T18</option>
                        <option value="Trata_rata">Trata_rata</option>
                        <option value="Tmax">Tmax</option>
                        <option value="Tmin">Tmin</option>
                        <option value="CH">CH</option>
                        <option value="LPM ">LPM </option>
                        <option value="Cuaca_Khusus ">Cuaca_Khusus</option>
                        <option value="RH07">RH07</option>
                        <option value="RH13">RH13</option>
                        <option value="RH18">RH18 </option>
                        <option value="Rhrata_rata">Rhrata_rata</option>
                        <option value="ffrata_rata">ffrata_rata</option>
                        <option value="dd">dd</option>
                        <option value="ffmax">ffmax</option>
                        <option value="arah">arah</option>
                        <option value="ddmax">ddmax</option>
                      </select>
                    </div>
                  </div>
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
                @isset($rata)
                
                <label class="col-sm-3 col-form-label">Rata-Rata :   {{ $select }}</label>

                @endisset
                @isset($rata)
                <div class="col-sm-6">
                  <input readonly type="" name="avg" class="form-control" value="{{ $rata }}" />
                </div>
                @endisset
              </div>
              <br><br>
              <input type="submit" class="btn btn-primary" name="viewData" value="ViewData"/>
              <input type="submit" class="btn btn-primary" name="avg" value="Rata-Rata"/>
              <input type="submit" class="btn btn-primary" name="exportCsv" value="ExportCsv"/>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ImportCsv</a>
            </form>
          </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
      </div>
      <form action="/importExcel" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="file" name="file" required="required">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
    </div>
    </form>

  </div>
</div>

      </div>

      </div>
      
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Fklim</h4>
        <div class="table-responsive">
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
                <th>Hapus</th>
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
                <td>
                  <form action="{{ url('trash'.$data->Tanggal) }}" method="GET" class="d-inline" onsubmit="return confirm('Hapus Data ?')">
                    @method('trash')
                    @csrf
                    <button class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i></button>
                        {{-- <i class="fa fa-trash"></i></button> --}}
                </form>
                </td>
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


  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyrights © BMKG Juanda 1 Juanda. All Rights Reserved.  </span>
 
    </div>
  </footer>
  <!-- partial -->
</div>

@endsection