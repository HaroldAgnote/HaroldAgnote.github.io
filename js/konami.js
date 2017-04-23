/**
 * Created by Harold on 4/23/2017.
 */
if ( window.addEventListener ) {
    var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
    window.addEventListener("keydown", function(e){
        console.log(e);
        kkeys.push( e.keyCode );
        console.log(kkeys.toString());
        if ( kkeys.toString().indexOf( konami ) >= 0 )
        {
            console.log("You entered the Konami Code!");
            kkeys = [];
        }
        if (kkeys.length > 10)
        {
            kkeys = [];
        }
    }, true);
}