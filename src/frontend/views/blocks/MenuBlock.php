<?php
use luya\cms\widgets\LangSwitcher;

?>
    
        <!-- navbar toggler -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <?php 
                    $menus = Yii::$app->menu->findAll(['depth' => 1, /*'container' => 'modules'*/]);
                    foreach ($menus as $item){
                        $isLink = true;
                        $submenus = Yii::$app->menu->findAll(['parent_nav_id' => $item->itemArray['nav_id'], 'depth' => 2, /*'container' => 'modules'*/]);
                        foreach ($submenus as $item2){ $isLink = false; break; }
                        if($isLink){
                            echo '<li class="nav-item">';
                            echo '<a  class="nav-link" href="'.$item->link.'">'.$item->title.'</a>';
                            echo '</li>';
                        }else{
                            ?>
                            <li class="nav-item dropdown dropdown-animate">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownblog" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <?=$item->title;?>
                                </a>
                                <div class="dropdown-menu dropdown-menu dropdown-menu-arrow p-0" aria-labelledby="navbarDropdownblog">
                                    <ul class="list-unstyled pt-1 pb-2">
                            <?php
                            foreach ($submenus as $item2){ ?>
                                <li><a class="dropdown-item" href="<?=$item2->link;?>"><?=$item2->title;?></a></li>
                            <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <?php 
                        }
                    }
                ?>
            </ul>
        </div>