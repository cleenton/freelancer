<!-- Header Logo Kioson And Dropdown -->
    <div class="col-xs-12" style="background-color: #ffffff">  
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4" style="padding-top: 10px">
                         
                            <div class="">
                              <img  class="" width="100%" height="30" src="https://www.kioson.com/assets/images/logo-kioson1.png">
                            </div>
                       
                        </div>
                        <div class="col-xs-8">

                          <div class="btn btn-dark" style="float: right; color: #ffffff; margin: 10px 0px 10px 0px" ><i class="fa fa-angle-down" aria-hidden="true"></i>
                          </div>

                          <div class="btn btn-dark" style="float: right; color: #ffffff; margin: 10px 10px 10px 0px" ><i class="fa fa-bell" aria-hidden="true"></i>
                          </div>

                        </div>
                    </div>
            </div>
    </div> 



<!-- Saldo -->
    <div class="col-xs-12" style="background-color: orange">  
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6" style="padding-top: 10px">
                         
                            <div class="row">
                              <h5 style="color: #ffffff">Saldo &nbsp Rp. <?php foreach($data as $b){echo $b->saldo ;}?></h5>
                            </div>
                       
                        </div>
                        <div class="col-xs-6">
                          <button class="btn btn-dark" style="float: right; color: #ffffff; margin: 10px 0px 10px 0px" > <label> Isi Saldo + </label></button>  
                        </div>
                    </div>
            </div>
    </div>    


<!-- Map Search Input -->
    <div id="locationField" class="container-fluid" style="z-index: 1">
      <input id="autocomplete" placeholder="Cari Nama Atau Lokasi Kios Disini" type="text" class="form-control" />
    </div>


<!-- Map -->
    <div id="map"></div>



<!-- Thumbnail Pertama         -->
    <div class="col-xs-12" style="margin-top: -250px">
        <div class="container-fluid" style="border: 1px solid lightgrey; border-radius: 10px; background-color: #ffffff" >
  
          <div class="row">
              <div class="col-xs-4">
                    <div class="container-fluid" style="text-align: center; padding: 5px ;">
                        <div class="row">
                          <div class="col-xs-12">
                             <img  class="img-circle" width="70" height="70" src="http://ft.unram.ac.id/wp-content/uploads/2013/03/Pas-Foto-Serdos-2009.jpg">
                          </div>
                        </div>
                    </div>
              </div>

              <div class="col-xs-8">
                    <div class="container-fluid" style=" padding: 5px ;">
                      <div class="row">
                        <div class="col-xs-12">
                           <div class="row">
                           <?php foreach($data as $b){echo $b->name ;}?>
                           </div>
                        </div>
                        <div class="col-xs-12">
                           <div class="row">
                              ID Freelancer : <?php foreach($data as $b){echo $b->id ;}?> &nbsp
                              <?php echo anchor('content/profile', '<p style="color: rgb(255, 153, 0);">kelola</p>');  ?>
                           </div>
                        </div>
                        </div>
                    </div>
              </div>

              
        </div>
    </div>


<!-- Thumbnail Kedua -->
    <div class="col-xs-12" style="border: 1px solid lightgrey; border-radius: 10px; background-color: #ffffff; margin-top: 5px">
          <div class="row">
              <div class="col-xs-4">
                    <div class="container-fluid" style="text-align: center; padding: 5px ;">
                      <div class="row">
                        <div class="col-xs-12">
                           <h4>100</h4>
                        </div>
                        <div class="col-xs-12">
                           Transaksi
                        </div>
                        <div class="col-xs-12">
                        <?php echo anchor('content/transaksi', '<p style="color: rgb(255, 153, 0);">kelola</p>');  ?>
                        </div>
                        </div>
                    </div>
              </div>

              <div class="col-xs-4">
                    <div class="container-fluid" style="text-align: center; padding: 5px ;">
                      <div class="row">
                        <div class="col-xs-12">
                           <h4>100</h4>
                        </div>
                        <div class="col-xs-12">
                           <div class="row">
                              Akuisisi Kios
                           </div>
                        </div>
                        <div class="col-xs-12">
                        <?php echo anchor('content/kios', '<p style="color: rgb(255, 153, 0);">kelola</p>');  ?>
                        </div>
                        </div>
                    </div>
              </div>

              <div class="col-xs-4">
                    <div class="container-fluid" style="text-align: center; padding: 5px ;">
                      <div class="row">
                        <div class="col-xs-12">
                           <div class="row">
                              <h4>1.000.000</h4>
                           </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            Bonus Komisi
                          </div>
                        </div>
                        <div class="col-xs-12">
                        <?php echo anchor('content/komisi', '<p style="color: rgb(255, 153, 0);">kelola</p>');  ?>
                        </div>
                        </div>
                    </div>
              </div>
          </div>
    </div>



