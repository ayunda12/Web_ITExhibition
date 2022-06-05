@extends('admin.index2')
@section('page')
    Produk
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tabel Produk</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <a href="{{ route('tambah') }}" class="btn btn-primary btn-sm font-weight-bold text-xs">
                            Tambah
                        </a>
                        <table id="example" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7"
                                        width="20px">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Username</th>
                                    <th
                                        class="
                                    text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Level</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th class="text-secondary opacity-7" width="180px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                    </td>
                                    <td class="text-center">
                                    </td>
                                    <td class="text-center">
                                    </td>


                                    <td class="align-middle text-center">


                                    </td>
                                    <td class="text-center text-sm">

                                    </td>
                                    <td class="">
                                        <a href="javascript:;"
                                            class="btn btn-info btn-sm font-weight-bold text-xs btn--edit"
                                            data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            Detail
                                        </a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                            class=" btn btn-danger btn-sm font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
