window.addEventListener("load", init);

//Globals
var movieGallery;
/**
 * Initialize the application (after DOM ready)
 */
function init()
{
    movieGallery = document.getElementById('movies');
    movieGallery.addEventListener('click', movieGalleryClickHandler);

    //Check the API URL; http://swapi.co/api/
    getMovies();
}

function getMovies(){
    reqwest({
        url: 'http://swapi.co/api/films/',
        contentType: 'application/json',
        headers: {
            'Accept': 'application/json'
        },
        success: getMoviesSuccesHandler
    });
}