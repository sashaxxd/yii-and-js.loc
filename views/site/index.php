<?php
//
///* @var $this yii\web\View */
//
//$this->title = 'Ремонт техники';
//?>

<div id="wb_zag_par1">
    <div id="zag_par1">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text5">
                    <span id="wb_uid1">ВЫБРАТЬ ДЕВАЙС</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_par1">
    <div id="par1">
        <div class="row">
            <?php  foreach ($products as $item) :?>
            <div class="col-1">
                <div id="wb_Text9">
                    <span id="wb_uid2"><?=  $item->name ?></span>
                </div>
                <div class="wb_CssMenu2">
                    <ul>
                <?php  foreach ($item->lessons as $lesson) :?>
                        <li class="firstmain"><a href="#" target="_self" data-id="<?= $lesson->id ?>"><?= $lesson->name ?></a>
                        </li>
                <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="app-category">
</div>
<!--<div class="app-category">-->
<!--<div class="category">-->
<!--<div id="wb_zag_par2">-->
<!--    <div id="zag_par2">-->
<!--        <div class="row">-->
<!--            <div class="col-1">-->
<!--                <div id="wb_Text1">-->
<!--                    <span id="wb_uid5">ВЫБРАТЬ РАЗДЕЛ</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div id="wb_par2">-->
<!--    <div id="par2">-->
<!--        <div class="row">-->
<!--            <div class="col-1">-->
<!--                <div id="wb_Text12">-->
<!--                    <span id="wb_uid6">--><?//= $category[0]->lesson->name ?><!--</span>-->
<!--                </div>-->
<!--                <div id="wb_CssMenu1">-->
<!--                    <ul>-->
<!--                        --><?php // foreach ($category as $item) :?>
<!--                        <li class="firstmain"><a href="#" target="_self" data-id="--><?//= $item->id ?><!--">--><?//= $item->name ?><!--</a>-->
<!--                        </li>-->
<!--                        --><?php // endforeach; ?>
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

<div class="app-table">
</div>

<div id="wb_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text19">
                    <span id="wb_uid38">ДОПОЛНИТЕЛЬНО</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text22">
                    <span id="wb_uid39">Отсутствие официальной продажи запчастей является основной сложностью ремонта iPhone. По этой причине значение слова ORIGINAL было размыто, и, вместо оригиальной запчасти произведенной одним из заводов Apple имеющей сертификат подленности, под этим словом подразумевают различные вещи (порой даже неудовлетворительного качества). По вышеизложенным причинам, доверяя свой аппарат мастерской вы доверяете ее выбору в отношении запчастей.</span>
                </div>
            </div>
        </div>
    </div>
</div>