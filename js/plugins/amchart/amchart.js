var map = AmCharts.makeChart("mapdiv",{
type: "map",
theme: "dark",
projection: "miller",
panEventsEnabled : true,
backgroundColor : "#3e4149",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : true
},
dataProvider : {
map : "worldHigh",
getAreasFromMap : true,
zoomLevel: 4.5,
zoomLongitude: 20,
zoomLatitude: 45,
areas :
[
  {
    "id": "AT",
    "showAsSelected": true
  },
  {
    "id": "CZ",
    "showAsSelected": true
  },
  {
    "id": "FR",
    "showAsSelected": true
  },
  {
    "id": "DE",
    "showAsSelected": true
  },
  {
    "id": "GR",
    "showAsSelected": true
  },
  {
    "id": "IT",
    "showAsSelected": true
  },
  {
    "id": "RO",
    "showAsSelected": true
  },
  {
    "id": "RS",
    "showAsSelected": true
  },
  {
    "id": "TR",
    "showAsSelected": true
  }

]
},
areasSettings : {
autoZoom : false,
color : "#444f59",
colorSolid : "#fec8c9",
selectedColor : "#fec8c9",
outlineColor : "#FEFAEC",
rollOverColor : "black",
rollOverOutlineColor : "#3e4149",
}
});


// add events to recalculate map position when the map is moved or zoomed
map.addListener( "positionChanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  // get map object
  var map = event.chart;

  // go through all of the images
  for ( var x in map.dataProvider.images ) {
    // get MapImage object
    var image = map.dataProvider.images[ x ];

    // check if it has corresponding HTML element
    if ( 'undefined' == typeof image.externalElement )
      image.externalElement = createCustomMarker( image );

    // reposition the element accoridng to coordinates
    image.externalElement.style.top = map.latitudeToY( image.latitude ) + 'px';
    image.externalElement.style.left = map.longitudeToX( image.longitude ) + 'px';
  }
}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.title;
  holder.style.position = 'absolute';

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  image.chart.chartDiv.appendChild( holder );

  return holder;
}