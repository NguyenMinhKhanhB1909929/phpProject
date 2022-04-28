<?php include_once "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->
<style>
      .tile_count .tile_stats_count {
        padding: 0 16px 0 20px;
        overflow: visible;
      }
    </style>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="page-title">
            <div class="title_left">
              <h3>Trang chủ</h3>
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

          <!-- top tiles -->
          <div class="row" style="display: inline-block">
            <div class="tile_count">
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-user"></i> Sô khách hàng</span
                >
                <div class="count">03</div>
                <span class="count_bottom"
                  ><i class="green">4% </i> Từ tuần trước</span
                >
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-clock-o"></i>Thời gian trưc tiếp
                </span>
                <div class="count">33.50</div>
                <span class="count_bottom"
                  ><i class="green"><i class="fa fa-sort-asc"></i>3% </i> Từ
                  tuần trước</span
                >
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-edit"></i> Số đơn hàng</span
                >
                <div class="count green">10</div>
                <span class="count_bottom"
                  ><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Từ
                  tuần trước</span
                >
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-trash"></i> Số đơn hàng hủy</span
                >
                <div class="count">01</div>
                <span class="count_bottom"
                  ><i class="red"><i class="fa fa-sort-desc"></i>32% </i> Từ
                  tuần trước</span
                >
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-rss-square"></i> Lượt truy cập</span
                >
                <div class="count">141</div>
                <span class="count_bottom"
                  ><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Từ
                  tuần trước</span
                >
              </div>
              <div class="col-md-2 col-sm-4 tile_stats_count">
                <span class="count_top"
                  ><i class="fa fa-retweet"></i> Khách hàng trở lại</span
                >
                <div class="count">03</div>
                <span class="count_bottom"
                  ><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Từ
                  tuần trước</span
                >
              </div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Lượt truy cập đến cửa hàng<small></small></h3>
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
                      <span style="color: black"
                        >December 30, 2014 - January 28, 2015</span
                      >
                      <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 bg-white">
                  <div class="x_title">
                    <h2>Truy cập hàng đầu</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12">
                    <div>
                      <p>Cần Thơ</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%">
                          <div
                            class="progress-bar bg-green"
                            role="progressbar"
                            data-transitiongoal="80"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Thành phố Hồ Chí Minh</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%">
                          <div
                            class="progress-bar bg-green"
                            role="progressbar"
                            data-transitiongoal="60"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div>
                      <p>Hà Nội</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%">
                          <div
                            class="progress-bar bg-green"
                            role="progressbar"
                            data-transitiongoal="40"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Sóc Trăng</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%">
                          <div
                            class="progress-bar bg-green"
                            role="progressbar"
                            data-transitiongoal="50"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />

          <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php include "./adminInclude/adminFooter.php"; ?>
