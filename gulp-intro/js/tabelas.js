$(document).ready(function() {

  
    $('#pesquisar').keydown(function(){

        var encontrou = false;

        var termo = $(this).val().toLowerCase();

        $('table > tbody > tr').each(function(){

            $(this).find('td').each(function(){

                if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;

            });

            if(!encontrou) $(this).hide();

            else $(this).show();

            encontrou = false;

        });

    });

    $('table')

        .tablesorter({
            dateFormat: 'uk',
            headers: {
                0: {
                    sorter: false
                },
                5: {
                    sorter: false
                }
            }
        });

});

