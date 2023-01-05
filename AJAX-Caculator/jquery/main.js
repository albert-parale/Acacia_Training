$(document).ready(function(){
    $('input[type=button]').hover(function() {
        $(this).css('background-color', '#39383d');
    }, function() {
        $(this).css('background-color', '#58585b');
    });
    
    $('.eql').hover(function() {
        $(this).css('background-color', '#39383d');
    }, function() {
        $(this).css('background-color', 'orange');
    });

    //general
    $('input[type=button]').click(function(){
        var num = $(this).val();
        var old = $('#display').html();
        //this will clear the screen
        if( num === 'C' ){
            $('#display').html('');
            return;
        }
        if( num === '=' ){
            $('#display').html(old);
            return;
        }
        $.ajax({
                url:'classes/calc.php',
                type: "POST",
                data:{'operators':'operation','num':num,'old':old},
                success: function(msg){
                    $('#display').html(msg);
                }
            }).error(function(){
                $('#display').text('Oops! An error occured');
            });
    });
    
    //equal button click
    $('#eql').click(function(){
        var num = $('#display').html();
        var old = $('#display').html();
        $.ajax({
                url:'classes/calc.php',
                type: "POST",
                data:{'operators':'equal', 'num':num, 'old':old},
                success: function(msg){
                    $('#display').html(msg);
                }
            }).error(function(){
                $('#display').html('Oops! An error occured');}
            );
    });
});