<!DOCTYPE html>
<html lang="en">
  @extends("layout.nav")
  @section("container")
<head>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  
  <link rel="stylesheet" href="pages/styles.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4" >
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 " >
              <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3" style="color: #0079008a;" >
                <h6 class="text-white text-capitalize ps-3">Tabel fklim </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <p>
                  <a href="createfklim" button type="button" class="btn btn-warning">Tambah Data</button></a>
                <p>
                <table class="table align-items-center mb-0" id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                width="100%">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahun</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">T07</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">T13</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">T18</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TRata-Rata</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tmax</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tmin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CH</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LPM</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cuaca Khusus</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">QFE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RH07</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RH13</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RH18</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rhrata-rata</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ffrata-rata</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Arah Terbanyak</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DD</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ffmax</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Arah </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ddmax</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  @foreach($fklim as $data )
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
                      <td class="align-middle">{{ $data->Cuaca_Khusus }} </td>
                      <td class="align-middle">{{ $data->QFE }} </td>
                      <td class="align-middle">{{ $data->RH07 }} </td>
                      <td class="align-middle">{{ $data->RH13 }} </td>
                      <td class="align-middle">{{ $data->RH18 }} </td>
                      <td class="align-middle">{{ $data->Rhrata_rata }} </td>
                      <td class="align-middle">{{ $data->arah_terbanyak }} </td>
                      <td class="align-middle">{{ $data->dd }} </td>
                      <td class="align-middle">{{ $data->ffmax }} </td>
                      <td class="align-middle">{{ $data->arah }} </td>
                      <td class="align-middle">{{ $data->ddmax }} </td>
                      <td>
                       <i class="far fa-edit"></i></a> |
                          
                            <i class="fas fa-trash-alt"></i>
                              {{-- <i class="fa fa-trash"></i></button> --}}
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="pull-right">
                {{ $fklim->links() }}
          </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            {{-- <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    {{-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a> --}}
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
       
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    $(document).ready(function () {
  $('#dtHorizontalVerticalExample').DataTable({
    "scrollX": true,
    "scrollY": 200,
  });
  $('.dataTables_length').addClass('bs-select');
});
    </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
@endsection
</html>