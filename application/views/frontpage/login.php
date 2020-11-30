<br/><br/>
<div id="lcenter">
	<div id="ltitle"><center><font type="Verdana">LOGIN</center></div>
	<div id="loginForm">
		<?php	if ($error == '') {?>
					<table border="0" align="center" >
						<tr>
							<td height="250"></td>
						</tr>
						<tr>
							<td valign="center">
							<form method="post"  action="<?php echo $url?>authent/in">
								<label class="short">Username</label>
								<input class="wd" name="username" type="text" size="30" maxlength="32" />
								<label class="short">Password</label>
								<input class="wd" name="password" type="password" size="30" maxlength="32" />
								<input type="submit" name="login" value="Login" />
							</form>
							</td>
						</tr>
					</table>
		<?php	} 
		else 
		{?>
					<table border="0" align="center">
						<tr>
							<td height="250"></td>
						</tr>
						<tr>
							<td colspan="7" align="center" >
								<font color="red"><b><?php echo $error;?></b>
							</td>
						</tr>						</tr>
						<tr></tr>
						<tr>
							<td valign="center">
							<form method="post" action="<?php echo $url?>authent/in">
								<label class="short">Username</label>
								<input class="wd" name="username" type="text" size="30" maxlength="32" />
								<label class="short">Password</label>
								<input class="wd" name="password" type="password" size="30" maxlength="32" />
								<input type="submit" name="login" value="Login" />
							</form>
							</td>
						</tr>
					</table>
		<?php	
		} ?>
	</div>
</div>