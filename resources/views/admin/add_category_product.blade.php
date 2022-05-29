@extends ('admin_layout')
@section('admin_content')
    <section class="panel">
        <header class="panel-heading">
            <h2> Thêm sản phẩm</h2>
            @error('msg')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </header>
        <br>
        <div class="panel-body">
            <div class="position">
                <form action="{{ URL::to('/save-category-product') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <div class="row"> --}}
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="category_product_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập tên sản phâm">
                                @error('category_product_name')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea class="form-control" name="category_product_chucnang" id="Mô tả danh mục"
                                    placeholder="Mô tả sản phẩm"></textarea>
                                @error('category_product_chucnang')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá bán</label>
                                <input type="text" name="category_product_gia" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                                @error('category_product_gia')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="category_product_desc" class="form-control input-sm m-bot15">
                                    <option> </option>
                                    <option value="Đang bán">Ngưng bán</option>
                                    <option value="Đang bán">Đang bán</option>
                                    <option value="Hết hàng">Hết hàng</option>
                                </select>
                                @error('category_product_desc')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                                <br>
                                {{-- button --}}
                                <button type="submit" name="add_category_product" class="btn btn-info mr-3">Thêm</button>
                                <a onclick="return confirm('Bạn muốn về trang quản lí users?')"
                                    href="{{ URL::to('/all-category-product') }}" class="btn btn-info">Hủy</a>
                            </div>
                        </div>
                        {{-- up load file --}}
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label"> Hình ảnh: </label>
                                <br>
                                <img width="312" height="312" src="https://imgs.search.brave.com/NwKHu7FaYBKSonSkeT_Yj0dAFauW3SEIqXfoS0XAqF0/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9jZG4w/Lmljb25maW5kZXIu/Y29tL2RhdGEvaWNv/bnMvbGluZS1kb2N1/bWVudHMtYW5kLWZv/bGRlcnMvMTI4L19p/bWFnZV9mb2xkZXIt/NTEyLnBuZw" alt="">
                                    <br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name='category_file' type="file" class="custom-file-input"
                                            id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" id="btnxoa" type="button">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            @error('category_file')
                                <div class="text-danger">- {{ $message }}</div>
                            @enderror
                            {{-- </form> --}}
                        </div>
                        {{-- </div> F --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#btnxoa').click(function() {
                $('#inputGroupFile04').val(null);
            })
        })
    </script>
@endsection
