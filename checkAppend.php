<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".test").bind('click', function() {
            var data = $(this).attr("data-type");
            var dataId = $(this).attr("data-id");
            var $t = $(this);
            if ($t.is(':checked')) {
            // append item
            $('#items').append('<span class=test'+dataId+'>'+data+'</span>');
            }else{
                // empty div and remove it from DOM (empty helps with memory leak issues with $.fn.remove() )
                $('#items').find('.test'+dataId).remove();
            }
        });
    });
</script>
</head>
<body>

<p>Test of check and uncheck value add and remove.</p>

<?php for ($i=0; $i <4 ; $i++) :?>
    <input type="checkbox" class="test" data-id ="<?php echo $i+1; ?>"  data-type="NO <?php echo $i+1; ?>"/> Check me </br>
<?php endfor; ?>

<div id="items">

</div>


</body>
</html>
