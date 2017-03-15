[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MapboxDirection/functions?utm_source=RapidAPIGitHub_MapboxDirectionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# MapboxDirection Package
Make maps, direction, geocoding, transit
* Domain: [Mapbox](https://www.mapbox.com)
* Credentials: accessToken

## How to get credentials: 
1. You can get your accessToken from your account ([Mapbox Account](https://www.mapbox.com/studio/account/tokens/))

## MapboxDirection.getOptimalDriving
For automotive routing. This profile shows the fastest routes by preferring high-speed roads, like highways.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| The api key obtained from Mapbox
| coordinates     | Array      | List of points coordinates to visit like {'lng':'value1','lat':'value2'}. At least two pairs of coordinates (starting point and the end point of the route). Maximum 25 pairs.
| alternatives    | Boolean    | Whether to return alternative routes. Can be  true or false (default)
| geometries      | String     | Format of the returned geometry. Allowed values are: geojson, polyline (with precision 5), polyline6 (with precision 6). The default value is polyline .
| overview        | String     | Type of returned overview geometry. Can be full (the most detailed geometry available), simplified (a simplified version of the full geometry), or false (no overview geometry). The default is simplified
| radiuses        | String     | Maximum distance in meters that each coordinate is allowed to move when snapped to a nearby road segment. There must be as many radiuses as there are coordinates in the request, each separated by  ; . Values can be any number greater than 0 or they can be the string  unlimited. If no routable road is found within the radius, a NoSegment error is returned.
| steps           | Boolean    | Whether to return steps and turn-by-turn instructions. Can be true or false. The default is false.
| continueStraight| Boolean    | Sets allowed direction of travel when departing intermediate waypoints. If true the route will continue in the same direction of travel. If false the route may continue in the opposite direction of travel. Defaults to true for getOptimalDriving/getOptimalDrivingTraffic and false for getOptimalCycling and getOptimalWalking.
| bearings        | String     | Used to filter the road segment the waypoint will be placed on by direction and dictates the angle of approach. This option should always be used in conjunction with the radiuses parameter. The parameter takes two values per waypoint: the first is an angle clockwise from true north between 0 and 360. The second is the range of degrees the angle can deviate by. We recommend a value of 45° or 90° for the range, as bearing measurements tend to be inaccurate. This is useful for making sure we reroute vehicles on new routes that continue traveling in their current direction. A request that does this would provide bearing and radius values for the first waypoint and leave the remaining values empty. If provided, the list of bearings must be the same length as the list of waypoints, but you can skip a coordinate and show its position with the  ; separator.
| annotations     | String     | Whether or not to return additional metadata along the route. Can be one or all of 'duration' or 'distance', each separated by ','.

## MapboxDirection.getOptimalDrivingTraffic
Detects broad sets of categories within an image, ranging from modes of transportation to animals.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| The api key obtained from Mapbox
| coordinates     | Array      | List of points coordinates to visit like {'lng':'value1','lat':'value2'}. At least two pairs of coordinates (starting point and the end point of the route). Maximum 25 pairs.
| alternatives    | Boolean    | Whether to return alternative routes. Can be  true or false (default)
| geometries      | String     | Format of the returned geometry. Allowed values are: geojson, polyline (with precision 5), polyline6 (with precision 6). The default value is polyline .
| overview        | String     | Type of returned overview geometry. Can be full (the most detailed geometry available), simplified (a simplified version of the full geometry), or false (no overview geometry). The default is simplified
| radiuses        | String     | Maximum distance in meters that each coordinate is allowed to move when snapped to a nearby road segment. There must be as many radiuses as there are coordinates in the request, each separated by  ; . Values can be any number greater than 0 or they can be the string  unlimited. If no routable road is found within the radius, a NoSegment error is returned.
| steps           | Boolean    | Whether to return steps and turn-by-turn instructions. Can be true or false. The default is false.
| continueStraight| Boolean    | Sets allowed direction of travel when departing intermediate waypoints. If true the route will continue in the same direction of travel. If false the route may continue in the opposite direction of travel. Defaults to true for getOptimalDriving/getOptimalDrivingTraffic and false for getOptimalCycling and getOptimalWalking.
| bearings        | String     | Used to filter the road segment the waypoint will be placed on by direction and dictates the angle of approach. This option should always be used in conjunction with the radiuses parameter. The parameter takes two values per waypoint: the first is an angle clockwise from true north between 0 and 360. The second is the range of degrees the angle can deviate by. We recommend a value of 45° or 90° for the range, as bearing measurements tend to be inaccurate. This is useful for making sure we reroute vehicles on new routes that continue traveling in their current direction. A request that does this would provide bearing and radius values for the first waypoint and leave the remaining values empty. If provided, the list of bearings must be the same length as the list of waypoints, but you can skip a coordinate and show its position with the  ; separator.
| annotations     | String     | Whether or not to return additional metadata along the route. Can be one or all of 'duration' or 'distance', each separated by ','.

## MapboxDirection.getOptimalWalking
Detects popular natural and man-made structures within an image.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| The api key obtained from Mapbox
| coordinates     | Array      | List of points coordinates to visit like {'lng':'value1','lat':'value2'}. At least two pairs of coordinates (starting point and the end point of the route). Maximum 25 pairs.
| alternatives    | Boolean    | Whether to return alternative routes. Can be  true or false (default)
| geometries      | String     | Format of the returned geometry. Allowed values are: geojson, polyline (with precision 5), polyline6 (with precision 6). The default value is polyline .
| overview        | String     | Type of returned overview geometry. Can be full (the most detailed geometry available), simplified (a simplified version of the full geometry), or false (no overview geometry). The default is simplified
| radiuses        | String     | Maximum distance in meters that each coordinate is allowed to move when snapped to a nearby road segment. There must be as many radiuses as there are coordinates in the request, each separated by  ; . Values can be any number greater than 0 or they can be the string  unlimited. If no routable road is found within the radius, a NoSegment error is returned.
| steps           | Boolean    | Whether to return steps and turn-by-turn instructions. Can be true or false. The default is false.
| continueStraight| Boolean    | Sets allowed direction of travel when departing intermediate waypoints. If true the route will continue in the same direction of travel. If false the route may continue in the opposite direction of travel. Defaults to true for getOptimalDriving/getOptimalDrivingTraffic and false for getOptimalCycling and getOptimalWalking.
| bearings        | String     | Used to filter the road segment the waypoint will be placed on by direction and dictates the angle of approach. This option should always be used in conjunction with the radiuses parameter. The parameter takes two values per waypoint: the first is an angle clockwise from true north between 0 and 360. The second is the range of degrees the angle can deviate by. We recommend a value of 45° or 90° for the range, as bearing measurements tend to be inaccurate. This is useful for making sure we reroute vehicles on new routes that continue traveling in their current direction. A request that does this would provide bearing and radius values for the first waypoint and leave the remaining values empty. If provided, the list of bearings must be the same length as the list of waypoints, but you can skip a coordinate and show its position with the  ; separator.
| annotations     | String     | Whether or not to return additional metadata along the route. Can be one or all of 'duration' or 'distance', each separated by ','.

## MapboxDirection.getOptimalCycling
Performs Optical Character Recognition. It detects and extracts text within an image, with support for a broad range of languages, along with support for automatic language identification.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| The api key obtained from Mapbox
| coordinates     | Array      | List of points coordinates to visit like {'lng':'value1','lat':'value2'}. At least two pairs of coordinates (starting point and the end point of the route). Maximum 25 pairs.
| alternatives    | Boolean    | Whether to return alternative routes. Can be  true or false (default)
| geometries      | String     | Format of the returned geometry. Allowed values are: geojson, polyline (with precision 5), polyline6 (with precision 6). The default value is polyline .
| overview        | String     | Type of returned overview geometry. Can be full (the most detailed geometry available), simplified (a simplified version of the full geometry), or false (no overview geometry). The default is simplified
| radiuses        | String     | Maximum distance in meters that each coordinate is allowed to move when snapped to a nearby road segment. There must be as many radiuses as there are coordinates in the request, each separated by  ; . Values can be any number greater than 0 or they can be the string  unlimited. If no routable road is found within the radius, a NoSegment error is returned.
| steps           | Boolean    | Whether to return steps and turn-by-turn instructions. Can be true or false. The default is false.
| continueStraight| Boolean    | Sets allowed direction of travel when departing intermediate waypoints. If true the route will continue in the same direction of travel. If false the route may continue in the opposite direction of travel. Defaults to true for getOptimalDriving/getOptimalDrivingTraffic and false for getOptimalCycling and getOptimalWalking.
| bearings        | String     | Used to filter the road segment the waypoint will be placed on by direction and dictates the angle of approach. This option should always be used in conjunction with the radiuses parameter. The parameter takes two values per waypoint: the first is an angle clockwise from true north between 0 and 360. The second is the range of degrees the angle can deviate by. We recommend a value of 45° or 90° for the range, as bearing measurements tend to be inaccurate. This is useful for making sure we reroute vehicles on new routes that continue traveling in their current direction. A request that does this would provide bearing and radius values for the first waypoint and leave the remaining values empty. If provided, the list of bearings must be the same length as the list of waypoints, but you can skip a coordinate and show its position with the  ; separator.
| annotations     | String     | Whether or not to return additional metadata along the route. Can be one or all of 'duration' or 'distance', each separated by ','.

## Examples
#### Request
MapboxDirection.getOptimalDriving
```code
{
	"accessToken": "Your-accessToken-here",
	"coordinates": [{
		"lng": "-122.42",
		"lat": "37.78"
	}, {
		"lng": "-77.03",
		"lat": "38.91"
	}]
}
```
#### Response
```code
{
  "callback": "success",
  "contextWrites": {
    "to": [
      {
        "routes": [
          {
            "legs": [
              {
                "steps": [],
                "summary": "",
                "duration": 144956.3,
                "distance": 4529731.6
              }
            ],
            "geometry": "q|qeFbdejVw~cHawlIes`AcedHggrGe}zH`apAijuCqv`B{xzIhygAwp`EvfBq`mNu}eBkmxAshhBslmUvtEkmiDdq_C}|~F{uFsl}Xb}yAq`kJ_s[sxdMojdC{mfF}gf@_pmMdn`A_jsW_xiA_whXzcbBs~sWjtzEgdvHrlU_~aFv{sEkyiF",
            "duration": 144956.3,
            "distance": 4529731.6
          }
        ],
        "waypoints": [
          {
            "name": "McAllister Street",
            "location": [
              -122.420018,
              37.78009
            ]
          },
          {
            "name": "Logan Circle Northwest",
            "location": [
              -77.030075,
              38.910067
            ]
          }
        ],
        "code": "Ok"
      }
    ]
  }
}
```
Distance in meters, Duration in secs.
