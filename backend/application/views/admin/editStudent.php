<div class="row">

    <div class="pull-right">
        <p><a href="https://536729.webontwerp.khleuven.be/project/home/logout">Logout</a>&nbsp;&nbsp;&nbsp;Beheerder: <b><?= $this->user->voornaam . ' ' . $this->user->achternaam ?></b>.</p>
    </div>

    <div class="span12">
        <h3>Edit Student</h3>

        <form action="" method="post" class="form-horizontal">

            <div class="control-group <?php echo $this->form->getFieldStatus('login'); ?>">
                <label class="control-label" for="login">Login</label>
                <div class="controls">
                    <input id="login" name="login" type="text" value="<? echo $this->student->login; ?>" />
                    <span class="help-inline"><?php echo $this->form->getFieldMessage('login'); ?></span>
                </div>
            </div>

            <div class="control-group <?php echo $this->form->getFieldStatus('voornaam'); ?>">
                <label class="control-label" for="voornaam">Voornaam</label>
                <div class="controls">
                    <input id="voornaam" name="voornaam" type="text" value="<? echo $this->student->voornaam; ?>" />
                    <span class="help-inline"><?php echo $this->form->getFieldMessage('voornaam'); ?></span>
                </div>
            </div>

            <div class="control-group <?php echo $this->form->getFieldStatus('achternaam'); ?>">
                <label class="control-label" for="achternaam">Achternaam</label>
                <div class="controls">
                    <input id="achternaam" name="achternaam" type="text" value="<? echo $this->student->achternaam; ?>" />
                    <span class="help-inline"><?php echo $this->form->getFieldMessage('achternaam'); ?></span>
                </div>
            </div>

            <div class="control-group <?= $this->form->getFieldStatus('reeks'); ?>">
                <label class="control-label" for="reeks">Reeks</label>
                <div class="controls">
                    <input id="reeks" name="reeks" type="text" value="<? echo $this->reeks; ?>"/>
                    <span class="help-inline"><?php echo $this->form->getFieldMessage('reeks'); ?></span>
                </div>
            </div>

            <div class="control-group <?php echo $this->form->getFieldStatus('email'); ?>">
                <label class="control-label" for="email">E-mailadres</label>
                <div class="controls">
                    <input id="email" name="email" type="text" value="<? echo $this->student->email; ?>" />
                    <span class="help-inline"><?php echo $this->form->getFieldMessage('email'); ?></span>
                </div>
            </div>


                <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Pas student aan</button>
                </div>

            </form>
    </div>
</div>