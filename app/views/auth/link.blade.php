<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password Reset</title>
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px">
  <tr>
    <td><table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">
        
        {{ HTML::image('assets/admin/images/logo_web88.png','web88') }}

        </div></td>
        <td><div align="right">
       
        {{ HTML::image('assets/admin/images/logo_webqom.png','Webqom Technologies Sdn Bhd') }}

        </div></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="600" border="0" cellpadding="5" cellspacing="3" bgcolor="#f5f5f5">
      <tr>
        <td><p>Dear, {{$user->email}}</p>
        	<p>Please click the following link to reset your Web88 CMS password.</p>
    		<p><a href="{{url().'/password/reset/'.$token}}">{{url().'/password/reset/'.$token}}</a></p>  
            <p>Thank you.</p>
    <p>Best Regards,<br/>
    Web88 Administrator</p>    
        
        </td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>  </td>
  </tr>
</table>
</body>
</html>
