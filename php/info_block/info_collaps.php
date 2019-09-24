<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";?>



<!--<div class="row">-->
<!--    <div class="col"></div>-->
<!--    <div class="col-10">-->
<!--        <div class="card-title text-center text-primary"><span class="h3">Новые FPL</span></div>-->
<!--        <div class="card-deck">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="/img/holder.svg" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Новый учебный материал</h5>-->
<!--                    <p class="card-text">Прошу ознакомиться с новыми изменениями в работе с меридианом.</p>-->
<!--                    <p class="card-text"><small class="text-muted">время публикации и дата</small></p>-->
<!--                </div>-->
<!--                <div class="card-footer text-right">-->
<!--                    <a href="#" class="btn btn-primary">Далее</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="/img/holder.svg" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">CHG</h5>-->
<!--                    <p class="card-text">Как подавать CHG, тонкости и особенности работы в разных ЗЦ</p>-->
<!--                    <p class="card-text"><small class="text-muted">.</small></p>-->
<!--                </div>-->
<!--                <div class="card-footer text-right">-->
<!--                    <a href="#" class="btn btn-primary">Далее</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="/img/holder.svg" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Сургут</h5>-->
<!--                    <p class="card-text">Изменения касаемые сургута, а так же учебное пособие</p>-->
<!--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
<!--                </div>-->
<!--                <div class="card-footer text-right">-->
<!--                    <a href="#" class="btn btn-primary">Далее</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<hr class="">


<div class="row">
<div class="col-1"></div>
    <div class="col-10">
    <div class="card-title text-primary text-center"><span class="h3">Информация по регионам</span> </div>
<br>

        <div class="row">

            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="<?echo $row['tittle'];?>"
                       data-toggle="list" href="#list-CHG" role="tab" aria-controls="CHG">CHG</a>
                    <a class="list-group-item list-group-item-action" id="list-igarka-list" data-toggle="list"
                       href="#list-igarka" role="tab" aria-controls="igarka">Игарка</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                       href="#list-lyantor" role="tab" aria-controls="messages">Лянтор, Салым</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                       href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-CHG" role="tabpanel"
                         aria-labelledby="list-CHG-list">
                        <div class="label-default">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-11">
                                    <b><h3>Примеры работы с CHG</h3></b>
                                    <br>
                                    <span><p style="margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;"><b style="font-weight: bold;">CHG</b>&nbsp;- сообщение, касающееся изменения представленного&nbsp;плана полета;</p><p style="margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;"><b style="font-weight: bold;">CHG&nbsp;</b>передается в том случае, когда необходимо внести какое-либо изменение в основные данные представленного плана полета, содержащиеся в переданных ранее сообщениях FPL и PLN.</p><p style="margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;">Примеры&nbsp;<b style="font-weight: bold;">CHG</b>:</p><p style="margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 18px; font-family: Arial, Helvetica, sans-serif;">Изменение маршрута и EET/</p><blockquote style="padding: 10px 20px; margin-bottom: 17px; font-size: 15px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18px; font-family: Arial, Helvetica, sans-serif;"><h4 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 18px;"><font color="#333333"><span style="font-family: Tahoma;"><span style="font-family: Helvetica;">&nbsp;(CHG-NFT9999-USHB0430-USHB</span><br></span></font><font color="#333333"><span style="font-family: Helvetica;">-DOF/190711 REG/99999 -</span><b style="font-weight: bold;"><span style="font-family: Helvetica;">15/</span></b><span style="font-family: Helvetica;">K0190M0090&nbsp;</span></font><b style="font-weight: bold;"><font color="#000000" style="background-color: rgb(255, 255, 0);"><span style="font-family: Helvetica;">6358N06425E&nbsp;</span></font></b><font color="#333333"><span style="font-family: Tahoma;"><span style="font-family: Helvetica;">6157N06047E</span><br></span></font><font color="#333333"><span style="font-family: Tahoma;"><span style="font-family: Helvetica;">6623N06221E 6411N05959E 6412N05956E 6411N05959E 6356N06425E</span><br></span></font><b style="font-weight: bold; color: rgb(51, 51, 51);"><span style="font-family: Helvetica;">-18/</span></b><font color="#333333"><span style="font-family: Helvetica;">EET/USHB0005&nbsp;</span></font><b style="font-weight: bold;"><font color="#000000" style="background-color: rgb(255, 255, 0);"><span style="font-family: Helvetica;">USSS0130</span></font><span style="font-family: Helvetica;">&nbsp;</span></b><font color="#333333"><span style="font-family: Tahoma;"><span style="font-family: Helvetica;">USHB0200 UUYH0320 USHB0350</span><br></span></font><b style="font-weight: bold; color: rgb(51, 51, 51);"><span style="font-family: Helvetica;">RMK/</span></b><font color="#333333"><span style="font-family: Helvetica;">ИЗМЕНЕНИЕ МАРШРУТА ЗОН РПИ ТЕЛ ВУ 3452 285551)</span></font></h4></blockquote><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;">В данном примере CHG происходит изменение маршрута с добавлением новой координаты и изменением EET (отмечено желтым подчеркиванием).</h5><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;">Пример изменения времени вылета и замена воздушного судна (можно изменять только если время вылета&nbsp;<b style="font-weight: bold;">позже&nbsp;</b>изначального.</h5><blockquote style="padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><h4 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 18px;"><span style="font-family: Helvetica;">(CHG-NFT9999-USHS0540-USHB<br></span><span style="font-family: Helvetica;">-DOF/190625 -</span><b style="font-weight: bold;"><span style="font-family: Helvetica;">13/USHS1100 -18/REG/11111&nbsp;</span></b><span style="font-family: Helvetica;">RMK/ПЕРЕНОС<br></span><span style="font-family: Helvetica;">ВРЕМЕНИ ВЫЛЕТА ЗАМЕНА ВС)</span></h4></blockquote><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;"></p><ul>
