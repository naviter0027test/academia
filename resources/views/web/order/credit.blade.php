<html>
<head>
    <title>Sample</title>
</head>


<body onload="document.frm1.submit()">
<form method=post action="https://epos.ctbcbank.com/auth/SSLAuthUI.jsp" name="frm1">
    <INPUT type="hidden" value="32803" name="merID" >
    <INPUT type="hidden" value="{{$URLEnc}}" name="URLEnc">
</form>
</body>
</html>
