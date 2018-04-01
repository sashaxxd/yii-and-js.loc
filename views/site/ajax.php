<?php

/* @var $this yii\web\View */

$this->title = 'Тест';
?>

<div class="category">
    <div id="wb_zag_par2">
        <div id="zag_par2">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Text1">
                        <span id="wb_uid5">ВЫБРАТЬ РАЗДЕЛ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wb_par2">
        <div id="par2">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Text12">
                        <span id="wb_uid6"><?= $category[0]->lesson->name ?></span>
                    </div>
                    <div id="wb_CssMenu1">
                        <ul>
                            <?php  foreach ($category as $item) :?>
                                <li class="firstmain"><a href="#" target="_self" data-id="<?= $item->id ?>"><?= $item->name ?> <?= $item->id?></a>
                                </li>
                            <?php  endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cat-rem">
<div id="wb_table_search">
    <div id="table_search">
        <div class="row">
            <div class="col-1">
                <table id="Table1">
                    <tr>
                        <td colspan="3" class="cell0"><span id="wb_uid7">&nbsp; </span><span id="wb_uid8"> <?= $category[0]->lesson->name ?> / <?= $category[0]->lesson->name ?> <?= $item->id?> </span></td>
                    </tr>
                    <?php if(isset($category[0])) : ?>
                    <?php  foreach ($category[0]->table as $item) :?>
                        <tr>
                            <td class="cell1"><span id="wb_uid9"> </span><span id="wb_uid10"></span><span id="wb_uid11"><?= $item->name ?> </span><span id="wb_uid12"><br></span></td>
                            <td class="cell1"><span id="wb_uid13">&nbsp; </span><span id="wb_uid14">&nbsp;</span><span id="wb_uid15">&nbsp;<?= $item->price ?>  руб.</span><span id="wb_uid16"><br></span><span id="wb_uid17"><br></span></td>
                            <td class="cell1"><span id="wb_uid18">&nbsp; </span><span id="wb_uid19">&nbsp;</span><span id="wb_uid20">&nbsp;<?= $item->time ?>  мин.</span><span id="wb_uid21"><br></span><span id="wb_uid22"><br></span></td>
                        </tr>
                        <!--                    <tr>-->
                        <!--                        <td class="cell1"><span id="wb_uid23">&nbsp; </span><span id="wb_uid24">&nbsp; </span><span id="wb_uid25">Замена фронтальной камеры</span><span id="wb_uid26"><br></span><span id="wb_uid27"><br></span></td>-->
                        <!--                        <td class="cell1"><span id="wb_uid28">&nbsp; </span><span id="wb_uid29">&nbsp; </span><span id="wb_uid30">40 руб.</span><span id="wb_uid31"><br></span><span id="wb_uid32"><br></span></td>-->
                        <!--                        <td class="cell1"><span id="wb_uid33">&nbsp; </span><span id="wb_uid34">&nbsp; </span><span id="wb_uid35"> 30 мин.</span><span id="wb_uid36"><br></span><span id="wb_uid37"><br></span></td>-->
                        <!--                    </tr>-->
                    <?php  endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>