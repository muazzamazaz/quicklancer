<?php $__env->startSection('content'); ?>
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="invoice_list">
                <div class="wt-transactionhold">
                    <div class="wt-borderheading wt-borderheadingvtwo">
                        <h3><?php echo e(trans('lang.transaction_detl')); ?></h3>
                        <a class="print-window" href="javascript:void(0);" @click="print()">
                            <i class="fa fa-print"></i>
                            <?php echo e(trans('lang.print')); ?>

                        </a>
                    </div>
                    <div class="wt-transactioncontent" id="printable_area">
                        <ul class="wt-transactiondetails">
                            <li>
                                <span><em><?php echo e(trans('lang.pay_rec')); ?></em> <?php echo e(trans('lang.from')); ?> <?php echo e($invoice_info->payer_name); ?></span>
                                <span class="wt-grossamount"><?php echo e(trans('lang.gross_amnt')); ?></span>
                            </li>
                            <li>
                                <span>
                                    <?php echo e(Carbon\Carbon::parse($invoice_info->created_at)->diffForHumans()); ?> on <?php echo e(Carbon\Carbon::parse($invoice_info->created_at)->format('l \\a\\t H:i:s')); ?>

                                </span>
                                
                                <span class="wt-transactionid">
                                    <?php echo e(trans('lang.transaction_id')); ?>:&nbsp;<?php echo e($invoice_info->transaction_id); ?>

                                </span>
                                <span class="wt-grossamount wt-grossamountusd"><?php echo e($symbol); ?><?php echo e($invoice_info->price); ?>&nbsp;<?php echo e($invoice_info->currency_code); ?></span>
                            </li>
                            <li>
                                <span><?php echo e(trans('lang.pay_status')); ?>&nbsp;&colon;</span> 
                                <span class="wt-paymentstatus"><?php echo e($invoice_info->payer_status); ?></span>
                            </li>
                        </ul>
                        <table class="table wt-carttable">
                            <thead>
                                <tr>
                                    <th><?php echo e(trans('lang.product_name')); ?></th>
                                    <th><?php echo e(trans('lang.product_qty')); ?></th>
                                    <th><?php echo e(trans('lang.product_price')); ?></th>
                                    <th><?php echo e(trans('lang.product_subtotal')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e($invoice_info->item_name); ?></em>
                                    </td>
                                    <td data-title="Unit Price"><?php echo e($invoice_info->item_qty); ?></td>
                                    <td data-title="Total"><?php echo e($symbol); ?><?php echo e($invoice_info->item_price); ?>&nbsp;<?php echo e($invoice_info->currency_code); ?></td>
                                    <td data-title="Total"><?php echo e($symbol); ?><?php echo e($invoice_info->item_price); ?>&nbsp;<?php echo e($invoice_info->currency_code); ?></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name"></td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Unit Price"><?php echo e(trans('lang.purchase_total')); ?></td>
                                    <td data-title="Total"><?php echo e($symbol); ?><?php echo e($invoice_info->item_price); ?>&nbsp;<?php echo e($invoice_info->currency_code); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table wt-carttable wt-carttablevtwo">
                            <thead>
                                <tr>
                                    <th><?php echo e(trans('lang.pay_detl')); ?></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.purchase_total')); ?></em>
                                        <span><?php echo e($symbol); ?><?php echo e($invoice_info->item_price); ?>&nbsp;<?php echo e($invoice_info->currency_code); ?></span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.sales_tax')); ?></em>
                                        <span><?php echo e($symbol); ?><?php echo e($invoice_info->sales_tax); ?> <?php echo e($invoice_info->currency_code); ?></span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.shiping_amnt')); ?></em>
                                        <span>$<?php echo e($invoice_info->shipping_amount); ?> USD</span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.handling_amnt')); ?></em>
                                        <span>$<?php echo e($invoice_info->handling_amount); ?> USD</span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.insurance_amnt')); ?></em>
                                        <span>$<?php echo e($invoice_info->insurance_amount); ?> USD</span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                                <tr>
                                    <td data-title="Product Name">
                                        <em><?php echo e(trans('lang.net_amnt')); ?></em>
                                        <span><?php echo e($symbol); ?><?php echo e($invoice_info->price); ?> <?php echo e($invoice_info->currency_code); ?></span>
                                    </td>
                                    <td data-title="Unit Price"></td>
                                    <td data-title="Total"></td>
                                    <td data-title="Total"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wt-createtransactionhold wt-createtransactionholdvtwo">
                            <div class="wt-createtransactionheading">
                                <span></span>
                            </div>
                            <div class="wt-refundscontent">
                                <ul class="wt-refundsdetails">
                                    <li>
                                        <strong><?php echo e(trans('lang.invoice_id')); ?></strong>
                                        <div class="wt-rightarea"><span><?php echo e($invoice_info->invoice_id); ?></span></div>
                                    </li>
                                    <li>
                                        <strong><?php echo e(trans('lang.paid_by')); ?></strong>
                                        <div class="wt-rightarea">
                                            <span><?php echo e($invoice_info->payer_name); ?></span>
                                            <span><?php echo e(trans('lang.pay_sender_note')); ?> <em><?php echo e($invoice_info->payer_status); ?></em> </span>
                                            <span><?php echo e($invoice_info->payer_email); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <strong><span><?php echo e(trans('lang.need_help')); ?></span></strong>
                                        <span class="wt-refundsinfo"><?php echo e(trans('lang.paypal_note')); ?></span>
                                    </li>
                                    <li><span class="wt-refundsinfo"><?php echo e(trans('lang.paypal_warning_note')); ?></span></li>
                                    <li>
                                        <strong><?php echo e(trans('lang.memo')); ?></strong>
                                        <div class="wt-rightarea"><span><?php echo e($invoice_info->title); ?></span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>