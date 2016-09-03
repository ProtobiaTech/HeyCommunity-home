to log-in

<script src="/bower-assets/jquery/dist/jquery.min.js"></script>
<script>
$(function() {
    setTimeout(function() {
        $.ajax({
            method: 'POST',
            url: '/bbs/login',
            data: {"identification":"Rod","password":"admin123"},
        })
    });
})
</script>
