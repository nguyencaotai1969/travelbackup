<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row danhsachtour-tour" style="padding: 29px;margin-top: 67px">
            <h2 class="text-center text-primary"><b>Danh Sách Điểm Đến</b></h2>


            <div class="span5">



                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th >Tiêu đề</th>
                        <th class="none-manage-tour">Tóm tắt</th>
                        <th class="none-manage-tour">ID điểm đến</th>
                        <th>Avatar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $list_diemden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td  style="font-size: 70% !important"><?php echo e($news->id); ?></td>
                            <td  style="font-size: 70% !important" class="text-primary"><a target="_blank" href="<?php echo e(route('chitiet',$news->slug)); ?>"><?php echo e($news->name); ?></a></td>
                            <td class="none-manage-tour"><?php echo e($news->gioithieu); ?></td>
                            <td><img style="width: 100px" src="../../img/des/<?php echo e($news->img); ?>"></td>
                            <td >
                                <a  href="<?php echo e(route('ChangeDestination',$params = ['id'=> $news->id])); ?>">
                                    <button  style="font-size: 70% !important" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        Sửa
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button  style="font-size: 70% !important"type="button" data-idsp="<?php echo e($news->id); ?>" data-linkdel="<?php echo e(route('deletenews',$news->id)); ?>" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
                                    Xóa
                                </button>

                                <!-- The Modal -->

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="modal" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chú ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="delete-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Không</button>

                            <a class="btn btn-danger" id="link-del" href="#">Có</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>		<!-- footer -->
    <!-- //footer -->
    <script>
        $(document).on("click", ".del", function () {
            var NewsId = $(this).data('idsp');
            $("#delete-body").html( "Bạn có chắc muốn xóa bài viết này? " + NewsId);
            var Link = $(this).data('linkdel');
            $("#link-del").attr( "href" , Link);
            // As pointed out in comments,
            // it is unnecessary to have to manually call the modal.
            // $('#addBookDialog').modal('show');
        });
        $(function(){
            var noidung = $("#noidung").html();
            $("#noidung").html('{noidung}');
        });

        // As pointed out in comments,
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>