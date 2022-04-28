<?php include_once "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <style>
      .menu_section-search {
        padding: 13px 15px 12px;
      }
      .menu_section-search-input {
        padding: 4px 8px;
      }
      td,
      th {
        text-align: center;
      }

      .table-time-wrap {
        display: flex;
        flex-direction: column;
      }
      .prev-ordered {
        margin-top: 28px;
        margin-bottom: 8px;
        text-align: center;
      }
    </style>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
            <div class="title_left">
              <h3>Đánh giá của khách hàng</h3>
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
          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title" style="width: 100%; text-align: center">
                <h2 style="width: 100%; color: black; font-size: 28px">
                  Chi tiết đánh giá<small></small>
                </h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <table
                        id="datatable"
                        class="table table-striped table-bordered"
                        style="width: 100%"
                      >
                        <thead>
                          <tr>
                            <th>ID Khách hàng</th>
                            <th>Mã sản phẩm đánh giá</th>
                            <th>Thời gian đánh giá</th>
                            <th>Số sao đánh giá</th>
                            <th>Nội dung đánh giá</th>
                            <th>Trả lời đánh giá</th>
                            <th>Xóa</th>
                            <th>Xem chi tiết</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>G512-IAL013T</td>
                            <td>
                              <div class="table-time-wrap">
                                <div class="table-time-hour">11:21am</div>
                                <div class="table-time-date">8/12/2021</div>
                              </div>
                            </td>
                            <td>
                              <div class="Comment-star" style="font-size: 20px">
                                5
                                <i class="fa fa-star"></i>
                              </div>
                            </td>
                            <td>Sản phẩm tốt, chất lượng</td>
                            <td>
                              <i
                                class="fa fa-pencil"
                                style="font-size: 20px; color: #001fff"
                              ></i>
                            </td>
                            <td>
                              <i
                                class="fa fa-remove"
                                style="font-size: 20px; color: red"
                              ></i>
                            </td>
                            <td>
                              <a
                                href="./AOrderDes.html"
                                class="table-see-wrap"
                                style="color: #001fff; text-decoration: none"
                              >
                                <i
                                  class="fa fa-eye"
                                  style="font-size: 20px"
                                ></i>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>10SCXR-013VN</td>
                            <td>
                              <div class="table-time-wrap">
                                <div class="table-time-hour">4:15pm</div>
                                <div class="table-time-date">5/12/2021</div>
                              </div>
                            </td>
                            <td>
                              <div class="Comment-star" style="font-size: 20px">
                                4.5
                                <i class="fa fa-star"></i>
                              </div>
                            </td>
                            <td>Giá cả hợp lý, sản phẩm chất lượng</td>
                            <td>
                              <i
                                class="fa fa-pencil"
                                style="font-size: 20px; color: #001fff"
                              ></i>
                            </td>
                            <td>
                              <i
                                class="fa fa-remove"
                                style="font-size: 20px; color: red"
                              ></i>
                            </td>
                            <td>
                              <a
                                href="./AOrderDes.html"
                                class="table-see-wrap"
                                style="color: #001fff; text-decoration: none"
                              >
                                <i
                                  class="fa fa-eye"
                                  style="font-size: 20px"
                                ></i>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>AN515-45-R0B6</td>
                            <td>
                              <div class="table-time-wrap">
                                <div class="table-time-hour">7:24pm</div>
                                <div class="table-time-date">6/12/2021</div>
                              </div>
                            </td>
                            <td>
                              <div class="Comment-star" style="font-size: 20px">
                                4
                                <i class="fa fa-star"></i>
                              </div>
                            </td>
                            <td>Sản phẩm đẹp, đóng gói cẩn thận</td>
                            <td>
                              <i
                                class="fa fa-pencil"
                                style="font-size: 20px; color: #001fff"
                              ></i>
                            </td>
                            <td>
                              <i
                                class="fa fa-remove"
                                style="font-size: 20px; color: red"
                              ></i>
                            </td>
                            <td>
                              <a
                                href="./AOrderDes.html"
                                class="table-see-wrap"
                                style="color: #001fff; text-decoration: none"
                              >
                                <i
                                  class="fa fa-eye"
                                  style="font-size: 20px"
                                ></i>
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
          </div>
          <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
  <?php include "./adminInclude/adminFooter.php"; ?>