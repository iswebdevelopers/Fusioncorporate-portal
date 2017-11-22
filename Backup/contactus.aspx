<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/masterpages/FRBMain.Master" CodeBehind="contactus.aspx.vb" Inherits="FRB.sendcomment" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="HeaderContentPlaceHolder" runat="server">
<span id="header-coming-soon">Website launching soon...</span>
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="TextContentPlaceHolder" runat="server">
    <asp:Panel ID="pnlRequired" runat="server" Visible="false">
    Please correct the following:
    <ul>
        <asp:Label ID="lblRequired" runat="server" Text=""></asp:Label>
    </ul>
    </asp:Panel>
    <asp:Panel ID="pnlForm" runat="server" Visible="true">
        <h1>Contact Us</h1>
        Please complete the form below and we will respond to your message as soon as possible.<br />
        <em>All fields are mandatory</em><br />
        <ul class="formul">
	        <li>
		        <span class="intyp">
			        First Name
		        </span>
                <asp:TextBox ID="txtFirstname" runat="server"></asp:TextBox>     
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="First Name is required<br/>" Text="&nbsp;&nbsp;*" ControlToValidate="txtFirstName"></asp:RequiredFieldValidator>           
	        </li>
	        <li>
		        <span class="intyp">
			        Last Name
		        </span>
                <asp:TextBox ID="txtLastname" runat="server"></asp:TextBox>       
                <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Last Name is required<br/>" Text="&nbsp;&nbsp;*" ControlToValidate="txtLastName"></asp:RequiredFieldValidator>
                         
	        </li>
	        <li>
		        <span class="intyp">
			        E-mail
		        </span>
                <asp:TextBox ID="txtEmailAddress" runat="server"></asp:TextBox>     
                <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="E-mail is required<br/>" Text="&nbsp;&nbsp;*" ControlToValidate="txtEmailAddress"></asp:RequiredFieldValidator>           
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ErrorMessage="Invalid email address<br/>" Text="&nbsp;&nbsp;*" ControlToValidate="txtEmailAddress" ValidationExpression="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"></asp:RegularExpressionValidator>
	        </li>
	        <li>
		        <span class="intyp">
			        Message
		        </span>
                <asp:TextBox ID="txtMessage" runat="server" TextMode="MultiLine"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Message is required" Text="&nbsp;&nbsp;*" ControlToValidate="txtMessage" ></asp:RequiredFieldValidator>
	        </li>
	        <!--[if IE]>
                <li>&nbsp;</li> 
            <![endif]-->
	        <li>
                <asp:Button ID="btnSend" runat="server" Text="Send" />
	        </li>
        </ul>
            <asp:ValidationSummary ID="ValidationSummary1" runat="server" />
    </asp:Panel>
    <asp:Panel ID="pnlThankYou" runat="server" Visible="false">
    Thank you for submitting your question or comment.<br /><br />
    Please allow 1-3 business days for us to respond to your message. If you need immediate assistance please call us on 1800 101 285, Monday to Friday from 8AM until 5PM AEST. 
    </asp:Panel>
    <asp:Panel ID="pnlError" runat="server" Visible="false">
    An error has occurred submitting your question or comment.<br /><br />
    <asp:Label ID="lblErrorMessage" runat="server" Text="Label"></asp:Label>
    If you need immediate assistance please call us on 1800 101 285, Monday to Friday from 8AM until 5PM AEST. 
    </asp:Panel>
</asp:Content>
