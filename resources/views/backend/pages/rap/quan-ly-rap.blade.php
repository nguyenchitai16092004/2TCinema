@extends('backend.layouts.master')
@section('title', isset($rap[0]) ? 'Chỉnh sửa Rạp' : 'Thêm mới Rạp')

@section('main')
<section class="px-6 py-8">
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-700 dark:text-white">
            {{ isset($rap[0]) ? 'Chỉnh sửa Rạp' : 'Thêm mới Rạp' }}
        </h2>

        <form action="{{ isset($rap[0]) ? route('rap.update', $rap[0]->ID_Rap) : route('rap.store') }}" method="POST">
            @csrf
            @if(isset($rap[0]))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 mb-2">Tên Rạp</label>
                <input type="text" name="TenRap" value="{{ old('TenRap', $rap[0]->TenRap ?? '') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 mb-2">Địa Chỉ</label>
                <input type="text" name="DiaChi" value="{{ old('DiaChi', $rap[0]->DiaChi ?? '') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 mb-2">Trạng Thái</label>
                <select name="TrangThai" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white">
                    <option value="1" {{ (old('TrangThai', $rap[0]->TrangThai ?? '') == '1') ? 'selected' : '' }}>Hoạt động</option>
                    <option value="0" {{ (old('TrangThai', $rap[0]->TrangThai ?? '') == '0') ? 'selected' : '' }}>Bảo trì</option>
                </select>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('rap.index') }}" class="btn btn-secondary mr-2">Quay lại</a>
                <button type="submit" class="btn btn-primary">
                    {{ isset($rap[0]) ? 'Cập nhật' : 'Thêm mới' }}
                </button>
            </div>
        </form>
    </div>
</section>
@endsection