function css( src ) {

    // 'src' is the stylesheet's URL, i.e. /css/styles.css

    return new Promise( function( resolve, reject ) {

        var link = document.createElement( 'link' );

        link.rel  = 'stylesheet';

        link.href = src;

        
        link.onload = function() { 
            
            resolve(); 
            
        };
        
        document.head.appendChild( link );
    } );
}


css('css/bootstrap.min.css') 
// css('css/font-awesome.min.css')
css('css/elements.css')
css('css/responsive.css')

// css('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700')
css('https://fonts.googleapis.com/css?family=Open+Sans')
// css('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900')
css('https://fonts.googleapis.com/css?family=Montserrat')