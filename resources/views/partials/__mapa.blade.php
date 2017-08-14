
      <script>
      function iniciar()
      {
      var mapOptions = {
      center: new google.maps.LatLng({{$post->ubicacion}}),
      zoom: 16,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.HYBRID};
      var map = new google.maps.Map(document.getElementById("map"),mapOptions);
      var place = new google.maps.LatLng({{$post->ubicacion}});

          marker =new google.maps.Marker({
              position:place,
              map: map,
              animation: google.maps.Animation.DROP,
              icon: 'https://thumb.ibb.co/n7UtAQ/icono.png'
          });

          var popup = new google.maps.InfoWindow({
            content: '{{$post->title}}'});
            popup.open(map, marker);

     }
      </script>
