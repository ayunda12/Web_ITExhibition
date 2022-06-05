@extends('admin.index2')
@section('page')
    User
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tabel User</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <a href="javascript:;" class="btn btn-primary btn-sm font-weight-bold text-xs btn--tambah"
                            data-toggle="tooltip" data-original-title="Tambah user" data-bs-toggle="modal"
                            data-bs-target="#tambahModal">
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

                                @foreach ($user as $u)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-center">
                                            {{ $u->nama }}
                                        </td>
                                        <td class="text-center">
                                            {{ $u->username }}
                                        </td>


                                        <td class="align-middle text-center">
                                            @if ($u->level->nama == 'Admin')
                                                <span class="badge rounded-pill bg-success">{{ $u->level->nama }}</span>
                                            @elseif ($u->level->nama == 'Exhibitor')
                                                <span class="badge badge rounded-pill bg-purple">{{ $u->level->nama }}
                                                </span>
                                            @else
                                                <span class="badge rounded-pill bg-primary">{{ $u->level->nama }}
                                                </span>
                                            @endif

                                        </td>
                                        <td class="text-center text-sm">
                                            {{ $u->email }}
                                        </td>
                                        <td class="">
                                            <a href="javascript:;"
                                                class="btn btn-info btn-sm font-weight-bold text-xs btn--edit"
                                                data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $u->id }}"
                                                data-nama="{{ $u->nama }}" data-level="{{ $u->level_id }}"
                                                data-email="{{ $u->email }}" data-username="{{ $u->username }}">
                                                Edit
                                            </a>
                                            <a href="/hapus/id={{ $u->id }}"
                                                onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                                class=" btn btn-danger btn-sm font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Ubah Data </h5>
                    <button type="button" class="btn-close text-primary" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/edit/id=" method="post">
                        @csrf

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="form3">Level</label>
                            <select name="level" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                @foreach ($level as $l)
                                    <option value="{{ $l->id }}" {{ old('level') == $l->id ? 'selected' : '' }}>
                                        {{ $l->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('level'))
                                <span class="text-danger error--message">{{ $errors->first('level') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="form3">Nama</label>
                            <input type="text" name="nama" id="form3" class="form-control validate"
                                onkeypress='return harusHuruf(event)' value="{{ old('nama') }}" required>
                            @if ($errors->has('nama'))
                                <span class="text-danger error--message">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                        <div class=" md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Username</label>
                            <input type="text" name="username" id="form2" class="form-control validate"
                                value="{{ old('username') }}" required>
                            @if ($errors->has('username'))
                                <span class="text-danger error--message">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Email</label>
                            <input type="email" name="email" id="form2" class="form-control validate"
                                value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="text-danger error--message">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <p style="font-size: 15px"><b style="color: rgb(245, 90, 90)">Note</b> : Ubah password
                            bersifat optional,
                            isikan password
                            jika
                            ingin mengubahnya.</p>
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Password</label>
                            <div class="custom--input-password">
                                <input type="password" name="password" id="form2" class="form-control validate">
                                <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger error--message">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Konfirmasi Password</label>
                            <div class="custom--input-password">
                                <input type="password" name="password2" id="form2" class="form-control validate">
                                <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                            </div>
                            @if ($errors->has('password2'))
                                <span class="text-danger error--message">{{ $errors->first('password2') }}</span>
                            @endif
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('Apakah anda yakin data sudah benar?')">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Tambah Data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('userAdmin') }}" method="post">
                        @csrf

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="form3">Level</label>
                            <select name="level" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <option value="1">Admin</option>
                                <option value="2">Exhibitor</option>
                                <option value="3">Visitor</option>
                            </select>

                            @if ($errors->has('level'))
                                <span class="text-danger error--message">{{ $errors->first('level') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="form3">Nama</label>
                            <input type="text" name="nama" id="form3" class="form-control validate"
                                onkeypress='return harusHuruf(event)' value="{{ old('nama') }}" required>
                            @if ($errors->has('nama'))
                                <span class="text-danger error--message">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                        <div class=" md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Username</label>
                            <input type="text" name="username" id="form2" class="form-control validate"
                                value="{{ old('username') }}" required>
                            @if ($errors->has('username'))
                                <span class="text-danger error--message">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Email</label>
                            <input type="email" name="email" id="form2" class="form-control validate"
                                value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="text-danger error--message">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Password</label>
                            <div class="custom--input-password">
                                <input type="password" name="password" id="form2" class="form-control validate" required>
                                <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger error--message">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="form2">Konfirmasi Password</label>
                            <div class="custom--input-password">
                                <input type="password" name="password2" id="form2" class="form-control validate" required>
                                <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                            </div>
                            @if ($errors->has('password2'))
                                <span class="text-danger error--message">{{ $errors->first('password2') }}</span>
                            @endif
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('Apakah anda yakin data sudah benar?')">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        @if ($errors->any() && session('edit-data') == 1)

            $(document).ready(function() {
                $('#editModal').modal('show');
            });
        @endif
        @if ($errors->any() && session('tambah-data') == 1)

            $(document).ready(function() {
                $('#tambahModal').modal('show');
            });
        @endif


        $(document).on('click', '.btn--edit', function(e) {
            e.preventDefault()
            let data = $(this).data()
            $('#editModal form').attr('action', "{{ url('userAdmin') }}/edit/" + data.id)
            $('#editModal input[name="nama"]').val(data.nama)
            $('#editModal input[name="username"]').val(data.username)
            $('#editModal input[name="email"]').val(data.email)
            $('#editModal [name="level"]').val(data.level).trigger("change")
            $('#editModal .error--message').html('')
        })
        $(document).on('click', '.btn--tambah', function(e) {
            e.preventDefault()
            $('#tambahModal .error--message').html('')
            $('#tambahModal input[name="nama"]').val('')
            $('#tambahModal input[name="username"]').val('')
            $('#tambahModal input[name="email"]').val('')
            $('#tambahModal [name="level"]').val('').trigger("change")
        })
    </script>
@endsection
