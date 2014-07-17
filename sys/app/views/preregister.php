					<div id="content">
						<h2><?=$this->lang->line('register.pre')?></h2>
						
						<p><?=$this->lang->line('register.p1')?></p>
						<div id="message"></div>
						<form action="" method="POST" name="form" id="form">
							<div id="spinner">
								<img src="<?=base_url()?>img/progress.gif" alt="" />
								<span><?=$this->lang->line('register.form.process')?></span>
							</div>
							<fieldset>
								<label for="name"><?=$this->lang->line('register.form-name')?></label>
								<input type="text" name="name" id="name"/><br />
								<label for="lastname"><?=$this->lang->line('register.form-lastname')?></label>
								<input type="text" name="lastname" id="lastname" /><br />
								<label for="institution"><?=$this->lang->line('register.form-institution')?></label>
								<input type="text" name="institution" id="institution" /><br />
								<label for="city"><?=$this->lang->line('register.form-city')?></label>
								<input type="text" name="city" id="city" /><br />
								<label for="country"><?=$this->lang->line('register.form-country')?></label>
								<input type="text" name="country" id="country" /><br />
								<label for="email"><?=$this->lang->line('register.form-email')?></label>
								<input type="text" name="email" id="email" /><br />
								<label for="category"><?=$this->lang->line('register.form-category')?></label>
								<select name="category" id="category">
									<option value="professor"><?=$this->lang->line('register.form-cat-professor')?></option>
									<option value="researcher"><?=$this->lang->line('register.form-cat-researcher')?></option>
									<option value="student"><?=$this->lang->line('register.form-cat-student')?></option>
								</select><br />
								<input class="button" type="submit" value="<?=$this->lang->line('register.form-submit')?>" />
							</fieldset>
						</form>
                        <h3>&nbsp;</h3>
						</div>
