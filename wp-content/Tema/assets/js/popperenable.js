
let current = '';


console.log('hi')
$( "#afrocindiv" ).click(function() {
    console.log('clicado')
    if(current=='afrocin'){
        current = ''
        $('.afrocinergia').addClass('hidethis')
    }else{
        current='afrocin'
        $('.afrocinergia').removeClass('hidethis')
    }
    $('.projeto2').addClass('hidethis')
    $('.projeto3').addClass('hidethis')
});

$( "#projeto2div" ).click(function() {
    if(current == 'projeto2'){
        current = ''
        $('.projeto2').addClass('hidethis')
    }else{
        current = 'projeto2';
        $('.projeto2').removeClass('hidethis')
    }
    $('.afrocinergia').addClass('hidethis')
    $('.projeto3').addClass('hidethis')
});

$( "#projeto3div" ).click(function() {
    console.log('clicado')
    if(current == 'projeto3'){
        current = ''
        $('.projeto3').addClass('hidethis')
    }else{
        current = 'projeto3'
        $('.projeto3').removeClass('hidethis')
    }
   
    $('.afrocinergia').addClass('hidethis')
    $('.projeto2').addClass('hidethis')
});
