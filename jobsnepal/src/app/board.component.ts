import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';

@Component({
  selector: 'app-board',
  templateUrl: './board.component.html',
  styles: ['']
})
export class BoardComponent implements OnInit{
    title = 'Jobs';
    
      image = '/assets/image/job.jpg';
      images='/assets/image';
    ngOnInit(): void {
        
    }
  
}