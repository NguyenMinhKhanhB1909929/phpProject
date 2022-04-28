<?php include_once "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
         <style>
      .tile_count .tile_stats_count {
        padding: 0 32px 0 20px;
        overflow: visible;
      }
    </style>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
            <div class="title_left">
              <h3>Doanh thu cửa hàng</h3>
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

          <div class="row" style="display: inline-block"></div>
          <br />

          <div class="row">
            <div class="tile_count">
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-money"></i> Tổng doanh thu</span
                >
                <div class="count green" style="font-size: 32px">182 triệu</div>
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-edit"></i>Tổng đơn hàng
                </span>
                <div class="count" style="font-size: 32px">23</div>
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-money"></i> Doanh thu tuần</span
                >
                <div class="count" style="font-size: 32px">86 Triệu</div>
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-edit"></i> Đơn hàng tuần</span
                >
                <div class="count" style="font-size: 32px">08</div>
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-edit"></i>Đơn hàng trong ngày</span
                >
                <div class="count" style="font-size: 32px">01</div>
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-money"></i> Doanh thu trong ngày</span
                >
                <div class="count" style="font-size: 32px">12 triệu</div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="dashboard_graph x_panel">
                <div class="x_title">
                  <div class="col-md-6">
                    <h3 style="padding-top: 24px">
                      Thống kê doanh thu<small></small>
                    </h3>
                  </div>
                  <div class="col-md-6">
                    <div
                      id="reportrange"
                      class="pull-right"
                      style="
                        background: #fff;
                        cursor: pointer;
                        padding: 5px 10px;
                        border: 1px solid #ccc;
                      "
                    >
                      <i class="fa fa-calendar"></i>
                      <span style="color: black; font-size: 16px"
                        >December 30, 2014 - January 28, 2015</span
                      >
                      <b class="caret"></b>
                    </div>
                  </div>
                </div>
                <div class="x_content">
                  <div class="demo-container" style="height: 250px">
                    <div id="chart_plot_03" class="demo-placeholder"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
  <?php include_once "./adminInclude/adminFooter.php"; ?>