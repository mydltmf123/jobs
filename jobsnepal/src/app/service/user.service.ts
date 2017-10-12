import { Injectable, Inject } from '@angular/core';
import { Http, Headers, RequestOptions } from '@angular/http';

@Injectable()
export class UserService {
	apiUrl = 'http://localhost:3000/api';
	endpoint = '/user';
	headers : Headers;
	constructor(private http:Http) {
		this.headers = new Headers({"Content-Type": "application/json"});
	}

	getUsers() {
		return this.http.get(this.apiUrl+this.endpoint, {headers:this.headers}).map(
			res => res.json()
		);
	}

	addUser(data) {
		let headers = new Headers();
		// let headers = new Headers({"Content-Type": "application/json"});
		// let options = new RequestOptions({ headers: headers });

		return this.http.post(this.apiUrl+this.endpoint, JSON.stringify(data))
			.map(res => res.json());
	}


}