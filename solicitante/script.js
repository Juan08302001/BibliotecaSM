function iniciarMap(){
  var coord = {lat:21.799178274592666, lng: -100.7379918251529};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
  
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}