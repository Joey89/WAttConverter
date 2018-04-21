$( document ).ready( function()
{
  $( '#from_watt' ).val( 700 );
  $( '#to_watt' ).val( 1000 );
  $( '#time' ).val( 300 );

  $( '#from_watt, #to_watt, #time' ).change( function()
  {

    calculate();
  });

  calculate();

  function calculate()
  {
	$.post( './calculate.php', $( '#form-convert' ).serialize(), function( data )
	{
		$( '#result_value' ).html( data );
	});
	
  }

});