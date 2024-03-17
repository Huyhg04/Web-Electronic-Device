<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <p class="btn btn-warning">
                  <?php if (isset($errorMessage) && $_POST['add']) {
                        echo $errorMessage;}
                 ?></p>
              </div>
            </div>
            <form class="row"  method="post" enctype="multipart/form-data">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" name="tensp" type="text" value="">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" id="exampleSelect1" name="madm">
                <?php foreach ($data['dsdm'] as $dm): ?>
                  <option value="<?=$dm['madm']?>">
                      <?=$dm['tendm']?>
                  </option>
                <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá gốc</label>
                <input class="form-control" name="gia" type="text"  value="">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá khuyến mãi</label>
                <input class="form-control" name="giakhuyenmai" type="text"  value="">
              </div>
              <!-- <div class="form-group col-md-3">
                <label class="control-label">Số lượng</label>
                <input type="number" class="form-control" name="soluong" placeholder="Số lượng" value="">
              </div> -->
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <img src="" style="width:100px"> 
              
                <div id="myfileupload">
                <input type="file" name="anh" placeholder="Ảnh" >
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>

              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota" value=""></textarea>
              </div>
              <input type="submit" name="add" value="Lưu thay đổi" class="btn btn-save">
          </form>
          </div>
        </div>
        </div>
        </div>
         <div class="text-right" style="font-size: 12px">
            <p><b>Hệ thống quản lý Admin| Code by Gia Huy</b></p>
        </div>
  </main>

 