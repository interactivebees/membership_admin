


<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
    @csrf
    <input type=hidden name=encRequest value={{ $encryptedData['encRequest'] }}>
    <input type=hidden name=access_code value={{ $encryptedData['access_code'] }}>
    
</form>
<script language='javascript'>document.redirect.submit();</script>
