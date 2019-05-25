//Angular Ilovasi Modul va kontrollerlari
var app = angular.module('mapsApp', []);

app.controller('MapCtrl', function ($scope,$http) {

    //Xaritani initsializatsiya qilishni ta'minlovchi funksiya
    $scope.initialize = function(){
        //Urganch shahrini uzunlik va kengliklari
        $scope.Urgench = new google.maps.LatLng(41.55045689783935,60.63184976577759);
        //Kategoriyalarni tanlaganda mavjud joylardan kelib chiqib xarita chegaralarini belgilash uchun
        $scope.bounds = new google.maps.LatLngBounds();
        //xarita sozlamalari
        var mapOptions = {
            zoom: 14, //Xarita masshtabi
            center: $scope.Urgench,//Xarita markazi
            mapTypeId: google.maps.MapTypeId.HYBRID //Xarita turi: HYBRID, ROADMAP, TERRAIN
        }
        //Xaritadan Googlening o'zi belgilagan nomlarni o'chirish uchun
        var styles = [
            {
                "elementType": "labels",
                "stylers": [
                    { "visibility": "off" }
                ]
            }
        ];
        //#map id'siga ega elementida xaritani ko'rsatamiz
        $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);
        $scope.map.setOptions({styles: styles});
        // markerlar, joylar va kategoriyalarni elon qilamiz
        $scope.markers = [];
        $scope.places = [];
        $scope.categories = [];
        // map/cats manzilidan kategoriyalar json formatida keladi
        $http
            .get('/map/cats')
            .success(
            function(categories){
                $scope.categories = categories
            }
        );
        // map/allPlaces manzildan hamma joylar ma'lumotlari json formatida keladi va joylar uchun markerlar yaratiladi
        $http
            .get('/map/allPlaces')
            .success(
            function(places){
                $scope.places = places;
                for(i = 0; i < places.length; i++){
                    createMarker(places[i]);
                }
            }
        );
        // xarita chekkasidagi menyuni yashirilgan holda bo'ladi
        $scope.barShowed = false;

    }
    // xarita chekkasidagi menyuni ko'rsatamiz
    $scope.showBar = function(){
        var div = document.getElementById('buttons');
        var btn = document.getElementById('hideBar');
        var btn2 = document.getElementById('showBar');
        div.style.display = 'block';
        btn.style.display = 'block';
        btn2.style.display = 'none';
        $scope.barShowed = true;
    }
    // xarita chekkasidagi menyuni yashiramiz
    $scope.hideBar = function(){
        var div = document.getElementById('buttons');
        var btn = document.getElementById('showBar');
        var btn2 = document.getElementById('hideBar');
        div.style.display = 'none';
        btn.style.display = 'block';
        btn2.style.display = 'none';
        $scope.barShowed = false;
    }
    // xaritadagi barcha markerlarni yashiramiz
    var deleteOverlays = function() {
        if ($scope.markers) {
            for (i in $scope.markers) {
                $scope.markers[i].setMap(null);
            }
            $scope.markers.length = 0;
        }
    }
    // agar xaritada shahrdan tashqariga chiqib ketilsa, shahar markaziga qaytaramiz
    $scope.gotoUrgench =function(){
        $scope.map.panTo($scope.Urgench);// xarita markazini Urganchga to'g'irlaymiz
        $scope.map.setZoom(14); // masshtabni 14 qilsak, Urganch to'liqroq ko'rinadi
    }
    // yozilgan so'z bo'yicha joylarni qidiramiz
    $scope.searchMarkers = function(){
        var search = $scope.search;
        $scope.bounds = new google.maps.LatLngBounds();
        // shu manzilga murojaat qilsak, izlanayotgan so'z bo'yicha joylar json formatida keladi
        $http
            .get('/map/byName?name='+search)
            .success(
                function(places){
                    deleteOverlays();// barcha markerlarni o'chiramiz
                    $scope.places = places;
                    for(i = 0; i < places.length; i++){
                        showMarker(places[i]); // faqat topilgan joylarni ko'rsatamiz
                    }
                }
            );
    }
    // markerlarni ko'rsatish uchun funksiya
    var showMarker = function(place){
        createMarker(place);
        var myLatLng = new google.maps.LatLng(place.latitude,place.longitude);
        // chegarani markerlar bo'yicha kengaytirib boramiz
        $scope.bounds.extend(myLatLng);
        $scope.map.fitBounds($scope.bounds);
    }
    // kategoriya tanlanganda shu kategoiyaga tegishli joylarni ko'rsatamiz
    $scope.updateMarkers = function(){
        var category = $scope.category.id;
        $scope.bounds = new google.maps.LatLngBounds();
        $http
            .get('/map/byCategory/id/'+category)
            .success(
                function(places){
                    deleteOverlays();
                    $scope.places = places;
                    for(i = 0; i < places.length; i++){
                        showMarker(places[i]);
                    }
                }
            );
    }
    // markerni bosganda joy nomini ko'rsatuvchi ma'lumot oynasini yaratib olamiz
    var infoWindow = new google.maps.InfoWindow();
    // markerni yaratuvchi funksiya
    var createMarker = function (info){
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.latitude, info.longitude),
            title: info.name, // marker nomi
            icon: info.icon // marker ikonkasi
        });
        marker.content = '<div class="infoWindowContent">' + '</div>';
        // markerni sichqoncha bilan bosganda ma'lumot oynasini ko'rsatuvchi hodisa yaratamiz
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2> '+ marker.content); // markerni bosgandagi ma'lumot oynasi
            infoWindow.open($scope.map, marker);
            $scope.map.setZoom(18); // xaritani markerga yaqinlashtiramiz
            $scope.map.setCenter(marker.getPosition());
            $scope.showInfo(info); // joy to'g'risida ma'lumot beruvchi oynani ko'rsatamiz
        });
        $scope.markers.push(marker);
    }
    // joy to'g'risida ma'lumot beruvchi oynani ko'rsatuvchi funksiya
    $scope.showInfo = function(info){
        // ma'lumot oynasiga joy ma'lumotlarini joylashtiramiz
        document.getElementById('place_name').innerHTML = info.name;
        document.getElementById('place_description').innerHTML = info.description;
        var div = document.getElementById('infoContent');
        div.style.display = 'block';
        $scope.hideBar(); // ma'lumot ko'rsatganda chekkadagi menyuni yashiramiz
    }
    // joy to'g'risida ma'lumot beruvchi oynani yashiruvchi funksiya
    $scope.hideInfo = function(){
        var div = document.getElementById('infoContent');
        div.style.display = 'none';
    }
    // marker bosilganligini bildiruvchi hodisa
    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }
});

