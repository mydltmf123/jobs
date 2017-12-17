import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';
import {CookieService} from 'angular2-cookie/core';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styles: ['']
})
export class HomeComponent implements OnInit{
    title = 'Jobs';
    
    image = '/assets/image/job.jpg';
    images='/assets/image';
    currentUser: UserService;
    authenticated=false;

  
      constructor(private userService: UserService, private cookieService:CookieService) {
          
      }
    
    ngOnInit(): void {
      //this.loadAllUsers();
      var cookieExamples = this.cookieService.get("cookieExample");
      console.log(cookieExamples);
      if(!cookieExamples){
        this.authenticated=false;
      }
      else{
        this.authenticated=true;
      }

    }
   /* private loadAllUsers() {
      this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
      this.currentUser.getAll().subscribe(res => console.log(res));
  }*/
}  
