import { Injectable, Inject } from '@angular/core';
import { Http, Headers, RequestOptions } from '@angular/http';
import { URLSearchParams } from '@angular/http';

@Injectable()
export class UserService {
	apiUrl = 'http://localhost:3000/api';
	user_endpoint = '/user';
	ws_board_endpoint = '/ws_board';
	headers : Headers;
	constructor(private http:Http) {
		this.headers = new Headers({"Content-Type": "application/json"});
	}

	getUsers() {
		return this.http.get(this.apiUrl+this.user_endpoint, {headers:this.headers}).map(
			res => res.json()
		);
	}

	addUser(data) {
		let headers = new Headers();
		// let headers = new Headers({"Content-Type": "application/json"});
		// let options = new RequestOptions({ headers: headers });
		let urlSearchParams = new URLSearchParams();
		urlSearchParams.append('name', data.name);
		urlSearchParams.append('passwd', data.passwd);

		return this.http.post(this.apiUrl+this.user_endpoint, urlSearchParams)
			.map(res => res.json());
	}

	getpost(id) {
		return this.http.get(this.apiUrl+this.ws_board_endpoint, {headers:this.headers}).map(
			res => res.json()
		);
	}

	addpost(data) {
		let headers = new Headers();
		// let headers = new Headers({"Content-Type": "application/json"});
		// let options = new RequestOptions({ headers: headers });
		let urlSearchParams = new URLSearchParams();
		
        urlSearchParams.append('user_id', data.user_id);
        urlSearchParams.append('user_name', data.user_name);
        urlSearchParams.append('subject', data.subject);
        urlSearchParams.append('content', data.content);
        urlSearchParams.append('reg_date', data.reg_date);

		return this.http.post(this.apiUrl+this.ws_board_endpoint, urlSearchParams)
			.map(res => res.json());
	}

}