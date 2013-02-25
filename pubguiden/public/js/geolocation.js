var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
     sessionStorage.lat = position.coords.latitude
     sessionStorage.lng = position.coords.longitude


  var tempString ="Latitude: " + sessionStorage.lat + 
  "<br>Longitude: " + sessionStorage.lng;  

    // flyttas senare
    //$.getJSON(Hämta position som JSON från pubs-controller här);

    var pubLat = 57.706738;
    var pubLong = 11.97037;
    var dist = calcDistance(pubLat, pubLong);
    tempString += "<br>Avstånd från nuvarande position till påhittad position som ska hämtas från databas sen: <br />" + dist + ' km <br />';

    x.innerHTML = tempString;
  }
  getLocation();
  showPosition();

  function calcDistance(lat, lng)
  {
    // TODO: Verifiera att dessa värden finns:
    var currentLat = sessionStorage.lat;
    var currentLong = sessionStorage.lng;

    var R = 6371; // km
    var dLat = (currentLat-lat)*Math.PI/180;
    var dLon = (currentLong-lng)*Math.PI/180; 
    var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
            Math.cos(lat*Math.PI/180) * Math.cos(currentLat*Math.PI/180) * 
            Math.sin(dLon/2) * Math.sin(dLon/2); 
    var c = 2 * Math.asin(Math.sqrt(a)); 
    var d = R * c;
    return d;
  }