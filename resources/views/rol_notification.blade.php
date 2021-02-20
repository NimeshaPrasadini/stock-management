<!--<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">!-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">

<div class='notifications'></div>

@if(Session::has('Notification'))
<div class="alert alert-warning alert-dismissible notify col-md-2 col-md-offset-4" style="margin-left: 1250px">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong>
    </br>
    <span></span>
</div>
@endif
<script>
    @if(Session::has('Notification'))

     $('.notify span').text("{{ Session::get('Notification') }}");


    @php
        Session::forget('Notification');
    @endphp
    @endif
</script>
