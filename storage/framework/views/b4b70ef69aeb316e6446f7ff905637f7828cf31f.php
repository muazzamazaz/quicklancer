<div class="wt-location wt-tabsinfo">
    <h5><?php echo e(trans('lang.home_banner_bg')); ?></h5>
    <div class="wt-settingscontent">
        <?php if(!empty($banner_bg)): ?>
            <?php $image = 'uploads/settings/home/'.$banner_bg; ?>
            <div class="wt-formtheme wt-userform">
                <div v-if="this.uploaded_banner_bg">
                    <upload-image 
                        :id="'home_banner'" 
                        :img_ref="'home_ref'" 
                        :url="'<?php echo e(url('admin/upload-temp-image/home_banner')); ?>'"
                        :name="'home_banner'"
                        >
                    </upload-image>
                </div>
                <div class="wt-uploadingbox" v-else>
                    <figure><img src="<?php echo e(asset($image)); ?>" alt="<?php echo e(trans('lang.home_banner')); ?>"></figure>
                    <div class="wt-uploadingbar">
                        <div class="dz-filename"><?php echo e($banner_bg); ?></div>
                        <em><?php echo e(trans('lang.file_size')); ?><a href="javascript:void(0);" class="lnr lnr-cross" v-on:click.prevent="removeImage('hidden_home_banner')"></a></em>
                    </div>
                </div>
                <input type="hidden" name="home[0][home_banner]" id="hidden_home_banner" value="<?php echo e($banner_bg); ?>"> 
            </div>
        <?php else: ?>
            <div class="wt-formtheme wt-userform">
                <upload-image 
                    :id="'home_banner'" 
                    :img_ref="'home_ref'" 
                    :url="'<?php echo e(url('admin/upload-temp-image/home_banner')); ?>'"
                    :name="'home_banner'"
                    >
                </upload-image>
                <input type="hidden" name="home[0][home_banner]" id="hidden_home_banner"> 
            </div>
        <?php endif; ?>
   </div>
   <div class="wt-settingscontent">

        <?php if(!empty($banner_bg2)): ?>
            <?php $image2 = 'uploads/settings/home/'.$banner_bg2; ?>
            <div class="wt-formtheme wt-userform">
                <div v-if="this.uploaded_banner_bg">
                    <upload-image 
                        :id="'home_banner2'" 
                        :img_ref="'home_ref2'" 
                        :url="'<?php echo e(url('admin/upload-temp-image/home_banner2')); ?>'"
                        :name="'home_banner2'"
                        >
                    </upload-image>
                </div>
                <div class="wt-uploadingbox" v-else>
                    <figure><img src="<?php echo e(asset($image2)); ?>" alt="<?php echo e(trans('lang.home_banner2')); ?>"></figure>
                    <div class="wt-uploadingbar">
                        <div class="dz-filename"><?php echo e($banner_bg2); ?></div>
                        <em><?php echo e(trans('lang.file_size')); ?><a href="javascript:void(0);" class="lnr lnr-cross" v-on:click.prevent="removeImage('hidden_home_banner2')"></a></em>
                    </div>
                </div>
                <input type="hidden" name="home[0][home_banner2]" id="hidden_home_banner2" value="<?php echo e($banner_bg2); ?>"> 
            </div>
        <?php else: ?>
            <div class="wt-formtheme wt-userform">
                <upload-image 
                    :id="'home_banner2'" 
                    :img_ref="'home_ref2'" 
                    :url="'<?php echo e(url('admin/upload-temp-image/home_banner2')); ?>'"
                    :name="'home_banner2'"
                    >
                </upload-image>
                <input type="hidden" name="home[0][home_banner2]" id="hidden_home_banner2"> 
            </div>
        <?php endif; ?>
   </div>
   <div class="wt-settingscontent">
        <?php if(!empty($banner_bg3)): ?>
            <?php $image3 = 'uploads/settings/home/'.$banner_bg3; ?>
            <div class="wt-formtheme wt-userform">
                <div v-if="this.uploaded_banner_bg">
                    <upload-image 
                        :id="'home_banner3'" 
                        :img_ref="'home_ref3'" 
                        :url="'<?php echo e(url('admin/upload-temp-image/home_banner3')); ?>'"
                        :name="'home_banner3'"
                        >
                    </upload-image>
                </div>
                <div class="wt-uploadingbox" v-else>
                    <figure><img src="<?php echo e(asset($image3)); ?>" alt="<?php echo e(trans('lang.home_banner3')); ?>"></figure>
                    <div class="wt-uploadingbar">
                        <div class="dz-filename"><?php echo e($banner_bg3); ?></div>
                        <em><?php echo e(trans('lang.file_size')); ?><a href="javascript:void(0);" class="lnr lnr-cross" v-on:click.prevent="removeImage('hidden_home_banner3')"></a></em>
                    </div>
                </div>
                <input type="hidden" name="home[0][home_banner3]" id="hidden_home_banner3" value="<?php echo e($banner_bg3); ?>"> 
            </div>
        <?php else: ?>
            <div class="wt-formtheme wt-userform">
                <upload-image 
                    :id="'home_banner3'" 
                    :img_ref="'home_ref3'" 
                    :url="'<?php echo e(url('admin/upload-temp-image/home_banner3')); ?>'"
                    :name="'home_banner3'"
                    >
                </upload-image>
                <input type="hidden" name="home[0][home_banner3]" id="hidden_home_banner3"> 
            </div>
        <?php endif; ?>
    </div>
</div>
    
