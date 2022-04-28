<?php include_once "./adminInclude/adminHeader.php"; ?>
<?php
  include_once ("../../classes/cart.php");
  include_once ("../../classes/user.php");
  include_once ("../../helpers/format.php");
  $fm = new format();
?>
        <!-- /top navigation -->

        <!-- page content -->
        <style>
      .table-title {
        font-size: 20px;
        padding: 12px 8px 6px;

        font-weight: bold;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Chi tiết đơn hàng<small></small></h3>
              </div>

              <div class="title_right">
                <div
                  class="
                    col-md-5 col-sm-5 col-xs-12
                    form-group
                    pull-right
                    top_search
                  "
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-secondary"
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
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Chi tiết đơn hàng<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                            $ct = new cart();
                            if(isset($_GET['id']) && $_GET['id']!='') {
                              $id = $_GET['id'];
                              $getOrderDetail = $ct->getOrderDetail($id);
                              if($getOrderDetail) {
                                while($result = $getOrderDetail->fetch_assoc()) {
                          ?>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <div class="table-title">
                            Chi tiết sản phẩm đơn hàng
                          </div>

                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead style="font-size: 18px">
                              <tr>
                                <th>ID Đơn hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Ghi chú</th>
                              </tr>
                            </thead>

                            <tbody style="font-size: 16px">
                              <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td style="padding: 12px 28px; width: 400px">
                                  <?php echo $result['productName'];?>
                                </td>
                                <td><?php $price = $result['price']/$result['quantity'];
                                echo $fm->format_currency($price). ' đ';?></td>
                                <td>x<?php echo $result['quantity'];?></td>
                                <td><?php echo $fm->format_currency($result['price']).' đ';?></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>

                          <div class="table-title">
                            Chi tiết vận chuyển đơn hàng
                          </div>
                          <?php
                            $us = new user();
                            $userId = $result['userId'];
                            $getUser = $us->showUser($userId);
                            if($getUser) {
                              while($resultUser = $getUser->fetch_assoc()) {
                          ?>
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead style="font-size: 18px">
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú</th>
                              </tr>
                            </thead>

                            <tbody style="font-size: 16px">
                              <tr>
                                <td><?php echo $resultUser['userId'];?></td>
                                <td><?php echo $resultUser['fullName'];?></td>

                                <td><?php echo $resultUser['phone'];?></td>
                                <td>
                                  <?php echo $resultUser['diachi'].", Phường ".$resultUser['phuong'].", Quận ".$resultUser['quan'].", Thành phố ".$resultUser['tinh'];?>
                                </td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                          <?php

                              }
                            } ?>
                        </div>
                        <div class="prev-ordered">
                          <a
                            href="./Ordered.php
                            "
                            style="
                              font-size: 18px;
                              line-height: 18px;
                              background-color: #2a3f54;
                              padding: 8px 16px;
                              color: white; ;
                            "
                            >Trở về Đơn hàng</a
                          >
                        </div>
                      </div>
                    </div>
                    <?php                                 }
                              }
                            } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
  <?php include "./adminInclude/adminFooter.php"; ?>