<%@ Page Language="C#" AutoEventWireup="true" CodeFile="contact-us.html.cs" Inherits="contactus" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024" />
<title>Thermal Engitech | Contact Us</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="fonts/font-face.css" />

</head>
<body>
<div class="main">
  <div class="header">
  	<a href="index.html" id="logo"><img src="images/logo.gif" width="244" height="91" /></a>
	<div style="float:right; height:19px; padding-top:10px;"><a href="https://plus.google.com/103900820041152215359" target="_blank" rel="publisher">Google+</a></div>
    <div class="navigation">
    <ul>
    	<li><a href="index.html"><span>home</span></a>/</li>
        <li><a href="aboutus.html"><span>about us</span></a>/</li>
        <li><a href="products.html"><span>products </span></a>/</li>
				<li><a href="Infrastructure.html"><span>Infrastructure</span></a>/</li>
				<li><a href="quality.html"><span>QA</span></a>/</li>				
        <li><a href="#" class="active"><span>contact us</span></a></li>
    </ul>
    </div>
  </div>
</div>
<div class="inner_banner">
<img src="images/inner-banner4.jpg" width="100%"/>
<div class="inner_banner_txt_wraper"><div class="main"><div>Direct & Indirect Heating Solution</div></div></div>
</div>
<div class="main">
	<div class="inner_midWrap">
	<div class="contact">
    	<h1>Contact Us</h1>
		<div class="left_coll">
		<h3>Let's Keep in Touch</h3>
       
        <form runat="server">
        <table width="100%" class="contacttable"> 
         <tr>
            <td colspan="2">
            <div class="required">Please fill in all <span>required fields.</span></div>
            </td>
         </tr>     
            <%--<tr>
                <td>
                    <h1>Contact Us</h1>
                </td>
            </tr>
            <tr>
                <td>
                   <h3>Let's Keep in Touch</h3>
                </td>
            </tr>--%>
            <tr>
                <td class="lefttd">
                    <asp:TextBox ID="txtFirstName" runat="server"  placeholder="First Name*" ></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Please Enter the FirstName" ControlToValidate="txtFirstName"  CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic" ValidationGroup="validate"></asp:RequiredFieldValidator>
                </td>
                <td class="lefttd">
                    <asp:TextBox ID="txtLastName" runat="server" placeholder="Last Name*"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                        ErrorMessage="Please Enter the Lastname" ControlToValidate="txtLastName" 
                        ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="lefttd">
                    <asp:TextBox ID="txtEmail" runat="server" placeholder="Email*"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
                        ErrorMessage="The e-mail address you entered appears to be incorrect. (Ex: test@example.com)" ControlToValidate="txtEmail" 
                        ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RequiredFieldValidator>
                    <asp:RegularExpressionValidator ID="regexEmailValid" runat="server" 
                        ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" 
                        ControlToValidate="txtEmail" 
                        ErrorMessage="The e-mail address you entered appears to be incorrect. (Ex: test@example.com)" 
                        ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RegularExpressionValidator>
                </td>
                <td class="lefttd">
                    <asp:TextBox ID="txtPhoneNo" runat="server" placeholder="Phone No*" MaxLength="10"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" 
                        ErrorMessage="Please enter Telephone No" ControlToValidate="txtPhoneNo" 
                        ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RequiredFieldValidator>                 
                <%--    <asp:RegularExpressionValidator id="RegularExpressionValidator1" runat="server" 
                        ControlToValidate="txtPhoneNo" ErrorMessage="Please Enter the Valid Phone No" 
                        ValidationExpression="^[0-9]{10}"  ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RegularExpressionValidator> --%>
                </td>
            </tr>
            <tr>
            <td colspan="2">
                <asp:TextBox ID="txtMessage" runat="server" TextMode="MultiLine" Width="581px" placeholder="Message*"></asp:TextBox>
                 <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                    ErrorMessage="Please Enter the Message" ControlToValidate="txtMessage" 
                     ValidationGroup="validate" CssClass="requiredregistartion" SetFocusOnError="true" Display="Dynamic"></asp:RequiredFieldValidator>
            </td>
            </tr>
            <tr>            
               <td align="right" colspan="2"> 
                   <%--<asp:Button ID="btnsubmit" runat="server" Text="Submit"  CssClass="link_btn" OnClick="btnSubmit_Click" ValidationGroup="validate"/> --%>             
                    <asp:LinkButton ID="btnsubmit" runat="server" CssClass="submit_btn" OnClick="btnSubmit_Click" ValidationGroup="validate">Submit</asp:LinkButton>                                          
                </td>                           
            </tr>
        </table>
    
    </form>
		<%--<ul class="form">
		<div class="required">Please fill in all <span>required fields.</span></div>
		<li><input type="text" name="" value="First Name*" onblur="if (this.value == '') { this.value='First Name*'; }" onfocus="if (this.value == 'First Name*') { this.value='';} " onclick="this.value=''"></li>
		<li><input type="text" name="" value="Last Name*" onblur="if (this.value == '') { this.value='Last Name*'; }" onfocus="if (this.value == 'Last Name*') { this.value='';} " onclick="this.value=''" ></li>
		<li><input type="text" name="" value="Email*" onblur="if (this.value == '') { this.value='Email*'; }" onfocus="if (this.value == 'Email*') { this.value='';} " onclick="this.value=''" ></li>
		<li><input type="text" name="" value="Phone No*" onblur="if (this.value == '') { this.value='Phone No*'; }" onfocus="if (this.value == 'Phone No*') { this.value='';} " onclick="this.value=''" ></li>
		<li><textarea name="" cols="" rows="" onblur="if (this.value == '') { this.value='Message*'; }" onfocus="if (this.value == 'Message*') { this.value='';} " onclick="this.value=''" >Message*</textarea></li>
		</ul>--%>
		<%--<a href="#" class="submit_btn">Submit</a>--%>
		<div class="map">
			<!--<img src="images/map_img.jpg" width="595" height="155" />-->
            <iframe width="595" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=119+G.V.M.M.,+NEAR+ODHAV+RING+ROAD,+ODHAV,+AHMEDABAD+%E2%80%93+382415&amp;aq=&amp;sll=23.037284,72.563581&amp;sspn=0.027763,0.052314&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Police+Station+-+Odhav,+Odhav,+Ahmedabad,+Gujarat+382415&amp;ll=23.025208,72.672495&amp;spn=0.001735,0.00327&amp;z=14&amp;output=embed"></iframe>
			<a target="_blank" href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=119+G.V.M.M.,+NEAR+ODHAV+RING+ROAD,+ODHAV,+AHMEDABAD+%E2%80%93+382415&amp;aq=&amp;sll=23.037284,72.563581&amp;sspn=0.027763,0.052314&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Police+Station+-+Odhav,+Odhav,+Ahmedabad,+Gujarat+382415&amp;ll=23.025208,72.672495&amp;spn=0.001735,0.00327&amp;z=14" class="view_link">View Larger Map</a>
			</div>
			<div class="map-shadow"></div>
			</div>
		<div class="right_coll">
				<h3>Contact Details</h3>
		<ul class="right_coll_inner">
