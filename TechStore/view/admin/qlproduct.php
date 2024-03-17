<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="?mod=admin&act=addsanpham" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập"><i
                                  class="fas fa-file-upload"></i> Tải từ file</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm print-file" type="button" title="In"><i
                                  class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                  class="fas fa-copy"></i> Sao chép</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In"><i
                                  class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                    <th>Giá Khuyến mãi</th>
                                    <th>Danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>    
                            <tbody>
                            <?php foreach ($data['dssp'] as $sp) :?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td><?=$sp['masp']?></td>
                                    <td><?=$sp['tensp']?></td>
                                    <td><img src="<?=$sp['anh']?>" alt="" width="100px;"></td>
                                    <td>40</td>
                                    <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td><?=number_format($sp['gia'], 0, ".", ",")?>đ</td>
                                    <td><?=number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ</td>
                                    <td> <?=$sp['tendm']?></td>
                                    <td> 
                                        <a href="index.php?mod=admin&act=update&id=<?=$sp['masp']?>" class="btn btn-primary btn-sm trash"><i class="fas fa-trash-alt"></i> </a> 
                                         <a href="index.php?mod=admin&act=update&id=<?=$sp['masp']?>" class="btn btn-primary btn-sm edit"><i class="fas fa-edit"></i></a> 
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right" style="font-size: 12px">
            <p><b>Hệ thống quản lý Admin| Code by Gia Huy</b></p>
        </div>
    </main>