</ul>
<p></p></span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-igarka" role="tabpanel"
                         aria-labelledby="list-igarka-list">
                        <div class="label-default">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-11">
                                    <!-- <b><h3>Играка (UOII)</h3></b> -->
                                    <br>
                                    <span><h1 style="text-align: center; "><b><span style="font-family: Helvetica;">Игарка.</span></b></h1><h5 style="text-align: left;"><br></h5><h6 style="text-align: left;"><span style="font-family: Helvetica;">За Игаркой закреплены постоянные рейсы, поиск производить по </span><span style="font-weight: bold; font-family: Helvetica;">"РН ВАНКОР РН ИГАРКИ"</span><span style="font-family: Helvetica;">.</span></h6><h6 style="text-align: left;"><span style="font-family: Helvetica;"><br>При выходе из Игарки - закреплены точки выхода:&nbsp;</span></h6><table class="table table-bordered"><tbody><tr><td><span style="font-family: Helvetica;">Выход на Сузун</span></td><td><span style="font-family: Helvetica;">6744N08544E</span></td></tr><tr><td><span style="font-family: Helvetica;">Выход на Тагул</span></td><td><span style="font-family: Helvetica;">6723N08527E</span></td></tr><tr><td><span style="font-family: Helvetica;">Выход на Ванкор</span></td><td><span style="font-family: Helvetica;">6735N08530E</span></td></tr></tbody></table><h4 style="text-align: left;"><br></h4><h6 style="text-align: left;"><span style="font-family: Helvetica;">Есть точка "Прилуки", находится в зоне "С", соответственно должна стоять всегда в PAP/</span></h6><table class="table table-bordered"><tbody><tr><td><span style="font-family: Helvetica;">Прилуки</span></td><td><span style="font-family: Helvetica;">6729N08618E</span></td></tr></tbody></table><p style="text-align: left;"></p><h4><span style="color: rgb(0, 0, 0);"><br></span></h4><h4><span style="color: rgb(0, 0, 0); font-family: Helvetica;">При выполнении работ на Тарко-Сале или Красноселькуп: </span><span style="font-weight: bold; color: rgb(255, 0, 0); font-family: Helvetica;">Требуется давать БОЛЬШЕ истекшего времени.</span></h4><div><span style="font-weight: bold; color: rgb(255, 0, 0); font-family: Helvetica;"><br></span></div><p style="text-align: left;"><span style="font-family: Helvetica; font-size: 1rem;">Точки для полетов в Игарке:</span><br></p><table class="table table-bordered"><tbody><tr><td><span style="font-family: Helvetica;">Сузун</span></td><td><span style="font-family: Helvetica;">6826N08341E</span></td></tr><tr><td><span style="font-family: Helvetica;">Сузун32</span></td><td><span style="font-family: Helvetica;">6809N08315E</span></td></tr><tr><td><span style="font-family: Helvetica;">Ванкор</span></td><td><span style="font-family: Helvetica;">6748N08338E UOOG</span></td></tr><tr><td><span style="font-family: Helvetica;">Ванкор Грузовая</span></td><td><span style="font-family: Helvetica;">6748N08333E</span></td></tr><tr><td><span style="font-family: Helvetica;">Тагул</span></td><td><span style="font-family: Helvetica;">6716N08312E</span></td></tr><tr><td><span style="font-family: Helvetica;">Тагул53</span></td><td><span style="font-family: Helvetica;">6719N08314E</span></td></tr><tr><td><span style="font-family: Helvetica;">Тагул29</span></td><td><span style="font-family: Helvetica;">6723N08308E</span></td></tr><tr><td><span style="font-family: Helvetica;">Тагул51</span></td><td><span style="font-family: Helvetica;">6722N08306E</span></td></tr><tr><td><span style="font-family: Helvetica;">НПС-1</span></td><td><span style="font-family: Helvetica;">6621N08236E (зона USDS)</span></td></tr><tr><td><span style="font-family: Helvetica;">НПС-2</span></td><td><span style="font-family: Helvetica;">6524N08044E (зона USDS)</span></td></tr></tbody></table><h5 style="text-align: left;"><b><br></b></h5></span>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="tab-pane fade" id="list-lyantor" role="tabpanel"
                         aria-labelledby="list-lyantor-list">
                        <div class="label-default">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-11">
                                    <b><h3>Лянтор (УСРЛ) и Салым</h3></b>
                                    <br>
                                    <span><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;"><span style="font-family: Tahoma;">ть в планах в Сургутских или Тобольских планах планы, в которых вылет происходит из Салыма, и маршрут проходит по типовым месторождениям, которые находятся в соседних зонах.</span></h5><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;"><span style="font-family: Tahoma;"><br></span><span style="font-family: Tahoma;">Для того что бы облегчить процесс подачи планов, было решено упростить сам план:<br></span><span style="font-family: Tahoma;">Следует обратить внимание в плане на EET/USRR0005 USHH0030 USHQ0230 USMM0300 USRR0230&nbsp;&nbsp;</span></h5><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;"><span style="font-family: Tahoma;"><br></span><span style="font-family: Tahoma;">Из данного EETвидно что машина, производит облет 4 различных зон и возвращается в Сургутскую. Т.к. большинство посещаемых месторождений находится в зоне G и не требует указания в PAP/ данный план подходит для большинства маршрутов которые могут проходить из Лянтора, Салыма, Сургута или Тобольска</span>:&nbsp;</h5><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><blockquote style="padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(248, 100, 102); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;"><div><span style="font-family: &quot;Times New Roman&quot;;">(FPL-NFT9999-VN</span></div><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">-MI8/M-S/N</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">-USRL0000</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">-K0190M0090 6150N07053E 6318N06900E 6346N07104E 6327N07221E</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">-USRL1200</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">-</span><b style="font-weight: bold; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;;">STS/23&nbsp;</span></b><span style="font-family: &quot;Times New Roman&quot;;">DOF/190101 REG/11111 EET/USRR0005 USHH0030 USHQ0230</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">USMM0300 USR0230 RMK/POSADKA SOGLASOWANA EKIPAV DOPUQEN K</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">POSADKAM S PODBOROM SE/34 POLET W PROSTRANSTWE G ОБЛЕТ&nbsp;</span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: &quot;Times New Roman&quot;;">СКВАЖИН Р989 К743 5Г ТЕЛ ВУ 3452 285552 МЕНЕДЖЕР 83462778560)</span></span></h5></blockquote><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;">Так же есть рейс на Р743 И является типовым с захватом всех требуемых зон (можно найти при помощи функции поиска FPL на сайте)&nbsp;</h5><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);">Как выглядит облет на карте:&nbsp;</p><img src="../../img/USRL.JPG" style="width: 50%"><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;">Маршрут из Салыма захватывает другие зоны через которые обычно происходит работа:<img src="../../img/salym_temp.JPG" style="width: 50%"></h5><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"></p><h5 style="font-family: inherit; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 14px;">Очень важно обращать внимание на то, какой маршрут у транспорта, пойдет он "Вниз" или "Вверх".</h5><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 13px; color: rgb(107, 113, 122);"><br style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;"></p><ul>
               </ul>
<p></p></span>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                         aria-labelledby="list-settings-list">...</div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-1"></div>
</div>

    <br>

