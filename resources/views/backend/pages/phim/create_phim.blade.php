@extends('backend.layouts.master')
@section('title', 'Tạo Phim')

@section('css')
    <style>
        .card {
            border: 1px solid #6f42c1;
            box-shadow: 0 0 15px rgba(111, 66, 193, 0.2);
        }

        .card-header {
            background-color: #6f42c1;
            color: #fff;
        }

        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }

        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #4b288b;
        }

        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 0 0.2rem rgba(111, 66, 193, 0.25);
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #6f42c1;
            box-shadow: 0 0 0 0.2rem rgba(111, 66, 193, 0.25);
        }
    </style>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thêm phim mới</h3>
                        <div class="card-tools">
                            <a href="{{ route('phim.index') }}" class="btn btn-default">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('phim.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="TenPhim">Tên phim <span class="text-danger">*</span></label>
                                        <input type="text" name="TenPhim" id="TenPhim" class="form-control"
                                            value="{{ old('TenPhim') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="DaoDien">Đạo diễn <span class="text-danger">*</span></label>
                                        <input type="text" name="DaoDien" id="DaoDien" class="form-control"
                                            value="{{ old('DaoDien') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="DienVien">Diễn viên <span class="text-danger">*</span></label>
                                        <input type="text" name="DienVien" id="DienVien" class="form-control"
                                            value="{{ old('DienVien') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ThoiLuong">Thời lượng (phút) <span class="text-danger">*</span></label>
                                        <input type="number" name="ThoiLuong" id="ThoiLuong" class="form-control"
                                            value="{{ old('ThoiLuong') }}" required min="1">
                                    </div>

                                    <div class="form-group">
                                        <label for="ID_TheLoaiPhim">Thể loại phim <span class="text-danger">*</span></label>
                                        <select name="ID_TheLoaiPhim" id="ID_TheLoaiPhim" class="form-control" required>
                                            <option value="">-- Chọn thể loại --</option>
                                            @foreach ($theLoais as $theLoai)
                                                <option value="{{ $theLoai->ID_TheLoaiPhim }}"
                                                    {{ old('ID_TheLoaiPhim') == $theLoai->ID_TheLoaiPhim ? 'selected' : '' }}>
                                                    {{ $theLoai->TenTheLoai }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgayKhoiChieu">Ngày khởi chiếu <span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="NgayKhoiChieu" id="NgayKhoiChieu" class="form-control"
                                            value="{{ old('NgayKhoiChieu') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="HinhAnh">Hình ảnh</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="HinhAnh" name="HinhAnh"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DoTuoi">Độ tuổi <span class="text-danger">*</span></label>
                                        <input type="number" name="DoTuoi" id="DoTuoi" class="form-control"
                                            value="{{ old('DoTuoi') }}" required min="0">
                                    </div>

                                    <div class="form-group">
                                        <label for="DoHoa">Đồ họa <span class="text-danger">*</span></label>
                                        <select name="DoHoa" id="DoHoa" class="form-control" required>
                                            <option value="">-- Chọn đồ họa --</option>
                                            <option value="2D" {{ old('DoHoa') == '2D' ? 'selected' : '' }}>2D</option>
                                            <option value="3D" {{ old('DoHoa') == '3D' ? 'selected' : '' }}>3D</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgonNgu">Ngôn ngữ <span class="text-danger">*</span></label>
                                        <input type="text" name="NgonNgu" id="NgonNgu" class="form-control"
                                            value="{{ old('NgonNgu') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="Trailer">Trailer URL</label>
                                        <input type="url" name="Trailer" id="Trailer" class="form-control"
                                            value="{{ old('Trailer') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="TrangThai">Trạng thái <span class="text-danger">*</span></label>
                                        <select name="TrangThai" id="TrangThai" class="form-control" required>
                                            <option value="1" {{ old('TrangThai') == '1' ? 'selected' : '' }}>Hiển
                                                thị</option>
                                            <option value="0" {{ old('TrangThai') == '0' ? 'selected' : '' }}>Ẩn
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgayKetThuc">Ngày kết thúc <span class="text-danger">*</span></label>
                                        <input type="date" name="NgayKetThuc" id="NgayKetThuc" class="form-control"
                                            value="{{ old('NgayKetThuc') }}" required>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="MoTaPhim">Mô tả phim <span class="text-danger">*</span></label>
                                        <textarea name="MoTaPhim" id="MoTaPhim" class="form-control" rows="5" required>{{ old('MoTaPhim') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Lưu phim
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            // Hiển thị tên file khi chọn ảnh
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // Thêm CKEDITOR cho phần mô tả phim
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('MoTaPhim');
            }
        });
    </script>
@endsection
