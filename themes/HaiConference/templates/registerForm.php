<div class="uk-container uk-container-center">
<form class="uk-form uk-form-horizontal" id="regiserForm">
    <fieldset data-uk-margin>
        <legend>Регистрация</legend>
        <div class="uk-form-row">
            <label for="" class="uk-form-label">Имя</label>
            <div class="uk-form-controls">
                <input type="text" name="username" placeholder="Имя" required>
            </div>
        </div>
        <div class="uk-form-row">
            <label for="" class="uk-form-label">Фамилия</label>
            <div class="uk-form-controls">
                <input type="text" name="lastname" placeholder="Фамилия" required>
            </div>

        </div>
        <!--<div class="uk-form-row">
            <label for="" class="uk-form-label">Отчество</label>
            <div class="uk-form-controls">
                <input type="text" name="surname" placeholder="Отчество">
            </div>
        </div>-->
        <div class="uk-form-row">
            <label for="" class="uk-form-label">E-mail</label>
            <div class="uk-form-controls">
                <input type="email" name="email" placeholder="Email" required>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="" class="uk-form-label">Выберете роль</label>
            <div class="uk-form-controls">
                <div class="uk-form-select uk-button" data-uk-form-select>
                    <span></span>
                     <i class="uk-icon-caret-down"></i>
                    <select name="user_role" required>
                        <option value="" selected>Выберете роль</option>
                        <option value="contributor">Участник</option>
                        <option value="visitor">Зритель</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="uk-form-row">
            <label for="" class="uk-form-label">Введите пароль</label>
            <div class="uk-form-controls">
                <div class="uk-form-password">
                    <input type="password" name="password" required>
                    <a href="" class="uk-form-password-toggle" data-uk-form-password='{lblShow: "<i class=\"uk-icon-eye\"></i>", lblHide: "<i class=\"uk-icon-eye-slash\"></i>"}'>
                                <i class="uk-icon-eye"></i>
                            </a>
                </div>
                <p class="uk-form-help-block">пароль должен быть более 6 символов !</p>
            </div>
        </div>
        <div class="uk-form-row">
            <label for="" class="uk-form-label">Повторите пароль</label>
            <div class="uk-form-controls">
                <div class="uk-form-password">
                    <input type="password" name="repeat_password" required>
                      <a href="" class="uk-form-password-toggle" data-uk-form-password='{lblShow: "<i class=\"uk-icon-eye\"></i>", lblHide: "<i class=\"uk-icon-eye-slash\"></i>"}'>
                                <i class="uk-icon-eye"></i>
                            </a>
                </div>
            </div>
        </div>
        <div class="uk-form-row">
            <button class="uk-margin-top uk-button uk-button-primary uk-button-large" id="registerSubmit">Регистрация</button>
        </div>
    </fieldset>
</form>
</div>


