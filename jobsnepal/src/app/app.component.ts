import { Component} from '@angular/core';
import { CommonModule } from '@angular/common';
import {CookieService} from 'angular2-cookie/core';

@Component({
  selector: 'app-root',
  template: ` <router-outlet></router-outlet>`,
  styleUrls: ['./app.component.css']
})


export class AppComponent{
  title = 'Jobs';
  image = '/assets/image/job.jpg';
  images='/assets/image';
  authenticated=false;
  constructor(private _cookieService:CookieService){
    this.getCookie("cookieExample");
    console.log(this.authenticated);
  }
  
  getCookie(key: string){
 
    if(!this._cookieService.get(key)){
      this.authenticated=false;
    }
    else{
      console.log(this._cookieService.get(key))
      this.authenticated=true;
    }
  }
}

