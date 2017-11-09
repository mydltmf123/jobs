import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';
import { Http, Headers, RequestOptions,Response } from '@angular/http';
<<<<<<< HEAD
=======

import { Injectable } from '@angular/core';
//import { Http, Headers, Response } from '@angular/http';
>>>>>>> 09973eba0109faa4db74e08dc1001bfb2421ba47
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map'

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
  
 
  constructor(private userService:UserService) {
	 
	}


    ngOnInit(): void {
      this.results = [];
      this.getUsers();
<<<<<<< HEAD
      this.logOut();
=======
      this.logout();
>>>>>>> 09973eba0109faa4db74e08dc1001bfb2421ba47
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
<<<<<<< HEAD
          let user = data;
          if (user && user.email){
            localStorage.setItem('currentUser', JSON.stringify(data));
            console.log("true");
          }

          location.replace("/home");

        }
=======
        //  
       // (response: Response) => {
        let user = data;//response.json();
        if (user && user.email)
         {
          localStorage.setItem('currentUser',JSON.stringify(data));
          console.log("hew");
         }
         location.replace("/home");
  // console.log(localStorage.setItem);
        //  }
         }
>>>>>>> 09973eba0109faa4db74e08dc1001bfb2421ba47
        else{
          console.log(res);
        }
       
        
                });
      }
      logout() {
        // remove user from local storage to log user out
        localStorage.removeItem('currentUser');
        console.log("logout");
    }
    logOut(){
      localStorage.removeItem('currentUser');
      console.log("logout");
    }
    getUsers() {
      this.userService.getUsers()
      .subscribe(res => console.log(res));
    }
}