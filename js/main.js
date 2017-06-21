window.addEventListener("load", init);

var cyberfarmTbody;


function init() {

    cyberfarmTbody = document.getElementById('cyberfarms');


    getCyberfarms();
}

function getCyberfarms() {
    reqwest({
        url: 'http://localhost/GroenteGo_API/',
        contentType: 'application/json',
        success: getCyberfarmsSuccesHandler,
        error: getCyberfarmsErrorHandler
    });
}

function getCyberfarmsSuccesHandler(data) {
    console.log(data);
    //Empty the list before adding items
    cyberfarmTbody.innerHTML = '';

    for (var i = 0; i < data.length; i++) {
        //Save current value in variable
        var cyberfarm = data[i];

        //Create table row
        var row = document.createElement('tr');

        //Create ID cell
        var cellId = document.createElement('td');
        cellId.innerHTML = cyberfarm.cyberfarm_id;
        row.appendChild(cellId);

        //Create pin cell
        var cellPin = document.createElement('td');
        cellPin.innerHTML = cyberfarm.pin;
        row.appendChild(cellPin);

        //Create hash cell
        var cellHash = document.createElement('td');
        cellHash.innerHTML = cyberfarm.hash;
        row.appendChild(cellHash);

        //Create schoolname cell
        var cellSchoolname = document.createElement('td');
        cellSchoolname.innerHTML = cyberfarm.schoolname;
        row.appendChild(cellSchoolname);

        //Create author cell
        var cellAuthor = document.createElement('td');
        cellAuthor.innerHTML = cyberfarm.author;
        row.appendChild(cellAuthor);

        //Create startdate cell
        var cellStartdate = document.createElement('td');
        cellStartdate.innerHTML = cyberfarm.startdate;
        row.appendChild(cellStartdate);

        //Create log cell
        var cellLog = document.createElement('td');
        cellLog.innerHTML = cyberfarm.log;
        row.appendChild(cellLog);

        //Add the row to the actual tbody
        cyberfarmTbody.appendChild(row);
    }
}

function getCyberfarmsErrorHandler() {
    console.log("Error!");
    console.log('error', JSON.parse(data.response));
}
