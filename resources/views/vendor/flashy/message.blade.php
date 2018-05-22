<style>
.flashy {
    font-family: 'open sans', cursive,sans-serif;
    padding: 10px 30px;
    font-weight: 400;
    position: fixed;
    width: 100%;
    z-index: 99999999999999999999999;
    top: 0px;
    font-size: 20px;
    color: #fff;
    text-align: center;
}

.flashy--success {
    background-color: #257525;
    opacity: 0.9;
    color: #fff;
}

.flashy--warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
      opacity: 0.9;
}

.flashy--muted {
    background: #eee;
    color: #3a3a3a;
    border: 1px solid #e2e2e2;
}

.flashy--muted-dark {
    background: #133259;
    color: #e2e1e7;
      opacity: 0.9;
}

.flashy--info a,
.flashy--primary-dark a {
    color: #fff;
}

.flashy--error {
    background: #d14130;
    color: #fff;
      opacity: 0.9;
}

.flashy--primary {
    background: #573e81;
      opacity: 0.9;
}

.flashy--primary-dark {
    background: linear-gradient(to right, #133259 30%, #0d233e);
}

.flashy--info {
    background: #00baf3;
}

.flashy > ul {
    padding-left: 15px;
}

.flashy > p:only-of-type {
    margin-bottom: 0;
}

.flashy i {
    margin-right: 8px;
    position: relative;
    top: 6px;
}

.flashy .flashy__body {
    color: inherit;
}

@media only screen and (max-width:1050px) {
    .flashy {
        text-align: center;
        right: 0;
        left: 50%;
        width: 300px;
        margin-left: -150px;
    }
}
</style>

<script>
    function flashy(message, link) {
        var template = $($("#flashy-template").html());
        $(".flashy").remove();
        template.find(".flashy__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(500).delay(7000).animate({
            marginTop: "-100%"
        }, 900, "swing", function() {
            $(this).remove();
        });
    }
</script>

@if(Session::has('flashy_notification.message'))
<script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
        <img src="{{asset('profile.png')}} " width="50px">
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<script>
    flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
</script>
@endif