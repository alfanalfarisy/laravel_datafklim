<!DOCTYPE html>
<html>
    @extends("layout.nav")
    @section("container")

    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Fklim</h4>
                  <br>
                  <form action="/fklim/store" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                              <input type="date" name="arah_terbanyak"class="form-control" />
                            </div>
                          </div>
                        </div>
                  </div>
                    <div class="row">
                        <div class="col-md-4">
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Tahun</label>
                                <div class="col-sm-9">
                                <input type="text" name="Tahun"  required="required" class="form-control" ></td>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Bulan</label>
                                     <div class="col-sm-9">
                                        <input type="text" name="Bulan"  required="required"  class="form-control"></td>
                                     </div>
                                   </div>
                                 </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Tanggal</label>
                              <div class="col-sm-7">
                                <input type="text" name="Tanggal_1"  required="required"  class="form-control" ></td>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">T07</label>
                                     <div class="col-sm-9">
                                       <input  type="text" name="T07"  required="required" class="form-control" />
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">T13</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="T13" class="form-control" />
                                          </div>
                                        </div>
                                      </div>
                             <div class="col-md-4">
                                 <div class="form-group row">
                                   <label class="col-sm-4 col-form-label">T18</label>
                                   <div class="col-sm-7">
                                     <input type="text" name="T18" class="form-control" />
                                   </div>
                                 </div>
                               </div>
                             </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Trata-rata</label>
                                     <div class="col-sm-9">
                                       <input type="text" name="Trata_rata" class="form-control" />
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tmax</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="Tmax" class="form-control" />
                                          </div>
                                        </div>
                                      </div>
                             <div class="col-md-4">
                                 <div class="form-group row">
                                   <label class="col-sm-4 col-form-label">Tmin</label>
                                   <div class="col-sm-7">
                                     <input type="text" name="Tmin" class="form-control" />
                                   </div>
                                 </div>
                               </div>
                             </div>
                        <p class="card-description">
                          Suhu
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">CH</label>
                              <div class="col-sm-9">
                                <input type="text" name="CH" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">LPM</label>
                              <div class="col-sm-9">
                                <input type="text" name="LPM" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Cuaca Khusus</label>
                              <div class="col-sm-10">
                                <input type="text" name="Cuaca_Khusus" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">QFE</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="GFE" class="form-control" />
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">RH07</label>
                                     <div class="col-sm-9">
                                       <input type="text" name="RH07" class="form-control" />
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RH13</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="RH13" class="form-control" />
                                          </div>
                                        </div>
                                      </div>
                             <div class="col-md-4">
                                 <div class="form-group row">
                                   <label class="col-sm-4 col-form-label">RH18</label>
                                   <div class="col-sm-7">
                                     <input type="text" name="RH18" class="form-control" />
                                   </div>
                                 </div>
                               </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">RhRata-Rata</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="Rhrata_rata" class="form-control" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">FFrata-rata</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="ffrata_rata" class="form-control" />
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Arah Terbanyak</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="arah_terbanyak"class="form-control" />
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group row">
                                   <label class="col-sm-4 col-form-label">DD</label>
                                     <div class="col-sm-7">
                                       <input type="text" name="dd"class="form-control" />
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">FFmax</label>
                                          <div class="col-sm-7">
                                            <input type="text" name="ffmax" class="form-control" />
                                          </div>
                                        </div>
                                      </div>
                             <div class="col-md-3">
                                 <div class="form-group row">
                                   <label class="col-sm-4 col-form-label">Arah</label>
                                   <div class="col-sm-7">
                                     <input type="text" name="arah" class="form-control" />
                                   </div>
                                 </div>
                               </div>
                               <div class="col-md-3">
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">ddMax</label>
                                  <div class="col-sm-7">
                                    <input type="text" name="ddmax" class="form-control" />
                                  </div>
                                </div>
                              </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2 ">Submitt</button>
                      </form>
                    </div>
                  </div>
                </div>
        @endsection