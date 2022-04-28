<?php include_once "./adminInclude/adminHeader.php"; ?>
<?php include_once "../../classes/category.php"; ?>
<?php
    $cat = new category();
  if(isset($_GET['catId'])) {
    $id = $_GET['catId'];
    $deleteCat = $cat->delete_category($id);
  }
?>
        <style>
      th,
      td {
        text-align: center;
        margin: auto;
      }
      .table-search {
        font-size: 16px;
        padding: 2px 8px;
        margin-right: -1px;
        width: 255px;
      }
      .table-add-item-btn {
        background-color: #2a3f54;
        color: white;
        font-size: 16px;
        padding: 4px 12px;
        border-radius: 2px;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Danh mục sản phẩm<small></small></h3>
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
                      placeholder="Tìm kiếm ..."
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
                    <h2
                      style="
                        font-size: 20px;
                        float: none;
                        color: black;
                        font-size: 28px;
                      "
                    >
                      Danh mục sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <div
                            class="table-search-wrap"
                            style="
                              display: flex;
                              justify-content: end;
                              align-items: center;
                              margin-bottom: 16px;
                            "
                          >
                            <input
                              type="text"
                              class="table-search"
                              placeholder="Tìm kiếm ..."
                            />
                            <i
                              class="fa fa-search"
                              style="
                                font-size: 16px;
                                border: 1px solid #6c757d;
                                background-color: #e6e6e6;
                                padding: 7px 9px;
                                margin-right: 24px;
                              "
                            ></i>
                            <div class="table-add-item-btn"><a href="./addCategory.php" style="color: white;">Thêm danh mục</a></div>
                            <?php
                        if(isset($deleteCat)) {
                          echo $deleteCat;
                        }
                      ?>
                          </div>
                          <table
                            id="datatable-checkbox"
                            class="
                              table table-striped table-bordered
                              bulk_action
                            "
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <th>STT</th>
                                <th>Tên danh mục sản phẩm</th>
                                <th>Thao tác</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php
                                $show_category = $cat->show_category();
                                if($show_category) {
                                  $i = 0;
                                  while($result = $show_category->fetch_assoc()) {
                                    $i++;
                              ?>
                              <tr>
                                <th>
                                  <input
                                    type="checkbox"
                                    id="check-all"
                                    style="height: 18px; width: 18px"
                                  />
                                </th>

                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['catName']; ?></td>
                                <td>
                                  <a href="editCategory.php?catId=<?php echo $result['catId']; ?>">
                                    <i
                                      class="fa fa-edit"
                                      style="font-size: 20px; color: red; margin-right: 16px;"
                                    ></i>
                                  </a>
                                  <a href="category.php?catId=<?php echo $result['catId']; ?>"
                                    onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?');"
                                  >
                                    <i
                                      class="fa fa-close"
                                      style="font-size: 20px; color: red"
                                    ></i>
                                  </a>
                                </td>
                              </tr>
                              <?php
                                  }
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include "./adminInclude/adminFooter.php"; ?>