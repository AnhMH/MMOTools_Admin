<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            
            <a href="javascript:void(0);" class="bars"></a>
            
            <a class="navbar-brand text-center" href="<?php $BASE_URL;?>"><img src="" title="" alt=""></a>
        </div>
        
        

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav top-menu">
                <li><a href="#"><?php echo __('Pricing')?></a></li>
            </ul>
            <ul class="nav navbar-nav top-menu right mr0">
                <li>
                    <div class="btn-group" style="margin-top: 7px; margin-left: 7px;">
                        <button type="button" class="btn btn-white waves-effect bg-white col-black">EN</button>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" style="min-width: 65px; text-align: center; margin-top: 0px!important;">
                            <?php if(!empty($lang))
                            foreach ($lang as $row) {
                            ?>
                            <li><a class="waves-effect waves-block p0" href="<?php $BASE_URL;?>language?l=<?=$row?>"><?=strtoupper($row)?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>