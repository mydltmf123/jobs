import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styles: ['']
})
export class HomeComponent implements OnInit{
    title = 'Jobs';
    
      image = '/assets/image/job.jpg';
      images='/assets/image';
    ngOnInit(): void {
        
    }
  
}