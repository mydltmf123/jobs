import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';
import { Http, Headers, RequestOptions,Response } from '@angular/http';
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
  constructor(private userService:UserService) {
	  
	}


    ngOnInit(): void {
      this.results = [];
      this.getUsers();
      this.logOut();
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
          let user = data;
          if (user && user.email){
            localStorage.setItem('currentUser', JSON.stringify(data));
            console.log("true");
          }

          location.replace("/home");

        }
        else{
          console.log(res);
        }
        
      });
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