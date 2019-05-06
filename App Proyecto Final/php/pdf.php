$key = '61e5f04ca1794253ed17e6bb986c1702';
  $secret = '68db1902ad1bb26d34b3f597488b9b28';
  $workspace = 'demo.example@actualreports.com';
  $resource = 'templates/44216';

  $data = [
    'key' => $key,
    'resource' => $resource,
    'workspace' => $workspace
  ];
  ksort($data);

  $signature = hash_hmac('sha256', implode('', $data), $secret);

  $client = new \GuzzleHttp\Client([
      'base_uri' => 'https://us1.pdfgeneratorapi.com/api/v3/',
  ]);

  /**
   * Authentication params sent in headers
   */
  $response = $client->request('GET', $resource, [
    'headers' => [
      'X-Auth-Key' => $key,
      'X-Auth-Workspace' => $workspace,
      'X-Auth-Signature' => $signature
      'Accept' => 'application/json',
      'Content-Type' => 'application/json; charset=utf-8'
    ]
  ]);

  /**
   * Authentication params sent in query string
   */
  $response = $client->request('GET', $resource, [
    'body' => $documentData,
    'query' => [
      'key' => $key,
      'workspace' => $workspace,
      'signature' => $signature
    ]
  ]);


{
  "response": {
    "id": "123456",
    "name": "My awesome template",
    "tags": "",
    "layout": {
      "format": "A4",
      "unit": "cm",
      "orientation": "portrait",
      "rotation": 0,
      "margins": {
        "top": 0.5,
        "left": 0.5,
        "right": 0.5,
        "bottom": 0.5
      },
      "emptyLabels": 0,
      "width": 21,
      "height": 29.7,
      "repeatLayout": null
    },
    "pages": [
      {
        "width": 21,
        "height": 29.7,
        "components": [
          {
            "width": 3.95,
            "height": 0.47,
            "top": 0.18,
            "left": 0.26,
            "zindex": 1005,
            "phpClassName": "Reports_Component_CustomText",
            "className": "CustomText",
            "name": "Text",
            "preview": null,
            "value": "Component value",
            "defaultValue": "{value}",
            "dataIndex": "randomDataIndexForFlexHeight",
            "borderStatus": {
              "top": true,
              "right": true,
              "bottom": true,
              "left": true
            },
            "borderWidth": 0,
            "borderColor": "#000000",
            "borderStyle": "none",
            "backgroundColor": "#ffffff",
            "useFlexHeight": true,
            "sortBy": [],
            "sortDir": "ASC",
            "filterBy": [],
            "groupBy": [],
            "pivotOn": [],
            "pivotColumns": [],
            "pivotValues": [],
            "userRights": {
              "canEdit": true,
              "canMove": true,
              "canRemove": true,
              "canResize": true
            },
            "fontFamily": "opensans",
            "fontAlign": "left",
            "fontSize": 12,
            "fontType": [],
            "fontColor": "#000000",
            "fontValign": "T",
            "conditionalFormats": []
          }
        ],
        "margins": {
          "right": 0.5,
          "bottom": 0.5
        },
        "border": false
      }
    ],
    "dataSettings": {
      "sortBy": [],
      "filterBy": []
    }
  }
}
