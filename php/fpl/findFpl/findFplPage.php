<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?>
<div id="findFplPages">
<div class="row">
    <div class="col-1"></div>
    <div class="col-3">
        <br>
        <h3>Поиск FPL </h3>
        <div class="fplfind">
            <div class="form-group">
                <form method="POST" id="findFpl">
                    <div>
                        <label for="fplname">Имя FPL</label>
                        <input class="form-control" id="fplname" name="fplname" rows="1"></input>
                    </div>

                    <div class="form-group">
                        <label for="departure">Взлет</label>
                        <input class="form-control" id="departure" name="departure" rows="1"></input>
                    </div>

                    <div class="form-group">
                        <label for="arrival">Посадка</label>
                        <input class="form-control" id="arrival" rows="1" name="arrival"></input>
                    </div>

                    <div class="form-group">
                        <label for="route">Маршурт</label>
                        <input class="form-control" id="route" rows="1" name="route"></input>
                    </div>
                    <div class="form-group">
                        <label for="remark">Поиск по 18 полю</label>
                        <input class="form-control" id="remark" rows="1" name="remark"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comment">Поиск по комментарию</label>
                        <input class="form-control" id="commentaries" rows="1" name="commentaries"></textarea>
                    </div>

                    <input id="searchFpl" type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>
    <div class="col-6">
        <div class="results" id="results"></div></div>
</div>
</div>
<script type="text/javascript">


    $('#searchFpl').on('click', function () {
        $.ajax({
            url: "/php/fpl/findFpl/findFplProcessor.php",
            type: "POST",
            data: $('#findFpl').serialize(),
            //({direction: $('#send_generator_fpl').val(),
            // data: $('#transferData').val()}),
            dataType: "html",
            success: function (data) {
                $('#results').html(data);
            }
        });
        event.preventDefault();

    });