<!-- Transfer Saldo Dan Bantuan -->

    <div class="col-xs-12" style="border: 1px solid lightgrey; border-radius: 10px; background-color: #ffffff; margin-top: 5px">
          <div class="row">
              
              <div class="col-xs-12">
                    <div class="container-fluid" style="text-align: center; padding: 5px ;">
                      <div class="row">
                        <div class="col-xs-12">
                           <button class="btn btn-warning" style="width:100%;margin-bottom: 5px">Transfer Saldo</button> 
                        </div>

                        <div class="col-xs-12">
                           <a href="" class="kelola">Bantuan?</a>
                        </div>
                        </div>
                    </div>
              </div>

          </div>
    </div>




<!-- Maps Script -->
    <script>
      var map, places, infoWindow;
      var markers = [];
      var autocomplete;
      var countryRestrict = {'country': 'id'};
      var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
      var hostnameRegexp = new RegExp('^https?://.+?/');

      var countries = {
        
        'id': {
          center: {lat: -6.2196, lng: 106.8326},
          zoom: 16
        }
        
        
      };

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: countries['id'].zoom,
          center: countries['id'].center,
          mapTypeControl: false,
          panControl: false,
          zoomControl: false,
          streetViewControl: false
        });

        infoWindow = new google.maps.InfoWindow({
          content: document.getElementById('info-content')
        });

        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */ (
                document.getElementById('autocomplete')), {
              types: ['(cities)'],
              componentRestrictions: countryRestrict
            });
        places = new google.maps.places.PlacesService(map);

        autocomplete.addListener('place_changed', onPlaceChanged);

      }

      // When the user selects a city, get the place details for the city and
      // zoom the map in on the city.
      function onPlaceChanged() {
        var place = autocomplete.getPlace();
        if (place.geometry) {
          map.panTo(place.geometry.location);
          map.setZoom(15);
          search();
        } else {
          document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
      }

      // Search for hotels in the selected city, within the viewport of the map.
      function search() {
        var search = {
          bounds: map.getBounds(),
          types: ['lodging']
        };

        places.nearbySearch(search, function(results, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            // clearResults();
            clearMarkers();
            // Create a marker for each hotel found, and
            // assign a letter of the alphabetic to each marker icon.
            for (var i = 0; i < results.length; i++) {
              var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
              var markerIcon = MARKER_PATH + markerLetter + '.png';
              // Use marker animation to drop the icons incrementally on the map.
              markers[i] = new google.maps.Marker({
                position: results[i].geometry.location,
                animation: google.maps.Animation.DROP,
                icon: markerIcon
              });
              // If the user clicks a hotel marker, show the details of that hotel
              // in an info window.
              markers[i].placeResult = results[i];
              google.maps.event.addListener(markers[i], 'click');
              // setTimeout(dropMarker(i), i * 100);
              // addResult(results[i], i);
            }
          }
        });
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          if (markers[i]) {
            markers[i].setMap(null);
          }
        }
        markers = [];
      }

      // Set the country restriction based on user input.
      // Also center and zoom the map on the given country.
      function setAutocompleteCountry() {
        var country = document.getElementById('country').value;
        if (country == 'all') {
          autocomplete.setComponentRestrictions({'country': []});
          map.setCenter({lat: 15, lng: 0});
          map.setZoom(2);
        } else {
          autocomplete.setComponentRestrictions({'country': country});
          map.setCenter(countries[country].center);
          map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
      }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVQllkofqTwLzs3VJt0TE_lbWBMr-OKsA&libraries=places&callback=initMap"
        async defer></script>

    </body>
</html>



<!-- <?php

?> -->