// Places Controller
    app.controller('PlaceCtrl',function($scope){
        $scope.Urgench = new google.maps.LatLng(41.55045689783935,60.63184976577759);
        $scope.markers = [];
        $scope.map;
        $scope.initialize = function() {
            var mapOptions = {
                zoom: 14,
                center: $scope.Urgench,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var styles = [
                {
                    "elementType": "labels",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                }
            ];
            var map_canvas = document.getElementById('map-canvas');
            $scope.map = new google.maps.Map(map_canvas, mapOptions);
            $scope.map.setOptions({styles: styles});
            google.maps.event.addListener($scope.map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);
                // display the lat/lng in your form's lat/lng fields
                document.getElementById("Place_latitude").value = event.latLng.lat();
                document.getElementById("Place_longitude").value = event.latLng.lng();
            });
        }
        $scope.showMarker = function(){
            $scope.initialize();
            var lat = document.getElementById("Place_latitude").value;
            var lng = document.getElementById("Place_longitude").value;
//            alert(lng);
            var location = new google.maps.LatLng(lat,lng);
            placeMarker(location);
        }
        var placeMarker = function(location) {
            // first remove all markers if there are any
            deleteOverlays();
            var marker = new google.maps.Marker({
                position: location,
                map: $scope.map,
                draggable: true
            });
            marker.setAnimation(google.maps.Animation.DROP);
            // markerni markerlar massiviga yuklaymiz
            $scope.markers.push(marker);
            $scope.map.setCenter(location);
            $scope.map.setZoom(17);
            google.maps.event.addListener(marker, 'dragend', function(event)
            {
                document.getElementById("Place_latitude").value = event.latLng.lat();
                document.getElementById("Place_longitude").value = event.latLng.lng();
            });
        }
        var deleteOverlays = function() {
            if ($scope.markers) {
                for (i in $scope.markers) {
                    $scope.markers[i].setMap(null);
                }
                $scope.markers.length = 0;
            }
        }
    });