import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styles: ['']
})
export class LoginComponent implements OnInit{
    title = 'Jobs';
    
      image = '/assets/image/job.jpg';
      images='/assets/image';
    ngOnInit(): void {
        
    }
  
}