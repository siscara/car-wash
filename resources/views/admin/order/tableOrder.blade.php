@extends('layouts.app')

@section('content')
    <div class="py-12 ms-5 me-5 pl-10 ">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-12 shadow p-3 mb-5 rounded" >
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="card-title">Data Order</h3>
                                </div>
                                @include('admin/order/components/edit')
                                @include('admin/order/components/tambah')
                                <div class="ms-4 mt-3">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#tambahmodal">
                                            Tambah Order
                                            @include('icons/tambah')
                                        </button>

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Antrian</th>
                                                <th>Nomor Kendaraan</th>
                                                <th>Nama Pemilik</th>
                                                <th>No Hendphone</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Status</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($ordertable as $datas)
                                                <tr>
                                                    <td>{{ $datas['no_antrian'] }}</td>
                                                    <td>{{ $datas['nomer_kendaraan'] }} </td>
                                                    <td>{{ $datas['nama_pemilik'] }}</td>
                                                    <td>{{ $datas['nomer_hp'] }}</td>
                                                    <td>{{ $datas['jenis_kendaraan'] }}</td>
                                                    <td>{{ $datas['status'] }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class=" dropdown" type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div style="width:20px; height:20px; opacity:0.5;">
                                                                    @include('icons/dot')
                                                                </div>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                                aria-labelledby="dropdownMenuButton2">

                                                                <li>
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#editmodal">
                                                                        Edit
                                                                    </a>
                                                                </li>

                                                                <li><a class="dropdown-item" href="#">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                </div>

                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
