
<script>
var array = [];
var dada="";
$('#next1').on('click', function(){
    dataString='company= '+$(this).closest('.inside').find('select').val(); // this is just for ajax
    resizeall($(this), 200, 100); //this is function that works and has no problem
    foo(mycallback);
    console.log(array);
});//end on click function
</script>