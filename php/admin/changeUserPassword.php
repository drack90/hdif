<!-- Modal -->
<div class="modal fade" id="changeUserPassword" tabindex="-1" role="dialog" aria-labelledby="changeUserPasswordlLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изменение пароля</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="changePassword">
                    <div class="form-group">
                        <label for="#oldPassword">Старый пароль</label>
                        <input class="form-control" type="password" id="oldPassword">
                    </div>

                    <div class="form-group">
                        <label for="#newPassword">Новый пароль</label>
                        <input class="form-control" type="password" id="newPassword">
                    </div>

                    <div class="form-group">
                        <label for="#verifyPassword">повторите пароль</label>
                        <input class="form-control" type="password" id="verifyPassword">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="saveUserPassword">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>