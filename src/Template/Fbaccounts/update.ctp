<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <i class="fa fa-plus-square" aria-hidden="true"></i> <?php echo __('Update Facebook account')?> 
                </h2>
            </div>
            <div class="body pt0">
                <div class="row">
                    <div class="col-sm-12 mb0">
                        <form method="POST" action="<?php echo $BASE_URL;?>/ajax/gettoken" data-action-token="<?php echo $BASE_URL;?>/ajax/gettoken" data-redirect="">
                            <ul class="nav nav-tabs tab-col-pink mb15 " role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_md_col_1" data-toggle="tab"><?php echo __('STEP 1: GET ACCESS TOKEN')?></a>
                                </li>
                            </ul>
                            <b><?php echo __('Facebook username')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="id" value="<?=!empty($result)?$result->id:0?>">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            <b><?php echo __('Facebook password')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <b><?php echo __('Facebook App')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <select id="app" name="app" class="form-control">
                                    <option value="ios">Facebook For Iphone</option>
                                    <option value="android">Facebook For Android</option>
                                </select>
                            </div>
                            <button type="button" class="btn bg-light-green waves-effect btnFBGetToken"><?php echo __('Get Access Token')?></button>
                            <div class="row">
                                <div class="col-md-12 open_iframe">
                                    
                                </div>
                            </div>
                            <ul class="nav nav-tabs tab-col-pink mb15" role="tablist" style="margin-top: 20px;">
                                <li role="presentation" class="active">
                                    <a href="#home_md_col_1" data-toggle="tab"><?php echo __('STEP 2: ADD ACCESS TOKEN')?></a>
                                </li>
                            </ul>
                            <b><?php echo __('Access Token')?> (<span class="col-red">*</span>)</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize access_token" name="access_token" placeholder="Enter access token"></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn bg-red waves-effect btnFBAccountUpdate"><?php echo __('Submit')?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    iframe{
        max-width: 100%;
    }
</style>
