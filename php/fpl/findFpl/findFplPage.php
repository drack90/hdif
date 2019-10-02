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
                        <label for="fplName">Имя FPL</label>
                        <input class="form-control" id="fplnName" name="fplName" rows="1"></input>
                    </div>

                    <div class="form-group">
                        <label for="field13">Взлет</label>
                        <input class="form-control" id="field13" name="field13" rows="1"></input>
                    </div>

                    <div class="form-group">
                        <label for="field16">Посадка</label>
                        <input class="form-control" id="field16" rows="1" name="field16"></input>
                    </div>

                    <div class="form-group">
                        <label for="field15">Маршурт</label>
                        <input class="form-control" id="field15" rows="1" name="field15"></input>
                    </div>
                    <div class="form-group">
                        <label for="field18">Поиск по 18 полю</label>
                        <input class="form-control" id="field18" rows="1" name="field18"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="commentaries">Поиск по комментарию</label>
                        <input class="form-control" id="commentaries" rows="1" name="commentaries"></textarea>
                    </div>


                        <div class="row">
                            <div class="col-6 ">
                                        <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="author" name="author">
                                        <label class="custom-control-label" for="author" >Только Мои</label>
                                    </div>
                            </div>

                            <div class="col-6 flex-row ">
                                <input id="searchFpl" type="submit" class="btn btn-primary">
                            </div>
                        </div>



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
    </script>
