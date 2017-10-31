import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';

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
    }
    login(email, password) {
      var data={
        email:email,
        password:password
      }
      this.userService.findUser(data)
      .subscribe(res => {
        if(res==true){
          console.log(res);
          this.results.unshift(data);
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