import { Component, OnInit} from '@angular/core';
import { CommonModule } from '@angular/common';
import {CookieService} from 'angular2-cookie/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})


export class HeaderComponent implements OnInit{
  title = 'Jobs';
  image = '/assets/image/job.jpg';
  images='/assets/image';
  authenticated=false;
  constructor(private _cookieService:CookieService){

  }
  ngOnInit(){
    this.getCookie("cookieExample");
    console.log("header");
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

