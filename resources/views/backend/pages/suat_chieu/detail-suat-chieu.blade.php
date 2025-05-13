@extends('backend.layouts.master')
@section('title', 'Quản lý Phòng Chiếu')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Chỉnh sửa suất chiếu</h5>
                            <a href="{{ route('suat-chieu.index') }}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('suat-chieu.update', $suatChieu->ID_SuatChieu) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="ID_Phim">Phim</label>
                                <select name="ID_Phim" id="ID_Phim"
                                    class="form-control @error('ID_Phim') is-invalid @enderror" required>
                                    <option value="">-- Chọn phim --</option>
                                    @foreach ($phims as $phim)
                                        <option value="{{ $phim->ID_Phim }}"
                                            {{ old('ID_Phim', $suatChieu->ID_Phim) == $phim->ID_Phim ? 'selected' : '' }}>
                                            {{ $phim->TenPhim }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ID_Phim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="ID_PhongChieu">Phòng chiếu</label>
                                <select name="ID_PhongChieu" id="ID_PhongChieu"
                                    class="form-control @error('ID_PhongChieu') is-invalid @enderror" required>
                                    @foreach ($phongChieus as $phongChieu)
                                        <option value="{{ $phongChieu->ID_PhongChieu }}"
                                            {{ old('ID_PhongChieu', $suatChieu->ID_PhongChieu) == $phongChieu->ID_PhongChieu ? 'selected' : '' }}>
                                            {{ $phongChieu->TenPhongChieu }}  ( {{$phongChieu->DiaChi}} )
                                        </option>
                                    @endforeach
                                </select>
                                @error('ID_PhongChieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="NgayChieu">Ngày chiếu</label>
                                <input type="date" class="form-control @error('NgayChieu') is-invalid @enderror"
                                    id="NgayChieu" name="NgayChieu" value="{{ old('NgayChieu', $suatChieu->NgayChieu) }}"
                                    required>
                                @error('NgayChieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="GioChieu">Giờ chiếu</label>
                                <input type="time" class="form-control @error('GioChieu') is-invalid @enderror"
                                    id="GioChieu" name="GioChieu"
                                    value="{{ old('GioChieu', date('H:i', strtotime($suatChieu->GioChieu))) }}" required>
                                @error('GioChieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="GiaVe">Giá vé (VNĐ)</label>
                                <input type="number" class="form-control @error('GiaVe') is-invalid @enderror"
                                    id="GiaVe" name="GiaVe" value="{{ old('GiaVe', $suatChieu->GiaVe) }}"
                                    min="0" step="1000" required>
                                @error('GiaVe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection