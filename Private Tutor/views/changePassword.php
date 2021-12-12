<?php 
	require_once('header.php');
?>

<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    
     <br/>
		<table width="100%" cellpadding="0" cellspacing="0">
                                                      <tr>
				<td>Current Password</td>
		                                   <td>:</td>
				<td><input name="password" type="password"></td>
                                                                      <td></td>
                                                    </tr> 
                               <tr><td colspan="4"><hr/></td></tr> 
			<tr>
				<td>New Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Retype New Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>	
                                                   </table>
                                                   <hr/>
                   <input type="submit" name="submit" value="Change"> 
        <a href="home.php">home</a>  
          
                                                 		
</fieldset>