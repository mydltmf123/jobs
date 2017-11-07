import { Injectable, Inject } from '@angular/core';
import { Http, Headers, RequestOptions, Response } from '@angular/http';
import { URLSearchParams } from '@angular/http';

@Injectable()
export class UserService {
	apiUrl = 'http://localhost:3000/api';
	user_endpoint = '/users';
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
	findUser(data){
		let headers = new Headers();
		let urlSearchParams = new URLSearchParams();
				
		urlSearchParams.append('email', data.email);
		urlSearchParams.append('password', data.password);
		
	//"/"+data.email+"/"+data.password
		//return this.http.get(this.apiUrl+this.user_endpoint+'/email='+data.email+'/password='+data.password, {headers:this.headers})
		//	.map(res => res.json());
		return this.http.post(this.apiUrl+this.user_endpoint+'/login', urlSearchParams)
			.map(res => res.json());
	}

	addUser(data) {
		let headers = new Headers();
		// let headers = new Headers({"Content-Type": "application/json"});
		// let options = new RequestOptions({ headers: headers });
		let urlSearchParams = new URLSearchParams();
		urlSearchParams.append('name', data.name);		
		urlSearchParams.append('email', data.email);
		urlSearchParams.append('password', data.password);
		urlSearchParams.append('image', data.image);
		urlSearchParams.append('user_type', data.user_type);
		
		return this.http.post(this.apiUrl+this.user_endpoint+'/join', urlSearchParams)
			.map(res => res.json());
	}

	getpost() {
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
	getAll() {
        return this.http.get(this.apiUrl+this.user_endpoint, this.jwt()).map((response: Response) => response.json());
    }

	private jwt() {
		// create authorization header with jwt token
	  let currentUser = JSON.parse(localStorage.getItem('currentUser'));
	  console.log("CCCCCCCCCCCCCCCCCCCCCCCCCCurrent");
	  console.log(currentUser.email);
		if (currentUser && currentUser.email) {
			let headers = new Headers({ 'Authorization': 'Bearer ' + currentUser.token });
			console.log("curen");
			return new RequestOptions({ headers: headers });
		}			
		
	  }
}