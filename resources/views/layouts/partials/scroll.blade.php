<script type="text/javascript" src="{{asset('js/jscroll.min.js')}} "></script>
<script type="text/javascript">
  
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." width="100" /><span class="center-block"> Chargement...</span>',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
                $("#msg").text( "Plus d'element à charger");
            }
        });
    });
</script>