$(function() {
	$('button[name=submit]').on('click', function(e) {
	
	e.preventDefault();
    
    let cards = document.querySelectorAll('.cards');

    let arr = [];

    for( let i = 0; i < cards.length; i++ ) {
    	arr.push( cards[i].id);
    }

	let json = {
		name:$("input[name=name]").val(),
		category:$("select[name=category]").val(),
        cards:arr,
	};

    
    

	$.ajax({
		url:$('form').prop('action'),
		method:'POST',
		data:'json=' + JSON.stringify(json),
	})


	.done( function(msg) {
		let datajs = JSON.parse( msg );
		
        let choosenCategory = null;

		for( let i = 0; i < cards.length; i++ ) {
    	  if( cards[i].id !== datajs[2]) {
    	 	cards[i].style = 'display:none';
    	  }else {
    	  	cards[i].style = 'display:grid';
    	  	choosenCategory = cards[i];
    	  }
        }


    let productsNameFigure = choosenCategory.querySelectorAll('figure');
    let productsName = choosenCategory.querySelectorAll('.title');

    let productsNameArr = [];
    let productsNameFigureArr = [];

    for( let i = 0; i < productsName.length; i++ ) {
    	productsNameFigureArr.push( productsNameFigure[i] );
    	productsNameArr.push( productsName[i].innerText );
    }
    

    if( datajs[0] !== '' || datajs[2] !== '') {
       productsNameArr.forEach( ( elem, index ) => {
       	if( !elem.includes( datajs[0]) ) {
       		productsNameFigureArr[index].style = 'display:none';
       	}else {
       		productsNameFigureArr[index].style = 'display:block';
       	}
       })
    }else {
    	productsNameFigureArr.forEach( (elem) => {
    		elem.style = 'display:block';
    	})
    }
    

	}) 
})
})