<li class="phone">TEL: 079 25620370  </li>
<li class="fax">FAX: 079 40075427</li>
<li class="factory">FACTORY: 079 22901728</li>
<li class="msg">Email: <a href="mailto:info@thermalengitech.com">info@thermalengitech.com</a></li>
<li class="website">Website: <a href="http://www.thermalengitech.com/" target="_blank">www.thermalengitech.com</a></li>
<li class="address"><b>THERMAL ENGITECH PVT. LTD.</b><br /> <br />
<b>WORKS I:</b><br />
42, BARCELONA INDUSTRIAL ESTATE, ODHAV, AHMEDABAD – 382415. GUJARAT, INDIA <br /><br />

<b>WORKS II:</b><br />
119 G.V.M.M., NEAR ODHAV RING ROAD, ODHAV, AHMEDABAD – 382415</li>
<!--
<div class="social">
<ul>
<li><a class="fb" href="#">Facebook</a></li>
<li><a class="twi" href="#">Twitter</a></li>
</ul>
</div>-->			
		</ul>
		
		</div>
</div>
	</div>
</div>
<div class="footer">
	<div class="main">
    <ul>
    	<li><a href="index.html">home</a>/</li>
        <li><a href="aboutus.html">about us</a>/</li>
        <li><a href="products.html">products</a>/</li>
				<li><a href="Infrastructure.html">Infrastructure</a>/</li>
				<li><a href="quality.html">QA</a>/</li>
        <li><a class="active" href="contact-us.html">contact us</a></li>
    </ul>
  </div>
</div>
<div class="copyright">
<a href="index.html">Thermal Engitech Pvt</a>. Ltd.© All rights reserved.
</div>
</body>
</html>
