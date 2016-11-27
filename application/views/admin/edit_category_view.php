<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">แก้ไขหมวดหมู่ : <?php echo $category->name ?></h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <form action="<?php echo base_url('admin/update_category/' . $category->category_id) ?>" method="post">
                <div class="form-group">
                    <input class="form-control"
                           value="<?php echo $category->name ?>"
                           name="name"
                           type="text"
                           placeholder="โปรดกรอกชื่อหมวดหมู่"
                           required>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> บันทึก
                </button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
