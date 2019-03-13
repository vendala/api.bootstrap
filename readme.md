# Bootstrap Microservice

### Install

```shell
git clone git@bitbucket.org:comunica_web/microservice.git shipping
cp .env.exemple .env
```

Configurar .env com o seu banco de dados

Configurar .env com os dados da API

Change namespace in routes/api.php

### Base uri 
```
http://microservice.test/api
```


### Headers
```
Accept: application/prs.microservice.v1+json
Content-Type: application/json
```

### Endpoints

#### Users

Get All users:
```
/user
```

Exemple response:
```json
{
    "data": [
        {
            "type": "users",
            "id": "1",
            "attributes": {
                "name": "Dr. Lexus Farrell III",
                "email": "clyde.wilkinson@example.org",
                "created_at": "2018-01-13T20:17:35+00:00"
            }
        },
        {
            "type": "users",
            "id": "2",
            "attributes": {
                "name": "Leilani Waters",
                "email": "kemmer.danielle@example.net",
                "created_at": "2018-01-13T20:17:35+00:00"
            }
        }
    ]
}
```

Get a users:
```
/user/10
```

Exemple response:
```json
{
    "data": {
        "type": "users",
        "id": "10",
        "attributes": {
            "name": "Clara Schamberger DVM",
            "email": "camilla.sauer@example.net",
            "created_at": "2018-01-13T20:17:35+00:00"
        }
    }
}
```

Delete a users:
```
/user/10
```

### HTTTP Status

#### Success

**200** - OK

**201** - Created

**202** - Accepted

**204** - No Content

#### Errors

##### 422 Unprocessable Entity
 
**422.001** - No query results for endpoint. | User id not found

**422.002** - Could not delete user. | User id not found


| Exception                                                 | Status Code   |
| ----------------------------------------------------------|:--------------|
| \App\Exceptions\Http\AccessDeniedBaseHttpException        | 403           |
| \App\Exceptions\Http\BadRequestHttpException              | 400           |
| \App\Exceptions\Http\ConflictHttpException                | 409           |
| \App\Exceptions\Http\GoneBaseHttpException                | 410           |
| \App\Exceptions\Http\HttpException                        | 500           |
| \App\Exceptions\Http\LengthRequiredBaseHttpException      | 411           |
| \App\Exceptions\Http\MethodNotAllowedHttpException        | 405           |
| \App\Exceptions\Http\NotAcceptableHttpException           | 403           |
| \App\Exceptions\Http\NotFoundHttpException                | 404           |
| \App\Exceptions\Http\PreconditionFailedBaseHttpException  | 412           |
| \App\Exceptions\Http\PreconditionRequiredBaseHttpException| 428           |
| \App\Exceptions\Http\ServiceUnavailableHttpException      | 503           |
| \App\Exceptions\Http\TooManyRequestsHttpException         | 429           |
| \App\Exceptions\Http\UnauthorizedHttpException            | 401           |
| \App\Exceptions\Http\UnprocessableEntityHttpException     | 422           |
| \App\Exceptions\Http\UnsupportedMediaTypeHttpException    | 415           |


| ResourceException                                         | Status Code   |
| ----------------------------------------------------------|:--------------|
| \App\Exceptions\Resources\ResourceException               | 422           |
| \App\Exceptions\Resources\StoreResourceFailedException    | 422           |
| \App\Exceptions\Resources\DeleteResourceFailedException   | 422           |
| \App\Exceptions\Resources\UpdateResourceFailedException   | 422           |