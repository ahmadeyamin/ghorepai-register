@extends('layouts.app')


@section('content')
<section id="reg_delivery" class="reg_delivery">
    <div class="reg_page">
        <div class="reg_page_heading">
            <h1 class="reg_heading">Delivery Hero<br />Pre Registration</h1>
        </div>
        <div class="reg_page_body">
            <div class="reg_form w-form">
                @livewire('delivery-hero')
            </div>
        </div>
    </div>
</section>
@endsection


@push('js')
@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.15.3/tingle.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API')}}&libraries=geometry" >
</script>

<script>

    // instanciate new modal
var modal = new tingle.modal({
    footer: true,
    stickyFooter: false,
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['custom-class-1', 'custom-class-2'],
    onOpen: function() {
        console.log('modal open');
        initMap()
    },
    onClose: function() {
        console.log('modal closed');
    },
    beforeClose: function() {
        return true; // close the modal
        return false; // nothing happens
    }
});

// set content
modal.setContent('<div id="map" style="height:80vh"></div>');
</script>

<script>

heros_latLng = {
            lat: 22.685356,
            lng: 90.636569
}
    function initMap() {
      window.map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
            lat: 22.685356,
            lng: 90.636569
        }
      });


    var marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: heros_latLng,

      });

      var area = new google.maps.Polygon({
          path:
            circlePath(map.center,6000,50)
          ,
          strokeColor: "green",
          strokeOpacity: .7,
          strokeWeight: 1,
          fillColor: "green",
          fillOpacity: .05,
          holeColor:'red',
          clickable:false,
          map:map,
          zIndex:1
        });



      map.addListener('click', function(event) {

            marker.setPosition(event.latLng);
            var nsdfui =  google.maps.geometry.poly.containsLocation(
              event.latLng,
              area
            )

            if (nsdfui) {
                getaddressbyGoo(event.latLng);
                console.log('Are Supported');
                window.heros_latLng = event.latLng;
            }else{
                alert('Sorry You Are Outside Of Our Selected Area \n if need axtra support constact us.')
            }

            console.log(nsdfui);
      });

      google.maps.event.addListener(marker,'dragend',function(event) {

            marker.setPosition(event.latLng);
            var nsdfui =  google.maps.geometry.poly.containsLocation(
              event.latLng,
              area
            )
            if (nsdfui) {

                getaddressbyGoo(event.latLng);
                console.log('Are Supported');
                window.heros_latLng = event.latLng;
            }else{
                alert('Sorry You Are Outside Of Our Selected Area \n if need axtra support constact us.')
            }



      });
     marker.addListener("click", toggleBounce);
    }

    function getaddressbyGoo(letlng){
        $.ajax({
            url: `https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDRtcjNTHSPxoYkUJQOWWpAER6Ef-qXDUE&latlng=${letlng.lat()},${letlng.lng()}`,
            })
            .done(function(response) {
                window.livewire.find($("#wire_box").attr('wire:id')).set('loc_by_google', response.results[0].formatted_address)


                window.livewire.find($("#wire_box").attr('wire:id')).set('letlan', JSON.stringify(heros_latLng))
        });

    }

    function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }
    function circlePath(center,radius,points){
      var a=[],p=360/points,d=0;
      for(var i=0;i<points;++i,d+=p){
          var geo = google.maps.geometry.spherical.computeOffset(center,radius,d)
           a.push({'lat': geo.lat(),'lng' : geo.lng()});
      }
      return a;
    }


</script>
@endpush



@push('css')
@livewireStyles
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.15.3/tingle.min.css"  crossorigin="anonymous" />



<style>

.tingle-modal-box__content{
    padding: 0px !important;
}

.tingle-modal-box__footer{
    display: none !important;
}
</style>
@endpush
