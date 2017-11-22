<%
option explicit

'---------------------------------------------------------------------------------------------------
'FORM MAIL SCRIPT
'----------------
'usage:
'<form ACTION="sendmail.asp" ...>
'
'hidden fields:
'	redirect	- the url to redirect to when the mail has been sent (REQUIRED)
'	mailto		- the email address of the recipient (separate multiple recipients with commas)  (REQUIRED)
'	cc			- the email address of the cc recipient (separate multiple recipients with commas) (OPTIONAL)
'	bcc			- the email address of the bcc recipient (separate multiple recipients with commas) (OPTIONAL)
'	mailfrom	- the email address of the sender  (REQUIRED)
'	subject		- the subject line of the email  (REQUIRED)
'	message		- the message to include in the email above the field values. not used when a template is being used. (OPTIONAL)
'	template	- specifies a text or html file to use as the email template, relative to the location of the sendmail script. (e.g. ../email.txt)
'				  A template should reference form fields like this: [$Field Name$]
'	html		- if this has the value "yes", the email will be sent as an html email. only used if a template is supplied.
'	testmode	- if this is set to "yes", the email contents will be written to the screen instead of being emailed.
'---------------------------------------------------------------------------------------------------
dim pde : set pde = createobject("scripting.dictionary")
'---------------------------------------------------------------------------------------------------
'PREDEFINED ADDRESSES for the "mailto" hidden field
'if you don't want to reveal email addresses in hidden fields, use a token word instead and specify
'below which email address it applies to. e.g. <input type="hidden" name="mailto" value="%stratdepartment%">
'ALSO, in the same way, you can use %mailfrom% to hide the originating email address
pde.add "%contactform%", "contactus.fusioncardwebsite@fusionretailbrands.com.au"
'pde.add "%salesenquiry%", "anotheremail@someaddress.com"
'---------------------------------------------------------------------------------------------------

function getTextFromFile(path)
	dim fso, f, txt
	set fso = createobject("Scripting.FileSystemObject")
	if not fso.fileexists(path) then
		getTextFromFile = ""
		exit function
	end if
	set f = fso.opentextfile(path,1)
	if f.atendofstream then txt = "" else txt = f.readall
	f.close
	set f = nothing
	set fso = nothing
	getTextFromFile = txt
end function

dim redir, mailto, mailfrom, subject, item, body, firstname, lastname, cc, bcc, message, html, template, usetemplate, testmode

redir = request.form("redirect")
mailto = request.form("mailto")
if pde.exists(mailto) then mailto = pde(mailto)
cc = request.form("cc")
bcc = request.form("bcc")
mailfrom = request.form("mailfrom")
if mailfrom = "" then mailfrom = pde("%mailfrom%")
subject = request.form("subject")
message = "Re: " & request.form("message")
template = request.form("template")
testmode = lcase(request.form("testmode"))="yes"

firstname = request.form("firstname")
lastname = request.form("lastname")
message = "From: "& firstname & " " & lastname

if len(template) > 0 then template = getTextFromFile(server.mappath(template))
if len(template) > 0 then usetemplate = true else usetemplate = false
dim msg : set msg = createobject("CDO.Message")
    msg.Configuration.Fields.Item _
    ("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
    'SMTP server
    msg.Configuration.Fields.Item _
    ("http://schemas.microsoft.com/cdo/configuration/smtpserver")="SMTP-RELAY.BNE.SERVER-MAIL.COM"
    'SMTP port
    msg.Configuration.Fields.Item _
    ("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=25 
    msg.Configuration.Fields.Update

msg.Subject = subject
msg.To = mailto
msg.From = mailfrom
if len(cc) > 0 then msg.cc = cc
if len(bcc) > 0 then msg.bcc = bcc

if not usetemplate then
	body = body & message & vbcrlf & vbcrlf
else
	body = template
end if

for each item in request.form
	select case item
		case "redirect", "mailto", "cc", "bcc", "subject", "message", "template", "html", "testmode"
		case else
			if not usetemplate then
				if item <> "mailfrom" then body = body & item & ": " & request.form(item) & vbcrlf & vbcrlf
			else
				body = replace(body, "[$" & item & "$]", replace(request.form(item),vbcrlf,"<br>"))
			end if
	end select
next

if usetemplate then 'remove any leftover placeholders
	dim rx : set rx = new regexp
	rx.pattern = "\[\$.*\$\]"
	rx.global = true
	body = rx.replace(body, "")
end if

if usetemplate and lcase(request.form("html")) = "yes" then
	msg.htmlbody = body
else
	msg.textbody = body
end if

if testmode then
	if lcase(request.form("html")) = "yes" then
		response.write "<pre>" & vbcrlf
		response.write "Mail to: " & mailto & vbcrlf
		response.write "Mail from: " & mailfrom & vbcrlf
		if len(cc) > 0 then response.write "Cc: " & cc & vbcrlf
		if len(bcc) > 0 then response.write "Bcc: " & bcc & vbcrlf
		response.write "Subject: " & subject & vbcrlf & string(80,"-") & "</pre>"
		response.write body
	else
		response.write "<html><head><title>Sendmail.asp Test Mode</title></head><body><pre>" & vbcrlf
		response.write "Mail to: " & mailto & vbcrlf
		response.write "Mail from: " & mailfrom & vbcrlf
		if len(cc) > 0 then response.write "Cc: " & cc & vbcrlf
		if len(bcc) > 0 then response.write "Bcc: " & bcc & vbcrlf
		response.write "Subject: " & subject & vbcrlf & vbcrlf
		response.write string(80,"-") & vbcrlf & vbcrlf & "<span style=""color:blue;"">"
		response.write body & "</span>" & vbcrlf & vbcrlf
		response.write string(80,"-") & vbcrlf & "**END OF EMAIL**</pre></body></html>"
	end if
else
	msg.send
	response.redirect redir
end if
set msg = nothing
%>
