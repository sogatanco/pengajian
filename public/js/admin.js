$(document).ready(function() {

  $('.toast').toast('show');

        $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
          .parent()
          .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });

    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
    });

//  function to open map in modal
    function init(myLoc) {
        var marker = new google.maps.Marker({
            position: myLoc,
            draggable: true 
        });
      var opt = {
            center: myLoc,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), opt);
        marker.setMap(map);
        google.maps.event.addListener(marker, 'dragend', function(){
          // console.log("lat: "+marker.position.lat())
          // console.log("lng: "+marker.position.lng())
          $("#lat").val(marker.position.lat())
          $("#long").val(marker.position.lng())
      })
    };

    $("#open").click(function(){
      var lat=$('#lat').val()
      var long=$('#long').val()
      if(lat=="" || long==""){
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            init(new google.maps.LatLng(position.coords.latitude,position.coords.longitude))
          });
        }else{
          init(new google.maps.LatLng(5.051349,97.318612))
        }
      }else{
        init(new google.maps.LatLng(lat, long))
      }

    });

    // date time picker
    var $now = moment();
    var $dateMin = $now.subtract(3, 'days');

    $('#mulai').bootstrapMaterialDatePicker({
      format: 'YYYY-MM-DD HH:mm:ss',
      shortTime: false,
      //minDate: $dateMin,
      //maxDate: null,
      //currentDate: $now,
      //disabledDays: [],
      date: true,
      time: true,
      monthPicker: false,
      year: true,
      clearButton: false,
      nowButton: false,
      switchOnClick: true,
      cancelText: 'Cancel',
      //okText: 'VALIDER',
      //clearText: 'EFFACER',
      //nowText: 'MAINTENANT',
      //triggerEvent: 'focus',
      //lang: 'en',
      //weekStart: 1,
    });

    $('#end').bootstrapMaterialDatePicker({
      format: 'YYYY-MM-DD HH:mm:ss',
      shortTime: false,
      date: true,
      time: true,
      monthPicker: false,
      year: true,
      clearButton: false,
      nowButton: false,
      switchOnClick: true,
      cancelText: 'Cancel',
    });

    


});