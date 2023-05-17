@extends('layouts.client')

@section('content')
    <div class="py-12 me-5 pl-10">
        <div class="container">
            <div class="row">
                <div class="col col-sm-3 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/manual4.jpg') }}" class="card-img-top" alt="...">
                        <!-- Modal cuci manual AWAL -->
                        <div class="modal fade" id="gowash1" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="w-full">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                                <div class="card-header bg-primary bg-gradient">
                                                    <h3 class="card-title text-white mt-2">Bookings</h3>
                                                </div>
                                                <form>
                                                    <div class="card-body">
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputEmail1">Jenis Layanan</label>
                                                            <input type="email" disabled class="form-control"
                                                                id="exampleInputEmail1" placeholder="Cuci Mobil Manual">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputEmail1">No Kendaraan</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleInputEmail1" placeholder="No Kendaraan">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputEmail1">Nama Pemilik</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Nama Pemilik">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputEmail1">No Hendphone</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleInputEmail1" placeholder="nomor henphone">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputEmail1">Jenis Kendaraan</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>


                                                    </div>
                                                    <div class="card-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="margin-right: 10px">Submit</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Batal</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Modal cuci manual AKHIR -->
                        <div class="card-body">
                            <h3 class="card-title">Cuci Mobil Manual</h3>
                            <h6>Rp.50.000,-</h6>
                            <div class="d-flex">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gowash1">
                                    Go Wash
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/manual2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Cuci Mobil Waterless</h3>
                            <h6>Rp.50.000,-</h6>
                            <a href="#" class="btn btn-primary">Go Wash</a>
                        </div>
                    </div>
                </div>
                
                <div class="col col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/manual3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Cuci Mobil Touchless</h3>
                            <h6>Rp.50.000,-</h6>
                            <a href="#" class="btn btn-primary">Go Wash</a>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/manual.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Cuci Mobil Hidrolik</h3>
                            <h6>Rp.50.000,-</h6>
                            <a href="#" class="btn btn-primary">Go Wash</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
@endsection
