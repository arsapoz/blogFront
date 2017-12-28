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
autoZoom : true,
color : "#444f59",
colorSolid : "#fec8c9",
selectedColor : "#fec8c9",
outlineColor : "#FEFAEC",
rollOverColor : "#fd9  99a",
rollOverOutlineColor : "#3e4149",
}
});
