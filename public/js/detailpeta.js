$(document).ready(function(){
  
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var map;
      var dest=new google.maps.LatLng($('#lat').text(), $('#long').text());
      var user=new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      console.log(dest);
      console.log(user)
      var option={
        zoom:10,
        center:dest
      };
      map=new google.maps.Map(document.getElementById('detailmap'),option );
      var marker = new google.maps.Marker({position: dest, map: map});
      var marker = new google.maps.Marker({position: user, map: map, icon:'../images/user.png'});
      var display =new google.maps.DirectionsRenderer({
        suppressMarkers: true
      });
      var serv=new google.maps.DirectionsService();
      display.setMap();

        var request={
          origin:user,
          destination:dest,
          travelMode:'WALKING'
        };
        serv.route(request, function(result, status){
          console.log(status);
          if(status=='OK'){
            display.setDirections(result);
            display.setMap(map);
          }
        });

    })
  }

});
