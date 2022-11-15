# RESTful API

> **Representational State Transfer (REST)** is a software architectural style that defines a set of constraints to be used for creating Web services. Web services that conform to the REST architectural style, called RESTful Web services (RWS), provide interoperability between computer systems on the Internet.

from [wikipedia](https://en.wikipedia.org/wiki/Representational_state_transfer)

SmartAdmin for PHP has built-in REST API server that you can already use out of the box. Provided that you enabled `mod_rewrite` in the [installation](docs_general.php#url-rewriting), you can configure your REST API server in minutes!

To play around with this feature, head over to the [API Tester](php_api_playground.php) page.

## Routes

The API routes are basically the endpoints of your API. These routes are configured/defined under `public/api` folder. To learn more on how to design your API better, follow this [tutorial](https://www.restapitutorial.com/lessons/restfulresourcenaming.html) about REST apis.
You can configure these routes in the `api/includes/_routes.php` file. To learn more about adding routes, visit [Slim's](https://www.slimframework.com/docs/v4/objects/routing.html) Routing documentation.

Example route request:
```
GET https://smartadmin.lodev09.com/api/v1/users/:id
```

Response:
```json
Status: 200 OK
{
	"id": 1,
	"username": "lodev09",
	"name": "Jovanni",
	"email": "lodev09@gmail.com",
	"created_at": "2019-07-02T19:34:22Z"
}
```

### Authenticated Routes
Those end-points (resource) that you want to be secured, you would most likely require an authorized user to access it.
The built-in REST API server comes with the Authentication routine which is handled by the `\API\Middlewares\AuthMiddleware` middleware. The main function of this middleware is to basically check if the request contains `Authorization` header so the app knows that the request is authorized. It should look something like this:

```
Authorization Bearer YOUR_TOKEN
```

To retrieve a `token`, you will call the `POST /authenticate` end-point passing the user's `username` and `password`.

```
POST https://smartadmin.lodev09.com/api/v1/authenticate
{"username":"lodev09","password":"smartadmin2021"}
```

Response:
```json
Status: 200 OK
{
    "id": 250,
    "token": "c111b3ef7a0054126c126035fbbccda1260a8fa605570a5c28369fcbd24b84e6",
    "created_at": "2021-02-08T17:15:16+0000"
}
```

## Middlewares

SmartAdmin PHP includes various _middlewares_ to handle each request. For example, the `\API\AuthMiddleware` where it validates the user credentials passed through the `Authentication` header -- basically checking if the request is authenticated or not.

Here are the included middlewares:

| Class | Description |
| ----- | ----------- |
| `\API\Middlewares\AuthMiddleware` | Authenticates requests |
| `\API\Middlewares\LoggerMiddleware` | Logs requests |
| `\API\Middlewares\RateLimitMiddleware` | Calculates rate limits |
| `\API\Middlewares\RequestMiddleware` | Converts all requests to `JSON` |

## Credits

SmartAdmin PHP uses [slimphp/Slim](https://github.com/slimphp/Slim) package to host the API server. Refer to their documentation on how to create your own routes and customize your REST API server.