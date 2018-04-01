<div id="site_table_search">
    <div id="table_search">
        <div class="row">
            <div class="col-1">
                <table id="Table1">
                    <tr>
                        <?php if(isset($category[0])) : ?>
                        <td colspan="3" class="cell0"><span id="site_uid7">&nbsp; </span><span id="site_uid8"> <?= $category[0]->lesson->name ?> / <?= $category[0]->name ?>  </span></td>
                        <?php else: ?>
                            <td colspan="3" class="cell0"><span id="site_uid7">&nbsp; </span><span id="site_uid8"> <?= $table[0]->category->lesson->name ?>  / <?= $table[0]->category->name ?>  </span></td>
                        <?php endif; ?>
                    </tr>

                    <?php if(isset($category[0])) : ?>
                        <?php  foreach ($category[0]->table as $item) :?>
                            <tr>
                                <td class="cell1"><span id="site_uid9"> </span><span id="site_uid10"></span><span id="site_uid11"><?= $item->name; ?> </span><span id="site_uid12"><br></span></td>
                                <td class="cell1"><span id="site_uid13">&nbsp; </span><span id="site_uid14">&nbsp;</span><span id="site_uid15">&nbsp;<?= $item->price ?>  руб.</span><span id="site_uid16"><br></span><span id="site_uid17"><br></span></td>
                                <td class="cell1"><span id="site_uid18">&nbsp; </span><span id="site_uid19">&nbsp;</span><span id="site_uid20">&nbsp;<?= $item->time ?>  мин.</span><span id="site_uid21"><br></span><span id="site_uid22"><br></span></td>
                            </tr>
                            <!--                    <tr>-->
                            <!--                        <td class="cell1"><span id="site_uid23">&nbsp; </span><span id="site_uid24">&nbsp; </span><span id="site_uid25">Замена фронтальной камеры</span><span id="site_uid26"><br></span><span id="site_uid27"><br></span></td>-->
                            <!--                        <td class="cell1"><span id="site_uid28">&nbsp; </span><span id="site_uid29">&nbsp; </span><span id="site_uid30">40 руб.</span><span id="site_uid31"><br></span><span id="site_uid32"><br></span></td>-->
                            <!--                        <td class="cell1"><span id="site_uid33">&nbsp; </span><span id="site_uid34">&nbsp; </span><span id="site_uid35"> 30 мин.</span><span id="site_uid36"><br></span><span id="site_uid37"><br></span></td>-->
                            <!--                    </tr>-->
                        <?php  endforeach; ?>
                        <?php else: ?>
                        <?php  foreach ($table as $item) :?>
                            <tr>
                                <td class="cell1"><span id="site_uid9"> </span><span id="site_uid10"></span><span id="site_uid11"><?= $item->name; ?> </span><span id="site_uid12"><br></span></td>
                                <td class="cell1"><span id="site_uid13">&nbsp; </span><span id="site_uid14">&nbsp;</span><span id="site_uid15">&nbsp;<?= $item->price ?>  руб.</span><span id="site_uid16"><br></span><span id="site_uid17"><br></span></td>
                                <td class="cell1"><span id="site_uid18">&nbsp; </span><span id="site_uid19">&nbsp;</span><span id="site_uid20">&nbsp;<?= $item->time ?>  мин.</span><span id="site_uid21"><br></span><span id="site_uid22"><br></span></td>
                            </tr>
                            <!--                    <tr>-->
                            <!--                        <td class="cell1"><span id="site_uid23">&nbsp; </span><span id="site_uid24">&nbsp; </span><span id="site_uid25">Замена фронтальной камеры</span><span id="site_uid26"><br></span><span id="site_uid27"><br></span></td>-->
                            <!--                        <td class="cell1"><span id="site_uid28">&nbsp; </span><span id="site_uid29">&nbsp; </span><span id="site_uid30">40 руб.</span><span id="site_uid31"><br></span><span id="site_uid32"><br></span></td>-->
                            <!--                        <td class="cell1"><span id="site_uid33">&nbsp; </span><span id="site_uid34">&nbsp; </span><span id="site_uid35"> 30 мин.</span><span id="site_uid36"><br></span><span id="site_uid37"><br></span></td>-->
                            <!--                    </tr>-->
                        <?php  endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>