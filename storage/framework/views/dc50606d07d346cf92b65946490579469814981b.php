<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!--Party Menu-->
        <?php echo $__env->make('common.PartyMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet light profile-sidebar-portlet margin-left-20">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic margin-top-20 margin-left-20">
                <img src="<?php echo e(asset('public/admin/layout/img/avatar.png')); ?>" class="img-responsive" alt="User Image">
            </div>
            <!-- END SIDEBAR USERPIC -->
        </div>
        <ul class="page-sidebar-menu active">
            <li>
                <a href="javascript:;">
                    <span class="title"> Profile </span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="page_timeline.html">
                            New Timeline
                        </a>
                    </li>
                    <li>
                        <a href="quick_sidebar_push_content.html">
                            Push Content</a>
                    </li>
                    <li>
                        <a href="quick_sidebar_over_content.html">
                            Over Content</a>
                    </li>
                    <li>
                        <a href="quick_sidebar_over_content_transparent.html">
                            Over Content & Transparent</a>
                    </li>
                    <li>
                        <a href="quick_sidebar_on_boxed_layout.html">
                            Boxed Layout</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <span class="title">Salesforce Management</span>
                </a>
            </li>
        </ul>
    </div>
</div>
