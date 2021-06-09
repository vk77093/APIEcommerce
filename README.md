{
	"info": {
		"_postman_id": "4405d695-8e35-4406-b498-88bb618ccbd9",
		"name": "E-commerceAPI",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
	},
	"item": [
		{
			"name": "Auth Passport",
			"item": [
				{
					"name": "gettingToken",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "grant_type",
									"value": "password",
									"type": "text"
								},
								{
									"key": "client_id",
									"value": "2",
									"type": "text"
								},
								{
									"key": "client_secret",
									"value": "DnqWMQlaLAlBbDiosd8DXlLFbDm7F5M1YoOKmJCV",
									"type": "text"
								},
								{
									"key": "username",
									"value": "lang.karelle@example.net",
									"type": "text"
								},
								{
									"key": "password",
									"value": "password",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/oauth/token",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"oauth",
								"token"
							],
							"query": [
								{
									"key": "",
									"value": "",
									"disabled": true
								}
							]
						}
					},
					"response": []
				},
				{
					"name": "gettingUser",
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiODRlZTBkYjBiMDdlYTk2NDM4MDU2ZmQ5ZjhlY2MzOWI0ZTZiYTNjMmM1YzNlMzFiYjZhNTg0MjE2MjRmZTk5MWIxZTE1YWM1NjcyY2FiMWUiLCJpYXQiOjE2MjMxMzA5NjEuNjQ3NDIxLCJuYmYiOjE2MjMxMzA5NjEuNjQ3NDI5LCJleHAiOjE2NTQ2NjY5NjEuNjE3MTIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.rRG19HNqrXd5E2SPDSzEqg1JztlrJJqginPHZKRwc9Ptcfmf8GgMCFtL1kxb3f-1veGyihimgoFm-ae083mGAUAHsyC3vr3m2LOZsxNmjMqIBSaOykldyHjHMXJf7NFP0WtUaDM43bqseYsp3PxEHc_OAAeJp3DG0CQ3-vCVOJRVehohv2pABG1_LY2B4tW3Fxr1dkxaoX4TncvsTr6wYY0nrYPPBpN6WcQXHZr9S3lMcvdg-h6E60Rh6tXolz0VSUD0b_mDl7fm4NHU0zNM0qM-hDCubt1E3hobKe5hE0R8H56JxL92TD3WDoeRuMBj5NIHL6aP0ttKk1jYh0GWeJoqsyCoOJjZ9V1LPo6r8Qvn43wPwnyuQT-1H5esVdoG4zdyzs8z1VlOjyTaqrC-4UaYYr7BV7siL4CHOD9aIutXnx3BUmYkkAay0zt6Adhjy4awG7R5GeSkTwaShqUrufIISoqejhavoxJN0IWNtHOxAk2j2lui992J8oCvfZxeBjdgbO1JeU5IsEeR3aWxJ5rqPzCndrTIlQyr2spNipSio04mpenyu8Ro7xnC5Q-bpkneHcZoSVKiaZfkMUnBouAt4lGGZdxilw-lYJyIqQCyLMby1cdrNEKqvdVNP8oxFrNvSrBHgUnTqXNJagSL-tFvOGkBz1QP0JZ3SrbottM",
								"type": "text"
							}
						],
						"url": {
							"raw": "http://localhost:8002/api/user",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"user"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Reviews",
			"item": [
				{
					"name": "GetReview",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"method": "GET",
						"header": [],
						"body": {
							"mode": "urlencoded",
							"urlencoded": []
						},
						"url": {
							"raw": "http://localhost:8002/api/product/21/review/58",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"21",
								"review",
								"58"
							]
						}
					},
					"response": []
				},
				{
					"name": "getBy id",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://localhost:8002/api/product/21/review/57",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"21",
								"review",
								"57"
							]
						}
					},
					"response": []
				},
				{
					"name": "Add Reviews",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "{{auth}}",
								"type": "text"
							}
						],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "cust_name",
									"value": "vijay test",
									"type": "text"
								},
								{
									"key": "cust_review",
									"value": "ewnfjnwe wieunfwe iewnfiuweh eiwfiuweui",
									"type": "text"
								},
								{
									"key": "star",
									"value": "4",
									"type": "text"
								},
								{
									"key": "product_id",
									"value": "31",
									"type": "text",
									"disabled": true
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/api/product/21/review",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"21",
								"review"
							]
						}
					},
					"response": []
				},
				{
					"name": "deleteReview",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "{{auth}}",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "cust_name",
									"value": "vijay test up",
									"type": "text"
								},
								{
									"key": "cust_review",
									"value": "ewnfjnwe wieunfwe iewnfiuweh eiwfiuweui",
									"type": "text"
								},
								{
									"key": "star",
									"value": "4",
									"type": "text"
								},
								{
									"key": "product_id",
									"value": "31",
									"type": "text",
									"disabled": true
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/api/product/21/review/58",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"21",
								"review",
								"58"
							]
						}
					},
					"response": []
				},
				{
					"name": "Update",
					"request": {
						"method": "PATCH",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "{{auth}}",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "cust_name",
									"value": "vijay test up4",
									"type": "text"
								},
								{
									"key": "cust_review",
									"value": "ewnfjnwe wieunfwe iewnfiuweh eiwfiuweui",
									"type": "text"
								},
								{
									"key": "star",
									"value": "5",
									"type": "text"
								},
								{
									"key": "product_id",
									"value": "31",
									"type": "text",
									"disabled": true
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/api/product/9/review/56",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"9",
								"review",
								"56"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Products",
			"item": [
				{
					"name": "Product",
					"protocolProfileBehavior": {
						"disableBodyPruning": true
					},
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "",
									"type": "string"
								}
							]
						},
						"method": "GET",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.{{auth}}.ShwlYaWcw2uq9C8lc9WCzSw5cbtzjGgxLZ4VZj6URMVSdDRVaVAhGaxUrqH5Ddj7wIebZMJUqQ0NWkVirQ1khCIGtQz-aU0qWsK4IDItHREuOCeOAiPqcVoeVXsUtb4GE1HlIsEJVnXXECNViq83dSlZTIMBS5r3QGb75CXg355Z7h4absbX-Oh3JEjuSck7csv_cbAVaTPSmr5umB84OA7ntQ2GkAfRBxVbwXm8pBzfHjtOjH6CkKpdy4NuJ0b050csFWoLdUba8i6Q5YB1iii8__KA0hh92p720V5jprLj7Zd6gG1cfD-Zphfj8IN640L4uszY1i2K61q2xxhn8RwMQGel3wdpazvAtB8Fyf2wdISZdQ9ucsFz0_uK4RczQ2qTj4cnqbLvKlc5wXTTYM81FIUgsGbNDUVuVD0VHXynOyOkGLiHzGerijm4h18TBt1edFcjv0mAQsV3qJpT3SZAn9QYEX2xlaRMxyvH_rqJO4w8nYvDPILme8Q63BqBpxY-0UtEPdqNshFAhEf8AUgBxgQN-0TYsKymE9tv-DvBYOm30VhnChwDRih5vR4Igy5uWahTjTyOcKL69ZoUVHQgtewlf1gViBo4J9Ixx_entzVNYh5rWn9PJcaqi_Rf8V4vPpDjxmUwwct1C63-THuQB5lpXfqA-k5A90iE2AA",
								"type": "text"
							}
						],
						"body": {
							"mode": "formdata",
							"formdata": []
						},
						"url": {
							"raw": "http://localhost:8002/api/product/",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								""
							]
						}
					},
					"response": []
				},
				{
					"name": "Product By id",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://localhost:8002/api/product/31",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"31"
							]
						}
					},
					"response": []
				},
				{
					"name": "Update Product",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "",
									"type": "string"
								}
							]
						},
						"method": "PUT",
						"header": [
							{
								"warning": "This is a duplicate header and will be overridden by the Content-Type header generated by Postman.",
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"warning": "This is a duplicate header and will be overridden by the Authorization header generated by Postman.",
								"key": "Authorization",
								"value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.{{auth}}.ShwlYaWcw2uq9C8lc9WCzSw5cbtzjGgxLZ4VZj6URMVSdDRVaVAhGaxUrqH5Ddj7wIebZMJUqQ0NWkVirQ1khCIGtQz-aU0qWsK4IDItHREuOCeOAiPqcVoeVXsUtb4GE1HlIsEJVnXXECNViq83dSlZTIMBS5r3QGb75CXg355Z7h4absbX-Oh3JEjuSck7csv_cbAVaTPSmr5umB84OA7ntQ2GkAfRBxVbwXm8pBzfHjtOjH6CkKpdy4NuJ0b050csFWoLdUba8i6Q5YB1iii8__KA0hh92p720V5jprLj7Zd6gG1cfD-Zphfj8IN640L4uszY1i2K61q2xxhn8RwMQGel3wdpazvAtB8Fyf2wdISZdQ9ucsFz0_uK4RczQ2qTj4cnqbLvKlc5wXTTYM81FIUgsGbNDUVuVD0VHXynOyOkGLiHzGerijm4h18TBt1edFcjv0mAQsV3qJpT3SZAn9QYEX2xlaRMxyvH_rqJO4w8nYvDPILme8Q63BqBpxY-0UtEPdqNshFAhEf8AUgBxgQN-0TYsKymE9tv-DvBYOm30VhnChwDRih5vR4Igy5uWahTjTyOcKL69ZoUVHQgtewlf1gViBo4J9Ixx_entzVNYh5rWn9PJcaqi_Rf8V4vPpDjxmUwwct1C63-THuQB5lpXfqA-k5A90iE2AA",
								"type": "text"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "name",
									"value": "update1112",
									"type": "text"
								},
								{
									"key": "details",
									"value": "Ipsum recusandae maiores corrupti et quia si update",
									"type": "text"
								},
								{
									"key": "price",
									"value": "244",
									"type": "text"
								},
								{
									"key": "stock",
									"value": "25",
									"type": "text"
								},
								{
									"key": "discount",
									"value": "10",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/api/product/4",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"4"
							]
						}
					},
					"response": []
				},
				{
					"name": "AddProduct",
					"request": {
						"method": "POST",
						"header": [
							{
								"warning": "This is a duplicate header and will be overridden by the Content-Type header generated by Postman.",
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.{{auth}}.ShwlYaWcw2uq9C8lc9WCzSw5cbtzjGgxLZ4VZj6URMVSdDRVaVAhGaxUrqH5Ddj7wIebZMJUqQ0NWkVirQ1khCIGtQz-aU0qWsK4IDItHREuOCeOAiPqcVoeVXsUtb4GE1HlIsEJVnXXECNViq83dSlZTIMBS5r3QGb75CXg355Z7h4absbX-Oh3JEjuSck7csv_cbAVaTPSmr5umB84OA7ntQ2GkAfRBxVbwXm8pBzfHjtOjH6CkKpdy4NuJ0b050csFWoLdUba8i6Q5YB1iii8__KA0hh92p720V5jprLj7Zd6gG1cfD-Zphfj8IN640L4uszY1i2K61q2xxhn8RwMQGel3wdpazvAtB8Fyf2wdISZdQ9ucsFz0_uK4RczQ2qTj4cnqbLvKlc5wXTTYM81FIUgsGbNDUVuVD0VHXynOyOkGLiHzGerijm4h18TBt1edFcjv0mAQsV3qJpT3SZAn9QYEX2xlaRMxyvH_rqJO4w8nYvDPILme8Q63BqBpxY-0UtEPdqNshFAhEf8AUgBxgQN-0TYsKymE9tv-DvBYOm30VhnChwDRih5vR4Igy5uWahTjTyOcKL69ZoUVHQgtewlf1gViBo4J9Ixx_entzVNYh5rWn9PJcaqi_Rf8V4vPpDjxmUwwct1C63-THuQB5lpXfqA-k5A90iE2AA",
								"type": "text"
							}
						],
						"body": {
							"mode": "formdata",
							"formdata": [
								{
									"key": "name",
									"value": "vijay details 29",
									"type": "text"
								},
								{
									"key": "description",
									"value": "some details",
									"type": "text"
								},
								{
									"key": "price",
									"value": "75",
									"type": "text"
								},
								{
									"key": "stock",
									"value": "6",
									"type": "text"
								},
								{
									"key": "discount",
									"value": "3",
									"type": "text"
								},
								{
									"key": "user_id",
									"value": "2",
									"type": "text",
									"disabled": true
								}
							]
						},
						"url": {
							"raw": "http://localhost:8002/api/product",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product"
							]
						}
					},
					"response": []
				},
				{
					"name": "DeleteProduct",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/atom+xml",
								"type": "text"
							},
							{
								"key": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.{{auth}}.ShwlYaWcw2uq9C8lc9WCzSw5cbtzjGgxLZ4VZj6URMVSdDRVaVAhGaxUrqH5Ddj7wIebZMJUqQ0NWkVirQ1khCIGtQz-aU0qWsK4IDItHREuOCeOAiPqcVoeVXsUtb4GE1HlIsEJVnXXECNViq83dSlZTIMBS5r3QGb75CXg355Z7h4absbX-Oh3JEjuSck7csv_cbAVaTPSmr5umB84OA7ntQ2GkAfRBxVbwXm8pBzfHjtOjH6CkKpdy4NuJ0b050csFWoLdUba8i6Q5YB1iii8__KA0hh92p720V5jprLj7Zd6gG1cfD-Zphfj8IN640L4uszY1i2K61q2xxhn8RwMQGel3wdpazvAtB8Fyf2wdISZdQ9ucsFz0_uK4RczQ2qTj4cnqbLvKlc5wXTTYM81FIUgsGbNDUVuVD0VHXynOyOkGLiHzGerijm4h18TBt1edFcjv0mAQsV3qJpT3SZAn9QYEX2xlaRMxyvH_rqJO4w8nYvDPILme8Q63BqBpxY-0UtEPdqNshFAhEf8AUgBxgQN-0TYsKymE9tv-DvBYOm30VhnChwDRih5vR4Igy5uWahTjTyOcKL69ZoUVHQgtewlf1gViBo4J9Ixx_entzVNYh5rWn9PJcaqi_Rf8V4vPpDjxmUwwct1C63-THuQB5lpXfqA-k5A90iE2AA",
								"type": "text"
							}
						],
						"url": {
							"raw": "http://localhost:8002/api/product/35",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8002",
							"path": [
								"api",
								"product",
								"35"
							]
						}
					},
					"response": []
				}
			]
		}
	],
	"variable": [
		{
			"key": "auth",
			"value": "eyJhdWQiOiIyIiwianRpIjoiNTEzOGMxZjQ4NjgzNWVmNjcwNGUzZWNmMmZhMTY3OGI3NjI1ZWUyNjllZGQ2ZTE2N2E0OGUyMjEzN2Y0NWVjNDNiODAyNDU0ODI0NWY2MmEiLCJpYXQiOjE2MjMyMTk3MTIuOTQwNzE1LCJuYmYiOjE2MjMyMTk3MTIuOTQwNzI0LCJleHAiOjE2NTQ3NTU3MTIuOTA5NjA1LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0"
		}
	]
}
