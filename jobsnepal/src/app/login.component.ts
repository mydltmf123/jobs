import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';
import { Http, Headers, RequestOptions,Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map'
import {CookieService} from 'angular2-cookie/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styles: [''],
  providers: [UserService]
})
export class LoginComponent implements OnInit{
  name: string;
	password: string;
	email: string;
	image: string;
	user_type: string;
  results = [];
  apiUrl = 'http://localhost:3000/api';

 
  constructor(private userService:UserService, private cookieService:CookieService) {

	}


    ngOnInit(): void {
      this.cookieService.removeAll();
      console.log(this.cookieService.get("cookieExample")); 
      this.results = [];
      this.getUsers();
    }
    login(email, password) {
      var data={
        email:email,
        password:password
      }
      var result=this.userService.findUser(data)
      .subscribe(res => {
        if(res.success=="true"){
          console.log(res);
          this.results.unshift(data);
 
          this.cookieService.put("cookieExample", email);


          location.replace("/home");

        }
        else{
          console.log(res);
        }
       
        
                });
      }
     
    getUsers() {
      this.userService.getUsers()
      .subscribe(res => console.log(res));
    }
}