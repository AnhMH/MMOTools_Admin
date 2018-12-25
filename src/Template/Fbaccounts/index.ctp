<form class="ScheduleList" action="">
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <i class="fa fa-facebook-official" aria-hidden="true"></i> <?php echo __('Facebook accounts')?>
                    </h2>
                </div>
                <div class="header">
                	<div class="form-inline">
                        <div class="btn-group" role="group">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-red waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo __('Action')?>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="btnActionModule" data-action="active" href="javascript:void(0);"><?php echo __('Active')?></a></li>
                                    <li><a class="btnActionModule" data-action="disable" href="javascript:void(0);"><?php echo __('Deactive')?></a></li>
                                    <li><a class="btnActionModule" data-action="delete" data-confirm="<?php echo __('Are you sure you want to delete this items?')?>" href="javascript:void(0);"><?php echo __('Delete')?></a></li>
                                </ul>
                            </div>
                            <a href="<?php echo $BASE_URL;?>/fbaccounts/update" class="btn bg-light-green waves-effect"><i class="fa fa-plus" aria-hidden="true"></i> Add new</a>
                        </div>
                    </div>
                </div>
                <div class="body p0">
                    <table class="table table-bordered table-striped table-hover js-dataTable dataTable mb0">
                        <thead>
                            <tr>
                                <th style="width: 10px;">
                                    <input type="checkbox" id="md_checkbox_211" class="filled-in chk-col-red checkAll">
                                    <label class="p0 m0" for="md_checkbox_211">&nbsp;</label>
                                </th>
                                <th><?php echo __('User')?></th>
                                <th><?php echo __('Facebook ID')?></th>
                                <th><?php echo __('Fullname')?></th>
                                <th><?php echo __('Username')?></th> 
                                <th><?php echo __('Token')?></th>
                                <th class="text-center"><?php echo __('Update Groups')?></th>
                                <th class="text-center"><?php echo __('Update Pages')?></th>
                                <th class="text-center"><?php echo __('Update Friends')?></th>
                                <th><?php echo __('Status')?></th>
                                <th><?php echo __('Option')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(!empty($result)){
                            foreach ($result as $key => $row) {
                            ?>
                            <tr class="pending" data-action="" data-action-groups="" data-id="">
                                <td>
                                    <input type="checkbox" name="id[]" id="md_checkbox_<?=$key?>" class="filled-in chk-col-red checkItem" value="<?php echo $row['id'];?>">
                                    <label class="p0 m0" for="md_checkbox_<?=$key?>">&nbsp;</label>
                                </td>
                                <td><a href="user_management/update"></a><?php echo $row['admin_id'];?></td>
                                <td><a href="https://facebook.com/<?php echo $row['fb_id'] ?>" target="_blank"><?php echo $row['fb_id'] ?></a></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['token'] ?></td>
                                <td class="text-center"><button type="button" class="btn bg-blue waves-effect btnUpdateGroups" data-type="group"><?php echo __('Update Groups')?></button></td>
                                <td class="text-center"><button type="button" class="btn bg-blue waves-effect btnUpdateGroups" data-type="page"><?php echo __('Update Pages')?></button></td>
                                <td class="text-center"><button type="button" class="btn bg-blue waves-effect btnUpdateGroups" data-type="friend"><?php echo __('Update Friends')?></button></td>
                                <td style="width: 60px;">
                                    <div class="switch">
                                        <label><input type="checkbox" class="btnActionModuleItem" <?php echo empty($row['disable']) ? "checked":""?>><span class="lever switch-col-light-blue"></span></label>
                                    </div>
                                </td>
                                <td style="width: 80px;">
                                    <div class="btn-group" role="group">
                                        <a href="<?php echo $BASE_URL.'/fbaccounts/update/'.$row['id'];?>" class="btn bg-light-green waves-effect"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <button type="button" class="btn bg-light-green waves-effect btnActionModuleItem" data-action="delete" data-confirm="<?php echo __('Are you sure you want to delete this item?')?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</form>