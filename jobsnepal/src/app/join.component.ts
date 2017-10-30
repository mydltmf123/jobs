import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';

@Component({
  selector: 'app-join',
  templateUrl: './join.component.html',
  styles: [''],
  providers: [UserService]
})
export class JoinComponent implements OnInit{
  name: string;
	password: string;
	email: string;
	image: string;
	user_type: string;
  results = [];
  constructor(private userService:UserService) {
	  
	}

	ngOnInit() {
	  this.results = [];
	  this.getUsers();
	}
  getUsers() {
	  this.userService.getUsers()
	  .subscribe(res => console.log(res));
	}

	addUser(name, password, email, image, user_type) {
		var data = {
			name: name,
			password: password,
			email: email,
			image: image,
			user_type: user_type

		};
	  var result = this.userService.addUser(data)
	    .subscribe(res => {
	    	if(res.success == "true") {
	    		this.results.unshift(data);
				}
				//this.name = "";
				//this.passwd = "";
	      console.log(res);
	    });
	}

}