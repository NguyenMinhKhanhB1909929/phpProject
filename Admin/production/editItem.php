<?php include_once "./adminInclude/adminHeader.php"; ?>
<?php include_once "../../classes/category.php"; ?>
<?php include_once "../../classes/product.php"; ?>
<?php
  $pd = new product();
  if(!isset($_GET['productId']) || $_GET['productId']==NULL) {
    echo "<script>window.location = 'ListItem.php'</script>";
  } else {
    $productId = $_GET['productId'];
  }
  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $updateProduct = $pd->update_product($_POST,$_FILES,$productId);
    }
?>
         <style>
      .form-control {
        height: auto;
      }
      label {
        font-size: 16px;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sản phẩm</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm ..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-default"
                        type="button"
                        style="background-color: #2a3f54; color: white"
                      >
                        Tìm
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="text-align: center; width: 100%">
                    <h2 style="font-size: 28px; float: none; color: black">
                      Sửa thông tin sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php
                      $getProductById = $pd->getProductById($productId);
                      if($getProductById) {
                        while($resultPd = $getProductById->fetch_assoc()) {
                    ?>
                    <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Tên sản phẩm:
                        </label>
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="productName"
                            value="<?php echo $resultPd['productName']; ?>"
                            placeholder="Tên sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Danh mục sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <select name="category" id="" class="form-control">
                            <option>---Danh mục sản phẩm---</option>
                            <?php
                              $cat = new category();
                              $catList = $cat->show_category();
                              if($catList) {
                                while($result = $catList->fetch_assoc()) {
                            ?>
                            <option
                            <?php
                              if($result['catId'] == $resultPd['catId']) {
                                echo 'selected';
                              }
                            ?>
                            value="<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></option>
                            <?php
                               }
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Hình ảnh sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <img src="uploads/<?php echo $resultPd['image']; ?>" alt="" style="width: 160px; margin: 10px">
                          <input
                            type="file"
                            class="form-control"
                            name="image"
                            placeholder="Loại sản phẩm"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Giá sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="price"
                            value="<?php echo $resultPd['price']; ?>"
                            placeholder="Giá sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Số lượng sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="quantity"
                            value="<?php echo $resultPd['quantity']; ?>"
                            placeholder="Số lượng sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Mô tả chi tiết sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9"></div>
                      </div>
                      <div class="">
                        <textarea name="productDesc" id="" cols="30" rows="8" style="resize: horizontal; width: 98%;margin: 0 10px;"><?php echo $resultPd['productDesc']; ?></textarea>
                      </div>
                      <div class="x_content">
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align: center">
                        <div
                          class="col-md-12 col-sm-12 offset-md-3"
                          style="margin: 0"
                        >
                          <button
                            type="button"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Hủy
                          </button>
                          <button
                            type="reset"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Reset
                          </button>
                          <button
                            type="submit"
                            class="btn btn-success"
                            name="submit"
                            style="margin: 0 8px; width: 90px"
                          >
                            Cập nhật
                          </button>
                        </div>
                      </div>
                    </form>
                    <?php
                    }
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
 <?php include "./adminInclude/adminFooter.php"; ?>