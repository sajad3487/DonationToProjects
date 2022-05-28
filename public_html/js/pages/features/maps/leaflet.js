"use strict";

// Class definition
var KTLeaflet = function () {

    // Private functions
    var demo1 = function () {
        var e_loc = document.getElementById('e_location_base').value;
        var w_loc = document.getElementById('w_location_base').value;
        if (e_loc == null){
            e_loc =48.876865273057575;
        }
        if (w_loc == null){
            w_loc = 2.338613429199719;
        }
        // define leaflet
        var leaflet = L.map('kt_leaflet_1', {
            center: [e_loc, w_loc],
            zoom: 11
        });

        // set leaflet tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(leaflet);

        // set custom SVG icon marker
        var leafletIcon = L.divIcon({
            html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
            bgPos: [30, 30],
            iconAnchor: [20, 37],
            popupAnchor: [0, -37],
            className: 'leaflet-marker'
        });

        // bind marker with popup
        var marker = L.marker([e_loc, w_loc], { icon: leafletIcon }).addTo(leaflet);
        marker.openPopup();
    }

    var demo2 = function () {

    }

    var demo3 = function () {

    }

    var demo4 = function () {

    }

    var demo5 = function () {
        // Define Map Location
        var leaflet = L.map('kt_leaflet_5', {
            center: [48.85868771170757, 2.293901951462865],
            zoom: 13
        });

        // Init Leaflet Map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet);

        // Set Geocoding
        var geocodeService;
        if (typeof L.esri.Geocoding === 'undefined') {
            geocodeService = L.esri.geocodeService();
        } else {
            geocodeService = L.esri.Geocoding.geocodeService();
        }

        // Define Marker Layer
        var markerLayer = L.layerGroup().addTo(leaflet);

        // Set Custom SVG icon marker
        var leafletIcon = L.divIcon({
            html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
            bgPos: [30, 30],
            iconAnchor: [20, 37],
            popupAnchor: [0, -37],
            className: 'leaflet-marker'
        });

        // Map onClick Action
        leaflet.on('click', function (e) {
            geocodeService.reverse().latlng(e.latlng).run(function (error, result) {
                if (error) {
                    return;
                }
                markerLayer.clearLayers(); // remove this line to allow multi-markers on click
                L.marker(result.latlng, { icon: leafletIcon }).addTo(markerLayer).bindPopup(result.address.Match_addr, { closeButton: false }).openPopup();
                document.getElementById('e_location').value = result.latlng.lat;
                document.getElementById('w_location').value = result.latlng.lng;
            });
        });
    }

    var demo6 = function () {

    }

    return {
        // public functions
        init: function () {
            // default charts
            demo1();
            demo2();
            demo3();
            demo4();
            demo5();
            demo6();
        }
    };
}();

jQuery(document).ready(function () {
    KTLeaflet.init();
});
