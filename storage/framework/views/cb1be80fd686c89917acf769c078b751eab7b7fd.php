<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="wt-dashboardbox">
            <div class="wt-dashboardboxtitle">
                <h2><?php echo e(trans('lang.ongoing_jobs')); ?></h2>
            </div>
            <div class="wt-dashboardboxcontent wt-jobdetailsholder">
                <div class="wt-freelancerholder">
                    <?php if(!empty($ongoing_jobs) && $ongoing_jobs->count() > 0 ): ?>
                        <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                            <?php $__currentLoopData = $ongoing_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php  
                                    $job = \App\Job::where('id', $job_id->job_id)->first(); 
                                    $duration  =  \App\Helper::getJobDurationList($job->duration);
                                    $user_name = $job->employer->first_name.' '.$job->employer->last_name;
                                    $verified_user = \App\User::select('user_verified')->where('id', $job->employer->id)->pluck('user_verified')->first();
                                ?>
                                <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                    <?php if(!empty($job->is_featured) && $job->is_featured === 'true'): ?>
                                        <span class="wt-featuredtag"><img src="<?php echo e(asset('images/featured.png')); ?>" alt="<?php echo e(trans('lang.is_featured')); ?>" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                    <?php endif; ?>
                                    <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            <?php if(!empty($user_name) || !empty($job->title) ): ?>
                                                <div class="wt-title">
                                                    <?php if(!empty($user_name)): ?>
                                                    <a href="<?php echo e(url('profile/'.$job->employer->slug)); ?>"><?php if($verified_user === 1): ?>
                                                        <i class="fa fa-check-circle"></i><?php endif; ?>&nbsp;<?php echo e($user_name); ?></a>
                                                    <?php endif; ?>
                                                    <?php if(!empty($job->title)): ?>
                                                        <h2><?php echo e($job->title); ?></h2>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty($job->price) || 
                                                !empty($location['title'])  ||
                                                !empty($job->project_type) ||
                                                !empty($job->duration)
                                                ): ?>
                                                <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                    <?php if(!empty($job->price)): ?>
                                                        <li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> <?php echo e($job->price); ?></span></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($job->location->title)): ?>
                                                        <li><span><img src="<?php echo e(asset(App\Helper::getLocationFlag($job->location->flag))); ?>" alt="<?php echo e(trans('lang.locations')); ?>"> <?php echo e($job->location->title); ?></span></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($job->project_type)): ?>
                                                        <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> <?php echo e(trans('lang.type')); ?> <?php echo e($job->project_type); ?></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($job->duration)): ?>
                                                        <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> <?php echo e(trans('lang.duration')); ?> <?php echo e($duration); ?></span></li>															
                                                    <?php endif; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <div class="wt-rightarea">
                                            <div class="wt-btnarea">
                                                <a href="<?php echo e(url('freelancer/job/'.$job->slug)); ?>" class="wt-btn"><?php echo e(trans('lang.view_detail')); ?></a>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <?php echo $__env->make('errors.no-record', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( method_exists($ongoing_jobs,'links') ): ?>
                <?php echo e($ongoing_jobs->links('pagination.custom')); ?>

            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.master', ['body_class' => 'wt-innerbgcolor'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>